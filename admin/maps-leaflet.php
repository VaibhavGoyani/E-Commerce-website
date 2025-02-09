<?php include "header.php" ?>

                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-size-18">Leaflet</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Maps</a></li>
                                            <li class="breadcrumb-item active">Leaflet</li>
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
                                        <h4 class="card-title mb-4">Example</h4>
                                        <div id="leaflet-map" class="leaflet-map"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Markers, circles and polygons</h4>
                                        <div id="leaflet-map-marker" class="leaflet-map"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Working with popups</h4>
                                        <div id="leaflet-map-popup" class="leaflet-map"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Markers with Custom Icons</h4>
                                        <div id="leaflet-map-custom-icons" class="leaflet-map"></div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Interactive Choropleth Map</h4>

                                        <div id="leaflet-map-interactive-map" class="leaflet-map"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Layer Groups and Layers Control</h4>
                                        <div id="leaflet-map-group-control" class="leaflet-map"></div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <!-- end row -->
                        
           <?php include "footer.php" ?>