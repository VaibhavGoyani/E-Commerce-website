<?php
ob_start();
?>

<!doctype html>
<html lang="en">

<!-- Mirrored from themesbrand.com/skote/layouts/vertical/calendar.html by HTTrack Website Copier/3.x [XR&CO'2013], Sat, 04 Jul 2020 05:14:47 GMT -->
<head>

    <meta charset="utf-8" />
    <title>Calendar | Skote - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <link rel="stylesheet" type="text/css" href="assets/libs/tui-time-picker/tui-time-picker.min.css">
    <link rel="stylesheet" type="text/css" href="assets/libs/tui-date-picker/tui-date-picker.min.css">
    <link href="assets/libs/tui-calendar/tui-calendar.min.css" rel="stylesheet" type="text/css" />

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.2/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body data-sidebar="dark">

    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="index.php" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="assets/images/logo.svg" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="assets/images/logo-dark.png" alt="" height="17">
                            </span>
                        </a>

                        <a href="index.php" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="assets/images/logo-light.svg" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="assets/images/logo-light.png" alt="" height="19">
                            </span>
                        </a>
                    </div>

                    <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>

                    <!-- App Search-->
                    <form class="app-search d-none d-lg-block">
                        <div class="position-relative">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="bx bx-search-alt"></span>
                        </div>
                    </form>

                    <div class="dropdown dropdown-mega d-none d-lg-block ml-2">
                        <button type="button" class="btn header-item waves-effect" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                            Mega Menu
                            <i class="mdi mdi-chevron-down"></i> 
                        </button>
                        <div class="dropdown-menu dropdown-megamenu">
                            <div class="row">
                                <div class="col-sm-8">

                                    <div class="row">
                                        <div class="col-md-4">
                                            <h5 class="font-size-14 mt-0">UI Components</h5>
                                            <ul class="list-unstyled megamenu-list">
                                                <li>
                                                    <a href="javascript:void(0);">Lightbox</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Range Slider</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Sweet Alert</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Rating</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Forms</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Tables</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Charts</a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="col-md-4">
                                            <h5 class="font-size-14 mt-0">Applications</h5>
                                            <ul class="list-unstyled megamenu-list">
                                                <li>
                                                    <a href="javascript:void(0);">Ecommerce</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Calendar</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Email</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Projects</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Tasks</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Contacts</a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="col-md-4">
                                            <h5 class="font-size-14 mt-0">Extra Pages</h5>
                                            <ul class="list-unstyled megamenu-list">
                                                <li>
                                                    <a href="javascript:void(0);">Light Sidebar</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Compact Sidebar</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Horizontal layout</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Maintenance</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Coming Soon</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Timeline</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">FAQs</a>
                                                </li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h5 class="font-size-14 mt-0">UI Components</h5>
                                            <ul class="list-unstyled megamenu-list">
                                                <li>
                                                    <a href="javascript:void(0);">Lightbox</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Range Slider</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Sweet Alert</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Rating</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Forms</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Tables</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Charts</a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="col-sm-5">
                                            <div>
                                                <img src="assets/images/megamenu-img.png" alt="" class="img-fluid mx-auto d-block">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                
                <div class="d-flex">

                    <div class="dropdown d-inline-block d-lg-none ml-2">
                        <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="mdi mdi-magnify"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                    aria-labelledby="page-header-search-dropdown">
                    
                    <form class="p-3">
                        <div class="form-group m-0">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img class="" src="assets/images/flags/us.jpg" alt="Header Language" height="16">
            </button>
            <div class="dropdown-menu dropdown-menu-right">

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <img src="assets/images/flags/spain.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle">Spanish</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <img src="assets/images/flags/germany.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle">German</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <img src="assets/images/flags/italy.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle">Italian</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <img src="assets/images/flags/russia.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle">Russian</span>
                </a>
            </div>
        </div>

        <div class="dropdown d-none d-lg-inline-block ml-1">
            <button type="button" class="btn header-item noti-icon waves-effect"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="bx bx-customize"></i>
        </button>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <div class="px-lg-2">
                <div class="row no-gutters">
                    <div class="col">
                        <a class="dropdown-icon-item" href="#">
                            <img src="assets/images/brands/github.png" alt="Github">
                            <span>GitHub</span>
                        </a>
                    </div>
                    <div class="col">
                        <a class="dropdown-icon-item" href="#">
                            <img src="assets/images/brands/bitbucket.png" alt="bitbucket">
                            <span>Bitbucket</span>
                        </a>
                    </div>
                    <div class="col">
                        <a class="dropdown-icon-item" href="#">
                            <img src="assets/images/brands/dribbble.png" alt="dribbble">
                            <span>Dribbble</span>
                        </a>
                    </div>
                </div>

                <div class="row no-gutters">
                    <div class="col">
                        <a class="dropdown-icon-item" href="#">
                            <img src="assets/images/brands/dropbox.png" alt="dropbox">
                            <span>Dropbox</span>
                        </a>
                    </div>
                    <div class="col">
                        <a class="dropdown-icon-item" href="#">
                            <img src="assets/images/brands/mail_chimp.png" alt="mail_chimp">
                            <span>Mail Chimp</span>
                        </a>
                    </div>
                    <div class="col">
                        <a class="dropdown-icon-item" href="#">
                            <img src="assets/images/brands/slack.png" alt="slack">
                            <span>Slack</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="dropdown d-none d-lg-inline-block ml-1">
        <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
            <i class="bx bx-fullscreen"></i>
        </button>
    </div>

    <div class="dropdown d-inline-block">
        <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown"
        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="bx bx-bell bx-tada"></i>
        <span class="badge badge-danger badge-pill">3</span>
    </button>
    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
    aria-labelledby="page-header-notifications-dropdown">
    <div class="p-3">
        <div class="row align-items-center">
            <div class="col">
                <h6 class="m-0"> Notifications </h6>
            </div>
            <div class="col-auto">
                <a href="#!" class="small"> View All</a>
            </div>
        </div>
    </div>
    <div data-simplebar style="max-height: 230px;">
        <a href="#" class="text-reset notification-item">
            <div class="media">
                <div class="avatar-xs mr-3">
                    <span class="avatar-title bg-primary rounded-circle font-size-16">
                        <i class="bx bx-cart"></i>
                    </span>
                </div>
                <div class="media-body">
                    <h6 class="mt-0 mb-1">Your order is placed</h6>
                    <div class="font-size-12 text-muted">
                        <p class="mb-1">If several languages coalesce the grammar</p>
                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
                    </div>
                </div>
            </div>
        </a>
        <a href="#" class="text-reset notification-item">
            <div class="media">
                <img src="assets/images/users/avatar-3.jpg"
                class="mr-3 rounded-circle avatar-xs" alt="user-pic">
                <div class="media-body">
                    <h6 class="mt-0 mb-1">James Lemire</h6>
                    <div class="font-size-12 text-muted">
                        <p class="mb-1">It will seem like simplified English.</p>
                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 hours ago</p>
                    </div>
                </div>
            </div>
        </a>
        <a href="#" class="text-reset notification-item">
            <div class="media">
                <div class="avatar-xs mr-3">
                    <span class="avatar-title bg-success rounded-circle font-size-16">
                        <i class="bx bx-badge-check"></i>
                    </span>
                </div>
                <div class="media-body">
                    <h6 class="mt-0 mb-1">Your item is shipped</h6>
                    <div class="font-size-12 text-muted">
                        <p class="mb-1">If several languages coalesce the grammar</p>
                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
                    </div>
                </div>
            </div>
        </a>

        <a href="#" class="text-reset notification-item">
            <div class="media">
                <img src="assets/images/users/avatar-4.jpg"
                class="mr-3 rounded-circle avatar-xs" alt="user-pic">
                <div class="media-body">
                    <h6 class="mt-0 mb-1">Salena Layfield</h6>
                    <div class="font-size-12 text-muted">
                        <p class="mb-1">As a skeptical Cambridge friend of mine occidental.</p>
                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 hours ago</p>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="p-2 border-top">
        <a class="btn btn-sm btn-link font-size-14 btn-block text-center" href="javascript:void(0)">
            <i class="mdi mdi-arrow-right-circle mr-1"></i> View More..
        </a>
    </div>
</div>
</div>

<div class="dropdown d-inline-block">
    <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-1.jpg"
    alt="Header Avatar">
    <span class="d-none d-xl-inline-block ml-1">Henry</span>
    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
</button>
<div class="dropdown-menu dropdown-menu-right">
    <!-- item-->
    <a class="dropdown-item" href="#"><i class="bx bx-user font-size-16 align-middle mr-1"></i> Profile</a>
    <a class="dropdown-item" href="#"><i class="bx bx-wallet font-size-16 align-middle mr-1"></i> My Wallet</a>
    <a class="dropdown-item d-block" href="#"><span class="badge badge-success float-right">11</span><i class="bx bx-wrench font-size-16 align-middle mr-1"></i> Settings</a>
    <a class="dropdown-item" href="#"><i class="bx bx-lock-open font-size-16 align-middle mr-1"></i> Lock screen</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item text-danger" href="#"><i class="bx bx-power-off font-size-16 align-middle mr-1 text-danger"></i> Logout</a>
</div>
</div>

<div class="dropdown d-inline-block">
    <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
        <i class="bx bx-cog bx-spin"></i>
    </button>
</div>

</div>
</div>
</header>

<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="bx bx-home-circle"></i><span class="badge badge-pill badge-info float-right">03</span>
                        <span>Dashboards</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="index.php">Default</a></li>
                        <li><a href="dashboard-saas.php">Saas</a></li>
                        <li><a href="dashboard-crypto.php">Crypto</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span>Layouts</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="layouts-horizontal.php">Horizontal</a></li>
                        <li><a href="layouts-light-sidebar.php">Light Sidebar</a></li>
                        <li><a href="layouts-compact-sidebar.php">Compact Sidebar</a></li>
                        <li><a href="layouts-icon-sidebar.php">Icon Sidebar</a></li>
                        <li><a href="layouts-boxed.php">Boxed Width</a></li>
                        <li><a href="layouts-preloader.php">Preloader</a></li>
                        <li><a href="layouts-colored-sidebar.php">Colored Sidebar</a></li>
                    </ul>
                </li>

                <li class="menu-title">Apps</li>

                <li>
                    <a href="calendar.php" class=" waves-effect">
                        <i class="bx bx-calendar"></i>
                        <span>Calendar</span>
                    </a>
                </li>

                <li>
                    <a href="chat.php" class=" waves-effect">
                        <i class="bx bx-chat"></i>
                        <span class="badge badge-pill badge-success float-right">New</span>
                        <span>Chat</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-store"></i>
                        <span>Ecommerce</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="ecommerce-products.php">Products</a></li>
                        <li><a href="ecommerce-product-detail.php">Product Detail</a></li>
                        <li><a href="ecommerce-orders.php">Orders</a></li>
                        <li><a href="ecommerce-customers.php">Customers</a></li>
                        <li><a href="ecommerce-cart.php">Cart</a></li>
                        <li><a href="ecommerce-checkout.php">Checkout</a></li>
                        <li><a href="ecommerce-shops.php">Shops</a></li>
                        <li><a href="ecommerce-add-product.php">Add Product</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-bitcoin"></i>
                        <span>Crypto</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="crypto-wallet.php">Wallet</a></li>
                        <li><a href="crypto-buy-sell.php">Buy/Sell</a></li>
                        <li><a href="crypto-exchange.php">Exchange</a></li>
                        <li><a href="crypto-lending.php">Lending</a></li>
                        <li><a href="crypto-orders.php">Orders</a></li>
                        <li><a href="crypto-kyc-application.php">KYC Application</a></li>
                        <li><a href="crypto-ico-landing.php">ICO Landing</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-envelope"></i>
                        <span>Email</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="email-inbox.php">Inbox</a></li>
                        <li><a href="email-read.php">Read Email</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-receipt"></i>
                        <span>Invoices</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="invoices-list.php">Invoice List</a></li>
                        <li><a href="invoices-detail.php">Invoice Detail</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-briefcase-alt-2"></i>
                        <span>Projects</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="projects-grid.php">Projects Grid</a></li>
                        <li><a href="projects-list.php">Projects List</a></li>
                        <li><a href="projects-overview.php">Project Overview</a></li>
                        <li><a href="projects-create.php">Create New</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-task"></i>
                        <span>Tasks</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="tasks-list.php">Task List</a></li>
                        <li><a href="tasks-kanban.php">Kanban Board</a></li>
                        <li><a href="tasks-create.php">Create Task</a></li>
                    </ul>
                </li>


                <li class="menu-title">USER</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-user-circle"></i>
                        <span>Authentication</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="auth-login.php">Login</a></li>
                        <li><a href="auth-register.php">Register</a></li>
                        <li><a href="auth-recoverpw.php">Recover Password</a></li>
                        <li><a href="auth-lock-screen.php">Lock Screen</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bxs-user-detail"></i>
                        <span>user</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="adduser.php">User Add</a></li>
                        <li><a href="contacts-list.php">User List</a></li>
                        <li><a href="contacts-grid.php">User Grid</a></li>
                        <li><a href="contacts-profile.php">Profile</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-file"></i>
                        <span>Utility</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="pages-starter.php">Starter Page</a></li>
                        <li><a href="pages-maintenance.php">Maintenance</a></li>
                        <li><a href="pages-comingsoon.php">Coming Soon</a></li>
                        <li><a href="pages-timeline.php">Timeline</a></li>
                        <li><a href="pages-faqs.php">FAQs</a></li>
                        <li><a href="pages-pricing.php">Pricing</a></li>
                        <li><a href="pages-404.php">Error 404</a></li>
                        <li><a href="pages-500.php">Error 500</a></li>
                    </ul>
                </li>

                <li class="menu-title">Components</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-tone"></i>
                        <span>UI Elements</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="ui-alerts.php">Alerts</a></li>
                        <li><a href="ui-buttons.php">Buttons</a></li>
                        <li><a href="ui-cards.php">Cards</a></li>
                        <li><a href="ui-carousel.php">Carousel</a></li>
                        <li><a href="ui-dropdowns.php">Dropdowns</a></li>
                        <li><a href="ui-grid.php">Grid</a></li>
                        <li><a href="ui-images.php">Images</a></li>
                        <li><a href="ui-lightbox.php">Lightbox</a></li>
                        <li><a href="ui-modals.php">Modals</a></li>
                        <li><a href="ui-rangeslider.php">Range Slider</a></li>
                        <li><a href="ui-session-timeout.php">Session Timeout</a></li>
                        <li><a href="ui-progressbars.php">Progress Bars</a></li>
                        <li><a href="ui-sweet-alert.php">Sweet-Alert</a></li>
                        <li><a href="ui-tabs-accordions.php">Tabs & Accordions</a></li>
                        <li><a href="ui-typography.php">Typography</a></li>
                        <li><a href="ui-video.php">Video</a></li>
                        <li><a href="ui-general.php">General</a></li>
                        <li><a href="ui-colors.php">Colors</a></li>
                        <li><a href="ui-rating.php">Rating</a></li>
                        <li><a href="ui-notifications.php">Notifications</a></li>
                        <li><a href="ui-image-cropper.php">Image Cropper</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="bx bxs-eraser"></i>
                        <span class="badge badge-pill badge-danger float-right">10</span>
                        <span>Forms</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="form-elements.php">Form Elements</a></li>
                        <li><a href="form-layouts.php">Form Layouts</a></li>
                        <li><a href="form-validation.php">Form Validation</a></li>
                        <li><a href="form-advanced.php">Form Advanced</a></li>
                        <li><a href="form-editors.php">Form Editors</a></li>
                        <li><a href="form-uploads.php">Form File Upload</a></li>
                        <li><a href="form-xeditable.php">Form Xeditable</a></li>
                        <li><a href="form-repeater.php">Form Repeater</a></li>
                        <li><a href="form-wizard.php">Form Wizard</a></li>
                        <li><a href="form-mask.php">Form Mask</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-list-ul"></i>
                        <span>Tables</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="tables-basic.php">Basic Tables</a></li>
                        <li><a href="tables-datatable.php">Data Tables</a></li>
                        <li><a href="tables-responsive.php">Responsive Table</a></li>
                        <li><a href="tables-editable.php">Editable Table</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bxs-bar-chart-alt-2"></i>
                        <span>Charts</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="charts-apex.php">Apex Charts</a></li>
                        <li><a href="charts-echart.php">E Charts</a></li>
                        <li><a href="charts-chartjs.php">Chartjs Chart</a></li>
                        <li><a href="charts-flot.php">Flot Chart</a></li>
                        <li><a href="charts-tui.php">Toast UI Chart</a></li>
                        <li><a href="charts-knob.php">Jquery Knob Chart</a></li>
                        <li><a href="charts-sparkline.php">Sparkline Chart</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-aperture"></i>
                        <span>Icons</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="icons-boxicons.php">Boxicons</a></li>
                        <li><a href="icons-materialdesign.php">Material Design</a></li>
                        <li><a href="icons-dripicons.php">Dripicons</a></li>
                        <li><a href="icons-fontawesome.php">Font awesome</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-map"></i>
                        <span>Maps</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="maps-google.php">Google Maps</a></li>
                        <li><a href="maps-vector.php">Vector Maps</a></li>
                        <li><a href="maps-leaflet.php">Leaflet Maps</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-share-alt"></i>
                        <span>Multi Level</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="javascript: void(0);">Level 1.1</a></li>
                        <li><a href="javascript: void(0);" class="has-arrow">Level 1.2</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="javascript: void(0);">Level 2.1</a></li>
                                <li><a href="javascript: void(0);">Level 2.2</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">

    <div class="page-content">
