@extends('index');
<title>画数一覧</title>
<link rel="stylesheet" type="text/css" href="{{ URL::to('template/assets/css/card.css') }}">
@section('content')

<!--body header-->
<!-- content-body -->
<div class="content-body">
<div class="row">
    <div class="col-xs-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">画数別漢字一覧</h4>
            </div>
            <div class="card-body collapse in">
                <div class="table-responsive">
                    <table class="table table-bordered mb-0">
                        <tbody>
                            <tr>
                                <td><a class="character" href="{{asset('kanji/gridcard/')}}">1画</a></td>
								<td><a class="character" href="{{asset('kanji/gridcard/')}}">2画</a></td>
								<td><a class="character" href="{{asset('kanji/gridcard/')}}">2画</a></td>
								<td><a class="character" href="{{asset('kanji/gridcard/')}}">2画</a></td>
								<td><a class="character" href="{{asset('kanji/gridcard/')}}">2画</a></td>
								<td><a class="character" href="{{asset('kanji/gridcard/')}}">2画</a></td>
								<td><a class="character" href="{{asset('kanji/gridcard/')}}">2画</a></td>
								<td><a class="character" href="{{asset('kanji/gridcard/')}}">2画</a></td>
								<td><a class="character" href="{{asset('kanji/gridcard/')}}">9画</a></td>
								<td><a class="character" href="{{asset('kanji/gridcard/')}}">10画</a></td>
                            </tr>
                            <tr>
                                <td><a class="character" href="{{asset('kanji/gridcard/')}}">1画</a></td>
								<td><a class="character" href="{{asset('kanji/gridcard/')}}">2画</a></td>
								<td><a class="character" href="{{asset('kanji/gridcard/')}}">2画</a></td>
								<td><a class="character" href="{{asset('kanji/gridcard/')}}">2画</a></td>
								<td><a class="character" href="{{asset('kanji/gridcard/')}}">2画</a></td>
								<td><a class="character" href="{{asset('kanji/gridcard/')}}">2画</a></td>
								<td><a class="character" href="{{asset('kanji/gridcard/')}}">2画</a></td>
								<td><a class="character" href="{{asset('kanji/gridcard/')}}">2画</a></td>
								<td><a class="character" href="{{asset('kanji/gridcard/')}}">9画</a></td>
								<td><a class="character" href="{{asset('kanji/gridcard/')}}">10画</a></td>
							</tr>
							<tr>
                                <td><a class="character" href="{{asset('kanji/gridcard/')}}">1画</a></td>
								<td><a class="character" href="{{asset('kanji/gridcard/')}}">2画</a></td>
								<td><a class="character" href="{{asset('kanji/gridcard/')}}">2画</a></td>
								<td><a class="character" href="{{asset('kanji/gridcard/')}}">2画</a></td>
								<td><a class="character" href="{{asset('kanji/gridcard/')}}">2画</a></td>
								<td><a class="character" href="{{asset('kanji/gridcard/')}}">2画</a></td>
								<td><a class="character" href="{{asset('kanji/gridcard/')}}">2画</a></td>
								<td><a class="character" href="{{asset('kanji/gridcard/')}}">2画</a></td>
								<td><a class="character" href="{{asset('kanji/gridcard/')}}">9画</a></td>
								<td><a class="character" href="{{asset('kanji/gridcard/')}}">30画</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>



</div><!-- //content-body -->

@endsection