@extends('common/base_layout')

@include('parts/navbar')

@section('content')
このサイトについて
@stop

@section('addJs')
<script type="text/javascript">
    $(function(){
        $('.navbar').css('background', '{{$color}}');
    });
</script>
@stop