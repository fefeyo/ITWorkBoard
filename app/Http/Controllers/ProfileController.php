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
        $is_student = \Auth::user()->is_student;
        $color = $is_student===0 ? '#3498db' : '#e74c3c';
        $user = \App\UserProfile::where('user_id', '=', Auth::user()->id)->get()[0];
        $data = [
        '名前' => $user['name'],
        '性別' => $user['gender'],
        '誕生日' => $user['birth'],
        '住所' => $user['address'],
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
        $langs = [
        'java' => 'Java',
        'c' => 'C',
        'cp' => 'C++',
        'python' => 'Python',
        'cs' => 'C#',
        'obc' => 'Objective-C',
        'perl' => 'Perl',
        'html' => 'HTML',
        'css' => 'CSS',
        'js' => 'JavaScript',
        'php' => 'PHP',
        'ruby' => 'Ruby',
        'scala' => 'Scala'
        ];
        return view('profile/edit_profile', ['color' => $color, 'langs' => $langs]);
    }

    function getProfile()
    {
        $user = UserProfile::where('user_id', '=', Auth::user()->id);
    }

    public function create(Request $request)
    {
        // //　プロフィール登録
        $inputs = $request->all();
        $tech_items = [
        'java' => $inputs['java'],
        'c' => $inputs['c'],
        'cp' => $inputs['cp'],
        'python' => $inputs['python'],
        'cs' => $inputs['cs'],
        'obc' => $inputs['obc'],
        'perl' => $inputs['perl'],
        'html' => $inputs['html'],
        'css' => $inputs['css'],
        'js' => $inputs['js'],
        'php' => $inputs['php'],
        'ruby' => $inputs['ruby'],
        'scala' => $inputs['scala'],
        ];
        $tech = json_encode($tech_items);
        $inputs += ['user_id' => Auth::user()->id, 'tech' => $tech];
        UserProfile::create($inputs);
        return redirect('mypage');
    }
}
