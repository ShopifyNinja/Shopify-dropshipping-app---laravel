                <!-- begin:: Footer -->
                <div class="kt-footer  kt-grid__item kt-grid kt-grid--desktop kt-grid--ver-desktop" id="kt_footer">
                    <div class="kt-container  kt-container--fluid ">
                        <div class="kt-footer__copyright">
                            2021&nbsp;&copy;&nbsp;<a href="/" target="_blank" class="kt-link">System</a>
                        </div>
                        <div class="kt-footer__menu">
                            <!-- <a href="javascript:;" target="_blank" class="kt-footer__menu-link kt-link">About</a>
                            <a href="javascript:;" target="_blank" class="kt-footer__menu-link kt-link">Team</a>
                            <a href="javascript:;" target="_blank" class="kt-footer__menu-link kt-link">Contact</a> -->
                        </div>
                    </div>
                </div>
                <!-- end:: Footer -->
            </div>
        </div>
    </div>
    <!-- end:: Page -->

    <!-- begin::Scrolltop -->
    <div id="kt_scrolltop" class="kt-scrolltop">
        <i class="fa fa-arrow-up"></i>
    </div>
    <!-- end::Scrolltop -->

    <!-- begin::Global Config(global config for global JS sciprts) -->
    <script>
        var KTAppOptions = {
            "colors": {
                "state": {
                    "brand": "#5d78ff",
                    "dark": "#282a3c",
                    "light": "#ffffff",
                    "primary": "#5867dd",
                    "success": "#34bfa3",
                    "info": "#36a3f7",
                    "warning": "#ffb822",
                    "danger": "#fd3995"
                },
                "base": {
                    "label": [
                        "#c5cbe3",
                        "#a1a8c3",
                        "#3d4465",
                        "#3e4466"
                    ],
                    "shape": [
                        "#f0f3ff",
                        "#d9dffa",
                        "#afb4d4",
                        "#646c9a"
                    ]
                }
            }
        };
    </script>
    <!-- end::Global Config -->

    <!--begin::Global Theme Bundle(used by all pages) -->
    <script src="{{ asset('plugins/global/plugins.bundle.js') }}" defer></script>
    <script src="{{ asset('js/scripts.bundle.js') }}" defer></script>
    <!--end::Global Theme Bundle -->
    @yield('page_script')
</body>
</html>