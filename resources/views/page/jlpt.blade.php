@extends('index');
<title>部首一覧</title>
<link rel="stylesheet" type="text/css" href="{{ URL::to('template/assets/css/card.css') }}">
@section('content')

<!--body header-->
<style type="text/css">
.content-body .row . col-lg-3 .img-thumbnail {
    padding:  none !important;
    background-color: none !important;
    border:  none !important;
    border-radius: 0rem;
    transition: all .2s ease-in-out;
    max-width: 100%;
    height: auto;
}
</style>

<!-- content-body -->
<div class="content-body">
    <div class="row">
        <figure class="col-lg-3 col-md-6 col-xs-12" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
           <a href="{{asset('kanji/gridcard/')}}"  itemprop="contentUrl" data-size="480x360">
           <img class="img-thumbnail img-fluid level-logo" src="{{ URL::to('template/assets/images/gallery/jlpt/jlpt-n1.png') }}" 
                itemprop="thumbnail" alt="Image description">
           </a>
        </figure>
        <figure class="col-lg-3 col-md-6 col-xs-12" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
           <a href="{{asset('kanji/gridcard/')}}"  itemprop="contentUrl" data-size="480x360">
           <img class="img-thumbnail img-fluid level-logo" src="{{ URL::to('template/assets/images/gallery/jlpt/jlpt-n2.png') }}" 
                itemprop="thumbnail" alt="Image description">
           </a>
        </figure>
        
              
        <figure class="col-lg-3 col-md-6 col-xs-12" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
           <a href="{{asset('kanji/gridcard/')}}"  itemprop="contentUrl" data-size="480x360">
           <img class="img-thumbnail img-fluid level-logo" src="{{ URL::to('template/assets/images/gallery/jlpt/jlpt-n3.png') }}" 
                itemprop="thumbnail" alt="Image description">
           </a>
        </figure>
        <figure class="col-lg-3 col-md-6 col-xs-12" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
           <a href="{{asset('kanji/gridcard/')}}"  itemprop="contentUrl" data-size="480x360">
           <img class="img-thumbnail img-fluid level-logo" src="{{ URL::to('template/assets/images/gallery/jlpt/jlpt-n4.png') }}" 
                itemprop="thumbnail" alt="Image description">
           </a>
        </figure>
        <figure class="col-lg-3 col-md-6 col-xs-12" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
           <a href="{{asset('kanji/gridcard/')}}"  itemprop="contentUrl" data-size="480x360">
           <img class="img-thumbnail img-fluid level-logo" src="{{ URL::to('template/assets/images/gallery/jlpt/jlpt-n5.png') }}" 
                itemprop="thumbnail" alt="Image description">
           </a>
        </figure>
    </div>
    
   
</div><!-- //content-body -->

@endsection