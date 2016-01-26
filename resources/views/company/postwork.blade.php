@extends('common/base_layout')

@include('parts/navbar')

@section('addCss')
<link rel="stylesheet" type="text/css" href="{{asset('css/mypage.css')}}">
@stop

@section('content')
<h1 class="title">仕事を投稿</h1>
<div id="board">
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
</div>
@stop

@section('addJs')
<script type="text/javascript">
    $(function(){
        $('.navbar').css('background', '#e74c3c');
    });
</script>
@stop