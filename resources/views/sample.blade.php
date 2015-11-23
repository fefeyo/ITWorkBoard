@extends('common/base_layout')

@include('parts/navbar')

@section('content')
<div id="container">
    @if($users == null)
    <h1>表示するデータがありません！</h1>
    @endif

    @foreach($users as $user)
    <h1>{{$user -> name}}</h1>
    <h2>{{$user -> email}}</h2>
    @endforeach
</div>
@stop
