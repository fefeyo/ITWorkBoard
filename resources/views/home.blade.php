@extends('common/base_layout')

@include('parts/navbar')

@section('content')
ホーム画面
@stop

@section('addJs')
<script type="text/javascript">
    $(function(){
        $('.navbar').css('background', '{{$color}}');
    });
</script>
hello
@stop