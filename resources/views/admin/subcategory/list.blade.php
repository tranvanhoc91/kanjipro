@extends('admin.layout.index');
<title>Menu list</title>

<style type="text/css">
.btn-action, .btn-add{
    text-align:right;
}
.form-bottom-navigation{
    text-align: center;

}
.category-tbl th{
    color: #fff;
    
}

</style>

@section('content')

<!--body header-->
<div class="content-header row">
	<div class="content-header-left col-md-12 col-xs-12 mb-1">
	<h2 class="content-header-title">カテゴリーリスト</h2>
	<hr>
	</div>
</div><!--//body header-->

<!-- content-body -->

<div class="content-body">
<div class="row">
    <div class="col-md-12">
        <button class="btn btn-info btn-xs" data-title="add" data-toggle="modal" data-target="#addNewCategoryForm">
        <span class="icon-plus3">新作成</span></button>
    </div>
</div>
<div class="row">
    <div class="col-xs-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">カテゴリーリスト</h4>
            </div>
            <div class="card-body collapse in">
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>タイトル</th>
                                <th></th>
                                <th></th>
                                <th>選択肢</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td colspan="3">
                                    <a href="tag/20/"><span>部首</span></a>
                                </td>
                                <td>
                                    <a class="btn-secondary" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                        <span class="icon-ellipsis"></span>
                                    </a>
                                    <div class="dropdown-menu">
                                        <button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#editCategory">
                                            <span class="icon-pencil2"></span></button>
                                        <button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#deleteCategory">
                                            <span class="icon-trash"></span>
                                        </button>
                                    </div>
                                    </td>
                                </tr>
                                <tr>
                                <th scope="row">1</th>
                                <td colspan="3">
                                    <a href="tag/20/"><span>部首</span></a>
                                </td>
                                <td>
                                    <a class="btn-secondary" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                        <span class="icon-ellipsis"></span>
                                    </a>
                                    <div class="dropdown-menu">
                                        <button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#editCategory">
                                            <span class="icon-pencil2"></span></button>
                                        <button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#deleteCategory">
                                            <span class="icon-trash"></span>
                                        </button>
                                    </div>
                                    </td>
                                </tr>
                        </tbody>
                    </table>
                    <div class="form-bottom-navigation">
                        <nav aria-label="Page navigation">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">« Prev</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item active"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">Next »</span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Modal form add new category -->
<div class="modal fade text-xs-left" id="addNewCategoryForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <label class="modal-title text-text-bold-600" id="myModalLabel33">新しいカテゴリーを作成</label>
            </div>
            <form action="#">
                <div class="modal-body">
                <label>タイトル: </label>
                <div class="form-group">
                    <input type="text" placeholder="タイトルを入力下さい" class="form-control">
                </div>

                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-warning mr-1" data-dismiss="modal" value="close">
                        <i class="icon-cross2"></i> Cancel
                    </button>
                    <button type="submit" class="btn btn-info" value="Login">
                        <i class="icon-check2"></i> 同意
                    </button>
                </div>
            </form>
        </div>
    </div>
</div><!-- //Modal form add new category -->

<!-- Modal form edit category -->
<div class="modal fade text-xs-left" id="editCategory" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <label class="modal-title text-text-bold-600" id="myModalLabel33">カテゴリーを編集</label>
            </div>
            <form action="#">
                <div class="modal-body">
                <label>タイトル: </label>
                <div class="form-group">
                    <input type="text" placeholder="タイトルを入力下さい" value="The Sun" class="form-control">
                </div>

                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-warning mr-1" data-dismiss="modal" value="close">
                        <i class="icon-cross2"></i> Cancel
                    </button>
                    <button type="submit" class="btn btn-info" value="Login">
                        <i class="icon-check2"></i> 同意
                    </button>
                </div>
            </form>
        </div>
    </div>
</div><!-- //Modal form add new category -->


<!-- Modal form delete category -->
<div class="modal fade text-xs-left" id="deleteCategory" tabindex="-1" role="dialog" aria-labelledby="myModalLabel18" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
        <div class="modal-body">
        <h5>確認メッセージ</h5>
        <hr>
        <p><strong>「タグのタイトル」が削除されます。よろしいですか？</strong></p>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">キャンセル</button>
        <button type="button" class="btn btn-outline-primary">削除</button>
        </div>
    </div>
    </div>
</div>

</div><!-- //content-body -->
@endsection