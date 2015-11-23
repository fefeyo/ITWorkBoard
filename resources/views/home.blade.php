@extends('common/base_layout')

@include('parts/navbar')

@section('content')
ホーム画面
@if($is_student === 0)
<h1>学生アカウント</h1>
@else
<h1>企業アカウント</h1>
@endif
@stop