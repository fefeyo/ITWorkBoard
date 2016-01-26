@extends('common/base_layout')

@include('parts/navbar')

@section('content')

<h1>WorkBoard</h1>
<div class="dropdown" style="margin: 15px 0">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    タグを選択
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="#">Android</a></li>
    <li><a href="#">iPhone</a></li>
    <li><a href="#">PHP(Laravel)</a></li>
    <li><a href="#">JavaScript(AngularJS)</a></li>
  </ul>
</div>

<table class="table table-striped">
  <tbody>
    <thead>
      <tr>
        <th>掲載日・締切日</th>
        <th>残り</th>
        <th>タイトル</th>
        <th>単価（予算）</th>
        <th>残り募集数</th>
        <th>会社名</th>
      </tr>
    </thead>
    @foreach($posts as $post)
    <tr>
      <td>{{ $post->created_at }}</td>
      <td>{{ $post->limit }}日</td>
      <td>{{ $post->title }}</td>
      <td>{{ $post->reward }}</td>
      <td>{{ $post->remain }}</td>
      <td>{{ $post->company_name }}</td>
    </tr>
    @endforeach
  </tbody>
</table>

{!! $posts->render() !!}

@stop

@section('addJs')
<script type="text/javascript">
  $(function(){
    $('.navbar').css('background', '{{$color}}');
  });
</script>
@stop