@extends('index');
<title>部首のGrid</title>
<link rel="stylesheet" type="text/css" href="{{ URL::to('template/app-assets/vendors/css/ui/prism.min.css') }}">




<link rel='stylesheet prefetch' href="{{ URL::to('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css') }}" >


<!--
	<link rel='stylesheet prefetch' href="{{ URL::to('template/app-assets/fonts/font-awesome.min.css') }}" >


-->

<link rel="stylesheet" type="text/css" href="{{ URL::to('template/assets/css/card.css') }}"> 


<style type="text/css">	
/*::overite **/
.heading-elements{
	right: 0px !important;
}

.nav-card{
	float : right;
}

.nav-card ul{
}

.nav-card li.nav-item{
	
}

.nav-link{
}

.nav-link:hover{
}

.active {
}

</style>

@section('content')
<!--body header-->
<div class="content-header row">
          <div class="content-header-left col-md-6 col-xs-12 mb-1">
          </div>
          <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
            <div class="breadcrumb-wrapper col-xs-12">
				<ul class="nav nav-tabs nav-card">
					<li class="nav-item">
						<a class="nav-link total" id="total-tab" data-toggle="tab" href="#total" aria-controls="total" aria-expanded="true">
							全て
							<i class="icon-android-star-half"></i>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="remembered-tab" data-toggle="tab" href="#remembered" aria-controls="remembered" aria-expanded="false">
							既覚
							<i class="icon-android-star-outline"></i>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="yetremembered-tab" data-toggle="tab" href="#yetremembered" aria-controls="yetremembered">
							未覚
							<i class="icon-android-star"></i>
						</a>
					</li>
				</ul>
            </div>
		  </div>
</div>

<p class='clearfix'></p>
<!-- content-body -->

<div class="content-body">
<section id="sizing">
	<div class="row">
		<div class="tab-content px-1 pt-1">
			<!--Total card-->
			<div role="tabpanel" class="tab-pane fade active in" id="total" aria-labelledby="total-tab" aria-expanded="true">
				<div class="col-xl-3 col-md-6"><!-- card -->
					<div class="card" style="height: auto;">
						<div class="card-header">
							<span class="card-no">23</span> <h4 class="card-title">tat ca</h4>
							<div class="heading-elements">
								<a id="like" class="btn btn-lg btn-block btn-shared btn-favorite">
									<span class="fa fa-star pull-left"></span>
								</a>
							</div>
						</div>
						<div class="card-body">
							<div class="card-block">
								<div class="kanji-card-mean">
									<h4 class="card-title kanji-title"><a href="www.google.com" >箱</a></h4>
									<h5 class="card-title kanji-onyomi">オンヨミ</h5>
									<h5 class="card-title kanji-kunyomi">はこ、わた・る</h5>
								</div>
								<div class="kanji-card-thumb">
									<img class="img-fluid" src="{{ URL::to('template/app-assets/images/kanji/test.PNG') }}" alt="Card image cap">
								</div>
							</div>
							<div class="card-block">
								<p class="kanji-remember">親　親は木の上に立って自分の遊んでいる子供を見る</p>
								<div class="heading-elements">
									<ul class="list-inline mb-0 stroke-part">
										<li><i class="icon-star"></i><a href="#" class="card-link">竹</a></li>
										<li><i class="icon-star"></i><a href="#" class="card-link">木</a></li>
										<li><i class="icon-star"></i><a href="#" class="card-link">目</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div><!-- //card -->
				<div class="col-xl-3 col-md-6"><!-- card -->
					<div class="card" style="height: auto;">
						<div class="card-header">
							<span class="card-no">23</span> <h4 class="card-title">tat ca</h4>
							<div class="heading-elements">
								<a id="like" class="btn btn-lg btn-block btn-shared btn-favorite">
									<span class="fa fa-star pull-left"></span>
								</a>
							</div>
						</div>
						<div class="card-body">
							<div class="card-block">
								<div class="kanji-card-mean">
									<h4 class="card-title kanji-title"><a href="www.google.com" >箱</a></h4>
									<h5 class="card-title kanji-onyomi">オンヨミ</h5>
									<h5 class="card-title kanji-kunyomi">はこ、わた・る</h5>
								</div>
								<div class="kanji-card-thumb">
									<img class="img-fluid" src="{{ URL::to('template/app-assets/images/kanji/test.PNG') }}" alt="Card image cap">
								</div>
							</div>
							<div class="card-block">
								<p class="kanji-remember">親　親は木の上に立って自分の遊んでいる子供を見る</p>
								<div class="heading-elements">
									<ul class="list-inline mb-0 stroke-part">
										<li><i class="icon-star"></i><a href="#" class="card-link">竹</a></li>
										<li><i class="icon-star"></i><a href="#" class="card-link">木</a></li>
										<li><i class="icon-star"></i><a href="#" class="card-link">目</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div><!-- //card -->
				<div class="col-xl-3 col-md-6"><!-- card -->
					<div class="card" style="height: auto;">
						<div class="card-header">
							<span class="card-no">23</span> <h4 class="card-title">tat ca</h4>
							<div class="heading-elements">
								<a id="like" class="btn btn-lg btn-block btn-shared btn-favorite">
									<span class="fa fa-star pull-left"></span>
								</a>
							</div>
						</div>
						<div class="card-body">
							<div class="card-block">
								<div class="kanji-card-mean">
									<h4 class="card-title kanji-title"><a href="www.google.com" >箱</a></h4>
									<h5 class="card-title kanji-onyomi">オンヨミ</h5>
									<h5 class="card-title kanji-kunyomi">はこ、わた・る</h5>
								</div>
								<div class="kanji-card-thumb">
									<img class="img-fluid" src="{{ URL::to('template/app-assets/images/kanji/test.PNG') }}" alt="Card image cap">
								</div>
							</div>
							<div class="card-block">
								<p class="kanji-remember">親　親は木の上に立って自分の遊んでいる子供を見る</p>
								<div class="heading-elements">
									<ul class="list-inline mb-0 stroke-part">
										<li><i class="icon-star"></i><a href="#" class="card-link">竹</a></li>
										<li><i class="icon-star"></i><a href="#" class="card-link">木</a></li>
										<li><i class="icon-star"></i><a href="#" class="card-link">目</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div><!-- //card -->
				<div class="col-xl-3 col-md-6"><!-- card -->
					<div class="card" style="height: auto;">
						<div class="card-header">
							<span class="card-no">23</span> <h4 class="card-title">tat ca</h4>
							<div class="heading-elements">
								<a id="like" class="btn btn-lg btn-block btn-shared btn-favorite">
									<span class="fa fa-star pull-left"></span>
								</a>
							</div>
						</div>
						<div class="card-body">
							<div class="card-block">
								<div class="kanji-card-mean">
									<h4 class="card-title kanji-title"><a href="www.google.com" >箱</a></h4>
									<h5 class="card-title kanji-onyomi">オンヨミ</h5>
									<h5 class="card-title kanji-kunyomi">はこ、わた・る</h5>
								</div>
								<div class="kanji-card-thumb">
									<img class="img-fluid" src="{{ URL::to('template/app-assets/images/kanji/test.PNG') }}" alt="Card image cap">
								</div>
							</div>
							<div class="card-block">
								<p class="kanji-remember">親　親は木の上に立って自分の遊んでいる子供を見る</p>
								<div class="heading-elements">
									<ul class="list-inline mb-0 stroke-part">
										<li><i class="icon-star"></i><a href="#" class="card-link">竹</a></li>
										<li><i class="icon-star"></i><a href="#" class="card-link">木</a></li>
										<li><i class="icon-star"></i><a href="#" class="card-link">目</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div><!-- //card -->
				<div class="col-xl-3 col-md-6"><!-- card -->
					<div class="card" style="height: auto;">
						<div class="card-header">
							<span class="card-no">23</span> <h4 class="card-title">tat ca</h4>
							<div class="heading-elements">
								<a id="like" class="btn btn-lg btn-block btn-shared btn-favorite">
									<span class="fa fa-star pull-left"></span>
								</a>
							</div>
						</div>
						<div class="card-body">
							<div class="card-block">
								<div class="kanji-card-mean">
									<h4 class="card-title kanji-title"><a href="www.google.com" >箱</a></h4>
									<h5 class="card-title kanji-onyomi">オンヨミ</h5>
									<h5 class="card-title kanji-kunyomi">はこ、わた・る</h5>
								</div>
								<div class="kanji-card-thumb">
									<img class="img-fluid" src="{{ URL::to('template/app-assets/images/kanji/test.PNG') }}" alt="Card image cap">
								</div>
							</div>
							<div class="card-block">
								<p class="kanji-remember">親　親は木の上に立って自分の遊んでいる子供を見る</p>
								<div class="heading-elements">
									<ul class="list-inline mb-0 stroke-part">
										<li><i class="icon-star"></i><a href="#" class="card-link">竹</a></li>
										<li><i class="icon-star"></i><a href="#" class="card-link">木</a></li>
										<li><i class="icon-star"></i><a href="#" class="card-link">目</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div><!-- //card -->
			</div><!--End total card-->

			<!--Remembered card-->
			<div class="tab-pane fade" id="remembered" role="tabpanel" aria-labelledby="remembered-tab" aria-expanded="false">
				<div class="col-xl-3 col-md-6"><!-- card -->
					<div class="card" style="height: auto;">
						<div class="card-header">
							<span class="card-no">23</span> <h4 class="card-title">remembered</h4>
							<div class="heading-elements">
								<a id="like" class="btn btn-lg btn-block btn-shared btn-favorite">
									<span class="fa fa-star pull-left"></span>
								</a>
							</div>
						</div>
						<div class="card-body">
							<div class="card-block">
								<div class="kanji-card-mean">
									<h4 class="card-title kanji-title"><a href="www.google.com" >箱</a></h4>
									<h5 class="card-title kanji-onyomi">オンヨミ</h5>
									<h5 class="card-title kanji-kunyomi">はこ、わた・る</h5>
								</div>
								<div class="kanji-card-thumb">
									<img class="img-fluid" src="{{ URL::to('template/app-assets/images/kanji/test.PNG') }}" alt="Card image cap">
								</div>
							</div>
							<div class="card-block">
								<p class="kanji-remember">親　親は木の上に立って自分の遊んでいる子供を見る</p>
								<div class="heading-elements">
									<ul class="list-inline mb-0 stroke-part">
										<li><i class="icon-star"></i><a href="#" class="card-link">竹</a></li>
										<li><i class="icon-star"></i><a href="#" class="card-link">木</a></li>
										<li><i class="icon-star"></i><a href="#" class="card-link">目</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div><!-- //card -->
			</div><!--//Remembered card-->

			<!--Yet Remembered card-->
			<div class="tab-pane fade" id="yetremembered" role="tabpanel" aria-labelledby="yetremembered-tab" aria-expanded="false">
				<div class="col-xl-3 col-md-6"><!-- card -->
					<div class="card" style="height: auto;">
						<div class="card-header">
							<span class="card-no">23</span> <h4 class="card-title">Yet remember</h4>
							<div class="heading-elements">
								<a id="like" class="btn btn-lg btn-block btn-shared btn-favorite">
									<span class="fa fa-star pull-left"></span>
								</a>
							</div>
						</div>
						<div class="card-body">
							<div class="card-block">
								<div class="kanji-card-mean">
									<h4 class="card-title kanji-title"><a href="www.google.com" >箱</a></h4>
									<h5 class="card-title kanji-onyomi">オンヨミ</h5>
									<h5 class="card-title kanji-kunyomi">はこ、わた・る</h5>
								</div>
								<div class="kanji-card-thumb">
									<img class="img-fluid" src="{{ URL::to('template/app-assets/images/kanji/test.PNG') }}" alt="Card image cap">
								</div>
							</div>
							<div class="card-block">
								<p class="kanji-remember">親　親は木の上に立って自分の遊んでいる子供を見る</p>
								<div class="heading-elements">
									<ul class="list-inline mb-0 stroke-part">
										<li><i class="icon-star"></i><a href="#" class="card-link">竹</a></li>
										<li><i class="icon-star"></i><a href="#" class="card-link">木</a></li>
										<li><i class="icon-star"></i><a href="#" class="card-link">目</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div><!-- //card -->
				<div class="col-xl-3 col-md-6"><!-- card -->
					<div class="card" style="height: auto;">
						<div class="card-header">
							<span class="card-no">23</span> <h4 class="card-title">Yet remember</h4>
							<div class="heading-elements">
								<a id="like" class="btn btn-lg btn-block btn-shared btn-favorite">
									<span class="fa fa-star pull-left"></span>
								</a>
							</div>
						</div>
						<div class="card-body">
							<div class="card-block">
								<div class="kanji-card-mean">
									<h4 class="card-title kanji-title"><a href="www.google.com" >箱</a></h4>
									<h5 class="card-title kanji-onyomi">オンヨミ</h5>
									<h5 class="card-title kanji-kunyomi">はこ、わた・る</h5>
								</div>
								<div class="kanji-card-thumb">
									<img class="img-fluid" src="{{ URL::to('template/app-assets/images/kanji/test.PNG') }}" alt="Card image cap">
								</div>
							</div>
							<div class="card-block">
								<p class="kanji-remember">親　親は木の上に立って自分の遊んでいる子供を見る</p>
								<div class="heading-elements">
									<ul class="list-inline mb-0 stroke-part">
										<li><i class="icon-star"></i><a href="#" class="card-link">竹</a></li>
										<li><i class="icon-star"></i><a href="#" class="card-link">木</a></li>
										<li><i class="icon-star"></i><a href="#" class="card-link">目</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div><!-- //card -->
				<div class="col-xl-3 col-md-6"><!-- card -->
					<div class="card" style="height: auto;">
						<div class="card-header">
							<span class="card-no">23</span> <h4 class="card-title">Yet remember</h4>
							<div class="heading-elements">
								<a id="like" class="btn btn-lg btn-block btn-shared btn-favorite">
									<span class="fa fa-star pull-left"></span>
								</a>
							</div>
						</div>
						<div class="card-body">
							<div class="card-block">
								<div class="kanji-card-mean">
									<h4 class="card-title kanji-title"><a href="www.google.com" >箱</a></h4>
									<h5 class="card-title kanji-onyomi">オンヨミ</h5>
									<h5 class="card-title kanji-kunyomi">はこ、わた・る</h5>
								</div>
								<div class="kanji-card-thumb">
									<img class="img-fluid" src="{{ URL::to('template/app-assets/images/kanji/test.PNG') }}" alt="Card image cap">
								</div>
							</div>
							<div class="card-block">
								<p class="kanji-remember">親　親は木の上に立って自分の遊んでいる子供を見る</p>
								<div class="heading-elements">
									<ul class="list-inline mb-0 stroke-part">
										<li><i class="icon-star"></i><a href="#" class="card-link">竹</a></li>
										<li><i class="icon-star"></i><a href="#" class="card-link">木</a></li>
										<li><i class="icon-star"></i><a href="#" class="card-link">目</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div><!-- //card -->
				<div class="col-xl-3 col-md-6"><!-- card -->
					<div class="card" style="height: auto;">
						<div class="card-header">
							<span class="card-no">23</span> <h4 class="card-title">Yet remember</h4>
							<div class="heading-elements">
								<a id="like" class="btn btn-lg btn-block btn-shared btn-favorite">
									<span class="fa fa-star pull-left"></span>
								</a>
							</div>
						</div>
						<div class="card-body">
							<div class="card-block">
								<div class="kanji-card-mean">
									<h4 class="card-title kanji-title"><a href="www.google.com" >箱</a></h4>
									<h5 class="card-title kanji-onyomi">オンヨミ</h5>
									<h5 class="card-title kanji-kunyomi">はこ、わた・る</h5>
								</div>
								<div class="kanji-card-thumb">
									<img class="img-fluid" src="{{ URL::to('template/app-assets/images/kanji/test.PNG') }}" alt="Card image cap">
								</div>
							</div>
							<div class="card-block">
								<p class="kanji-remember">親　親は木の上に立って自分の遊んでいる子供を見る</p>
								<div class="heading-elements">
									<ul class="list-inline mb-0 stroke-part">
										<li><i class="icon-star"></i><a href="#" class="card-link">竹</a></li>
										<li><i class="icon-star"></i><a href="#" class="card-link">木</a></li>
										<li><i class="icon-star"></i><a href="#" class="card-link">目</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div><!-- //card -->
				<div class="col-xl-3 col-md-6"><!-- card -->
					<div class="card" style="height: auto;">
						<div class="card-header">
							<span class="card-no">23</span> <h4 class="card-title">Yet remember</h4>
							<div class="heading-elements">
								<a id="like" class="btn btn-lg btn-block btn-shared btn-favorite">
									<span class="fa fa-star pull-left"></span>
								</a>
							</div>
						</div>
						<div class="card-body">
							<div class="card-block">
								<div class="kanji-card-mean">
									<h4 class="card-title kanji-title"><a href="www.google.com" >箱</a></h4>
									<h5 class="card-title kanji-onyomi">オンヨミ</h5>
									<h5 class="card-title kanji-kunyomi">はこ、わた・る</h5>
								</div>
								<div class="kanji-card-thumb">
									<img class="img-fluid" src="{{ URL::to('template/app-assets/images/kanji/test.PNG') }}" alt="Card image cap">
								</div>
							</div>
							<div class="card-block">
								<p class="kanji-remember">親　親は木の上に立って自分の遊んでいる子供を見る</p>
								<div class="heading-elements">
									<ul class="list-inline mb-0 stroke-part">
										<li><i class="icon-star"></i><a href="#" class="card-link">竹</a></li>
										<li><i class="icon-star"></i><a href="#" class="card-link">木</a></li>
										<li><i class="icon-star"></i><a href="#" class="card-link">目</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div><!-- //card -->
			</div><!--//yet Remembered card-->
		</div>
	</div>
</section>
</div><!-- //content-body -->
<script src="{{ URL::to('template/app-assets/js/core/libraries/jquery.min.js') }}"></script>
<script src="{{ URL::to('template/app-assets/js/core/libraries/bootstrap.min.js') }}"></script>
<!--
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>
-->
<script src="{{ URL::to('template/assets/js/card.js') }}"></script>
@endsection