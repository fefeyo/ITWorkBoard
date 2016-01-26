<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;
use DB;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    public function about()
    {
        $is_student = \Auth::user()->is_student;
        $color = $is_student===0 ? '#3498db' : '#e74c3c';
        return view('about', ["color" => $color]);
    }

    public function workboard()
    {
        $is_student = \Auth::user()->is_student;
        $color = $is_student===0 ? '#3498db' : '#e74c3c';
        $paginator = DB::table('posts')->orderBy('li')->simplePaginate(18);
        foreach($paginator as $post){
            $post->limit = remainDate($post->limit);
        }

        return view('workboard', ["color" => $color, 'posts' => $paginator]);
    }

    public function postwork(){

        return view('company/postwork');
    }

    function remainDate($day) {
        return intval((strtotime($day) - strtotime(date('Y/m/d'))) / (60*60*24));
    }

}