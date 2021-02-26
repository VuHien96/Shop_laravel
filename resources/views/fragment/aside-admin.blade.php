<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="index.html">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Danh mục</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{route('categories.index')}}">Danh sách danh mục</a></li>
                        <li><a href="{{route('categories.create')}}">Tạo mới danh mục</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-bookmark-o"></i>
                        <span>Thương hiệu</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{route('brands.index')}}">Danh sách thương hiệu</a></li>
                        <li><a href="{{route('brands.create')}}">Tạo mới thương hiệu</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-table"></i>
                        <span>Sản phẩm</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{route('products.index')}}">Danh sách sản phẩm</a></li>
                        <li><a href="{{route('products.create')}}">Tạo mới sản phẩm</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-table"></i>
                        <span>Đơn hàng</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{route('orders.index')}}">Danh sách đơn hàng</a></li>
                        <li><a href="">Tạo mới</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- sidebar menu end-->
    </div>
</aside>
