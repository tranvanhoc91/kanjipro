@extends('index');
<title>漢字詳細</title>
<link rel="stylesheet" type="text/css" href="{{ URL::to('template/assets/css/card.css') }}"> 
<link rel="stylesheet" type="text/css" href="{{ URL::to('template/app-assets/vendors/css/ui/prism.min.css') }}">
<link rel='stylesheet prefetch' href="{{ URL::to('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css') }}" >


<style type="text/css">


.kango {
    font-size: 2em;
    font-stretch: initial;
    color: #9b9b9e;
    font-weight: bold;
}

.kanji{
    font-size: 4em;
    font-weight: bold;
    text-align: center;
    padding-left: 150px;
    padding-right: 30px;
}


.comment-box{
border: none;
padding: 5px;
width: auto;
height: 250px;
overflow: scroll;
}

/* Scrollbar styles */
::-webkit-scrollbar {
width: 8px;
height: 8px;
}

::-webkit-scrollbar-track {
box-shadow: inset 0 0 10px #cccccc;
border-radius: 10px;
}

::-webkit-scrollbar-thumb {
border-radius: 10px;
background: #cccccc; 
box-shadow: inset 0 0 6px #cccccc; 
}

::-webkit-scrollbar-thumb:hover {
background: #cccccc;
}

.strike{
	font-size: 14px;
    font-weight: bold;
    color: #333333;
	font-style: italic;
}

.strike:hover{
    color: blue;
}


.example-vn{
	color:#3f3f3f;
}

.onyomi{
	color: #333333;
    padding-right: 20px;
    font-size: 14px;
    font-weight: bold;
}

.kanji-word{
	font-size: 1.8em;
    text-align: center;
    font-weight: bold;
    color: #333333;

}

.kanji-title{

    color: #333333;

}

.kanji-yomikata {
    text-align: center;
    font-size: 13px;
    font-weight: initial;
    font-style: italic;
    color: #4a4545;
    margin-top: -20px;
}



.list-group-item {
    position: relative;
    display: block;
    padding: 0.75rem 0rem;
    margin-bottom: -1px;
    background-color: #fff;
    border-bottom: 1px solid #ddd;
	border-top: 1px solid #ddd;
}


</style>



@section('content')
<!--body header-->
<!-- content-body -->
<div class="content-body">






<div class="row">
    <!-- Description lists horizontal -->
    <div class="col-sm-8">
        <div class="card">
            <div class="card-body collapse in">
                <div class="card-block">
					<ul class="nav nav-tabs">
							<li class="nav-item">
								<a class="nav-link active" id="base-tab1" data-toggle="tab" aria-controls="tab1" href="#tab1" aria-expanded="true">意味</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="base-tab2" data-toggle="tab" aria-controls="tab2" href="#tab2" aria-expanded="false">例文</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="base-tab3" data-toggle="tab" aria-controls="tab3" href="#tab3" aria-expanded="false">Tab 3</a>
							</li>
					</ul>

					<div class="tab-content px-1 pt-1">
						<div role="tabpanel" class="tab-pane active" id="tab1" aria-expanded="true" aria-labelledby="base-tab1">
						<div class="card-text">
							<h5 class="text-bold-600 my-1">絶好</h5> 
							<ul>
							<li> ぜっこう「TUYỆT HẢO」</li>
							<li>（何かをするのに）この上なくよい・こと（さま）。,「～の行楽日和だ」</li>
						</ul>

						<div class="media-list media-bordered text-bold-600 my-1">
								<div class="media">								
									<div class="media-body">
										<a data-toggle="modal" data-target="#addTagForm" class="text-muted"><span class="icon-price-tag"></span> タグ:</a>
										<a class="strike" href="http://localhost/kanjimaster/public/kanji/detail"> <span>nhat ky yeu nuoc</span></a> 
										,
										<a class="strike" href="http://localhost/kanjimaster/public/kanji/detail"> <span>nhat ky yeu nuoc</span></a> 
										,
										<a class="strike" href="http://localhost/kanjimaster/public/kanji/detail"> <span>nhat ky yeu nuoc</span></a> 
										,
										<a class="strike" href="http://localhost/kanjimaster/public/kanji/detail"> <span>nhat ky yeu nuoc</span></a> 
									</div>
								</div>
							</div>
						</div>
							
							

						</div>
						<div class="tab-pane" id="tab2" aria-labelledby="base-tab2" aria-expanded="false">
						<div class="comment-box">
						<div class="comment-block">
							<p class="mb-0">親は木の上に立って自分の遊んでいる子供を見る</p>
							<p class="mb-0">Toi la nguoi viet nam chinh thuc</p>
							<footer class="blockquote-footer floatright">
								<cite title="Source Title">triegiathangさん</cite>
							</footer>
							<ul class="list-inline mb-1">
								<li class="pr-1"><a href="#" class="text-muted">6<span class="icon-point-up"></span></a></li>
								<li class="pr-1"><a href="#" class="text-muted">1<span class="icon-point-down"></span></a></li>
							</ul>
						</div>
						
	</div>
					<form class="form">
						<div class="form-body">
							<div class="form-group">
								<a data-toggle="collapse" data-parent="#accordionWrapa1" href="#accordion1"  aria-expanded="false" aria-controls="collapseExample">コメント欄</a>
								<a class="text-muted" data-toggle="tooltip" data-placement="right" title="" data-original-title="Send comment to admin">
									<span class="float-md-right d-xs-block d-md-inline-block icon-bullhorn"> 
								</span></a>
							</div>
							<div id="accordion1" role="tabpanel" aria-labelledby="heading2" class="card-collapse collapse" aria-expanded="false">

								<div class="form-group">
									<input type="text" id="companyName" class="form-control" placeholder="意味/Y nghia" name="company">
								</div>
								<div class="form-group">
									<input type="text" id="companyName" class="form-control" placeholder="例文/Vi du" name="company">
								</div>
								<div class="form-group">
									<input type="text" id="companyName" class="form-control" placeholder="ベトナム語の意味/Nghia tieng viet" name="company">
								</div>
								
								<div class="form-group">
									<button type="submit" class="btn btn-secondary">
										<i class="icon-check2"></i> 送信
									</button>
								</div>
							</div>
						</div>
					</form>

						</div>
						<div class="tab-pane" id="tab3" aria-labelledby="base-tab3" aria-expanded="false">
						
						fds
						</div>
					</div>
                </div>
            </div>
        </div>
    </div>

	<div class="col-lg-4 col-xs-12">
		<img class="img-fluid" src="http://localhost/kanjimaster/public/template/assets/images/test/2.jpg">
	</div>
</div>


<div class="row match-height">
		<!--card kanji-->
		<div class="col-xl-3 col-md-6"><!-- card -->
			<div class="card" style="height: 314px;">
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
							<h4 class="card-title kanji-title"><a href="http://localhost/kanjimaster/public/kanji/detail">箱</a></h4>
							<h5 class="card-title kanji-onyomi">オンヨミ</h5>
							<h5 class="card-title kanji-kunyomi">はこ、わた・る</h5>
						</div>
						<div class="kanji-card-thumb">
							<img class="img-fluid" src="http://localhost/kanjimaster/public/template/app-assets/images/kanji/test.PNG" alt="Card image cap">
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
			<div class="card" style="height: 314px;">
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
							<h4 class="card-title kanji-title"><a href="http://localhost/kanjimaster/public/kanji/detail">箱</a></h4>
							<h5 class="card-title kanji-onyomi">オンヨミ</h5>
							<h5 class="card-title kanji-kunyomi">はこ、わた・る</h5>
						</div>
						<div class="kanji-card-thumb">
							<img class="img-fluid" src="http://localhost/kanjimaster/public/template/app-assets/images/kanji/test.PNG" alt="Card image cap">
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
			<div class="card" style="height: 314px;">
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
							<h4 class="card-title kanji-title"><a href="http://localhost/kanjimaster/public/kanji/detail">箱</a></h4>
							<h5 class="card-title kanji-onyomi">オンヨミ</h5>
							<h5 class="card-title kanji-kunyomi">はこ、わた・る</h5>
						</div>
						<div class="kanji-card-thumb">
							<img class="img-fluid" src="http://localhost/kanjimaster/public/template/app-assets/images/kanji/test.PNG" alt="Card image cap">
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
		
	</div>
</section>




<!--///////////////////////////Modal popup/////////////////////////->


<!-Modal Send msg to admin about the way remember kanji of other`s user -->
<div class="modal fade text-xs-left" id="addTagForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <label class="modal-title text-text-bold-600" id="myModalLabel33">新しいタグを作成</label>
            </div>
            <form action="#">

				<ul class="nav nav-tabs nav-justified">
					<li class="nav-item">
						<a class="nav-link active" id="active-tab" data-toggle="tab" href="#active" aria-controls="active" aria-expanded="true">既にタグに追加</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="link-tab" data-toggle="tab" href="#link" aria-controls="link" aria-expanded="false">新しいタグを作成</a>
					</li>
				</ul>
				<div class="tab-content px-1 pt-1">
					<div role="tabpanel" class="tab-pane fade active in" id="active" aria-labelledby="active-tab" aria-expanded="true">
						<div class="form-group">
							<ul class="list-group">
								<li class="list-group-item">
									Nhat ky du hoc
									<button type="button" class="btn btn-secondary float-sm-right" >
										<span class="icon-android-remove"></span>
									</button>
								</li>
								<li class="list-group-item">
									Nhat ky ban nuoc
									<button type="button" class="btn btn-secondary float-sm-right">
										<span class="icon-android-remove"></span>
									</button>
								</li>
								<li class="list-group-item">
									Nhat ky yeu nuoc
									<button type="button" class="btn btn-secondary float-sm-right">
										<span class="icon-android-add"></span>
									</button>
								</li>
							</ul>
						</div>
					</div>
					<div class="tab-pane fade" id="link" role="tabpanel" aria-labelledby="link-tab" aria-expanded="false">
						<div class="modal-body">
							<label>タイトル: </label>
							<div class="form-group">
								<input type="text" placeholder="This is new tag" class="form-control">
							</div>
							<label>説明: </label>
							<div class="form-group">
								<input type="text" placeholder="説明" class="form-control">
							</div>
							<div class="form-group">
								<input type="submit" class="btn btn-outline-secondary btn-small" value="作成">
							</div>
						</div>
					</div>
				</div>
            </form>
        </div>
    </div>
</div><!-- Modal edit tag -->



<!--Modal add new kunyomi example -->
<div class="modal fade text-xs-left" id="addKunyomiExample" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="#">
				<div class="modal-body">
					<label>漢字: </label>
					<div class="form-group">
						<input type="text" class="form-control">
					</div>
					<label>読み方: </label>
					<div class="form-group">
						<input type="text"  class="form-control">
					</div>
					<label>意味: </label>
					<div class="form-group">
						<input type="text"  class="form-control">
					</div>
					<label>例文: </label>
					<div class="form-group">
						<input type="text"  class="form-control">
					</div>
					<label>ベトナム語の意味: </label>
					<div class="form-group">
						<input type="text"  class="form-control">
					</div>
					<label>同じ読み方のある言葉: </label>
					<div class="form-group">
						<input type="text" placeholder="厚い、暑い、熱い" class="form-control">
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-outline-secondary btn-small" value="追加">
					</div>
				</div>
				</div>
            </form>
        </div>
    </div>
</div><!-- Modal add new kunyomi example -->




<!--Modal add new onyomi example -->
<div class="modal fade text-xs-left" id="addOnyomiExample" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="#">
				<div class="modal-body">
					<label>述語: </label>
					<div class="form-group">
						<input type="text"  class="form-control">
					</div>
					<label>ふりがな: </label>
					<div class="form-group">
						<input type="text"  class="form-control">
					</div>
					<label>例文: </label>
					<div class="form-group">
						<input type="text"  class="form-control">
					</div>
					<label>意味: </label>
					<div class="form-group">
						<input type="text"　 class="form-control">
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-outline-secondary btn-small" value="追加">
					</div>
				</div>
				</div>
            </form>
        </div>
    </div>
</div><!-- Modal add new onyomi example -->



<!--/ //////////////////////////End Modal popup/////////////////////////-->


</div><!--//content-body -->
<script src="{{ URL::to('template/app-assets/js/core/libraries/jquery.min.js') }}"></script>
<script src="{{ URL::to('template/assets/js/card.js') }}"></script>

@endsection