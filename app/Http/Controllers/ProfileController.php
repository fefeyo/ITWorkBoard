<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\UserProfile;
use Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $is_student = Auth::user()->is_student;
        $color = $is_student===0 ? '#3498db' : '#e74c3c';

        $user = UserProfile::find(Auth::user()-> id);
        if($user === null){
            $tech_items = [
            'Java' => 0,
            'C' => 0,
            'C++' => 0,
            'Python' => 0,
            'C#' => 0,
            'Objective-C' => 0,
            'Perl' => 0,
            'HTML' => 0,
            'CSS' => 0,
            'JavaScript' => 0,
            'PHP' => 0,
            'Ruby' => 0,
            'Scala' => 0
            ];
            $tech = json_encode($tech_items);

            $user = [
            "user_id" => Auth::user()->id,
            "name" => "",
            "gender" => "",
            "birth" => "",
            "address" => "",
            "phone_number" => "",
            "collage" => "",
            "collage_type" => "",
            "github" => "",
            "intern" => "",
            "hackathon" => "",
            "work" => "",
            "tech" => $tech,
            ];
            UserProfile::create($user);
        }
        $data = [
        '名前' => $user['name'],
        '性別' => $user['gender']==="man" ? "男":"女",
        '誕生日' => $user['birth'],
        '住所' => $user['address'],
        "メールアドレス" => Auth::user()->email,
        '電話番号' => $user['phone_number'],
        '大学名' => $user['collage'],
        '学部' => $user['collage_type'],
        'Github' => $user['github'],
        ];
        $tech = json_decode($user['tech'], true);
        $award = [
        'インターン' => $user['intern'],
        'ハッカソン' => $user['hackathon'],
        '仕事' => $user['work']
        ];

        return view('mypage', ["datas" => $data, "color" => $color, "awards" => $award, "tech" => $tech]);
    }

    public function edit_profile()
    {
        $is_student = Auth::user()->is_student;
        $color = $is_student===0 ? '#3498db' : '#e74c3c';

        $user = UserProfile::find(Auth::user()->id);
        if($user != null){
            $user["isMan"] = $user["gender"]==="man";
            $user["isWoman"] = $user["gender"]==="woman";
        }else{
            $user["isMan"] = true;
        }
        $tech = json_decode($user['tech'], true);
        $langs = ['Java','C','C++','Python','C#','Objective-C','Perl','HTML','CSS','JavaScript','PHP','Ruby','Scala'];

        return view('profile/edit_profile', ["user" => $user, "tech" => $tech, 'color' => $color, 'langs' => $langs]);
    }

    public function create(Request $request)
    {
        // //　プロフィール登録
        $inputs = $request->all();
        $tech_items = [
        'Java' => $inputs['Java'],
        'C' => $inputs['C'],
        'C++' => $inputs['C++'],
        'Python' => $inputs['Python'],
        'C#' => $inputs['C#'],
        'Objective-C' => $inputs['Objective-C'],
        'Perl' => $inputs['Perl'],
        'HTML' => $inputs['HTML'],
        'CSS' => $inputs['CSS'],
        'JavaScript' => $inputs['JavaScript'],
        'PHP' => $inputs['PHP'],
        'Ruby' => $inputs['Ruby'],
        'Scala' => $inputs['Scala'],
        ];
        $tech = json_encode($tech_items);
        $inputs += ['tech' => $tech];
        UserProfile::find(Auth::user()->id)->update($inputs);

        return redirect('mypage');
    }
}