<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>簡単に2136漢字を覚えましょう</title>
    <link href="{{ URL::to('template/homepage/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::to('template/homepage/assets/css/round-about.css') }}" rel="stylesheet">
  </head>
  <body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a href="{{asset('/')}}" class="navbar-brand nav-link"><img alt="branding logo" src="template/app-assets/images/logo/robust-logo-light.png" 
        data-expand="template/app-assets/images/logo/robust-logo-light.png" 
        data-collapse="template/app-assets/images/logo/robust-logo-small.png" class="brand-logo"></a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a href="{{asset('intl/download/')}}" class="nav-link">ダウンロード</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">ログイン</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <!-- Introduction Row -->
      <h1 class="my-4">2136漢字をマスターしましょう！!
      </h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, explicabo dolores ipsam aliquam inventore corrupti eveniet quisquam quod totam laudantium repudiandae obcaecati ea consectetur debitis velit facere nisi expedita vel?</p>

      <!-- Team Members Row -->
      <div class="row">
        <div class="col-lg-12">
        	&nbsp;
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <a href="{{asset('page/radical/')}}">
          	<img class="rounded-circle img-fluid d-block mx-auto" src="{{ URL::to('template/homepage/assets/images/icon/stroke.png') }}" alt=""></a>
          <h3>部首<small>一覧</small></h3>
          <p>部首から漢字を検索</p>
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <a href="{{asset('page/onyomi/')}}">
          	<img class="rounded-circle img-fluid d-block mx-auto" src="{{ URL::to('template/homepage/assets/images/icon/onyomi.png') }}" alt=""></a>
          <h3>音読<small>一覧</small></h3>
          <p>音読みから漢字を検索</p>
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <a href="{{asset('page/radical/')}}">
          	<img class="rounded-circle img-fluid d-block mx-auto" src="{{ URL::to('template/homepage/assets/images/icon/stroke.png') }}" alt=""></a>
          <h3>部首<small>一覧</small></h3>
          <p>部首から漢字を検索</p>
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <a href="{{asset('page/radical/')}}">
          	<img class="rounded-circle img-fluid d-block mx-auto" src="{{ URL::to('template/homepage/assets/images/icon/stroke.png') }}" alt=""></a>
          <h3>部首<small>一覧</small></h3>
          <p>部首から漢字を検索</p>
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <a href="{{asset('page/radical/')}}">
          	<img class="rounded-circle img-fluid d-block mx-auto" src="{{ URL::to('template/homepage/assets/images/icon/stroke.png') }}" alt=""></a>
          <h3>部首<small>一覧</small></h3>
          <p>部首から漢字を検索</p>
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <a href="{{asset('page/radical/')}}">
          	<img class="rounded-circle img-fluid d-block mx-auto" src="{{ URL::to('template/homepage/assets/images/icon/stroke.png') }}" alt=""></a>
          <h3>部首<small>一覧</small></h3>
          <p>部首から漢字を検索</p>
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <a href="{{asset('page/radical/')}}">
          	<img class="rounded-circle img-fluid d-block mx-auto" src="{{ URL::to('template/homepage/assets/images/icon/stroke.png') }}" alt=""></a>
          <h3>部首<small>一覧</small></h3>
          <p>部首から漢字を検索</p>
        </div>
        
      </div>

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-2 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; 2136漢字 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="{{ URL::to('template/homepage/assets/vendor/jquery/jquery.min.js') }}"></script>
	<script src="{{ URL::to('template/homepage/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  </body>

</html>
