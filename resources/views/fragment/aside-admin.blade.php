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
                        <i class="fa fa-book"></i>
                        <span>Thương hiệu</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{route('brands.index')}}">Danh sách thương hiệu</a></li>
                        <li><a href="{{route('brands.create')}}">Tạo mới thương hiệu</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- sidebar menu end-->
    </div>
</aside>
