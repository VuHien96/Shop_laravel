@extends('layout.master-admin')
@section('content')
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <div class="table-agile-info">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Danh sách sản phẩm
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
                                <th>Id</th>
                                <th>Tên sản phẩm</th>
                                <th>Giá sản phẩm</th>
                                <th>Ảnh sản phẩm</th>
                                <th>Miêu tả ngắn</th>
                                <th>Thương hiệu</th>
                                <th>Danh mục</th>
                                <th>Hiển thị</th>
                                <th>Ngày tạo</th>
                                <th>Thao tác</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
                            <tr>
                                <td><label class="i-checks m-b-none"><input type="checkbox"name="post[]"><i></i></label></td>
                                <td>{{$product->id}}</td>
                                <td>{{$product->name}}</td>
                                <td>{{$product->price}}</td>
                                <td><img src="{{asset('uploads/product')}}/{{$product->images}}" height="100" width="100"></td>
                                <td>{{$product->content}}</td>
                                <td>{{$product->category->name}}</td>
                                <td>{{$product->brand->name}}</td>
                                <td>
                                    @if($product->status==0)
                                        ẩn
                                    @elseif($product->status==1)
                                        Hiển thị
                                    @endif
                                </td>
                                <td>{{$product->created_at}}</td>
                                <td>
                                    <a href="{{route('products.edit',$product->id)}}"><i class="fa fa-pencil-square-o"></i></a>
                                    <a href="{{route('products.destroy',$product->id)}}" data-toggle="confirm"
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
                                    {{$products ->links('vendor.pagination.bootstrap-4')}}
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
