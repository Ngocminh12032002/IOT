<!doctype html> <!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]--> <!--[if IE 7]> <html
    class="no-js lt-ie9 lt-ie8" lang=""> <![endif]--> <!--[if IE 8]> <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang=""> <!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>IOT</title>
    <meta name="description" content="IOT">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <style>
        #weatherWidget .currentDesc {
            color: #ffffff !important;
        }

        .traffic-chart {
            min-height: 335px;
        }

        #flotPie1 {
            height: 150px;
        }

        #flotPie1 td {
            padding: 3px;
        }

        #flotPie1 table {
            top: 20px !important;
            right: -10px !important;
        }

        .chart-container {
            display: table;
            min-width: 270px;
            text-align: left;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        #flotLine5 {
            height: 105px;
        }

        #flotBarChart {
            height: 150px;
        }

        #cellPaiChart {
            height: 160px;
        }
    </style>
</head>

<body>
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="{{ route('index') }}"><i class="menu-icon fa fa-laptop"></i>Trang chủ</a>
                    </li>
                    <li class="active">
                        <a href="{{ route('profile') }}"><i class="menu-icon fa fa-male"></i>Trang cá nhân</a>
                    </li>
                    <li class="active">
                        <a href="{{ route('dataseeker', 0) }}"><i class="menu-icon fa fa-table"></i>Thông tin dữ
                            liệu</a>
                    </li>
                    <li class="active">
                        <a href="{{ route('history', 0) }}"><i class="menu-icon fa fa-th"></i>Lịch sử hoạt động</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="header-menu">
                    <div class="user-area dropdown float-right">
                        <a href="{{ route('profile') }}" class="dropdown-toggle active" aria-haspopup="true"
                            aria-expanded="false">
                            <img class="user-avatar rounded-circle"
                                src="https://cdn4.iconfinder.com/data/icons/avatars-xmas-giveaway/128/batman_hero_avatar_comics-512.png"
                                alt="User Avatar">
                        </a>
                    </div>

                    <div class="header-left">
                        <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                    </div>
                </div>
            </div>
        </header>
        <!-- /#header -->
        <!-- Content -->
        <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                <!-- Widgets  -->
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-1">
                                        <i class="bi bi-thermometer" id="temperatureIcon"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count" id="temperatureValue"></span>
                                            </div>
                                            <div class="stat-heading">Nhiệt độ</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-2">
                                        <i class="bi bi-moisture" id="humidityIcon"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count" id="humidityValue"></span></div>
                                            <div class="stat-heading">Độ ẩm</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-3">
                                        <i class="ti-shine" id="lightIcon"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count" id="lightValue"></span></div>
                                            <div class="stat-heading">Ánh sáng</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-4">
                                        <i class="bi bi-water" id="dustIcon"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count" id="dustValue"></span></div>
                                            <div class="stat-heading">Độ bụi</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="box-title">Biểu đồ </h4>
                            </div>
                            <div class="row">
                                <div class="col-lg-9">
                                    <div class="card-body">
                                        <canvas id="temperatureChart" width="400" height="200"></canvas>
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="card-body">
                                        <div class="progress-box progress-1">
                                            <h4 class="por-title">Đèn LED</h4>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span id="lamp-icon" class="bi bi-lightbulb lamp-icon"></span>
                                            </div>
                                        </div>
                                        <div class="progress-box progress-1">
                                            <h4 class="por-title">Đèn LED 2</h4>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span id="lamp-icon1" class="bi bi-lamp lamp-icon1"></span>
                                            </div>
                                        </div>
                                        <div class="progress-box progress-2">
                                            <h4 class="por-title">Quạt LED</h4>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span id="fan-icon" class="bi bi-fan fan-icon"></span>
                                            </div>
                                        </div>
                                    </div> <!-- /.card-body -->
                                </div>
                                <div class="col-lg-6">
                                    <div class="card-body">
                                        <canvas id="temperatureHumidityChart" width="400" height="200"></canvas>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card-body">
                                        <canvas id="lightChart" width="400" height="200"></canvas>
                                    </div>
                                </div>
                            </div> <!-- /.row -->
                            <div class="card-body">
                            </div>
                        </div>
                    </div><!-- /# column -->
                </div>
                <!--  /Traffic -->
            </div>
            <!-- .animated -->
        </div>
        <!-- /.content -->
        <div class="clearfix"></div>
        <!-- Footer -->
        <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-sm-6">
                        Copyright &copy; 2023 MinhNNg
                    </div>
                    <div class="col-sm-6 text-right">
                        Designed by <a href="https://colorlib.com">MinhNNg</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- /.site-footer -->
    </div>
    <!-- /#right-panel -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
    <!--  Chart js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>
    <script src="{{ asset('/js/init/chartjs-init.js')}} "></script>

    <!--Chartist Chart-->
    <script src="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartist-plugin-legend@0.6.2/chartist-plugin-legend.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-pie@1.0.0/src/jquery.flot.pie.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-spline@0.0.1/js/jquery.flot.spline.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simpleweather@3.1.0/jquery.simpleWeather.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <!--Local Stuff-->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const ctx = document.getElementById("temperatureChart").getContext("2d");
            const tempHumiChart = document.getElementById("temperatureHumidityChart").getContext("2d");
            const lightElement = document.getElementById("lightChart").getContext("2d");
            const data = {
                labels: ["Lần đo 1", "Lần đo 2", "Lần đo 3", "Lần đo 4", "Lần đo 5"],
                datasets: [{
                    label: "Nhiệt độ (°C)",
                    // data: [15, 12, 15, 18, 20, 25, 30],
                    backgroundColor: "rgba(255, 0, 0, 0.2)", // Màu nền đỏ
                    borderColor: "rgba(255, 0, 0, 1)", // Màu biên đỏ
                    borderWidth: 1,
                    fill: false,
                },
                {
                    label: "Độ ẩm (%)",
                    // data: [60, 55, 70, 45, 40, 80, 98, 33],
                    backgroundColor: "rgba(0, 123, 255, 0.2)", // Màu nền xanh dương
                    borderColor: "rgba(0, 123, 255, 1)", // Màu biên xanh dương
                    borderWidth: 2,
                    fill: false,
                },
                {
                    label: "Ánh sáng (Lux)",
                    // data: [100, 20, 150, 60, 80, 300, 200, 170],
                    backgroundColor: "rgba(255, 255, 0, 0.2)", // Màu nền vàng nhạt
                    borderColor: "rgba(255, 255, 0, 0.7)", // Màu biên vàng với opacity
                    borderWidth: 2,
                    fill: false,
                },
                {
                    label: "Độ bụi",
                    // data: [100, 20, 150, 60, 80, 300, 200, 170],
                    backgroundColor: "rgba(0, 128, 0, 0.2)", // Màu nền xanh nhạt
                    borderColor: "rgba(0, 128, 0, 0.7)", // Màu biên xanh với opacity
                    borderWidth: 2,
                    fill: false,
                }
                ]
            };
            const temperatureHumidityData = {
                labels: ["Lần đo 1", "Lần đo 2", "Lần đo 3", "Lần đo 4", "Lần đo 5"],
                datasets: [{
                    label: "Nhiệt độ (°C)",
                    backgroundColor: "rgba(255, 0, 0, 0.2)", // Màu nền đỏ
                    borderColor: "rgba(255, 0, 0, 1)", // Màu biên đỏ
                    borderWidth: 1,
                    fill: false,
                },
                {
                    label: "Độ ẩm (%)",
                    backgroundColor: "rgba(0, 123, 255, 0.2)", // Màu nền xanh dương
                    borderColor: "rgba(0, 123, 255, 1)", // Màu biên xanh dương
                    borderWidth: 2,
                    fill: false,
                },
                {
                    label: "Độ bụi",
                    backgroundColor: "rgba(0, 128, 0, 0.2)", // Màu nền xanh nhạt
                    borderColor: "rgba(0, 128, 0, 0.7)", // Màu biên xanh với opacity
                    borderWidth: 2,
                    fill: false,
                }
                ]
            };
            const lightData = {
                labels: ["Lần đo 1", "Lần đo 2", "Lần đo 3", "Lần đo 4", "Lần đo 5"],
                datasets: [{
                    label: "Ánh sáng (Lux)",
                    backgroundColor: "rgba(255, 255, 0, 0.2)", // Màu nền vàng nhạt
                    borderColor: "rgba(255, 255, 0, 0.7)", // Màu biên vàng với opacity
                    borderWidth: 2,
                    fill: false,
                }
                ]
            };
            const options = {
                scales: {
                    y: [
                        {
                            id: "temperature-y-axis",
                            type: "linear",
                            position: "left",
                            beginAtZero: true,
                            scaleLabel: {
                                display: true,
                                labelString: "Nhiệt độ (°C)"
                            }
                        },
                        {
                            id: "humidity-y-axis",
                            type: "linear",
                            position: "right",
                            beginAtZero: true,
                            scaleLabel: {
                                display: true,
                                labelString: "Độ ẩm (%)"
                            }
                        },
                        {
                            id: "light-y-axis",
                            type: "linear",
                            position: "right",
                            beginAtZero: true,
                            scaleLabel: {
                                display: true,
                                labelString: "Ánh sáng (Lux)"
                            }
                        }
                    ]
                },
                series: {
                    shadowSize: 0
                },
                yaxis: {
                    min: 0,
                    max: 100
                },
                xaxis: {
                    show: false
                },
                colors: ["#00c292"],
                grid: {
                    color: "transparent",
                    hoverable: true,
                    borderWidth: 0,
                    backgroundColor: 'transparent'
                },
                tooltip: true,
                tooltipOpts: {
                    content: "Y: %y",
                    defaultTheme: false
                }
            };

            const temperatureChart = new Chart(ctx, {
                type: "line",
                data: data,
                options: options
            });
            const temperatureHumidityChart = new Chart(tempHumiChart, {
                type: "line",
                data: temperatureHumidityData,
                options: options
            })
            const lightChart = new Chart(lightElement, {
                type: "line",
                data: lightData,
                options: options
            });
            let pointCount = 0;
            function updateChartData() {
                $.ajax({
                    url: "http://127.0.0.1:8080",
                    type: "GET",
                    dataType: "json",
                    success: function (response) {
                        // Cập nhật dữ liệu từ response vào biểu đồ
                        data.datasets[0].data.push(response.temp);
                        data.datasets[1].data.push(response.humidity);
                        data.datasets[2].data.push(response.light);
                        data.datasets[3].data.push(response.dust);


                        temperatureHumidityData.datasets[0].data.push(response.temp);
                        temperatureHumidityData.datasets[1].data.push(response.humidity);
                        temperatureHumidityData.datasets[2].data.push(response.dust);


                        lightData.datasets[0].data.push(response.light);

                        // Cập nhật giá trị vào các phần tử HTML
                        document.getElementById("temperatureValue").textContent = response.temp + "°C";
                        document.getElementById("humidityValue").textContent = response.humidity + "%";
                        document.getElementById("lightValue").textContent = response.light + "Lux";
                        document.getElementById("dustValue").textContent = response.dust;

                        // Cập nhật màu sắc của biểu tượng nhiệt độ
                        const temperatureIcon = document.getElementById("temperatureIcon");
                        temperatureIcon.style.color = getColorForTemperature(response.temp);

                        // Cập nhật màu sắc của biểu tượng độ ẩm
                        const humidityIcon = document.getElementById("humidityIcon");
                        humidityIcon.style.color = getColorForHumidity(response.humidity);

                        // Cập nhật màu sắc của biểu tượng ánh sáng
                        const lightIcon = document.getElementById("lightIcon");
                        lightIcon.style.color = getColorForLight(response.light);

                        const dustIcon = document.getElementById("dustIcon");
                        dustIcon.style.color = getColorForDust(response.dust);

                        // Giữ số lượng dữ liệu trong biểu đồ không quá lớn
                        pointCount++;
                        if (pointCount > 5) {
                            data.labels.push("Lần đo " + pointCount);
                            data.labels.shift();
                            data.datasets[0].data.shift();
                            data.datasets[1].data.shift();
                            data.datasets[2].data.shift();
                            data.datasets[3].data.shift();


                            temperatureHumidityData.labels.push("Lần đo " + pointCount);
                            temperatureHumidityData.labels.shift();
                            temperatureHumidityData.datasets[0].data.shift();
                            temperatureHumidityData.datasets[1].data.shift();
                            temperatureHumidityData.datasets[2].data.shift();

                            lightData.labels.push("Lần đo " + pointCount);
                            lightData.labels.shift();
                            lightData.datasets[0].data.shift();
                        }

                        // Cập nhật biểu đồ
                        temperatureChart.update();
                        temperatureHumidityChart.update();
                        lightChart.update();
                    },
                    error: function (error) {
                        console.error("Error fetching data:", error);
                    }
                });
            }

            // Hàm để lấy màu sắc dựa trên giá trị nhiệt độ
            function getColorForTemperature(temperature) {
                if (temperature >= 80) {
                    return "darkred";
                } else if (temperature >= 60) {
                    return "orange";
                } else {
                    return "green";
                }
            }

            // Hàm để lấy màu sắc dựa trên giá trị độ ẩm
            function getColorForHumidity(humidity) {
                if (humidity >= 80) {
                    return "darkblue";
                } else if (humidity >= 60) {
                    return "mediumblue";
                } else {
                    return "lightblue";
                }
            }

            function getColorForLight(lightValue) {
                if (lightValue >= 1010) {
                    return "darkorange";
                }
                //  else if (lightValue >= 800) {
                //     return "orange";
                // }
                else {
                    return "yellow";
                }
            }
            function getColorForDust(dust) {
                const led1IconTemp = document.getElementById("lamp-icon");
                const led1Icon1Temp = document.getElementById("lamp-icon1");

                function toggleActive() {
                    led1IconTemp.classList.toggle("active");
                    led1Icon1Temp.classList.toggle("active");
                }

                function blinkIcons() {
                    setTimeout(function () {
                        toggleActive();
                        if (dust >= 100) {
                            setTimeout(blinkIcons(), 500);
                        }
                    }, 500);
                }
                if (dust >= 100) {
                    blinkIcons();
                    return "darkgreen";
                } else {
                    return "lightgreen";
                }
            }
            //update chart
            setInterval(updateChartData, 2000);
        });


    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.5.1/axios.min.js"
        integrity="sha512-emSwuKiMyYedRwflbZB2ghzX8Cw8fmNVgZ6yQNNXXagFzFOaQmbvQ1vmDkddHjm5AITcBIZfC7k4ShQSjgPAmQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        //Bật/tắt đèn LED
        document.addEventListener("DOMContentLoaded", function () {
            const lampIcon = document.getElementById("lamp-icon");

            lampIcon.addEventListener("click", function () {
                const isLedActive = lampIcon.classList.contains("active");
                let newLedState = isLedActive ? 0 : 1;
                console.log(newLedState);

                axios.post("http://127.0.0.1:8080/controlLed1?led1=" + newLedState)
                    .then(response => {
                        lampIcon.classList.toggle("active");
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });
            });
        });

        //Bật/tắt quạt
        document.addEventListener("DOMContentLoaded", function () {
            const lampIcon = document.getElementById("fan-icon");

            lampIcon.addEventListener("click", function () {
                const isLedActive = lampIcon.classList.contains("active");
                let newLedState = isLedActive ? 0 : 1;
                console.log(newLedState);

                axios.post("http://127.0.0.1:8080/controlLed2?led2=" + newLedState)
                    .then(response => {
                        lampIcon.classList.toggle("active");
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });
            });
        });

        //Bật/tắt đèn LED 2
        document.addEventListener("DOMContentLoaded", function () {
            const led1Icon = document.getElementById("lamp-icon1");

            led1Icon.addEventListener("click", function () {
                const isLedActive = led1Icon.classList.contains("active");
                let newLedState = isLedActive ? 0 : 1;
                console.log(newLedState);

                axios.post("http://localhost:8080/controlLed3?led3=" + newLedState)
                    .then(response => {
                        led1Icon.classList.toggle("active");
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });
            });
        });
    </script>
    <style>
        /* Custom styles for the lamp */
        .lamp-icon {
            font-size: 5rem;
            color: #000;
            cursor: pointer;
            transition: color 0.3s;
        }

        .lamp-icon.active {
            color: rgb(255, 210, 48) !important;
        }

        .lamp-icon1 {
            font-size: 5rem;
            color: #000;
            cursor: pointer;
            transition: color 0.3s;
        }

        .lamp-icon1.active {
            color: rgb(255, 117, 48) !important;
        }

        .fan-icon {
            font-size: 5rem;
            color: #000;
            cursor: pointer;
            transition: color 0.3s;
        }

        .fan-icon.active {
            color: rgb(111, 184, 220);
        }
    </style>
</body>

</html>