    <nav class="sidebar-wrapper">

    <!-- Sidebar content start -->
    <div class="sidebar-tabs">

        <!-- Tabs nav start -->
        <div class="nav" role="tablist" aria-orientation="vertical">
            <div style="margin-top: 10%;">
                <div style="border-radius: 100%; overflow: hidden; width: 48px; height: 48px;">
                    <a class="nav-link-pro" data-tab="tab1" class="logo" style="margin-bottom: 10%;">
                        <img src="{{ asset('storage/'.Auth::User()->company->logo) }}" style="width: 48px; height: 48px; margin-bottom: 10%; z-index: 1;">
                    </a>
                </div>
            </div>

            <a class="current-page nav-link active" style="margin-top: 25px;" data-tab="tab2">
                <i class="icon-grid"></i>
                <span class="nav-link-text">Dashboards</span>
            </a>
            <a class="nav-link " style="margin-top: 10px;" data-tab="tab3">
                <i class="icon-settings1"></i>
                <span class="nav-link-text">Sistem</span>
            </a>
            <a class="nav-link" style="margin-top: 10px;" data-tab="tab4">
                <i class="icon-notifications_none"></i>
                <span class="nav-link-text">Notifikasi</span>
            </a>
            <div class="mt-5">
                <a class="nav-link">
                    <i class="icon-settings1"></i>
                    <span class="nav-link-text">Settings</span>
                </a>
            </div>
        </div>


        <!-- Tabs nav end -->

        <!-- Tabs content start -->
        <div class="tab-content">

            <!-- Chat tab -->
            <div class="tab-pane fade show active" data-tab-content="tab2">

                <!-- Tab content header start -->
                <div class="tab-pane-header d-flex">

                    <div style="border-radius: 100%; overflow: hidden; width: 45px; height: 45px;">
                        <a href="#" class="logo">
                            <?php
                            $logoPath = 'storage/' . Auth::User()->picture;
                            $defaultLogoPath = 'default/logo.png';

                            if (file_exists($logoPath)) {
                                echo '<img src="' . asset($logoPath) . '" style="width: 45px; height: 45px;">';
                            } else {
                                echo '<img src="' . asset($defaultLogoPath) . '" style="width: 45px; height: 45px;">';
                            }
                            ?>
                        </a>
                    </div>
                    <div style="margin-top: 5%;">
                        &emsp;{{Auth::User()->company->name}}
                    </div>
                </div>
                <!-- Tab content header end -->

                <!-- Sidebar menu starts -->
                <div class="sidebarMenuScroll mt-2">
                    <div class="sidebar-menu active">
                        <ul>
                            <li>
                                <a href="{{ url('/') }}" class="sidebar-menu {{ request()->routeIs('dashboard') ? 'current-page' : '' }}" aria-selected="false">
                                    <i class="icon-home2" style="font-size: 19px;"></i><span>&emsp;Dashboard</span>
                                </a>
                            </li>


                            <li class=" mt-3">
                                <a href="{{ route('item-index') }}" class="sidebar-menu {{ request()->routeIs('item-index') || request()->routeIs('item-add') || request()->routeIs('item-edit') ? 'current-page' : '' }}" aria-selected="false">
                                    <i class="icon-download1" style="font-size: 19px;"></i><span>&emsp;Barang</span>
                                </a>
                            </li>
                            <!-- <li class="mt-3">
        <a href="{{ url('pembelian_pemasok') }}" class="{{ request()->routeIs('pembelian_pemasok') ? 'current-page' : '' }}" aria-selected="false">
         <i class="icon-download1" style="font-size: 19px;"></i>
         <span>&emsp;Barang</span>
        </a>
       </li>  -->
                            <li class="mt-3 ">
                                <a href="#" class="dropdown-btn {{ request()->routeIs('invoice') ||
                                    request()->routeIs('recurring_invoice') ||
                                    request()->routeIs('add_invoice') ||
                                    request()->routeIs('details_recurring') ||
                                    request()->routeIs('details_inv') ||
                                    request()->routeIs('add_costumers') ||
                                    request()->routeIs('costumers') ||
                                    request()->routeIs('costumer') ||
                                    request()->routeIs('show_cos') ||
                                    request()->routeIs('edit_cos')
                                        ? 'current-page'
                                        : '' }} "><i class="icon-tag1" style=" font-size: 19px;"></i><span>&emsp;Penjualan</span><i class="icon-chevron-down1 droprow "></i></a>
                                <ul class="dropdown-container">
                                    <li class="mt-2"><a href="{{ route('invoice') }}" class="{{ request()->routeIs('invoice') ||
                                            request()->routeIs('recurring_invoice') ||
                                            request()->routeIs('details_recurring') ||
                                            request()->routeIs('details_inv') ||
                                            request()->routeIs('add_invoice') ||
                                            request()->routeIs('edit_supplier')
                                                ? 'drop-icon'
                                                : '' }}"><span style="margin-left: 20px;">&emsp;Faktur</span></a></li>
                                    <li class="mt-2"><a href="{{ route('costumers') }}" class="{{ request()->routeIs('costumers') ||
                                            request()->routeIs('costumers') ||
                                            request()->routeIs('add_costumers') ||
                                            request()->routeIs('edit_cos') ||
                                            request()->routeIs('show_cos')
                                                ? 'drop-icon'
                                                : '' }}"><span style="margin-left: 20px;">&emsp;Pelanggan</span></a></li>
                                </ul>
                            </li>
                            <li class="mt-3 ">
                                <a href="#" class="dropdown-btn  {{ request()->routeIs('bill') ||
                                    request()->routeIs('recurring_bill') ||
                                    request()->routeIs('add_recurring_bill') ||
                                    request()->routeIs('add_bill') ||
                                    request()->routeIs('detail_bill') ||
                                    request()->routeIs('detail_rcr_bill') ||
                                    request()->routeIs('supplier') ||
                                    request()->routeIs('add_supplier') ||
                                    request()->routeIs('edit_supplier')
                                        ? 'current-page'
                                        : '' }} "><i class="icon-shopping-cart1" style=" font-size: 19px;"></i><span>&emsp;Pembelian</span><i class="icon-chevron-down1 droprow"></i></a>
                                <ul class="dropdown-container">
                                    <li class="mt-2"><a href="{{ route('bill') }}" class="{{ request()->routeIs('bill') ||
                                            request()->routeIs('recurring_bill') ||
                                            request()->routeIs('detail_bill') ||
                                            request()->routeIs('detail_rcr_bill') ||
                                            request()->routeIs('add_recurring_bill') ||
                                            request()->routeIs('add_bill')
                                                ? 'drop-icon'
                                                : '' }}"><span style="margin-left: 20px;">&emsp;Tagihan</span></a></li>
                                    <li class="mt-2"><a href="{{ url('supplier') }}" class="{{ request()->routeIs('supplier') || request()->routeIs('add_supplier') || request()->routeIs('edit_supplier')
                                                ? 'drop-icon'
                                                : '' }}"><span style="margin-left: 20px;">&emsp;Pemasok</span></a></li>
                                </ul>
                            </li>
                            <li class="mt-3">
                                <a href="#" class="dropdown-btn {{ request()->routeIs('transactions') ||
                                    request()->routeIs('transfer') ||
                                    request()->routeIs('account') ||
                                    request()->routeIs('add_account') ||
                                    request()->routeIs('edit_account') ||
                                    request()->routeIs('show_account1') ||
                                    request()->routeIs('add_income') ||
                                    request()->routeIs('edit_income') ||
                                    request()->routeIs('show_income') ||
                                    request()->routeIs('add_expenditure') ||
                                    request()->routeIs('edit_expenditure') ||
                                    request()->routeIs('show_expenditure') ||
                                    request()->routeIs('recurring_transactions') ||
                                    request()->routeIs('add_recurring_income') ||
                                    request()->routeIs('edit_recurring_income') ||
                                    request()->routeIs('show_recurring_income') ||
                                    request()->routeIs('add_recurring_expenditure') ||
                                    request()->routeIs('edit_recurring_expenditure') ||
                                    request()->routeIs('show_recurring_expenditure') ||
                                    request()->routeIs('add_transfer') ||
                                    request()->routeIs('edit_transfer') ||
                                    request()->routeIs('receipt_bill_transactions') ||
                                    request()->routeIs('receipt_transactions') ||
                                    request()->routeIs('show_transfer')
                                        ? 'current-page'
                                        : '' }}"><i class="icon-attach_money" style="font-size: 19px;"></i><span>&emsp;Perbankan</span><i class="icon-chevron-down1 droprow"></i></a>
                                <ul class="dropdown-container">
                                    <li class="mt-2"><a href="{{ url('account') }}" class="{{ request()->routeIs('account') ||
                                            request()->routeIs('add_account') ||
                                            request()->routeIs('edit_account') ||
                                            request()->routeIs('show_account1')
                                                ? 'drop-icon'
                                                : '' }}"><span style="margin-left: 20px;">&emsp;Akun</span></a></li>
                                    <li class="mt-2"><a href="{{ url('transactions') }}" class="{{ request()->routeIs('transactions') ||
                                            request()->routeIs('add_income') ||
                                            request()->routeIs('edit_income') ||
                                            request()->routeIs('show_income') ||
                                            request()->routeIs('add_expenditure') ||
                                            request()->routeIs('edit_expenditure') ||
                                            request()->routeIs('show_expenditure') ||
                                            request()->routeIs('recurring_transactions') ||
                                            request()->routeIs('add_recurring_income') ||
                                            request()->routeIs('edit_recurring_income') ||
                                            request()->routeIs('show_recurring_income') ||
                                            request()->routeIs('add_recurring_expenditure') ||
                                            request()->routeIs('edit_recurring_expenditure') ||
                                            request()->routeIs('receipt_bill_transactions') ||
                                            request()->routeIs('receipt_transactions') ||
                                            request()->routeIs('show_recurring_expenditure')
                                                ? 'drop-icon'
                                                : '' }}"><span style="margin-left: 20px;">&emsp;Transaksi</a></li>
                                    <li class="mt-2"><a href="{{ url('transfer') }}" class="{{ request()->routeIs('transfer') ||
                                            request()->routeIs('add_transfer') ||
                                            request()->routeIs('edit_transfer') ||
                                            request()->routeIs('show_transfer')
                                                ? 'drop-icon'
                                                : '' }}"><span style="margin-left: 20px;">&emsp;Transfer</span></a></li>
                                </ul>
                            </li>


                            <li class="mt-3">
                                <a href="{{ route('report') }}" class="sidebar-menu {{ request()->routeIs('report') || request()->routeIs('show_report') || request()->routeIs('show_report2')
                                        ? 'current-page'
                                        : '' }}" aria-selected="false"><i class="icon-file-text" style=" font-size: 19px;"></i><span>&emsp;Laporan</span></a>
                            </li>
                            <li class="mt-3">
                                <a href="{{ route('calendar') }} " class="sidebar-menu {{ request()->routeIs('calendar') ? 'current-page' : '' }}" aria-selected="false"><i class="icon-calendar1" style=" font-size: 19px;"></i><span>&emsp;Kalender</span></a>
                            </li>
                        </ul>

                    </div>
                </div>


            </div>

            <!-- Pages tab -->
            <div class="tab-pane fade show" data-tab-content="tab3">

                <!-- Tab content header start -->
                <div class="tab-pane-header d-flex">
                    <div style="border-radius: 100%; overflow: hidden; width: 45px; height: 45px;">
                        <a href="#" class="logo">
                            <img src="{{ asset('storage/'.Auth::User()->company->logo) }}" style="width: 45px; height: 45px;">
                        </a>
                    </div>

                    <div style="margin-top: 5%;">
                        &emsp;{{Auth::User()->company->name}}
                    </div>
                </div>
                <!-- Tab content header end -->

                <!-- Sidebar menu starts -->
                <div class="sidebarMenuScroll mt-2">
                    <div class="sidebar-menu active">
                        <ul class="active">

                            <li class="active">
                                <a href="{{ route('company') }}" class="sidebar-menu {{ request()->routeIs('company') ? 'current-page' : '' }}"><i class="icon-briefcase" style=" font-size: 19px;"></i><span>&emsp;Perusahaan</span></a>
                            </li>

                            <li class="mt-3 active">
                                <a href="{{ route('setting-invoice') }}" class="sidebar-menu {{ request()->routeIs('setting-invoice') ? 'current-page' : '' }}"><i class="icon-file " style=" font-size: 19px;"></i><span>&emsp;Faktur</span></a>
                            </li>
                            <li class="mt-3 active">
                                <a href="{{ route('editemail') }}" class="sidebar-menu {{ request()->routeIs('editemail') ? 'current-page' : '' }}"><i class="icon-mail " style=" font-size: 19px;"></i><span>&emsp;Surel</span></a>
                            </li>
                            <li class="mt-3" active>
                                <a href="{{ route('index-category') }}" class="sidebar-menu {{ request()->routeIs('index-category') || request()->routeIs('add-category') ? 'current-page' : '' }}"><i class="icon-server " style=" font-size: 19px;"></i><span>&emsp;Kategori</span></a>
                            </li>
                            <!-- <li class="dropdown">
        <a href="#" class="pem-btn"> Pembelian <span class="fas fa-caret-down first"></span></a>
        <ul class="pem-menu">
         <li><a href="#">Tagihan </a></li>
         <li><a href="#">Pelanggan</a></li>
        </ul>
       </li>	 -->
                            <li class="mt-3">
                                <a href="{{ route('currency') }}" class="sidebar-menu {{ request()->routeIs('currency') || request()->routeIs('currency-add') ? 'current-page' : '' }}"><i class="icon-local_atm" style=" font-size: 19px;"></i><span>&emsp;Mata
                                        Uang</span></a>
                            </li>
                            <li class="mt-3">
                                <a href="{{ route('tax') }}" class="{{ request()->routeIs('tax') || request()->routeIs('tax-add') ? 'current-page' : '' }}"><i class="icon-line-graph" style=" font-size: 19px;"></i><span>&emsp;Pajak</span></a>
                            </li>

                        </ul>

                    </div>
                </div>
                <!-- Sidebar menu ends -->



            </div>

            <!-- Pages tab -->
            <div class="tab-pane fade show" data-tab-content="tab1">

                <!-- Tab content header start -->
                <div class="tab-pane-header d-flex">
                    <div style="border-radius: 100%; overflow: hidden; width: 45px; height: 45px;">
                        <a href="#" class="logo">
                            <img src="{{ asset('storage/'.Auth::User()->company->logo) }}" style="width: 45px; height: 45px;">
                        </a>
                    </div>

                    <div style="margin-top: 5%;">
                        &emsp;
                        {{Auth::User()->company->name}}
                    </div>
                </div>
                <!-- Tab content header end -->

                <!-- Sidebar menu starts -->
                <div class="sidebarMenuScroll mt-2">
                    <div class="sidebar-menu">
                        <ul>
                            <li>
                                <a href="{{ route('profile') }}" class="{{ request()->routeIs('profile') ? 'current-page' : '' }}"><i class="icon-user1" style=" font-size: 19px;"></i><span>&emsp;Profil</span></a>
                            </li>
                            <li class="mt-3">
                                <a href="{{ url('users') }}" class="{{ request()->routeIs('users-index') || request()->routeIs('add_users') ? 'current-page' : '' }} || {{ request()->routeIs('edit_users') ? 'current-page' : ''   }}"><i class="icon-users" style=" font-size: 19px;"></i><span>&emsp;Pengguna</span></a>
                            </li>
                            <li class="mt-3">
                                <a href="{{ url('role') }}" class="{{ request()->routeIs('role') || request()->routeIs('add_role') || request()->routeIs('edit_role')
                                        ? 'current-page'
                                        : '' }}"><i class="icon-pocket" style=" font-size: 19px;"></i><span>&emsp;Peran</span></a>
                            </li>
                            <li class="mt-3">
                                <a href="/logout"><i class="icon-power_settings_new" style=" font-size: 19px;"></i><span>&emsp;Logout</span></a>
                            </li>
                        </ul>

                    </div>
                </div>
                <!-- Sidebar menu ends -->



            </div>


            <!-- Pages tab -->
            <div class="tab-pane fade show" data-tab-content="tab4">

                <!-- Tab content header start -->
                <div class="tab-pane-header mt-2 ">
                    <div class="d-flex">
                        <i class="icon-notifications_none" style="font-size: 25px;"></i>
                        &emsp;Notifikasi
                    </div>
                    <!-- <hr class="my-hr"> -->
                    <div class="content" style="margin-top: 34px;">
                        <div class="searchcontainer">
                            <input class="search" name="cari" type="text" placeholder="Cari Disini..." style="margin-bottom: 2%; font-size:10pt" />
                        </div>
                    </div>


                </div>
                <!-- Tab content header end -->



                <!-- Sidebar menu starts -->
                <div class="sidebarMenuScroll">
                    <div class="sidebar-menu">

                        <div style=" margin-left: 86%; font-size: 12pt;">
                            <a href=""><i class="icon-done_all" style="color: #5957b1;"></i></a>
                        </div>
                        <ul style="margin-top: -25px;">

                            <li>
                                <div class="d-flex" style="margin-top: 30px;">
                                    <a href="#">Transfer berhasil
                                        Sudah Selesai
                                        transaksi di lakukan dari dava ke trisqi dengan nominal Rp50.000.000</a>
                                    <div class="">
                                        <a href=""><i class="icon-check-circle" style="z-index: 1;"></i></a>
                                    </div>
                                </div>

                                <div style="margin-left: 9%;">
                                    <span style="font-size: 7pt; color: #5957b1;">8 minggu yang lalu</span>
                                </div>

                                <div class="tab-pane-header1">

                                    <hr class="my-hr">
                                </div>
                                <div class="d-flex">
                                    <a href="#">Transfer berhasil
                                        Sudah Selesai
                                        transaksi di lakukan dari dava ke trisqi dengan nominal Rp50.000.000</a>
                                    <div class="">
                                        <a href=""><i class="icon-check-circle" style="z-index: 1;"></i></a>
                                    </div>
                                </div>

                                <div style="margin-left: 9%;">
                                    <span style="font-size: 7pt; color: #5957b1;">8 minggu yang lalu</span>
                                </div>

                                <div class="tab-pane-header1">
                                    <hr class="my-hr">
                                </div>

                            </li>
                            <li class="mt-3">
                                <a href="{{ url('coba') }}" class="{{ request()->routeIs('coba') ? 'current-page' : '' }}">Icons</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Sidebar menu ends -->



            </div>

            <!-- Forms tab -->
            <div class="tab-pane fade" id="tab-forms" role="tabpanel" aria-labelledby="forms-tab">

                <!-- Tab content header start -->
                <div class="tab-pane-header">
                    Forms
                </div>
                <!-- Tab content header end -->

                <!-- Sidebar menu starts -->
                <div class="sidebarMenuScroll">
                    <div class="sidebar-menu">
                        <ul>
                            <li class="list-heading">Form Layouts</li>
                            <li>
                                <a href="forms-layout-one.html">Default Layout</a>
                            </li>
                            <li>
                                <a href="forms-layout-two.html">Layout Sections</a>
                            </li>
                            <li>
                                <a href="forms-layout-three.html">Simple Form Layout</a>
                            </li>
                            <li>
                                <a href="forms-layout-four.html">Select 2 Tags and Mask</a>
                            </li>
                            <li>
                                <a href="forms-layout-five.html">Horizontal Form Layout</a>
                            </li>
                            <li>
                                <a href="forms-layout-six.html">Layout Six with Tabs</a>
                            </li>
                        </ul>
                        <ul>
                            <li class="list-heading">Form Fields</li>
                            <li>
                                <a href="forms-inputs.html">Form Inputs</a>
                            </li>
                            <li>
                                <a href="forms-input-groups.html">Input Groups</a>
                            </li>
                            <li>
                                <a href="forms-checkbox-radio.html">Checkbox &amp; Radios</a>
                            </li>
                            <li>
                                <a href="forms-validation.html">Form Validation</a>
                            </li>
                        </ul>
                        <ul>
                            <li class="list-heading">Plugins</li>
                            <li>
                                <a href="forms-dropzone.html">Dropzone</a>
                            </li>
                            <li>
                                <a href="forms-bs-select.html">Select 2 Dropdowns</a>
                            </li>
                            <li>
                                <a href="forms-date-time-picker.html">Date Time Picker</a>
                            </li>
                            <li>
                                <a href="forms-input-mask.html">Input Mask</a>
                            </li>
                            <li>
                                <a href="forms-input-range.html">Input Range</a>
                            </li>
                            <li>
                                <a href="forms-editor.html">WYSIWYG Editor</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Sidebar menu ends -->

                <!-- Sidebar actions starts -->
                <div class="sidebar-actions">
                    <div class="support-tile red">
                        <i class="icon-mail"></i> Inbox Full
                    </div>
                </div>
                <!-- Sidebar actions ends -->

            </div>

            <!-- Components tab -->
            <div class="tab-pane fade" id="tab-components" role="tabpanel" aria-labelledby="components-tab">

                <!-- Tab content header start -->
                <div class="tab-pane-header">
                    Components
                </div>
                <!-- Tab content header end -->

                <!-- Sidebar menu starts -->
                <div class="sidebarMenuScroll">
                    <div class="sidebar-menu">
                        <ul>
                            <li>
                                <a href="accordions.html">Accordions</a>
                            </li>
                            <li>
                                <a href="alerts.html">Alerts</a>
                            </li>
                            <li>
                                <a href="buttons.html">Buttons</a>
                            </li>
                            <li>
                                <a href="badges.html">Badges</a>
                            </li>
                            <li>
                                <a href="cards.html">Cards</a>
                            </li>
                            <li>
                                <a href="carousel.html">Carousel</a>
                            </li>
                            <li>
                                <a href="list-group.html">List group</a>
                            </li>
                            <li>
                                <a href="modals.html">Modal</a>
                            </li>
                            <li>
                                <a href="paginations.html">Paginations</a>
                            </li>
                            <li>
                                <a href="popovers.html">Popovers</a>
                            </li>
                            <li>
                                <a href="progress.html">Progress</a>
                            </li>
                            <li>
                                <a href="spinners.html">Spinners</a>
                            </li>
                            <li>
                                <a href="tabs.html">Tabs</a>
                            </li>
                            <li>
                                <a href="toasts.html">Toasts</a>
                            </li>
                            <li>
                                <a href="tooltips.html">Tooltips</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Sidebar menu ends -->

                <!-- Sidebar actions starts -->
                <div class="sidebar-actions">
                    <div class="support-tile yellow">
                        <i class="icon-arrow-down-circle"></i><a href="#">Download Reports</a>
                    </div>
                </div>
                <!-- Sidebar actions ends -->

            </div>

            <!-- Graphs tab -->
            <div class="tab-pane fade" id="tab-graphs" role="tabpanel" aria-labelledby="graphs-tab">

                <!-- Tab content header start -->
                <div class="tab-pane-header">
                    Graphs &amp; Tables
                </div>
                <!-- Tab content header end -->

                <!-- Sidebar menu starts -->
                <div class="sidebarMenuScroll">
                    <div class="sidebar-menu">
                        <ul>
                            <li class="list-heading">Graphs</li>
                            <li>
                                <a href="apex-graphs.html">Apex Graphs</a>
                            </li>
                            <li>
                                <a href="morris-graphs.html">Morris Graphs</a>
                            </li>
                            <li>
                                <a href="vector-maps.html">Vector Maps</a>
                            </li>
                        </ul>

                        <ul>
                            <li class="list-heading">Tables</li>
                            <li>
                                <a href="bootstrap-tables.html">Bootstrap Tables</a>
                            </li>
                            <li>
                                <a href="custom-tables.html">Custom Tables</a>
                            </li>
                            <li>
                                <a href="data-tables.html">Data Tables</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Sidebar menu ends -->

                <!-- Sidebar actions starts -->
                <div class="sidebar-actions">
                    <div class="support-tile pink">
                        <i class="icon-align-right1"></i> RTL Support
                    </div>
                </div>
                <!-- Sidebar actions ends -->

            </div>

            <!-- Authentication tab -->
            <div class="tab-pane fade" id="tab-authentication" role="tabpanel" aria-labelledby="authentication-tab">

                <!-- Tab content header start -->
                <div class="tab-pane-header">
                    Authentication
                </div>
                <!-- Tab content header end -->

                <!-- Sidebar menu starts -->
                <div class="sidebarMenuScroll">
                    <div class="sidebar-menu">
                        <ul>
                            <li>
                                <a href="login.html">Login</a>
                            </li>
                            <li>
                                <a href="signup.html">Signup</a>
                            </li>
                            <li>
                                <a href="forgot-password.html">Forgot Password</a>
                            </li>
                            <li>
                                <a href="reset-password.html">Reset Password</a>
                            </li>
                            <li>
                                <a href="lock-screen.html">Lock Screen</a>
                            </li>
                            <li>
                                <a href="subscribe.html">Subscribe</a>
                            </li>
                            <li>
                                <a href="maintenance.html">Maintenance</a>
                            </li>
                            <li>
                                <a href="error.html">404</a>
                            </li>
                            <li>
                                <a href="error-option2.html">Error</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Sidebar menu ends -->

                <!-- Sidebar actions starts -->
                <div class="sidebar-actions">
                    <div class="support-tile blue">
                        <a href="pricing.html" class="btn btn-light m-auto">Upgrade Account</a>
                    </div>
                </div>
                <!-- Sidebar actions ends -->

            </div>

            <!-- Settings tab -->
            <div class="tab-pane fade" id="tab-settings" role="tabpanel" aria-labelledby="settings-tab">

                <!-- Tab content header start -->
                <div class="tab-pane-header">
                    Settings
                </div>
                <!-- Tab content header end -->

                <!-- Settings start -->
                <div class="sidebarMenuScroll">
                    <div class="sidebar-settings">
                        <div class="accordion" id="settingsAccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="genInfo">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#genCollapse" aria-expanded="true" aria-controls="genCollapse">
                                        General Info
                                    </button>
                                </h2>
                                <div id="genCollapse" class="accordion-collapse collapse show" aria-labelledby="genInfo" data-bs-parent="#settingsAccordion">
                                    <div class="accordion-body">
                                        <div class="field-wrapper">
                                            <input type="text" value="Jeivxezer Lopexz" />
                                            <div class="field-placeholder">Full Name</div>
                                        </div>

                                        <div class="field-wrapper">
                                            <input type="email" value="jeivxezer-lopexz@email.com" />
                                            <div class="field-placeholder">Email</div>
                                        </div>

                                        <div class="field-wrapper">
                                            <input type="text" value="0 0000 00000" />
                                            <div class="field-placeholder">Contact</div>
                                        </div>
                                        <div class="field-wrapper m-0">
                                            <button class="btn btn-primary stripes-btn">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="chngPwd">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#chngPwdCollapse" aria-expanded="false" aria-controls="chngPwdCollapse">
                                        Change Password
                                    </button>
                                </h2>
                                <div id="chngPwdCollapse" class="accordion-collapse collapse" aria-labelledby="chngPwd" data-bs-parent="#settingsAccordion">
                                    <div class="accordion-body">
                                        <div class="field-wrapper">
                                            <input type="text" value="">
                                            <div class="field-placeholder">Current Password</div>
                                        </div>
                                        <div class="field-wrapper">
                                            <input type="password" value="">
                                            <div class="field-placeholder">New Password</div>
                                        </div>
                                        <div class="field-wrapper">
                                            <input type="password" value="">
                                            <div class="field-placeholder">Confirm Password</div>
                                        </div>
                                        <div class="field-wrapper m-0">
                                            <button class="btn btn-primary stripes-btn">Save</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="sidebarNotifications">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#notiCollapse" aria-expanded="false" aria-controls="notiCollapse">
                                        Notifications
                                    </button>
                                </h2>
                                <div id="notiCollapse" class="accordion-collapse collapse" aria-labelledby="sidebarNotifications" data-bs-parent="#settingsAccordion">
                                    <div class="accordion-body">
                                        <div class="list-group m-0">
                                            <div class="noti-container">
                                                <div class="noti-block">
                                                    <div>Alerts</div>
                                                    <div class="form-switch">
                                                        <input class="form-check-input" type="checkbox" id="showAlertss" checked>
                                                        <label class="form-check-label" for="showAlertss"></label>
                                                    </div>
                                                </div>
                                                <div class="noti-block">
                                                    <div>Enable Sound</div>
                                                    <div class="form-switch">
                                                        <input class="form-check-input" type="checkbox" id="soundEnable">
                                                        <label class="form-check-label" for="soundEnable"></label>
                                                    </div>
                                                </div>
                                                <div class="noti-block">
                                                    <div>Allow Chat</div>
                                                    <div class="form-switch">
                                                        <input class="form-check-input" type="checkbox" id="allowChat">
                                                        <label class="form-check-label" for="allowChat"></label>
                                                    </div>
                                                </div>
                                                <div class="noti-block">
                                                    <div>Desktop Messages</div>
                                                    <div class="form-switch">
                                                        <input class="form-check-input" type="checkbox" id="desktopMessages">
                                                        <label class="form-check-label" for="desktopMessages"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Settings end -->

                <!-- Sidebar actions starts -->
                <div class="sidebar-actions">
                    <div class="support-tile blue">
                        <a href="account-settings.html" class="btn btn-light m-auto">Advance Settings</a>
                    </div>
                </div>
                <!-- Sidebar actions ends -->
            </div>

        </div>
        <!-- Tabs content end -->

    </div>
    <!-- Sidebar content end -->

</nav>
