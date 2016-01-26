@extends('common.base_layout')

@include('parts.navbar')

@section('addCss')
<link rel="stylesheet" type="text/css" href="{{asset('css/mypage.css')}}">
@stop

@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="title">
            <h1 class="inline">マイプロフィール</h1>
            {!! link_to('mypage/edit_profile', 'プロフィールを編集する') !!}
        </div>
        @foreach($datas as $key => $data)
        <div class="panel panel-info">
            <div class="panel-heading">{{$key}}</div>
            <div class="panel-body">
                {{$data}}
            </div>
        </div>
        @endforeach
        <div class="panel panel-info">
            <div class="panel-heading">使用言語</div>
            <div class="panel-body">
                <div class="row">
                    @foreach($tech as $key => $tech_item)
                    <div class="col-md-6 col-sm-6 tech-title">{{$key}}</div>
                    <div class="col-md-6 col-sm-6 tech-value">{{$tech_item}}</div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <h1 class="title">これまでの実績</h1>
        @foreach($awards as $key => $award)
        <div class="panel panel-info">
            <div class="panel-heading">{{$key}}</div>
            <div class="panel-body">
                {{$award}}
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