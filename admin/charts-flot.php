<?php include "header.php" ?>

                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-size-18">Flot charts</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Charts</a></li>
                                            <li class="breadcrumb-item active">Flot charts</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title mb-4">Multiple Statistics</h4>

                                        <div class="row text-center mb-3">
                                            <div class="col-4">
                                                <h5 class="mb-0">362411</h5>
                                                <p class="text-muted text-truncate">Activated</p>
                                            </div>
                                            <div class="col-4">
                                                <h5 class="mb-0">8489</h5>
                                                <p class="text-muted text-truncate">Pending</p>
                                            </div>
                                            <div class="col-4">
                                                <h5 class="mb-0">985412</h5>
                                                <p class="text-muted text-truncate">Deactivated</p>
                                            </div>
                                        </div>
        
                                        <div id="website-stats" class="flot-charts flot-charts-height"></div>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
        
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Realtime Statistics</h4>

                                        <div class="row text-center mb-3">
                                            <div class="col-4">
                                                <h5 class="mb-0">365214</h5>
                                                <p class="text-muted text-truncate">Activated</p>
                                            </div>
                                            <div class="col-4">
                                                <h5 class="mb-0">6521</h5>
                                                <p class="text-muted text-truncate">Pending</p>
                                            </div>
                                            <div class="col-4">
                                                <h5 class="mb-0">44587</h5>
                                                <p class="text-muted text-truncate">Deactivated</p>
                                            </div>
                                        </div>
        
                                        <div id="flotRealTime" class="flot-charts flot-charts-height"></div>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
        
        
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title mb-4">Donut Pie</h4>

                                        <div class="row text-center mb-3">
                                            <div class="col-4">
                                                <h5 class="mb-0">5484</h5>
                                                <p class="text-muted text-truncate">Activated</p>
                                            </div>
                                            <div class="col-4">
                                                <h5 class="mb-0">964984</h5>
                                                <p class="text-muted text-truncate">Pending</p>
                                            </div>
                                            <div class="col-4">
                                                <h5 class="mb-0">98498</h5>
                                                <p class="text-muted text-truncate">Deactivated</p>
                                            </div>
                                        </div>
        
                                        <div id="donut-chart">
                                            <div id="donut-chart-container" class="flot-charts flot-charts-height">
                                            </div>
                                        </div>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
        
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title mb-4">Pie Chart</h4>

                                        <div class="row text-center mb-3">
                                            <div class="col-4">
                                                <h5 class="mb-0">86541</h5>
                                                <p class="text-muted text-truncate">Activated</p>
                                            </div>
                                            <div class="col-4">
                                                <h5 class="mb-0">2541</h5>
                                                <p class="text-muted text-truncate">Pending</p>
                                            </div>
                                            <div class="col-4">
                                                <h5 class="mb-0">102030</h5>
                                                <p class="text-muted text-truncate">Deactivated</p>
                                            </div>
                                        </div>
        
                                        <div  id="pie-chart">
                                            <div id="pie-chart-container" class="flot-charts flot-charts-height">
                                            </div>
                                        </div>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> 
                        <!-- end row -->

              <?php include "footer.php" ?>

