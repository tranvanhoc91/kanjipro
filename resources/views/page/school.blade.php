@extends('index');
<title>マイタグ</title>
<link rel="stylesheet" type="text/css" href="{{ URL::to('template/app-assets/vendors/css/ui/prism.min.css') }}">
@section('content')

<!--body header-->


<!-- content-body -->
<div class="content-body">
<!-- Table head options with primary background start -->
<!-- Text color start -->
<section id="textColor">
<h2 class="content-header-title">小学校の漢字帳</h2>
	<hr>
    <div class="row">
        <figure class="col-lg-3 col-md-6 col-xs-12" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
           <a href="{{asset('kanji/gridcard/')}}"　itemprop="contentUrl" data-size="480x360">
           	<img class="img-thumbnail img-fluid level-logo level-logo" src="{{ URL::to('template/assets/images/gallery/school/elementary-1.PNG') }}" alt="小学校１年生の漢字帳">
           </a>
        </figure>
        
        <figure class="col-lg-3 col-md-6 col-xs-12" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
           <a href="{{asset('kanji/gridcard/')}}"　itemprop="contentUrl" data-size="480x360">
           	<img class="img-thumbnail img-fluid level-logo" src="{{ URL::to('template/assets/images/gallery/school/elementary-2.PNG') }}" alt="小学校１年生の漢字帳">
           </a>
        </figure>
        <figure class="col-lg-3 col-md-6 col-xs-12" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
           <a href="{{asset('kanji/gridcard/')}}"　itemprop="contentUrl" data-size="480x360">
              <img class="img-thumbnail img-fluid level-logo" src="{{ URL::to('template/assets/images/gallery/school/elementary-3.PNG') }}" alt="小学校１年生の漢字帳">
           </a>
        </figure>
        <figure class="col-lg-3 col-md-6 col-xs-12" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
           <a href="{{asset('kanji/gridcard/')}}"　itemprop="contentUrl" data-size="480x360">
              <img class="img-thumbnail img-fluid level-logo" src="{{ URL::to('template/assets/images/gallery/school/elementary-4.PNG') }}"" alt="小学校１年生の漢字帳">
           </a>
        </figure>
        <figure class="col-lg-3 col-md-6 col-xs-12" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
           <a href="{{asset('kanji/gridcard/')}}"　itemprop="contentUrl" data-size="480x360">
             <img class="img-thumbnail img-fluid level-logo" src="{{ URL::to('template/assets/images/gallery/school/elementary-5.PNG') }}"" alt="小学校１年生の漢字帳">
           </a>
        </figure>
    </div><!--end row-->
</section>
<p class="clearfix" ></p>


<section id="textColor">
<h2 class="content-header-title">中学校の漢字帳</h2>
	<hr>
    <div class="row">
        <figure class="col-lg-3 col-md-6 col-xs-12" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
           <a href="{{asset('kanji/gridcard/')}}"　itemprop="contentUrl" data-size="480x360">
           	<img class="img-thumbnail img-fluid level-logo" src="{{ URL::to('template/assets/images/gallery/school/secondary-1.png') }}" alt="中学校１年生の漢字帳">
           </a>
        </figure>
        
        <figure class="col-lg-3 col-md-6 col-xs-12" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
           <a href="{{asset('kanji/gridcard/')}}"　itemprop="contentUrl" data-size="480x360">
           	<img class="img-thumbnail img-fluid level-logo" src="{{ URL::to('template/assets/images/gallery/school/secondary-2.png') }}" alt="中学校１年生の漢字帳">
           </a>
        </figure>
        <figure class="col-lg-3 col-md-6 col-xs-12" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
           <a href="{{asset('kanji/gridcard/')}}"　itemprop="contentUrl" data-size="480x360">
              <img class="img-thumbnail img-fluid level-logo" src="{{ URL::to('template/assets/images/gallery/school/secondary-3.png') }}" alt="中学校１年生の漢字帳">
           </a>
        </figure>
    </div><!--end row-->
</section>
<p class="clearfix" ></p>

<section id="textColor">
<h2 class="content-header-title">高校の漢字帳</h2>
	<hr>
    <div class="row">
        <figure class="col-lg-3 col-md-6 col-xs-12" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
           <a href="{{asset('kanji/gridcard/')}}"　itemprop="contentUrl" data-size="480x360">
           	<img class="img-thumbnail img-fluid level-logo" src="{{ URL::to('template/assets/images/gallery/school/highschool-1.png') }}" alt="高学校１年生の漢字帳">
           </a>
        </figure>
        
        <figure class="col-lg-3 col-md-6 col-xs-12" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
           <a href="{{asset('kanji/gridcard/')}}"　itemprop="contentUrl" data-size="480x360">
           	<img class="img-thumbnail img-fluid level-logo" src="{{ URL::to('template/assets/images/gallery/school/highschool-2.png') }}" alt="高学校１年生の漢字帳">
           </a>
        </figure>
        <figure class="col-lg-3 col-md-6 col-xs-12" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
           <a href="{{asset('kanji/gridcard/')}}"　itemprop="contentUrl" data-size="480x360">
           	<img class="img-thumbnail img-fluid level-logo" src="{{ URL::to('template/assets/images/gallery/school/highschool-3.png') }}" alt="高学校１年生の漢字帳">
           </a>
        </figure>
    </div><!--end row-->
</section>
<p class="clearfix" ></p>
</div><!-- //content-body -->
@endsection