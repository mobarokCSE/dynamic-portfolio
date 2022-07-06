<nav class="page-sidebar" id="sidebar">
    <div id="sidebar-collapse">
        <div class="admin-block d-flex">
        </div>
        <ul class="side-menu metismenu">
            <li>
                <a class="active" href="{{route('dashboard')}}"><i class="sidebar-item-icon fa fa-th-large"></i>
                    <span class="nav-label">Dashboard</span>
                </a>
            </li>
            <li class="heading">FEATURES</li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-universal-access"></i>
                    <span class="nav-label mt-1">Sales</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                    <a href=""><i class="sidebar-item-icon fa fa-minus"></i> Sales</a>
                    <a href=""><i class="sidebar-item-icon fa fa-info-circle"></i> Sales List</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-shopping-basket"></i>
                    <span class="nav-label mt-1">Purches</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href=""><i class="sidebar-item-icon fa fa-plus"></i> Purches</a>
                        <a href=""><i class="sidebar-item-icon fa fa-info-circle"></i>Purches Details</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="calendar.html"><i class="sidebar-item-icon fa fa-archive"></i>
                    <span class="nav-label mt-1">Stock</span><i class="fa fa-angle-left arrow"></i>
                </a>
                <ul class="nav-2-level collapse {{ request()->route()->getName() == 'show.ward' ? 'in' : ''}} {{ request()->route()->getName() == 'view.stock' ? 'in' : ''}}" aria-expanded="true">
                    <li>
                    <a href=""><i class="sidebar-item-icon fa fa-plus"></i>Purchase Product</a>
                    <a href=""><i class="sidebar-item-icon fa fa-minus"></i>Sale Product</a>
                    <a href=""><i class="sidebar-item-icon fa fa-info-circle"></i>Net Stock</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-product-hunt"></i>
                    <span class="nav-label mt-1">Products</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href=""><i class="fa fa-plus-circle"></i> Add Products</a>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-globe"></i> Products List</a>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-globe"></i> Products Import</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-crosshairs"></i>
                    <span class="nav-label mt-1">Catagory</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href=""><i class="fa fa-plus-circle"></i> Add Catagory</a>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-globe"></i> Catagory List</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-crosshairs"></i>
                    <span class="nav-label mt-1">Brand</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href=""><i class="fa fa-plus-circle"></i> Add Brand</a>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-globe"></i> Brand List</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-user-circle"></i>
                    <span class="nav-label mt-1">Suppliers</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="{{route('create.supplier')}}"><i class="fa fa-plus-circle"></i> Add Supplier</a>
                    </li>
                    <li>
                        <a href="{{route('index.supplier')}}"><i class="fa fa-globe"></i> Supplier List</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-user"></i>
                    <span class="nav-label mt-1">Customer</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href=""><i class="fa fa-plus-circle"></i> Add Customer</a>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-globe"></i> Customer List</a>
                    </li>
                </ul>
            </li>
            <li class="heading">Maintenance Cost</li>
                        <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-user"></i>
                    <span class="nav-label mt-1">Employee</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href=""><i class="fa fa-plus-circle"></i> Add Employee</a>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-globe"></i> Employee List</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-money"></i>
                    <span class="nav-label mt-1">Salary (EMP)</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href=""><i class="fa fa-plus-circle"></i> Pay Advance Salary</a>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-globe"></i> Advance Salary list</a>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-globe"></i> Pay Salary</a>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-globe"></i> Last Month Salary</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-money"></i>
                    <span class="nav-label mt-1">Expenses</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href=""><i class="fa fa-plus"></i> Add Expenses</a>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-tint"></i> Daily Expenses</a>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-calendar-o"></i> Monthly Expenses</a>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-calendar"></i> Yearly Expenses</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-eye"></i>
                    <span class="nav-label mt-1">Attendence</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href=""><i class="fa fa-tint"></i> Attendence Taken</a>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-globe"></i> All Attendence List</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-eye"></i>
                    <span class="nav-label mt-1">Report Generate</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href=""><i class="fa fa-tint"></i> Report</a>
                    </li>
                    <li>
                        {{-- <a href="{{route"><i class="fa fa-globe"></i> All Attendence List</a> --}}
                    </li>
                </ul>
            </li>
            <li>
                <a href=""><i class="sidebar-item-icon fa fa-cog"></i>
                    <span class="nav-label mt-1">Setting</span>
                </a>
            </li>
        </ul>
    </div>
</nav>