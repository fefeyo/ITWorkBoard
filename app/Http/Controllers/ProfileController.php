<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

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
        // $profile = \DB::table('user_profile')->where('user_id', '=', \Auth::user()->id)->get();
        $data = [
        '名前' => 'さかた',
        '性別' => '男',
        '誕生日' => '2015/7/29',
        '住所' => '大阪府高槻市芝生町2丁目21-28-612',
        '電話番号' => '090-6669-7444',
        '大学名' => '京都コンピュータ学院',
        '学部' => 'メディア情報',
        'Github' => 'https://github/fefeyo',
        ];
        $award = [
        'インターン' => '',
        'ハッカソン' => '',
        '仕事' => ''
        ];
        return view('mypage', ["datas" => $data, "color" => $color, "awards" => $award]);
    }

    public function edit_profile()
    {
        $is_student = \Auth::user()->is_student;
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // //　プロフィール登録
        // $inputs = \Request::all();
        // $tech_items = [
        // 'java' => $inputs['java'],
        // 'c' => $inputs['c'],
        // 'cp' => $inputs['cp'],
        // 'python' => $inputs['python'],
        // 'cs' => $inputs['cs'],
        // 'obc' => $inputs['obc'],
        // 'perl' => $inputs['perl'],
        // 'html' => $inputs['html'],
        // 'css' => $inputs['css'],
        // 'js' => $inputs['js'],
        // 'php' => $inputs['php'],
        // 'ruby' => $inputs['ruby'],
        // 'scala' => $inputs['scala'],
        // ];
        // $tech = json_encode($tech);
        // UserProfile::create(
        //     'name' => $inputs['name'],
        //     'gender' => $inputs['gender'],
        //     'birth' => $inputs['birth'],
        //     'phone_number' => $inputs['phone_number'],
        //     'collage' => $inputs['collage'],
        //     'collage_type' => $inputs['collage_type'],
        //     'github' => $inputs['github'],
        //     'intern' => $inputs['intern'],
        //     'hackathon' => $inputs['hackathon'],
        //     'work' => $inputs['work'],
        //     'tech' => $tech
        //     );
        // return redirect('home');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
