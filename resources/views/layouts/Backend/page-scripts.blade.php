<script>
    $(function () {
        alert('ehhl')
        /**
         * Flot charts line data and options
         */
        var chartIncomeData = [
            {
                label: "line",
                data: [ [1, 10], [2, 26], [3, 16], [4, 36], [5, 32], [6, 51] ]
            }
        ];

        var chartIncomeOptions = {
            series: {
                lines: {
                    show: true,
                    lineWidth: 0,
                    fill: true,
                    fillColor: "#64cc34"

                }
            },
            colors: ["#62cb31"],
            grid: {
                show: false
            },
            legend: {
                show: false
            }
        };

        $.plot($("#flot-income-chart"), chartIncomeData, chartIncomeOptions);


        /**
         * Bar Chart data
         */
        var flotChartData = [
            {
                label: "bar",
                data: [ [1, 12], [2, 14], [3, 18], [4, 24], [5, 32], [6, 22] ]
            }
        ];
        /**
         * Bar Chart Options for Analytics
         */
        var flotBarOptions = {
            series: {
                bars: {
                    show: true,
                    barWidth: 0.8,
                    fill: true,
                    fillColor: {
                        colors: [ { opacity: 1 }, { opacity: 1 } ]
                    },
                    lineWidth: 1
                }
            },
            xaxis: {
                tickDecimals: 0
            },
            colors: ["#62cb31"],
            grid: {
                show: false
            },
            legend: {
                show: false
            }
        };

        $.plot($("#flot-bar-chart"), flotChartData, flotBarOptions);


        /**
         * Pie Chart Data
         */
        var pieChartData = [
            { label: "Data 1", data: 16, color: "#62cb31", },
            { label: "Data 2", data: 6, color: "#A4E585", },
            { label: "Data 3", data: 22, color: "#368410", },
            { label: "Data 4", data: 32, color: "#8DE563", }
        ];

        /**
         * Pie Chart Options
         */
        var pieChartOptions = {
            series: {
                pie: {
                    show: true
                }
            },
            grid: {
                hoverable: true
            },
            tooltip: true,
            tooltipOpts: {
                content: "%p.0%, %s", // show percentages, rounding to 2 decimal places
                shifts: {
                    x: 20,
                    y: 0
                },
                defaultTheme: false
            }
        };

        $.plot($("#flot-pie-chart"), pieChartData, pieChartOptions);


        /**
         * Line Chart Data and Options
         */

        var lineChartData = [
            {
                label: "line",
                data: [ [1, 24], [2, 15], [3, 29], [4, 34], [5, 30], [6, 40], [7, 23], [8, 27], [9, 40] ]
            }
        ];

        var lineChartOptions = {
            series: {
                lines: {
                    show: true,
                    lineWidth: 1,
                    fill: true,
                    fillColor: {
                        colors: [ { opacity: 1 }, { opacity: 1}
                        ]
                    }
                }
            },
            xaxis: {
                tickDecimals: 0
            },
            colors: ["#62cb31"],
            grid: {
                tickColor: "#e4e5e7",
                borderWidth: 1,
                borderColor: '#e4e5e7',
                color: '#6a6c6f'
            },
            legend: {
                show: false
            },
            tooltip: true,
            tooltipOpts: {
                content: "x: %x, y: %y"
            }
        };

        $.plot($("#flot-line-chart"), lineChartData, lineChartOptions);
    });

    // Components
    $(function () {
        // initialize with defaults
        $("#input-1").rating();

    });

    // End Components

</script>

<script>
    // Alerts

    $(function () {

        $('.demo1').click(function(){
            swal({
                title: "Welcome in Alerts",
                text: "Lorem Ipsum is simply dummy text of the printing and typesetting industry."
            });
        });

        $('.demo2').click(function(){
            swal({
                title: "Good job!",
                text: "You clicked the button!",
                type: "success"
            });
        });

        $('.demo3').click(function () {
            swal({
                    title: "Are you sure?",
                    text: "Your will not be able to recover this imaginary file!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Yes, delete it!"
                },
                function () {
                    swal("Booyah!");
                });
        });

        $('.demo4').click(function () {
            swal({
                    title: "Are you sure?",
                    text: "Your will not be able to recover this imaginary file!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Yes, delete it!",
                    cancelButtonText: "No, cancel plx!",
                    closeOnConfirm: false,
                    closeOnCancel: false },
                function (isConfirm) {
                    if (isConfirm) {
                        swal("Deleted!", "Your imaginary file has been deleted.", "success");
                    } else {
                        swal("Cancelled", "Your imaginary file is safe :)", "error");
                    }
                });
        });

        // Toastr options
        toastr.options = {
            "debug": false,
            "newestOnTop": false,
            "positionClass": "toast-top-center",
            "closeButton": true,
            "toastClass": "animated fadeInDown",
        };

        $('.homerDemo1').click(function (){
            toastr.info('Info - This is a custom Homer info notification');
        });

        $('.homerDemo2').click(function (){
            toastr.success('Success - This is a Homer success notification');
        });

        $('.homerDemo3').click(function (){
            toastr.warning('Warning - This is a Homer warning notification');
        });

        $('.homerDemo4').click(function (){
            toastr.error('Error - This is a Homer error notification');
        });

    });
    // End Alerts


</script>
