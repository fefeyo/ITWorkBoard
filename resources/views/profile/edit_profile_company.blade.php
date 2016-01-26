@extends('common.base_layout')

@section('addCss')
<link rel="stylesheet" type="text/css" href="{{asset('css/edit_profile.css')}}">
@stop

@include('parts.navbar')

@section('content')
<h1 style="text-align: center">企業情報編集</h1>
<div id="edit_form">
    {!! Form::open() !!}
    <div class="form-group">
        <h3>企業名</h3>
        {!! Form::text('name', $profile['name'], ['class' => 'form-control']) !!}
        <h3>電話番号</h3>
        {!! Form::number('phone_number', $profile['phone_number'], ['class' => 'form-control']) !!}
        <h3>メールアドレス</h3>
        {!! Form::text('email', $profile['email'], ['class' => 'form-control']) !!}
        <h3>ホームページURL</h3>
        {!! Form::text('homepage', $profile['homepage'], ['class' => 'form-control']) !!}
        {!! Form::submit('編集を終了する', ['class' => 'btn btn-primary form-control submit']) !!}
    </div>
</div>
@stop

@section('addJs')
<script type="text/javascript">
    $(function(){
        $('.navbar').css('background', '{{$color}}');
    });
</script>
@stop