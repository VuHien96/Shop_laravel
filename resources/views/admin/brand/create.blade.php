@extends('layout.master-admin')
@section('content')
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <div class="form-w3layouts">
                <!-- page start-->
                <div class="row">
                    <div class="col-lg-12">
                        <section class="panel">
                            <header class="panel-heading">
                                Tạo mới thương hiệu
                            </header>
                            <div class="panel-body">
                                <div class="position-center">
                                    <form role="form" action="{{route('brands.store')}}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Tên thương hiệu</label>
                                            <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                                                   placeholder="Nhập tên thương hiệu">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Miêu tả</label>
                                            <textarea rows="8" class="form-control " id="comment" name="description" required=""></textarea>
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
                <!-- page end-->
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
