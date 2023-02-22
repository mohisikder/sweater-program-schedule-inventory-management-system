<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('frontend.index')}}" class="brand-link">
        <img src="{{asset('frontend/dist/img/AdminLTELogo.png')}}" alt="Sweater Booking Inventory"
            class="brand-image img-file elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">SPSIMS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{route('frontend.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Layout Options
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right">6</span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/layout/top-nav.html" class="nav-link">
                                <i class="far fa-file nav-icon"></i>
                                <p>Top Navigation</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tools"></i>
                        <p>
                            Settings
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li>
                            <a href="#"></a>
                        </li>
                    </ul>
                </li> --}}
                <li class="nav-header nav-border">JOURNAL INFORMATION</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-vest-patches"></i>
                        <p>
                            Styling Details
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('style-add')}}" class="nav-link">
                                <p>Add Style</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('buyer.index')}}" class="nav-link">
                                <p>Manage Style</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-vest-patches"></i>
                        <p>
                            PO Breakdown
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('po-add')}}" class="nav-link">
                                <p>Add PO</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('buyer.index')}}" class="nav-link">
                                <p>Manage Style</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tags"></i>
                        <p>
                            Lab Dip Status
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('lab-dip-add')}}" class="nav-link">
                                <p>Add Lab Dip</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('buyer.index')}}" class="nav-link">
                                <p>Manage Lab Dip</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tags"></i>
                        <p>
                            Fit/Proto Sample Status
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('proto-sample-add')}}" class="nav-link">
                                <p>Add Fit/Proto Sample</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('buyer.index')}}" class="nav-link">
                                <p>Manage Fit/Proto Sample</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tags"></i>
                        <p>
                            PP Sample Status
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('pp-sample-add')}}" class="nav-link">
                                <p>Add PP Sample</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('buyer.index')}}" class="nav-link">
                                <p>Manage PP Sample</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tags"></i>
                        <p>
                            Print/Embroidery Status
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('print-add')}}" class="nav-link">
                                <p>Add Print</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('embroidery-add')}}" class="nav-link">
                                <p>Add Embroidery</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('hand-embroidery-add')}}" class="nav-link">
                                <p>Add Hand Embroidery</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('other-embellishment-add')}}" class="nav-link">
                                <p>Add Other Embellishment</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('buyer.index')}}" class="nav-link">
                                <p>Manage Print/Embroidery</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tags"></i>
                        <p>
                            Accessories Approval Status
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('accessories-approval-add')}}" class="nav-link">
                                <p>Add Accessories</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('accessories-approval-index')}}" class="nav-link">
                                <p>Manage Accessories</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- Settings -->
                <li class="nav-header nav-border">SETTINGS</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Buyer Management
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('buyer.index')}}" class="nav-link">
                                <p>Manage Buyer</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-handshake"></i>
                        <p>
                            Agent Management
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('agent.index')}}" class="nav-link">
                                <p>Manage Agent</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Supplier Management
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('supplier.index')}}" class="nav-link">
                                <p>Manage Supplier</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-th-list"></i>
                        <p>
                            Gauge Management
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('gauge.index')}}" class="nav-link">
                                <p>Manage Gauge</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header">EXAMPLES</li>
                <li class="nav-item">
                    <a href="pages/calendar.html" class="nav-link">
                        <i class="nav-icon far fa-calendar-alt"></i>
                        <p>
                            Calendar
                            <span class="badge badge-info right">2</span>
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>