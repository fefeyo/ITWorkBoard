@extends('common.base_layout')

@include('parts.navbar');

@section('addCss')
<link rel="stylesheet" type="text/css" href="{{asset('css/mypage.css')}}">
@stop

@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="title">
            <h1 class="inline">企業情報</h1>
            {!! link_to('mypage/edit_profile', '企業情報を編集する') !!}
        </div>
        <div class="panel panel-info">
            <div class="panel-heading">企業名</div>
            <div class="panel-body">
                {{ $profile['name'] }}
            </div>
        </div>
        <div class="panel panel-info">
            <div class="panel-heading">電話番号</div>
            <div class="panel-body">
                {{ $profile['phone_number'] }}
            </div>
        </div>
        <div class="panel panel-info">
            <div class="panel-heading">メールアドレス</div>
            <div class="panel-body">
                {{ $profile['email'] }}
            </div>
        </div>
        <div class="panel panel-info">
            <div class="panel-heading">ホームページ</div>
            <div class="panel-body">
                <a href="{{ $profile['homepage'] }}" title="ホームページ">{{ $profile['homepage'] }}</a>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="title">
            <h1>これまでに投稿した仕事</h1>
        </div>
        @foreach($works as $work)
        <div class="panel panel-info">
            <div class="panel-heading">{{ $work['title'] }}</div>
            <div class="panel-body">
                {{ $work['description'] }}<br />
                {{ $work['reward'] }}
            </div>
        </div>
        @endforeach
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