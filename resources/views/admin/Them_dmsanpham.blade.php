@extends('admin.master')
@section('content')
<div class="animated fadeIn">
	<div class="row">
	    <div class="col-4">
	        <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
	            <div class="card">
	                <div class="card-header">
	                    <h4>Thêm danh mục</h4>
	                </div>
	                <div class="card-body">
	                    <label>Tên danh mục</label>
	                    <input type="text" id="text-input" name="text-input" class="form-control" placeholder="Nhập tên danh mục">
	                    <span class="help-block"><i>Tên riêng sẽ hiển thị trên trang mạng của bạn.</i></span><br><br>

	                    <label>Chuổi đường dẫn tĩnh</label>
	                    <input type="text" id="text-input" name="text-input" class="form-control" placeholder="Nhập chuổi đường dẫn">
	                    <span class="help-block"><i>Chuỗi cho đường dẫn tĩnh là phiên bản của tên hợp chuẩn với Đường dẫn (URL). Chuỗi này bao gồm chữ cái thường, số và dấu gạch ngang (-).</i></span><br><br>

	                    <label>Danh mục cha</label>
	                    <select id="select" name="select" class="form-control">
	                            <option value="0">Please select</option>
	                            <option value="1">Option #1</option>
	                            <option value="2">Option #2</option>
	                            <option value="3">Option #3</option>
	                    </select>
	                    <span class="help-block"><i>Chuyên mục khác với thẻ, bạn có thể sử dụng nhiều cấp chuyên mục. Ví dụ: Trong chuyên mục nhạc, bạn có chuyên mục con là nhạc Pop, nhạc Jazz. Việc này hoàn toàn là tùy theo ý bạn.</i></span><br><br>

	                    <label>Mô tả</label>
	                    <textarea id="textarea-input" name="textarea-input" rows="9" class="form-control" placeholder="Nhập.."></textarea>
	                    <span class="help-block"><i>Mô tả bình thường không được sử dụng trong giao diện, tuy nhiên có vài giao diện hiện thị mô tả này.</i></span><br><br>

	                    <button type="button" class="btn btn-primary">Thêm danh mục</button>
	                </div>
	            </div>
	        </form>
	    </div>
	    <div class="col-8">
	        <div class="card">
	            <div class="card-header">
	                <h4>Tất cả danh mục sản phẩm</h4>
	            </div>
	            <div class="card-body">
	                <table class="table table-striped table-bordered datatable">
	                    <thead>
	                        <tr>
	                            <th>Tiêu đề</th>
	                            <th>Ngày thêm</th>
	                            <th>Tác giả</th>
	                            <th>Mô tả</th>
	                            <th>Chuổi đường dẫn tĩnh</th>
	                        </tr>
	                    </thead>
	                    <tbody>
	                        <tr>
	                            <td>Đồng hồ nam</td>
	                            <td>2012/01/01</td>
	                            <td>Admin</td>
	                            <td>
	                                ...
	                            </td>
	                            <td>dong-ho-nam</td>
	                            
	                        </tr>
	                        <tr>
	                            <td>Đồng hồ nữ</td>
	                            <td>2012/01/01</td>
	                            <td>Admin</td>
	                            <td>
	                                ...
	                            </td>
	                            <td>dong-ho-nu</td>
	                            
	                        </tr>
	                        <tr>
	                            <td>Đồng hồ đôi</td>
	                            <td>2012/01/01</td>
	                            <td>Admin</td>
	                            <td>
	                                ...
	                            </td>
	                            <td>dong-ho-doi</td>

	                        </tr>
	                        <tr>
	                            <td>Sản phẩm hot</td>
	                            <td>2012/01/01</td>
	                            <td>Admin</td>
	                            <td>
	                                ...
	                            </td>
	                            <td>san-pham-hot</td>
	                            
	                        </tr>
	                        <tr>
	                            <td>Sản phẩm mới</td>
	                            <td>2012/02/01</td>
	                            <td>Admin</td>
	                            <td>
	                                ...
	                            </td>
	                            <td>san-pham-mois</td>
	                            
	                        </tr>
	                        
	                    </tbody>
	                </table>
	                <ul class="pagination">
	                            <li class="page-item"><a class="page-link" href="#">Prev</a>
	                            </li>
	                            <li class="page-item active">
	                                <a class="page-link" href="#">1</a>
	                            </li>
	                            <li class="page-item"><a class="page-link" href="#">2</a>
	                            </li>
	                            <li class="page-item"><a class="page-link" href="#">3</a>
	                            </li>
	                            <li class="page-item"><a class="page-link" href="#">4</a>
	                            </li>
	                            <li class="page-item"><a class="page-link" href="#">Next</a>
	                            </li>
	                </ul>

	            </div>
	        </div>
	    </div>
	</div>
	</div>
@endsection