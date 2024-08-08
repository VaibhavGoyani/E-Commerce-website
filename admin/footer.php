
<!-- end row -->
</div> <!-- container-fluid -->               

</div>
<!-- End Page-content -->

<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <script>document.write(new Date().getFullYear())</script> © Skote.
            </div>
            <div class="col-sm-6">
                <div class="text-sm-right d-none d-sm-block">
                    Design & Develop by Themesbrand
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
<!-- end main content-->

</div>
<!-- END layout-wrapper -->

<div    id="right">
    <div id="menu">
        <div class="dropdown">
            <button id="dropdownMenu-calendarType" class="btn btn-primary btn-sm dropdown-toggle" type="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="true">
            <i id="calendarTypeIcon" class="calendar-icon ic_view_month" style="margin-right: 4px;"></i>
            <span id="calendarTypeName">Dropdown</span>&nbsp;
            <i class="calendar-icon tui-full-calendar-dropdown-arrow"></i>
        </button>
        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu-calendarType">
            <li role="presentation">
                <a class="dropdown-menu-title" role="menuitem" data-action="toggle-daily">
                    <i class="calendar-icon ic_view_day"></i>Daily
                </a>
            </li>
            <li role="presentation">
                <a class="dropdown-menu-title" role="menuitem" data-action="toggle-weekly">
                    <i class="calendar-icon ic_view_week"></i>Weekly
                </a>
            </li>
            <li role="presentation">
                <a class="dropdown-menu-title" role="menuitem" data-action="toggle-monthly">
                    <i class="calendar-icon ic_view_month"></i>Month
                </a>
            </li>
            <li role="presentation">
                <a class="dropdown-menu-title" role="menuitem" data-action="toggle-weeks2">
                    <i class="calendar-icon ic_view_week"></i>2 weeks
                </a>
            </li>
            <li role="presentation">
                <a class="dropdown-menu-title" role="menuitem" data-action="toggle-weeks3">
                    <i class="calendar-icon ic_view_week"></i>3 weeks
                </a>
            </li>
            <li role="presentation" class="dropdown-divider"></li>
            <li role="presentation">
                <a role="menuitem" data-action="toggle-workweek">
                    <input type="checkbox" class="tui-full-calendar-checkbox-square" value="toggle-workweek" checked>
                    <span class="checkbox-title"></span>Show weekends
                </a>
            </li>
            <li role="presentation">
                <a role="menuitem" data-action="toggle-start-day-1">
                    <input type="checkbox" class="tui-full-calendar-checkbox-square" value="toggle-start-day-1">
                    <span class="checkbox-title"></span>Start Week on Monday
                </a>
            </li>
            <li role="presentation">
                <a role="menuitem" data-action="toggle-narrow-weekend">
                    <input type="checkbox" class="tui-full-calendar-checkbox-square" value="toggle-narrow-weekend">
                    <span class="checkbox-title"></span>Narrower than weekdays
                </a>
            </li>
        </ul>
    </div>
    <span id="menu-navi">
        <button type="button" class="btn btn-primary btn-sm move-today" data-action="move-today">Today</button>
        <button type="button" class="btn btn-primary btn-sm move-day" data-action="move-prev">
            <i class="calendar-icon ic-arrow-line-left" data-action="move-prev"></i>
        </button>
        <button type="button" class="btn btn-primary btn-sm move-day" data-action="move-next">
            <i class="calendar-icon ic-arrow-line-right" data-action="move-next"></i>
        </button>
    </span>
    <span id="renderRange" class="render-range"></span>
</div>
</div>

<!-- Right Sidebar -->
<div class="right-bar">
    <div data-simplebar class="h-100">
        <div class="rightbar-title px-3 py-4">
            <a href="javascript:void(0);" class="right-bar-toggle float-right">
                <i class="mdi mdi-close noti-icon"></i>
            </a>
            <h5 class="m-0">Settings</h5>
        </div>

        <!-- Settings -->
        <hr class="mt-0" />
        <h6 class="text-center mb-0">Choose Layouts</h6>

        <div class="p-4">
            <div class="mb-2">
                <img src="assets/images/layouts/layout-1.jpg" class="img-fluid img-thumbnail" alt="">
            </div>
            <div class="custom-control custom-switch mb-3">
                <input type="checkbox" class="custom-control-input theme-choice" id="light-mode-switch" checked />
                <label class="custom-control-label" for="light-mode-switch">Light Mode</label>
            </div>
            
            <div class="mb-2">
                <img src="assets/images/layouts/layout-2.jpg" class="img-fluid img-thumbnail" alt="">
            </div>
            <div class="custom-control custom-switch mb-3">
                <input type="checkbox" class="custom-control-input theme-choice" id="dark-mode-switch" data-bsStyle="assets/css/bootstrap-dark.min.css" data-appStyle="assets/css/app-dark.min.css" />
                <label class="custom-control-label" for="dark-mode-switch">Dark Mode</label>
            </div>
            
            <div class="mb-2">
                <img src="assets/images/layouts/layout-3.jpg" class="img-fluid img-thumbnail" alt="">
            </div>
            <div class="custom-control custom-switch mb-5">
                <input type="checkbox" class="custom-control-input theme-choice" id="rtl-mode-switch" data-appStyle="assets/css/app-rtl.min.css" />
                <label class="custom-control-label" for="rtl-mode-switch">RTL Mode</label>
            </div>

            
        </div>

    </div> <!-- end slimscroll-menu-->
</div>
<!-- /Right-bar -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- JAVASCRIPT -->
<script src="assets/libs/jquery/jquery.min.js"></script>
<script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/libs/metismenu/metisMenu.min.js"></script>
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/libs/node-waves/waves.min.js"></script>

<script src="../../../../uicdn.toast.com/tui.code-snippet/latest/tui-code-snippet.min.js"></script>
<script src="assets/libs/tui-dom/tui-dom.min.js"></script>

<script src="assets/libs/tui-time-picker/tui-time-picker.min.js"></script>
<script src="assets/libs/tui-date-picker/tui-date-picker.min.js"></script>

<script src="assets/libs/moment/min/moment.min.js"></script>
<script src="assets/libs/chance/chance.min.js"></script>

<script src="assets/libs/tui-calendar/tui-calendar.min.js"></script>

<script src="assets/js/pages/calendars.js"></script>
<script src="assets/js/pages/schedules.js"></script>
<script src="assets/js/pages/calendar.init.js"></script>

<!-- App js -->
<script src="assets/js/app.js"></script>

</body>

<!-- Mirrored from themesbrand.com/skote/layouts/vertical/calendar.html by HTTrack Website Copier/3.x [XR&CO'2013], Sat, 04 Jul 2020 05:14:55 GMT -->
</html>
