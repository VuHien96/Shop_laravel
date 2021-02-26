@extends('layout.master-admin')
@section('content')
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <div class="table-agile-info">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Thông tin khách hành
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped b-t b-light">
                            <thead>
                            <tr>
                                <th style="width:20px;">
                                    <label class="i-checks m-b-none">
                                        <input type="checkbox"><i></i>
                                    </label>
                                </th>
                                <th>Mã khách hàn</th>
                                <th>Tên khách hàng</th>
                                <th>Email</th>
                                <th>Số điện thoại</th>
                                <th>Ngay tao</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><label class="i-checks m-b-none"><input type="checkbox"name="post[]"><i></i></label></td>
                                    <td>{{$order->customer->id}}</td>
                                    <td>{{$order->customer->name}}</td>
                                    <td>{{$order->customer->email}}</td>
                                    <td>{{$order->customer->phone}}</td>
                                    <td>{{$order->created_at}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <footer class="panel-footer">
                        <div class="row">

                            {{--                            <div class="col-sm-5 text-center">--}}
                            {{--                                <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>--}}
                            {{--                            </div>--}}
                            <div class="col-sm-12 text-right text-center">
                                <ul class="pagination pagination-sm m-t-none m-b-none">
                                    {{--                                    {{$orders ->links('vendor.pagination.bootstrap-4')}}--}}
                                </ul>
                            </div>
                        </div>
                    </footer>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        Thông tin nhận hàng
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped b-t b-light">
                            <thead>
                            <tr>
                                <th style="width:20px;">
                                    <label class="i-checks m-b-none">
                                        <input type="checkbox"><i></i>
                                    </label>
                                </th>
                                <th></th>
                                <th>Tên khách hàng</th>
                                <th>Email</th>
                                <th>Số điện thoại</th>
                                <th>Địa chỉ</th>
                                <th>Ghi chú</th>
                                <th>Ngay tao</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><label class="i-checks m-b-none"><input type="checkbox"name="post[]"><i></i></label></td>
                                <td>{{$order->shipping->name}}</td>
                                <td>{{$order->shipping->email}}</td>
                                <td>{{$order->shipping->phone}}</td>
                                <td>{{$order->shipping->address}}</td>
                                <td>{{$order->shipping->notes}}</td>
                                <td>{{$order->created_at}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <footer class="panel-footer">
                        <div class="row">

                            {{--                            <div class="col-sm-5 text-center">--}}
                            {{--                                <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>--}}
                            {{--                            </div>--}}
                            <div class="col-sm-12 text-right text-center">
                                <ul class="pagination pagination-sm m-t-none m-b-none">
                                    {{--                                    {{$orders ->links('vendor.pagination.bootstrap-4')}}--}}
                                </ul>
                            </div>
                        </div>
                    </footer>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Thông tin sản phẩm
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped b-t b-light">
                            <thead>
                            <tr>
                                <th style="width:20px;">
                                    <label class="i-checks m-b-none">
                                        <input type="checkbox"><i></i>
                                    </label>
                                </th>
                                <th>Mã sản phẩm</th>
                                <th>Tên sản phẩm</th>
                                <th>Ảnh sản phẩm</th>
                                <th>Giá sản phẩm</th>
                                <th>Ngay tao</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><label class="i-checks m-b-none"><input type="checkbox"name="post[]"><i></i></label></td>
                                <td>{{$orderDetail->product->id}}</td>
                                <td>{{$orderDetail->product->name}}</td>
                                <td><img src="{{asset('uploads/product')}}/{{$orderDetail->product->images}}" width="100" height="100"></td>
                                <td>{{$orderDetail->product->price}}</td>
                                <td>{{$orderDetail->created_at}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <footer class="panel-footer">
                        <div class="row">

                            {{--                            <div class="col-sm-5 text-center">--}}
                            {{--                                <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>--}}
                            {{--                            </div>--}}
                            <div class="col-sm-12 text-right text-center">
                                <ul class="pagination pagination-sm m-t-none m-b-none">
                                    {{--                                    {{$orders ->links('vendor.pagination.bootstrap-4')}}--}}
                                </ul>
                            </div>
                        </div>
                    </footer>
                </div>
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
