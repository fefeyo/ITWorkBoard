@extends('common/base_layout')

@include('parts/navbar')

@section('content')
仕事を投稿
@stop

@section('addJs')
<script type="text/javascript">
    $(function(){
        $('.navbar').css('background', '#e74c3c');
    });
</script>
@stop