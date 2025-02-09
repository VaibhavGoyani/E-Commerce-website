<?php include "header.php" ?>

                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-size-18">Kanban Board</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tasks</a></li>
                                            <li class="breadcrumb-item active">Kanban Board</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="dropdown float-right">
                                            <a href="#" class="dropdown-toggle arrow-none" data-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-dots-vertical m-0 text-muted h5"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#">Edit</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div> <!-- end dropdown -->
        
                                        <h4 class="card-title mb-4">Upcoming</h4>
                                        <div id="upcoming-task" class="pb-1 task-list">
                                            <div class="card task-box">
                                                <div class="card-body">
                                                    <div class="float-right ml-2">
                                                        <span class="badge badge-pill badge-soft-secondary font-size-12">Waiting</span>
                                                    </div>
                                                    <div>
                                                        <h5 class="font-size-15"><a href="javascript: void(0);" class="text-dark">Topnav layout design</a></h5>
                                                        <p class="text-muted mb-4">14 Oct, 2019</p>
                                                    </div>
        
                                                    <div class="team float-left">
                                                        <a href="javascript: void(0);" class="team-member d-inline-block">
                                                            <img src="assets/images/users/avatar-4.jpg" class="rounded-circle avatar-xs m-1" alt="">
                                                        </a>
    
                                                        <a href="javascript: void(0);" class="team-member d-inline-block">
                                                            <img src="assets/images/users/avatar-5.jpg" class="rounded-circle avatar-xs m-1" alt="">
                                                        </a>
                                                        
                                                        <a href="javascript: void(0);" class="team-member d-inline-block">
                                                            <div class="avatar-xs">
                                                                <span class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                                    3 +
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </div>

                                                    <div class="text-right">
                                                        <h5 class="font-size-15 mb-1">$ 145</h5>
                                                        <p class="mb-0 text-muted">Budget</p>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <!-- end task card -->

                                            <div class="card task-box">
                                                <div class="card-body">
                                                    <div class="float-right ml-2">
                                                        <span class="badge badge-pill badge-soft-primary font-size-12">Approved</span>
                                                    </div>
                                                    <div>
                                                        <h5 class="font-size-15"><a href="javascript: void(0);" class="text-dark">Create a New Landing UI</a></h5>
                                                        <p class="text-muted">15 Oct, 2019</p>
                                                    </div>
                                                    
                                                    <ul class="pl-3 mb-4 text-muted">
                                                        <li class="py-1">Separate existence is a myth.</li>
                                                        <li class="py-1">For music, sport, etc</li>
                                                    </ul>
                                                    
                                                    <div class="team float-left">
                                                        <a href="javascript: void(0);" class="team-member d-inline-block">
                                                            <img src="assets/images/users/avatar-6.jpg" class="rounded-circle avatar-xs m-1" alt="">
                                                        </a>
    
                                                        <a href="javascript: void(0);" class="team-member d-inline-block">
                                                            <img src="assets/images/users/avatar-7.jpg" class="rounded-circle avatar-xs m-1" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="text-right">
                                                        <h5 class="font-size-15 mb-1">$ 112</h5>
                                                        <p class="mb-0 text-muted">Budget</p>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <!-- end task card -->

                                            <div class="card task-box">
                                                <div class="card-body">
                                                    <div class="float-right ml-2">
                                                        <span class="badge badge-pill badge-soft-secondary font-size-12">Waiting</span>
                                                    </div>
                                                    <div>
                                                        <h5 class="font-size-15"><a href="javascript: void(0);" class="text-dark">Create a Skote Logo</a></h5>
                                                        <p class="text-muted mb-4">15 Oct, 2019</p>
                                                    </div>

                                                    <div class="team float-left">
                                                        <a href="javascript: void(0);" class="team-member d-inline-block">
                                                            <div class="avatar-xs">
                                                                <span class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                                    F
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </div>

                                                    <div class="text-right">
                                                        <h5 class="font-size-15 mb-1">$ 86</h5>
                                                        <p class="mb-0 text-muted">Budget</p>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <!-- end task card -->

                                            <div class="text-center">
                                                <a href="javascript: void(0);" class="btn btn-primary btn-block mt-1 waves-effect waves-light"><i class="mdi mdi-plus mr-1"></i> Add New</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->

                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="dropdown float-right">
                                            <a href="#" class="dropdown-toggle arrow-none" data-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-dots-vertical m-0 text-muted h5"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#">Edit</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div> <!-- end dropdown -->
        
                                        <h4 class="card-title mb-4">In Progress</h4>
                                        <div id="inprogress-task" class="pb-1 task-list">
                                            <div class="card task-box">
                                                <div class="card-body">
                                                    <div class="float-right ml-2">
                                                        <span class="badge badge-pill badge-soft-success font-size-12">Complete</span>
                                                    </div>
                                                    <div>
                                                        <h5 class="font-size-15"><a href="javascript: void(0);" class="text-dark">Brand logo design</a></h5>
                                                        <p class="text-muted">12 Oct, 2019</p>
                                                    </div>
        
                                                    <ul class="list-inine pl-0 mb-4">
                                                        <li class="list-inline-item">
                                                            <a href="#">
                                                                <div class="border rounded avatar-sm">
                                                                    <span class="avatar-title bg-transparent">
                                                                        <img src="assets/images/companies/img-1.png" alt="" class="avatar-xs">
                                                                    </span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#">
                                                                <div class="border rounded avatar-sm">
                                                                    <span class="avatar-title bg-transparent">
                                                                        <img src="assets/images/companies/img-2.png" alt="" class="avatar-xs">
                                                                    </span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#">
                                                                <div class="border rounded avatar-sm">
                                                                    <span class="avatar-title bg-transparent">
                                                                        <img src="assets/images/companies/img-3.png" alt="" class="avatar-xs">
                                                                    </span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>

                                                    <div class="team float-left">
                                                        <a href="javascript: void(0);" class="team-member d-inline-block">
                                                            <div class="avatar-xs">
                                                                <span class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                                    S
                                                                </span>
                                                            </div>
                                                        </a>
                                                        <a href="javascript: void(0);" class="team-member d-inline-block">
                                                            <img src="assets/images/users/avatar-3.jpg" class="rounded-circle avatar-xs m-1" alt="">
                                                        </a>
                                                    </div>

                                                    <div class="text-right">
                                                        <h5 class="font-size-15 mb-1">$ 132</h5>
                                                        <p class="mb-0 text-muted">Budget</p>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <!-- end task card -->

                                            <div class="card task-box">
                                                <div class="card-body">
                                                    <div class="float-right ml-2">
                                                        <span class="badge badge-pill badge-soft-warning font-size-12">Pending</span>
                                                    </div>
                                                    <div>
                                                        <h5 class="font-size-15"><a href="javascript: void(0);" class="text-dark">Create a Blog Template UI</a></h5>
                                                        <p class="text-muted mb-4">13 Oct, 2019</p>
                                                    </div>
        
                                                    <div class="team float-left">
                                                        <a href="javascript: void(0);" class="team-member d-inline-block">
                                                            <img src="assets/images/users/avatar-8.jpg" class="rounded-circle avatar-xs m-1" alt="">
                                                        </a>
                                                        <a href="javascript: void(0);" class="team-member d-inline-block">
                                                            <div class="avatar-xs">
                                                                <span class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                                    K
                                                                </span>
                                                            </div>
                                                        </a>
                                                        <a href="javascript: void(0);" class="team-member d-inline-block">
                                                            <img src="assets/images/users/avatar-1.jpg" class="rounded-circle avatar-xs m-1" alt="">
                                                        </a>
                                                        
                                                    </div>

                                                    <div class="text-right">
                                                        <h5 class="font-size-15 mb-1">$ 103</h5>
                                                        <p class="mb-0 text-muted">Budget</p>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <!-- end task card -->

                                            <div class="card task-box">
                                                <div class="card-body">
                                                    <div class="float-right ml-2">
                                                        <span class="badge badge-pill badge-soft-success font-size-12">Complete</span>
                                                    </div>
                                                    <div>
                                                        <h5 class="font-size-15"><a href="javascript: void(0);" class="text-dark">Skote Dashboard UI</a></h5>
                                                        <p class="text-muted mb-4">13 Oct, 2019</p>
                                                    </div>
        
                                                    <div class="team float-left">
                                                        <a href="javascript: void(0);" class="team-member d-inline-block">
                                                            <img src="assets/images/users/avatar-2.jpg" class="rounded-circle avatar-xs m-1" alt="">
                                                        </a>
                                                        
                                                    </div>

                                                    <div class="text-right">
                                                        <h5 class="font-size-15 mb-1">$ 94</h5>
                                                        <p class="mb-0 text-muted">Budget</p>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <!-- end task card -->

                                            <div class="text-center">
                                                <a href="javascript: void(0);" class="btn btn-primary btn-block mt-1 waves-effect waves-light"><i class="mdi mdi-plus mr-1"></i> Add New</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->

                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="dropdown float-right">
                                            <a href="#" class="dropdown-toggle arrow-none" data-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-dots-vertical m-0 text-muted h5"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#">Edit</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div> <!-- end dropdown -->
        
                                        <h4 class="card-title mb-4">Completed</h4>
                                        <div id="complete-task" class="pb-1 task-list">
                                            <div class="card task-box">
                                                <div class="card-body">
                                                    <div class="float-right ml-2">
                                                        <span class="badge badge-pill badge-soft-success font-size-12">Complete</span>
                                                    </div>
                                                    <div>
                                                        <h5 class="font-size-15"><a href="javascript: void(0);" class="text-dark">Redesign - Landing page</a></h5>
                                                        <p class="text-muted mb-4">10 Oct, 2019</p>
                                                    </div>
        
                                                    <div class="team float-left">
                                                        <a href="javascript: void(0);" class="team-member d-inline-block">
                                                            <img src="assets/images/users/avatar-4.jpg" class="rounded-circle avatar-xs m-1" alt="">
                                                        </a>
    
                                                        <a href="javascript: void(0);" class="team-member d-inline-block">
                                                            <div class="avatar-xs">
                                                                <span class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                                    R
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </div>

                                                    <div class="text-right">
                                                        <h5 class="font-size-15 mb-1">$ 145</h5>
                                                        <p class="mb-0 text-muted">Budget</p>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <!-- end task card -->

                                            <div class="card task-box">
                                                <div class="card-body">
                                                    <div class="float-right ml-2">
                                                        <span class="badge badge-pill badge-soft-success font-size-12">Complete</span>
                                                    </div>
                                                    <div>
                                                        <h5 class="font-size-15"><a href="javascript: void(0);" class="text-dark">Multipurpose Landing</a></h5>
                                                        <p class="text-muted">09 Oct, 2019</p>
                                                    </div>
                                                    
                                                    <ul class="list-inline mb-4">
                                                        <li class="list-inline-item">
                                                            <a href="#">
                                                                <div>
                                                                    <img src="assets/images/small/img-1.jpg" class="rounded" alt="" height="48">
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#">
                                                                <div>
                                                                    <img src="assets/images/small/img-2.jpg" class="rounded" alt="" height="48">
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#">
                                                                <div>
                                                                    <img src="assets/images/small/img-3.jpg" class="rounded" alt="" height="48">
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    
                                                    <div class="team float-left">
                                                        <a href="javascript: void(0);" class="team-member d-inline-block">
                                                            <img src="assets/images/users/avatar-6.jpg" class="rounded-circle avatar-xs m-1" alt="">
                                                        </a>
    
                                                        <a href="javascript: void(0);" class="team-member d-inline-block">
                                                            <img src="assets/images/users/avatar-7.jpg" class="rounded-circle avatar-xs m-1" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="text-right">
                                                        <h5 class="font-size-15 mb-1">$ 92</h5>
                                                        <p class="mb-0 text-muted">Budget</p>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <!-- end task card -->

                                            <div class="card task-box">
                                                <div class="card-body">
                                                    <div class="float-right ml-2">
                                                        <span class="badge badge-pill badge-soft-secondary font-size-12">Waiting</span>
                                                    </div>
                                                    <div>
                                                        <h5 class="font-size-15"><a href="javascript: void(0);" class="text-dark">Skote landing Psd</a></h5>
                                                        <p class="text-muted mb-4">15 Oct, 2019</p>
                                                    </div>

                                                    <div class="team float-left">
                                                        <a href="javascript: void(0);" class="team-member d-inline-block">
                                                            <div class="avatar-xs">
                                                                <span class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                                    H
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </div>

                                                    <div class="text-right">
                                                        <h5 class="font-size-15 mb-1">$ 86</h5>
                                                        <p class="mb-0 text-muted">Budget</p>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <!-- end task card -->

                                            <div class="text-center">
                                                <a href="javascript: void(0);" class="btn btn-primary btn-block mt-1 waves-effect waves-light"><i class="mdi mdi-plus mr-1"></i> Add New</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

       <?php include "footer.php" ?>