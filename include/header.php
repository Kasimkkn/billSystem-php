
    <header class="top-navbar">
        <!-- Topbar -->
        <nav class="navbar navbar-expand d-flex justify-content-center topbar position-static">
            <!-- Topbar Search -->
            <form class="d-inline-block">
                <div class="input-group">
                    <input type="text" class="form-control search-box" placeholder="Search for...">
                    <div class="input-group-append">
                        <button class="btn s-btn" type="button">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>

        </nav>
        <!-- End of Topbar -->

    </header>

    <nav class="side-navbar">
        <!-- Side Navbar Content -->
            <ul class="nav">
                <li>
                    <a class="nav-item menu-options"  href="#">
                        <i class="fas fa-laugh-wink"></i>
                        <div class="sidebar-brand-text mx-3">Dashboard</div>
                    </a>
                </li>

                <!-- Nav Item - products -->
                <li class="nav-item active menu-options">
                    <a class="nav-link" href="#" onclick="loadContent('include/pages/products')">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Products</span></a>
                </li>

                <!-- Nav Item - customer -->
                <li class="nav-item menu-options">
                    <a class="nav-link collapsed" href="#" onclick="loadContent('include/pages/customers')">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Customer</span>
                    </a>
                </li>

                <!-- Nav Item - sales -->
                <li class="nav-item menu-options">
                    <a class="nav-link" href="#" onclick="loadContent('include/pages/sales')">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>Sales</span></a>
                </li>
            </ul>
    </nav>

