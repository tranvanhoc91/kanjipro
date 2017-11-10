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
            <li class="nav-item">
              <a class="nav-link" href="#">登録</a>
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
      <p>このサイトの特徴をご紹介いたします！</p>
      <!-- Team Members Row -->
      <div class="row">
        <div class="col-lg-12">
        	&nbsp;
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <a href="{{asset('page/radical/')}}">
          	<img class="rounded-circle img-fluid d-block mx-auto" src="{{ URL::to('template/homepage/assets/images/icon/bushu.jpg') }}" alt=""></a>
          <h4>部首<small>一覧</small></h4>
          <p　 class="text-muted"><small>部首から漢字を検索</small></p>
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <a href="{{asset('page/onyomi/')}}">
          	<img class="rounded-circle img-fluid d-block mx-auto" src="{{ URL::to('template/homepage/assets/images/icon/onyomi.png') }}" alt=""></a>
          <h4>音読<small>一覧</small></h4>
          <p　 class="text-muted"><small>音読から漢字を検索</small></p>
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <a href="{{asset('page/kakusu/')}}">
          	<img class="rounded-circle img-fluid d-block mx-auto" src="{{ URL::to('template/homepage/assets/images/icon/kakusu.jpg') }}" alt=""></a>
          <h4>画数<small>一覧</small></h4>
          <p　 class="text-muted"><small>画数から漢字を検索</small></p>
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <a href="{{asset('page/jlpt/')}}">
          	<img class="rounded-circle img-fluid d-block mx-auto" src="{{ URL::to('template/homepage/assets/images/icon/jlpt.jpg') }}" alt=""></a>
          <h4>JLPT試験<small>一覧</small></h4>
          <p　 class="text-muted"><small>JLPTレベルから漢字を検索</small></p>
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <a href="{{asset('page/school/')}}">
          	<img class="rounded-circle img-fluid d-block mx-auto" src="{{ URL::to('template/homepage/assets/images/icon/nengaku.jpg') }}" alt=""></a>
          <h4>年学<small>一覧</small></h4>
          <p　 class="text-muted"><small>年学から漢字を検索</small></p>
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <a href="{{asset('page/kanken/')}}">
          	<img class="rounded-circle img-fluid d-block mx-auto" src="{{ URL::to('template/homepage/assets/images/icon/kanken.jpg') }}" alt=""></a>
          <h4>漢検<small>一覧</small></h4>
          <p　 class="text-muted"><small>漢字検定から漢字を検索</small></p>
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <a href="{{asset('page/topic/')}}">
          	<img class="rounded-circle img-fluid d-block mx-auto" src="{{ URL::to('template/homepage/assets/images/icon/wadai.jpg') }}" alt=""></a>
          <h4>話題<small>一覧</small></h4>
          <p　 class="text-muted"><small>話題から漢字を検索</small></p>
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
