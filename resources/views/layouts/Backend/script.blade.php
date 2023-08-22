{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>--}}
{{--<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>--}}
{{--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>--}}
{{--<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>--}}
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.12.1/datatables.min.js"></script>
<script src="{{asset('theme-assets/vendor/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('theme-assets/vendor/jquery-ui/jquery-ui.min.js')}}"></script>
<script src="{{asset('theme-assets/vendor/slimScroll/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('theme-assets/vendor/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('theme-assets/vendor/jquery-flot/jquery.flot.js')}}"></script>
<script src="{{asset('theme-assets/vendor/jquery-flot/jquery.flot.resize.js')}}"></script>
<script src="{{asset('theme-assets/vendor/jquery-flot/jquery.flot.pie.js')}}"></script>
<script src="{{asset('theme-assets/vendor/flot.curvedlines/curvedLines.js')}}"></script>
<script src="{{asset('theme-assets/vendor/jquery.flot.spline/index.js')}}"></script>
<script src="{{asset('theme-assets/vendor/metisMenu/dist/metisMenu.min.js')}}"></script>
<script src="{{asset('theme-assets/vendor/iCheck/icheck.min.js')}}"></script>
<script src="{{asset('theme-assets/vendor/peity/jquery.peity.min.js')}}"></script>
<script src="{{asset('theme-assets/vendor/sparkline/index.js')}}"></script>
{{--<script src="{{asset('theme-assets/vendor/sweetalert/lib/sweet-alert.min.js')}}"></script>--}}
<script src="{{asset('theme-assets/vendor/toastr/build/toastr.min.js')}}"></script>
<script src="{{asset('theme-assets/vendor/ladda/dist/ladda.min.js')}}"></script>
<script src="{{asset('theme-assets/vendor/ladda/dist/ladda.jquery.min.js')}}"></script>
<script src="{{asset('theme-assets/vendor/ladda/dist/spin.min.js')}}"></script>
<script src="{{asset('theme-assets/vendor/codemirror/script/codemirror.js')}}"></script>
<script src="{{asset('theme-assets/vendor/codemirror/javascript.js')}}"></script>
<script src="{{asset('theme-assets/vendor/nestable/jquery.nestable.js')}}"></script>
<script src="{{asset('theme-assets/vendor/bootstrap-tour/build/js/bootstrap-tour.min.js')}}"></script>
<script src="{{asset('theme-assets/vendor/bootstrap-star-rating/js/star-rating.min.js')}}"></script>
<script src="{{asset('theme-assets/vendor/select2-3.5.2/select2.min.js')}}"></script>
<!-- DataTables -->
<script src="{{asset('theme-assets/vendor/datatables/media/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('theme-assets/vendor/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<!-- DataTables buttons scripts -->
<script src="{{asset('theme-assets/vendor/pdfmake/build/pdfmake.min.js')}}"></script>
<script src="{{asset('theme-assets/vendor/pdfmake/build/vfs_fonts.js')}}"></script>
<script src="{{asset('theme-assets/vendor/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('theme-assets/vendor/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('theme-assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('theme-assets/vendor/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
<!-- App scripts -->
<script src="{{asset('theme-assets/scripts/homer.js')}}"></script>
<script src="{{asset('theme-assets/scripts/charts.js')}}"></script>
<script src="{{asset('theme-assets/vendor/fooTable/dist/footable.all.min.js')}}"></script>
<script src="{{asset('theme-assets/vendor/moment/moment.js')}}"></script>
<script src="{{asset('theme-assets/vendor/xeditable/bootstrap3-editable/js/bootstrap-editable.min.js')}}"></script>
<script src="{{asset('theme-assets/vendor/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js')}}"></script>
{{--<script>--}}
{{--    $(function () {--}}

{{--        /**--}}
{{--         * Flot charts data and options--}}
{{--         */--}}
{{--        var data1 = [[0, 55], [1, 48], [2, 40], [3, 36], [4, 40], [5, 60], [6, 50], [7, 51]];--}}
{{--        var data2 = [[0, 56], [1, 49], [2, 41], [3, 38], [4, 46], [5, 67], [6, 57], [7, 59]];--}}

{{--        var chartUsersOptions = {--}}
{{--            series: {--}}
{{--                splines: {--}}
{{--                    show: true,--}}
{{--                    tension: 0.4,--}}
{{--                    lineWidth: 1,--}}
{{--                    fill: 0.4--}}
{{--                },--}}
{{--            },--}}
{{--            grid: {--}}
{{--                tickColor: "#f0f0f0",--}}
{{--                borderWidth: 1,--}}
{{--                borderColor: 'f0f0f0',--}}
{{--                color: '#6a6c6f'--}}
{{--            },--}}
{{--            colors: ["#62cb31", "#efefef"],--}}
{{--        };--}}

{{--        $.plot($("#flot-line-chart"), [data1, data2], chartUsersOptions);--}}

{{--        /**--}}
{{--         * Flot charts 2 data and options--}}
{{--         */--}}
{{--        var chartIncomeData = [--}}
{{--            {--}}
{{--                label: "line",--}}
{{--                data: [[1, 10], [2, 26], [3, 16], [4, 36], [5, 32], [6, 51]]--}}
{{--            }--}}
{{--        ];--}}

{{--        var chartIncomeOptions = {--}}
{{--            series: {--}}
{{--                lines: {--}}
{{--                    show: true,--}}
{{--                    lineWidth: 0,--}}
{{--                    fill: true,--}}
{{--                    fillColor: "#64cc34"--}}

{{--                }--}}
{{--            },--}}
{{--            colors: ["#62cb31"],--}}
{{--            grid: {--}}
{{--                show: false--}}
{{--            },--}}
{{--            legend: {--}}
{{--                show: false--}}
{{--            }--}}
{{--        };--}}

{{--        $.plot($("#flot-income-chart"), chartIncomeData, chartIncomeOptions);--}}


{{--    });--}}
{{--    // Components--}}
{{--    $(function () {--}}
{{--        // initialize with defaults--}}
{{--        $("#input-1").rating();--}}

{{--    });--}}

{{--    // End Components--}}

{{--</script>--}}

{{--<script>--}}
{{--    // Alerts--}}
{{--    $(function () {--}}

{{--        $('.demo1').click(function(){--}}
{{--            swal({--}}
{{--                title: "Welcome in Alerts",--}}
{{--                text: "Lorem Ipsum is simply dummy text of the printing and typesetting industry."--}}
{{--            });--}}
{{--        });--}}

{{--        $('.demo2').click(function(){--}}
{{--            swal({--}}
{{--                title: "Good job!",--}}
{{--                text: "You clicked the button!",--}}
{{--                type: "success"--}}
{{--            });--}}
{{--        });--}}

{{--        $('.demo3').click(function () {--}}
{{--            swal({--}}
{{--                    title: "Are you sure?",--}}
{{--                    text: "Your will not be able to recover this imaginary file!",--}}
{{--                    type: "warning",--}}
{{--                    showCancelButton: true,--}}
{{--                    confirmButtonColor: "#DD6B55",--}}
{{--                    confirmButtonText: "Yes, delete it!"--}}
{{--                },--}}
{{--                function () {--}}
{{--                    swal("Booyah!");--}}
{{--                });--}}
{{--        });--}}

{{--        $('.demo4').click(function () {--}}
{{--            swal({--}}
{{--                    title: "Are you sure?",--}}
{{--                    text: "Your will not be able to recover this imaginary file!",--}}
{{--                    type: "warning",--}}
{{--                    showCancelButton: true,--}}
{{--                    confirmButtonColor: "#DD6B55",--}}
{{--                    confirmButtonText: "Yes, delete it!",--}}
{{--                    cancelButtonText: "No, cancel plx!",--}}
{{--                    closeOnConfirm: false,--}}
{{--                    closeOnCancel: false },--}}
{{--                function (isConfirm) {--}}
{{--                    if (isConfirm) {--}}
{{--                        swal("Deleted!", "Your imaginary file has been deleted.", "success");--}}
{{--                    } else {--}}
{{--                        swal("Cancelled", "Your imaginary file is safe :)", "error");--}}
{{--                    }--}}
{{--                });--}}
{{--        });--}}

{{--        // Toastr options--}}
{{--        toastr.options = {--}}
{{--            "debug": false,--}}
{{--            "newestOnTop": false,--}}
{{--            "positionClass": "toast-top-center",--}}
{{--            "closeButton": true,--}}
{{--            "toastClass": "animated fadeInDown",--}}
{{--        };--}}

{{--        $('.homerDemo1').click(function (){--}}
{{--            toastr.info('Info - This is a custom Homer info notification');--}}
{{--        });--}}

{{--        $('.homerDemo2').click(function (){--}}
{{--            toastr.success('Success - This is a Homer success notification');--}}
{{--        });--}}

{{--        $('.homerDemo3').click(function (){--}}
{{--            toastr.warning('Warning - This is a Homer warning notification');--}}
{{--        });--}}

{{--        $('.homerDemo4').click(function (){--}}
{{--            toastr.error('Error - This is a Homer error notification');--}}
{{--        });--}}

{{--    });--}}
{{--    // End Alerts--}}


{{--</script>--}}

