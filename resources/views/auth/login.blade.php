@extends('common/base_layout')

@include('parts/navbar')

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">ログイン</div>
        <div class="panel-body">
          @if (count($errors) > 0)
          <div class="alert alert-danger">
            <strong>エラー</strong> 入力内容に不備があります！<br><br>
            <ul>
              @foreach ($errors->all() as $error)
              @if($error === "These credentials do not match our records.")
              <li>存在しないアカウントです</li>
              @endif
              @endforeach
            </ul>
          </div>
          @endif

          <form class="form-horizontal" role="form" method="POST" action="/auth/login">
            {{-- CSRF対策--}}
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group">
              <label class="col-md-4 control-label">メールアドレス</label>
              <div class="col-md-6">
                <input type="email" class="form-control" name="email" value="{{ old('email') }}">
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-4 control-label">パスワード</label>
              <div class="col-md-6">
                <input type="password" class="form-control" name="password">
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="remember">ログイン情報を保持する
                  </label>
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary" style="margin-right: 15px;">
                  ログイン
                </button><br>
                <a href="/password/email">パスワードを忘れましたか？</a>
              </div>
            </div>
          </form>
        </div><!-- .panel-body -->
      </div><!-- .panel -->
    </div><!-- .col -->
  </div><!-- .row -->
</div><!-- .container-fluid -->
@endsection

@section('addJs')
<script type="text/javascript">
  $(function(){
    $('.navbar').css('background', '#000');
  });
</script>
@stop