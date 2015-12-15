@extends('common/base_layout')

@include('parts/navbar')

@section('content')
<div class="col-md-6">
    <h1>マイプロフィール</h1>
    @foreach($datas as $key => $data)
    <div class="panel panel-info">
        <div class="panel-heading">{{$key}}</div>
        <div class="panel-body">
            {{$data}}
        </div>
    </div>
    @endforeach
</div>

<div class="col-md-6">
    <h1>これまでの実績</h1>
    @foreach($awards as $key => $award)
    <div class="panel panel-info">
        <div class="panel-heading">{{$key}}</div>
        <div class="panel-body">
            {{$award}}
        </div>
    </div>
    @endforeach
</div>
@stop

@section('addJs')
<script type="text/javascript">
    $(function(){
        $('.navbar').css('background', '{{$color}}');
    });
</script>
@stop