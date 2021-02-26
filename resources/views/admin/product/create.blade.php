@extends('layout.master-admin')
@section('content')
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <div class="form-w3layouts">
                <!-- pages start-->
                <div class="row">
                    <div class="col-lg-12">
                        <section class="panel">
                            <header class="panel-heading">
                                Tạo mới sản phẩm
                            </header>
                            <div class="panel-body">
                                <div class="position-center">
                                    <form role="form" action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Tên sản phẩm</label>
                                            <input type="text" name="name" class="form-control"
                                                   placeholder="Nhập tên sản phẩm"
                                                   data-validation="length" data-validation-length="min10" data-validation-error-msg="Làm ơn điền ít nhất 10 ký tự">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Giá sản phẩm</label>
                                            <input type="text" name="price" class="form-control" id="exampleInputEmail1"
                                                   placeholder="Nhập tên giá sản phẩm">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Hình ảnh sản phẩm</label>
                                            <input type="file" name="images" class="form-control" id="exampleInputEmail1">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Miêu tả ngắn</label>
                                            <textarea rows="8" class="form-control " id="ckeditor1" name="contents" required=""></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Nội dung</label>
                                            <textarea rows="8" class="form-control " id="ckeditor2" name="description" required=""></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputSuccess">Nhăn hiệu</label>
                                            <select class="form-control input-lg m-bot15" name="brand_id">
                                                <option value="">Chọn thương hiệu</option>
                                                @foreach($brands as $brand)
                                                    <option value="{{$brand->id}}">{{$brand->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputSuccess">Danh mục</label>
                                            <select class="form-control input-lg m-bot15" name="category_id">
                                                <option value="">Chọn danh mục</option>
                                                @foreach($categories as $category)
                                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputSuccess">Hiển thị</label>
                                            <select class="form-control input-lg m-bot15" name="status">
                                                <option value="0">Ẩn</option>
                                                <option value="1">Hiển thị</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-info">Thêm</button>
                                    </form>
                                </div>

                            </div>
                        </section>

                    </div>
                </div>
                <!-- pages end-->
            </div>
        </section>
        <!-- footer -->
        <div class="footer">
            <div class="wthree-copyright">
                <p>© 2017 Visitors. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
            </div>
        </div>
        <!-- / footer -->
    </section>

    <!--main content end-->
@endsection
