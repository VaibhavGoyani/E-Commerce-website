<?php include "header.php" ?>

                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-size-18">Jquery Knob charts</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Charts</a></li>
                                            <li class="breadcrumb-item active">Jquery Knob charts</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title">Examples</h4>
                                        <p class="card-title-desc">Nice, downward compatible, touchable, jQuery dial</p>
        
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="text-center" dir="ltr">
                                                    <h5 class="font-size-14 mb-3">Disable display input</h5>
                                                    <input class="knob" data-width="150" data-fgcolor="#556ee6" data-displayinput="false" value="35">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="text-center" dir="ltr">
                                                    <h5 class="font-size-14 mb-3">Cursor mode</h5>
                                                    <input class="knob" data-width="150" data-cursor="true" data-fgcolor="#34c38f" value="29">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="text-center" dir="ltr">
                                                    <h5 class="font-size-14 mb-3">Display previous value</h5>
                                                    <input class="knob" data-width="150" data-min="-100" data-fgcolor="#50a5f1" data-displayprevious="true" value="44">
                                                </div>
                                            </div>
                                        </div>
        
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="text-center" dir="ltr">
                                                    <h5 class="font-size-14 mb-3">Angle offset</h5>
                                                    <input class="knob" data-width="150" data-angleoffset="90" data-linecap="round" data-fgcolor="#f1b44c" value="35">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="text-center" dir="ltr">
                                                    <h5 class="font-size-14 mb-3"> 5-digit values, step 1000</h5>
                                                    <input class="knob" data-width="150" data-min="-15000" data-displayprevious="true" data-max="15000" data-step="1000" value="-11000" data-fgcolor="#2a3142">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="text-center" dir="ltr">
                                                    <h5 class="font-size-14 mb-3">Angle offset and arc</h5>
                                                    <input class="knob" data-width="150" data-cursor="true" data-fgcolor="#f46a6a" value="29">
                                                </div>
                                            </div>
                                        </div>
        
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="text-center" dir="ltr">
                                                    <h5 class="font-size-14 mb-3">Readonly</h5>
                                                    <input class="knob" data-width="150" data-height="150" data-linecap=round
                                                            data-fgColor="#f06292" value="80" data-skin="tron" data-angleOffset="180"
                                                            data-readOnly=true data-thickness=".1"/>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="text-center" dir="ltr">
                                                    <h5 class="font-size-14 mb-3"> Angle offset and arc</h5>
                                                    <input class="knob" data-width="150" data-height="150"
                                                    data-displayPrevious=true data-fgColor="#8d6e63" data-skin="tron"
                                                    data-cursor=true value="75" data-thickness=".2" data-angleOffset=-125
                                                    data-angleArc=250 value="44"/>
                                                </div>
        
                                            </div>
                                        </div>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

                     <?php include "footer.php" ?>
