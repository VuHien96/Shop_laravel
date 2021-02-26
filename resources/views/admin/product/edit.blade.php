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
                                Sửa sản phẩm
                            </header>
                            <div class="panel-body">
                                <div class="position-center">
                                    <form role="form" action="{{route('products.update',$product->id)}}" method="post" enctype="multipart/form-data">
                                        @method('PUT')
                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Tên sản phẩm</label>
                                            <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                                                   placeholder="Nhập tên sản phẩm" value="{{$product->name}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Giá sản phẩm</label>
                                            <input type="text" name="price" class="form-control" id="exampleInputEmail1"
                                                   placeholder="Nhập tên giá sản phẩm" value="{{$product->price}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Hình ảnh sản phẩm</label>
                                            <input type="file" name="images" class="form-control" id="exampleInputEmail1">
                                            <img src="{{asset('uploads/product')}}/{{$product->images}}" height="100" width="100">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Miêu tả ngắn</label>
                                            <textarea rows="8" class="form-control " id="ckeditor1" name="contents" required="">{{$product->content}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Nội dung</label>
                                            <textarea rows="8" class="form-control " id="ckeditor2" name="description" required="">{{$product->description}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputSuccess">Nhăn hiệu</label>
                                            <select class="form-control input-lg m-bot15" name="brand_id">
                                                @foreach($brands as $brand)
                                                    @if($brand->id ==$product->brand_id)
                                                        <option selected value="{{$brand->id}}">{{$brand->name}}</option>
                                                    @else
                                                    <option value="{{$brand->id}}">{{$brand->name}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputSuccess">Danh mục</label>
                                            <select class="form-control input-lg m-bot15" name="category_id">
                                                @foreach($categories as $key => $category)
                                                    @if($category->id==$product->category_id)
                                                        <option selected value="{{$category->id}}">{{$category->name}}</option>
                                                    @else
                                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                                    @endif
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
