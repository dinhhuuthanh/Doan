<div class="menu-toggle-btn">
                <!-- Menu close button for mobile devices -->
                <a href="#">
                    <i class="bi bi-list"></i>
                </a>
            </div>
            <!-- Logo -->
            <a href="index-2.html" class="logo">
                <img width="100" src="https://vetra.laborasyon.com/assets/images/logo.svg" alt="logo">
            </a>
            <!-- ./ Logo -->
            <div class="page-title"></div>
            <div class="header-menu">
                <div class="header-menu-header">
                    <a href="index-2.html" class="top-menu-header-logo">
                        <img src="https://vetra.laborasyon.com/assets/images/logo.svg" alt="logo">
                    </a>
                    <a href="index-2.html" class="btn btn-sm header-menu-close">
                        <i class="bi bi-x"></i>
                    </a>
                </div>
                <div class="dropdown">
                    <a href="#" class="d-flex align-items-center" data-bs-toggle="dropdown">
                        <div class="avatar me-3">
                            <img src="{{asset('admin/assets/images/user/man_avatar3.jpg')}}" class="rounded-circle" alt="image">
                        </div>
                        <div>
                            <div class="fw-bold">Timotheus Bendan</div>
                            <small class="text-muted">Sales Manager</small>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a href="#" class="dropdown-item d-flex align-items-center">
                            <i class="bi bi-person dropdown-item-icon"></i> Profile
                        </a>
                        <a href="#" class="dropdown-item d-flex align-items-center">
                            <i class="bi bi-envelope dropdown-item-icon"></i> Inbox
                        </a>
                        <a href="#" class="dropdown-item d-flex align-items-center" data-sidebar-target="#settings">
                            <i class="bi bi-gear dropdown-item-icon"></i> Settings
                        </a>
                        <a href="login.html" class="dropdown-item d-flex align-items-center text-danger" target="_blank">
                            <i class="bi bi-box-arrow-right dropdown-item-icon"></i> Logout
                        </a>
                    </div>
                </div>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="{{route('category.index')}}" class="nav-link   ">
                            <i class="bi bi-speedometer2"></i>
                            Categories
                        </a>
                       
                    </li>
                    <li class="nav-item">
                        <a href="{{route('product.index')}}" class="nav-link">
                            <i class="bi bi-app"></i>
                            Products
                        </a>
                        
                    </li>
                    <li class="nav-item">
                        <a href="{{route('invoice.index')}}" class="nav-link">
                            <i class="bi bi-textarea"></i>
                            Orders
                        </a>
                       
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="bi bi-lock"></i>
                            Setting
                        </a>
                    </li>
                </ul>
            </div>
            <div class="header-bar ms-auto">
                <ul class="navbar-nav justify-content-end">
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link" data-bs-toggle="dropdown">
                            <i class="bi bi-search icon-lg"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0">
                            <h6 class="m-0 px-4 py-3 border-bottom">Search</h6>
                            <div class="dropdown-menu-body">
                                <div class="px-4 py-3">
                                    <form>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Search..." aria-label="Example text with button addon" aria-describedby="button-addon1">
                                            <button class="btn btn-outline-light" type="button" id="button-addon1">
                                                <i class="bi bi-search"></i>
                                            </button>
                                        </div>
                                    </form>
                                    <h6 class="mb-3">Last searched</h6>
                                    <div>
                                        <div class="d-flex align-items-center mb-3">
                                            <a href="#" class="avatar avatar-sm me-3">
                                                <span class="avatar-text rounded-circle">
                                                    <i class="bi bi-search"></i>
                                                </span>
                                            </a>
                                            <a href="#" class="flex-fill">Reports for 2021</a>
                                            <a href="#" class="btn btn-sm" data-bs-toggle="tooltip" title="" data-bs-original-title="Remove">
                                                <i class="bi bi-x"></i>
                                            </a>
                                        </div>
                                        <div class="d-flex align-items-center mb-3">
                                            <a href="#" class="avatar avatar-sm me-3">
                                                <span class="avatar-text rounded-circle">
                                                    <i class="bi bi-search"></i>
                                                </span>
                                            </a>
                                            <a href="#" class="flex-fill">Current users</a>
                                            <a href="#" class="btn btn-sm" data-bs-toggle="tooltip" title="" data-bs-original-title="Remove">
                                                <i class="bi bi-x"></i>
                                            </a>
                                        </div>
                                        <div class="d-flex align-items-center mb-3">
                                            <a href="#" class="avatar avatar-sm me-3">
                                                <span class="avatar-text rounded-circle">
                                                    <i class="bi bi-search"></i>
                                                </span>
                                            </a>
                                            <a href="#" class="flex-fill">Meeting notes</a>
                                            <a href="#" class="btn btn-sm" data-bs-toggle="tooltip" title="" data-bs-original-title="Remove">
                                                <i class="bi bi-x"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link nav-link-notify" data-count="2" data-sidebar-target="#notifications">
                            <i class="bi bi-bell icon-lg"></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link " data-bs-toggle="dropdown">
                        <i class="fas fa-cog icon-lg"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0">
                            <h6 class="m-0 px-4 py-3 border-bottom">Setting</h6>
                            <div class="dropdown-menu-body"> 
                            <div class="list-group list-group-flush">
                                    <div class="list-group-item d-flex align-items-center">
                                        <a href="{{route('login')}}" class="text-danger me-3" title="Remove">
                                        <i class="fas fa-angle-double-right "></i>                                        </a>
                                       
                                        <div>
                                            <a href="{{route('login')}}">Login</a>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group list-group-flush">
                                    <div class="list-group-item d-flex align-items-center">
                                        <a href="{{route('logout')}}" class="text-danger me-3" title="Remove">
                                        <i class="fas fa-sign-out-alt icon-lg"></i>
                                        </a>
                                        <div>
                                            <a href="{{route('logout')}}">Logout</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group list-group-flush">
                                    <div class="list-group-item d-flex align-items-center">
                                        <a href="{{route('home')}}" class="text-danger me-3" title="Remove">
                                        <i class="fab fa-accusoft icon-lg"></i>
                                        </a>
                                       
                                        <div>
                                            <a href="{{route('home')}}">Go to website</a>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h6 class="m-0 px-4 py-3 border-top small"><strong class="text-primary"></strong></h6>
                        </div>
                    </li>
                    <li class="nav-item ms-3">
                        <!-- <button class="btn btn-primary btn-icon">
        <i class="bi bi-plus-circle"></i> Add Product
    </button> -->
                    </li>
                </ul>
            </div>
            <!-- Header mobile buttons -->
            <div class="header-mobile-buttons">
                <a href="#" class="actions-btn">
                    <i class="bi bi-three-dots"></i>
                </a>
            </div>
            <!-- ./ Header mobile buttons -->