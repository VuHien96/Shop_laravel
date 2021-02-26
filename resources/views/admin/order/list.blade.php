@extends('layout.master-admin')
@section('content')
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <div class="table-agile-info">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Danh sách đơn hàng
                    </div>
                    @if (session('message'))
                        <div class="alert alert-{{ session('alert') }}" style="border-radius:0px;">
                            {{ session('message') }}
                        </div>
                    @endif
                    <div class="row w3-res-tb">
                        <div class="col-sm-5 m-b-xs">
                            <select class="input-sm form-control w-sm inline v-middle">
                                <option value="0">Bulk action</option>
                                <option value="1">Delete selected</option>
                                <option value="2">Bulk edit</option>
                                <option value="3">Export</option>
                            </select>
                            <button class="btn btn-sm btn-default">Apply</button>
                        </div>
                        <div class="col-sm-4">
                        </div>
                        <div class="col-sm-3">
                            <div class="input-group">
                                <input type="text" class="input-sm form-control" placeholder="Search">
                                <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="button">Go!</button>
          </span>
                            </div>
                        </div>
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
                                <th>Mã đơn hàng</th>
                                <th>Tên khách hàng</th>
                                <th>Trạng thái đơn hàng</th>
                                <th>Ngay tao</th>
                                <th>Thao tac</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $order)
                                <tr>
                                    <td><label class="i-checks m-b-none"><input type="checkbox"name="post[]"><i></i></label></td>
                                    <td>{{$order->id}}</td>
                                    <td>{{$order->name}}</td>
                                    <td>
                                        @if($order->status==1)
                                            Đơn hàng mới
                                        @elseif($order->status==0)
                                            Đã xử lý - Đang giao hàng
                                        @endif
                                    </td>
                                    <td>{{$order->created_at}}</td>
                                    <td>
                                        <a href="{{route('orders.show',$order->id)}}"><i class="fa fa-pencil-square-o"></i></a>
                                        <a href="" data-toggle="confirm"
                                           role="button"><i class="fa fa-trash-o"></i></a>
                                    </td>
                                </tr>
                            @endforeach
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
