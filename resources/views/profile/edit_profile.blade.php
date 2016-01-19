@extends('common/base_layout')

@section('addCss')
<link rel="stylesheet" type="text/css" href="{{asset('css/edit_profile.css')}}">
@stop

@include('parts/navbar')

@section('content')

<h1 style="text-align: center">プロフィール編集</h1>

<div id="edit_form">
    {!! Form::open(['files' => true]) !!}
    <div class="form-group">
        <h3>名前</h3>
        {!! Form::text('name', $user["name"], ['class' => 'form-control']) !!}
        <h3>性別</h3>
        {!! Form::radio('gender', 'man', $user["isMan"]) !!}　男<br>
        {!! Form::radio('gender', 'woman', $user["isWoman"]) !!}　女
        <h3>誕生日</h3>
        {!! Form::input('date', 'birth', date('Y-m-d', strtotime($user["birth"])),"", ['class' => 'form-control']) !!}
        <h3>住所</h3>
        {!! Form::text('address', $user["address"], ['class' => 'form-control']) !!}
        <h3>電話番号</h3>
        {!! Form::text('phone_number', $user["phone_number"], ['class' => 'form-control']) !!}
        <h3>大学名</h3>
        {!! Form::text('collage', $user["collage"], ['class' => 'form-control']) !!}
        <h3>学部</h3>
        {!! Form::text('collage_type', $user["collage_type"], ['class' => 'form-control']) !!}
        <h3>GitHubアカウント</h3>
        {!! Form::text('github', $user["github"], ['class' => 'form-control']) !!}
        <h3>インターン</h3>
        今までに参加したインターンについて
        {!! Form::textarea('intern', $user["intern"], ['class' => 'form-control']) !!}
        <h3>ハッカソン</h3>
        今までに参加したハッカソンについて
        {!! Form::textarea('hackathon', $user["hackathon"], ['class' => 'form-control']) !!}
        <h3>仕事</h3>
        開発のアルバイト,仕事経験など
        {!! Form::textarea('work', $user["work"], ['class' => 'form-control']) !!}
        <h3>使用言語</h3>
        <p>
            0 - 使用したことがない<br>
            1 - 授業などで使用したことがある<br>
            2 - リファレンスを見れば基礎はできる<br>
            3 - リファレンスを見なくても基礎は出来る<br>
            4 - 応用ができ、実務で使用したことがある<br>
            5 - ライブラリやフレームワークなどを開発したことがある<br>
        </p>
        @for($i = 0; $i < count($tech); $i++)
        <p class="language">
            <span class="col-md-6 col-sm-6 col-xs-6">{{$langs[$i]}}</span>
            {!! Form::selectRange($langs[$i], 0, 5, $tech[$langs[$i]], ['class' => 'col-md-6 col-sm-6 col-xs-6 language']) !!}<br>
        </p>
        @endfor
    </div>
    <div class="form-group">
        {!! Form::submit('編集を完了する', ['class' => 'btn btn-primary form-control submit']) !!}
    </div>
    {!! Form::close() !!}
</div>

@stop

@section('addJs')
<script type="text/javascript">
    $(function(){
        $('.navbar').css('background', '{{$color}}');
    });
</script>
@stop