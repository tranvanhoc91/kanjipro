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
    <link href="{{ URL::to('template/assets/css/intl.css') }}" rel="stylesheet">
  </head>
  <body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a href="{{asset('/')}}"><img alt="branding logo" src="{{ URL::to('template/app-assets/images/logo/robust-logo-light.png') }}" 
        data-expand="{{ URL::to('template/app-assets/images/logo/robust-logo-light.png') }}" 
        data-collapse="{{ URL::to('template/app-assets/images/logo/robust-logo-light.png') }}" class="brand-logo"></a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#">ダウンロード</a>
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


      <!-- Team Members Row -->
      <div class="row">
        <div class="col-lg-12">
        	<div class="download-content">
                <img class="download-image" src="{{ URL::to('template/assets/images/intl/download-bg.png') }}"><br>
                <h1>ダウンロード</h1>
                
                <p>
                  
                    ダウンロードが開始されない場合は、<a href="https://cdn1.evernote.com/win6/public/Evernote_6.7.5.5825.exe">こちらをクリック</a>してください。<br>
                  
                </p>
                <div class="app-badges">
                  <a class="badge apple" href="https://itunes.apple.com/app/evernote/id281796108?mt=8">
                    <img  src="{{ URL::to('template/assets/images/intl/appstore_badge_jp.svg') }}">
                  </a><a class="badge google" href="https://play.google.com/store/apps/details?id=com.evernote">
                    <img  src="{{ URL::to('template/assets/images/intl/appstore_badge_jp.svg') }}">
                  </a>
                </div>
              <iframe width="1" height="1" src="/download/get.php?file=Win"></iframe></div>
            </div>
        
      </div>

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark footer">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="{{ URL::to('template/homepage/assets/vendor/jquery/jquery.min.js') }}"></script>
	<script src="{{ URL::to('template/homepage/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  </body>

</html>
