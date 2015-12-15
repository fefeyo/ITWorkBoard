@extends('common/base_layout')

@include('parts/navbar')

@section('content')

<h1>WorkBoard</h1>
<div class="dropdown">
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
      <tr>
          <td>15/12/12(土)</td>
          <td>18日</td>
          <td>ショッピングサイト制作</td>
          <td>15万</td>
          <td>4人</td>
          <td>SP株式会社</td>
      </tr>
      <tr>
          <td>15/12/15(火)</td>
          <td>21日</td>
          <td>RSSリーダー作成（Android,iPhone）</td>
          <td>20万</td>
          <td>2人</td>
          <td>Reader株式会社</td>
      </tr>
      <tr>
          <td>15/12/20(日)</td>
          <td>26日</td>
          <td>観光ポータルサイト制作</td>
          <td>35万</td>
          <td>4人</td>
          <td>Portal株式会社</td>
      </tr>
  </tbody>
</table>

@stop

@section('addJs')
<script type="text/javascript">
    $(function(){
        $('.navbar').css('background', '{{$color}}');
    });
</script>
@stop