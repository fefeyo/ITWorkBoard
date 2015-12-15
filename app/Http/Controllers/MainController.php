<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

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
        return view('workboard', ["color" => $color]);
    }

    public function postwork(){
        return view('company/postwork');
    }
}