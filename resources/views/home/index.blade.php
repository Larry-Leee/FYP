<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Stoke Restaurants</title>
    <!-- Vendor CSS -->
    @include('main.public.style')
    <!-- Area Chart -->
    @include('main.public.script')
    <!-- Google Map API -->
    <script type="text/javascript">
        google.charts.load("current", {
            "packages": ["map"],
            // Note: you will need to get a mapsApiKey for your project.
            // See: https://developers.google.com/chart/interactive/docs/basic_load_libs#load-settings
            "mapsApiKey": "AIzaSyDtxyx7iKJQG_CTnY5kbcRFOzP2zMpoQNo"
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Lat', 'Long', 'Name'],
                [53.02971, -2.17505, 'Peaches'],
                [53.009068, -2.176138, 'Hongs Kitchen'],
                [53.002666, -2.179404, 'Regent Chinese '],
                [53.025780, -2.177390, 'Shanghai City'],
                [53.007069, -2.184010, 'The Birches Head'],
                [53.003361, -2.183040, 'Tandoori Knights'],
                [53.030788, -2.170000, 'The Masons Arms'],
                [53.014380, -2.241610, 'Revolution']
            ]);

            var map = new google.visualization.Map(document.getElementById('res_map'));
            map.draw(data, {
                showTooltip: true,
                showInfoWindow: true
            });
        }
    </script>
    <script src="/components/js/echarts.js"></script>
    <!-- Pie Chart-->
    <!-- <script type="text/javascript">
        google.charts.load("current", {
            packages: ["corechart"]
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Task', 'Hours per Day'],
                ['Work', 11],
                ['Eat', 2],
                ['Commute', 2],
                ['Watch TV', 2],
                ['Sleep', 7]
            ]);

            var options = {
                title: 'Categories of Restaurants (%)',
                pieHole: 0.4,
            };
            var chart = new google.visualization.PieChart(document.getElementById('pieChart'));
            chart.draw(data, options);
        }
    </script> -->
    <!-- Pie Chart Ends Here -->
</head>

<body>
    @include('main.public.header')
    <!-- header end -->

    <section id="main" data-layout="layout-1">
        <section id="content">
            <div class="container-fluid">
                <div class="block-header">
                    <h2><b>Find A Restaurant</b></h2>
                </div>

                <div class="card col-24">
                    <div class="card-body">
                        <div id="res_map" class="col-24" style="height: 550px;"></div>
                    </div>
                </div>

                <div class="mini-charts">
                    <div class="row">
                        <div class="col-sm-6 col-md-6">
                            <div class="mini-charts-item bgm-cyan">
                                <div class="clearfix">
                                    <div class="chart stats-bar"></div>
                                    <div class="count">
                                        <small>Totoal Restaurants</small>
                                        <h2>{{DB::table('restaurants')->count('r_id')}}</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- total review -->
                        <div class="col-sm-6 col-md-6">
                            <div class="mini-charts-item bgm-lightgreen">
                                <div class="clearfix">
                                    <div class="chart stats-bar-2"></div>
                                    <div class="count">
                                        <small>Total Review</small>
                                        <a href="comments/index" class="totalReview">
                                            <h2>{{DB::table('posts')->count('p_id')}}</h2>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- total review end -->
                    </div>
                </div>
                <div class="card-body px-4 pb-4">
                    <div class="row">
                        <div class="col-6">
                            <div class="card shadow">
                                <div class="card-header py-3">
                                    <h4 class="m-0 font-weight-bold">Restaurants Type</h4>
                                </div>
                                <div class="p-25 p-t-25 border bg-light col-24" style="width:689px;height:520px;"
                                    id="categorise">
                                </div>
                                <script type="text/javascript">
                                    var myChart = echarts.init(document.getElementById('categorise'));
                                    var option;
                                    option = {
                                        tooltip: {
                                            trigger: 'item'
                                        },
                                        legend: {
                                            top: '5%',
                                            left: 'center'
                                        },
                                        series: [{
                                            type: 'pie',
                                            radius: ['40%', '70%'],
                                            avoidLabelOverlap: false,
                                            itemStyle: {
                                                borderRadius: 10,
                                                borderColor: '#fff',
                                                borderWidth: 2
                                            },
                                            label: {
                                                show: false,
                                                position: 'center'
                                            },
                                            emphasis: {
                                                label: {
                                                    show: true,
                                                    fontSize: '30',
                                                    fontWeight: 'bold'
                                                }
                                            },
                                            labelLine: {
                                                show: false
                                            },
                                            data: [{
                                                    value: 6,
                                                    name: 'India'
                                                },
                                                {
                                                    value: 2,
                                                    name: 'British'
                                                },
                                                {
                                                    value: 10,
                                                    name: 'Chinese'
                                                },
                                                {
                                                    value: 4,
                                                    name: 'Turkish'
                                                },
                                                {
                                                    value: 5,
                                                    name: 'Italian'
                                                },
                                                {
                                                    value: 10,
                                                    name: 'Thai'
                                                }
                                            ]
                                        }]
                                    };

                                    option && myChart.setOption(option);
                                </script>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card shadow">
                                <div class="card-header py-3">
                                    <h4 class="m-0 font-weight-bold">Restaurant Overview</h4>
                                </div>
                                <div class="p-25 p-t-25 border bg-light col-24" style="width:689px;height:520px;"
                                    id="overview"></div>
                                <script type="text/javascript">
                                    var myChart = echarts.init(document.getElementById('overview'));
                                    var option;
                                    option = {
                                        tooltip: {
                                            trigger: 'item'
                                        },
                                        toolbox: {
                                            feature: {
                                                restore: {},
                                                saveAsImage: {}
                                            }
                                        },
                                        legend: {
                                            data: ['Tandoori Knights', 'The Masons Arms', 'Peaches', 'Yu-ma-mi',
                                                'Hongs kitchen', 'Shanghai City Restaurant',
                                                'Regent Chinese Restaurant', 'Panda Kitchen',
                                                'Saracens Head Steakhouse'
                                            ],
                                            orient: 'horizontal',
                                            bottom: 5,
                                            type: 'scroll',
                                            textStyle: {
                                                color: '#000',
                                                fontSize: 14
                                            },
                                            selectedMode: 'single'
                                        },
                                        radar: {
                                            // shape: 'circle',
                                            indicator: [{
                                                    name: 'Services',
                                                    max: 100,
                                                    color: '#000'
                                                },
                                                {
                                                    name: 'Envrionment',
                                                    max: 100,
                                                    color: '#000'
                                                },
                                                {
                                                    name: 'Price',
                                                    max: 100,
                                                    color: '#000'
                                                },
                                                {
                                                    name: 'Location',
                                                    max: 100,
                                                    color: '#000'
                                                },
                                                {
                                                    name: 'Staffs',
                                                    max: 100,
                                                    color: '#000'
                                                },
                                                {
                                                    name: 'Dishes',
                                                    max: 100,
                                                    color: '#000'
                                                }
                                            ]
                                        },
                                        series: [{
                                            areaStyle: {},
                                            type: 'radar',
                                            symbol: 'none',
                                            data: [{
                                                    value: [88, 90, 95, 78, 99, 90],
                                                    name: 'Tandoori Knights'
                                                },
                                                {
                                                    value: [89, 98, 70, 50, 42, 50],
                                                    name: 'The Masons Arms'
                                                },
                                                {
                                                    value: [100, 67, 76, 85, 99, 93],
                                                    name: 'Peaches'
                                                },
                                                {
                                                    value: [40, 57, 36, 55, 79, 20],
                                                    name: 'Yu-ma-mi'
                                                },
                                                {
                                                    value: [81, 76, 97, 95, 99, 97],
                                                    name: 'Hongs kitchen'
                                                },
                                                {
                                                    value: [77, 87, 79, 60, 93, 83],
                                                    name: 'Shanghai City Restaurant'
                                                },
                                                {
                                                    value: [96, 89, 91, 94, 93, 86],
                                                    name: 'Regent Chinese Restaurant'
                                                },
                                                {
                                                    value: [65, 67, 76, 85, 99, 93],
                                                    name: 'Panda Kitchen'
                                                },
                                                {
                                                    value: [92, 97, 89, 60, 92, 78],
                                                    name: 'Saracens Head Steakhouse'
                                                }

                                            ]
                                        }]
                                    };
                                    option && myChart.setOption(option);
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- modal section -->
        <section class="page-section bg-light" id="portfolio" data-layout="layout-1">
            <div class="container p-4">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">The Most Popular Restaurants In Stoke </h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4 p-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="zmdi zmdi-plus"></i></div>
                                </div>
                                <img class="img-fluid" src="/components/img/portfolio/1.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Tandoori Knights</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 p-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="zmdi zmdi-plus"></i></div>
                                </div>
                                <img class="img-fluid" src="/components/img/portfolio/2.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">The Masons Arms</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 p-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="zmdi zmdi-plus"></i></div>
                                </div>
                                <img class="img-fluid" src="/components/img/portfolio/3.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Peaches</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0 p-4">
                        <!-- Portfolio item 4-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="zmdi zmdi-plus"></i></div>
                                </div>
                                <img class="img-fluid" src="/components/img/portfolio/4.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Yu-ma-mi</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0 p-4">
                        <!-- Portfolio item 5-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="zmdi zmdi-plus"></i></div>
                                </div>
                                <img class="img-fluid" src="/components/img/portfolio/5.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Hong's kitchen</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 p-4">
                        <!-- Portfolio item 6-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="zmdi zmdi-plus"></i></div>
                                </div>
                                <img class="img-fluid" src="/components/img/portfolio/6.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Shanghai City Restaurant</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 p-4">
                        <!-- Portfolio item 7-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal7">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="zmdi zmdi-plus"></i></div>
                                </div>
                                <img class="img-fluid" src="/components/img/portfolio/6.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Regent Chinese Restaurant</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 p-4">
                        <!-- Portfolio item 8-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal8">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="zmdi zmdi-plus"></i></div>
                                </div>
                                <img class="img-fluid" src="/components/img/portfolio/6.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Panda Kitchen</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 p-4">
                        <!-- Portfolio item 9-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal9">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="zmdi zmdi-plus"></i></div>
                                </div>
                                <img class="img-fluid" src="/components/img/portfolio/6.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Saracen's Head Steakhouse</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <!-- modal popup -->
    <div class="portfolio-modal modal fade modal-fullscreen" id="portfolioModal1" tabindex="-1" role="dialog"
        aria-hidden="true" style="left:150px">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal"><img src="/components/img/close-icon.svg"
                        alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Tandoori Knights</h2>
                                <div class="img-fluid d-block mx-auto" style="width:460px;height:400px;" id="modal1">
                                </div>
                                <script type="text/javascript">
                                    var myChart = echarts.init(document.getElementById('modal1'));
                                    var option;
                                    option = {
                                        tooltip: {
                                            trigger: 'item'
                                        },
                                        toolbox: {
                                            feature: {
                                                restore: {},
                                                saveAsImage: {}
                                            }
                                        },
                                        legend: {
                                            data: ['Tandoori Knights']
                                        },

                                        radar: {
                                            // shape: 'circle',
                                            indicator: [{
                                                    name: 'Services',
                                                    max: 100
                                                },
                                                {
                                                    name: 'Envrionment',
                                                    max: 100
                                                },
                                                {
                                                    name: 'Price',
                                                    max: 100
                                                },
                                                {
                                                    name: 'Location',
                                                    max: 100
                                                },
                                                {
                                                    name: 'Staffs',
                                                    max: 100
                                                },
                                                {
                                                    name: 'Dishes',
                                                    max: 100
                                                }
                                            ]
                                        },
                                        series: [{
                                            areaStyle: {},
                                            type: 'radar',
                                            data: [{
                                                value: [88, 90, 95, 78, 99, 90],
                                                name: 'Tandoori Knights'
                                            }]
                                        }]
                                    };

                                    option && myChart.setOption(option);
                                </script>
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt
                                    repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae,
                                    nostrum, reiciendis facere nemo!</p>
                                <button class="btn btn-primary btn-xl text-uppercase" data-dismiss="modal"
                                    type="button">
                                    <i class="fas fa-times me-1"></i>
                                    Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 2 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true"
        style="left:150px">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal"><img src="/components/img/close-icon.svg"
                        alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">The Masons Arms</h2>
                                <div class="img-fluid d-block mx-auto" style="width:460px;height:400px;" id="modal2">
                                </div>
                                <script type="text/javascript">
                                    var myChart = echarts.init(document.getElementById('modal2'));
                                    var option;
                                    option = {
                                        tooltip: {
                                            trigger: 'item'
                                        },
                                        toolbox: {
                                            feature: {
                                                restore: {},
                                                saveAsImage: {}
                                            }
                                        },
                                        legend: {
                                            data: ['The Masons Arms']
                                        },

                                        radar: {
                                            // shape: 'circle',
                                            indicator: [{
                                                    name: 'Services',
                                                    max: 100
                                                },
                                                {
                                                    name: 'Envrionment',
                                                    max: 100
                                                },
                                                {
                                                    name: 'Price',
                                                    max: 100
                                                },
                                                {
                                                    name: 'Location',
                                                    max: 100
                                                },
                                                {
                                                    name: 'Staffs',
                                                    max: 100
                                                },
                                                {
                                                    name: 'Dishes',
                                                    max: 100
                                                }
                                            ]
                                        },
                                        series: [{
                                            areaStyle: {},
                                            type: 'radar',
                                            data: [{
                                                value: [89, 98, 70, 50, 42, 50],
                                                name: 'The Masons Arms'
                                            }]
                                        }]
                                    };

                                    option && myChart.setOption(option);
                                </script>
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt
                                    repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae,
                                    nostrum, reiciendis facere nemo!</p>
                                <button class="btn btn-primary btn-xl text-uppercase" data-dismiss="modal"
                                    type="button">
                                    <i class="fas fa-times me-1"></i>
                                    Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 3 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true"
        style="left:150px">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal"><img src="/components/img/close-icon.svg"
                        alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Peaches</h2>
                                <div class="img-fluid d-block mx-auto" style="width:460px;height:400px;" id="modal3">
                                </div>
                                <script type="text/javascript">
                                    var myChart = echarts.init(document.getElementById('modal3'));
                                    var option;
                                    option = {
                                        tooltip: {
                                            trigger: 'item'
                                        },
                                        toolbox: {
                                            feature: {
                                                restore: {},
                                                saveAsImage: {}
                                            }
                                        },
                                        legend: {
                                            data: ['Peaches']
                                        },

                                        radar: {
                                            // shape: 'circle',
                                            indicator: [{
                                                    name: 'Services',
                                                    max: 100
                                                },
                                                {
                                                    name: 'Envrionment',
                                                    max: 100
                                                },
                                                {
                                                    name: 'Price',
                                                    max: 100
                                                },
                                                {
                                                    name: 'Location',
                                                    max: 100
                                                },
                                                {
                                                    name: 'Staffs',
                                                    max: 100
                                                },
                                                {
                                                    name: 'Dishes',
                                                    max: 100
                                                }
                                            ]
                                        },
                                        series: [{
                                            areaStyle: {},
                                            type: 'radar',
                                            data: [{
                                                value: [100, 67, 76, 85, 99, 93],
                                                name: 'Peaches'
                                            }]
                                        }]
                                    };

                                    option && myChart.setOption(option);
                                </script>
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt
                                    repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae,
                                    nostrum, reiciendis facere nemo!</p>
                                <button class="btn btn-primary btn-xl text-uppercase" data-dismiss="modal"
                                    type="button">
                                    <i class="fas fa-times me-1"></i>
                                    Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 4 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true"
        style="left:150px">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal"><img src="/components/img/close-icon.svg"
                        alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Yu-ma-mi</h2>
                                <div class="img-fluid d-block mx-auto" style="width:460px;height:400px;" id="modal4">
                                </div>
                                <script type="text/javascript">
                                    var myChart = echarts.init(document.getElementById('modal4'));
                                    var option;
                                    option = {
                                        tooltip: {
                                            trigger: 'item'
                                        },
                                        toolbox: {
                                            feature: {
                                                restore: {},
                                                saveAsImage: {}
                                            }
                                        },
                                        legend: {
                                            data: ['Peaches']
                                        },

                                        radar: {
                                            // shape: 'circle',
                                            indicator: [{
                                                    name: 'Services',
                                                    max: 100
                                                },
                                                {
                                                    name: 'Envrionment',
                                                    max: 100
                                                },
                                                {
                                                    name: 'Price',
                                                    max: 100
                                                },
                                                {
                                                    name: 'Location',
                                                    max: 100
                                                },
                                                {
                                                    name: 'Staffs',
                                                    max: 100
                                                },
                                                {
                                                    name: 'Dishes',
                                                    max: 100
                                                }
                                            ]
                                        },
                                        series: [{
                                            areaStyle: {},
                                            type: 'radar',
                                            data: [{
                                                value: [40, 57, 36, 55, 79, 20],
                                                name: 'Yu-ma-mi'
                                            }]
                                        }]
                                    };

                                    option && myChart.setOption(option);
                                </script>
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt
                                    repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae,
                                    nostrum, reiciendis facere nemo!</p>
                                <button class="btn btn-primary btn-xl text-uppercase" data-dismiss="modal"
                                    type="button">
                                    <i class="fas fa-times me-1"></i>
                                    Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 5 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true"
        style="left:150px">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal"><img src="/components/img/close-icon.svg"
                        alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Hong's kitchen</h2>
                                <div class="img-fluid d-block mx-auto" style="width:460px;height:400px;" id="modal5">
                                </div>
                                <script type="text/javascript">
                                    var myChart = echarts.init(document.getElementById('modal5'));
                                    var option;
                                    option = {
                                        tooltip: {
                                            trigger: 'item'
                                        },
                                        toolbox: {
                                            feature: {
                                                restore: {},
                                                saveAsImage: {}
                                            }
                                        },
                                        legend: {
                                            data: ['Peaches']
                                        },

                                        radar: {
                                            // shape: 'circle',
                                            indicator: [{
                                                    name: 'Services',
                                                    max: 100
                                                },
                                                {
                                                    name: 'Envrionment',
                                                    max: 100
                                                },
                                                {
                                                    name: 'Price',
                                                    max: 100
                                                },
                                                {
                                                    name: 'Location',
                                                    max: 100
                                                },
                                                {
                                                    name: 'Staffs',
                                                    max: 100
                                                },
                                                {
                                                    name: 'Dishes',
                                                    max: 100
                                                }
                                            ]
                                        },
                                        series: [{
                                            areaStyle: {},
                                            type: 'radar',
                                            data: [{
                                                value: [40, 57, 36, 55, 79, 20],
                                                name: 'Yu-ma-mi'
                                            }]
                                        }]
                                    };

                                    option && myChart.setOption(option);
                                </script>
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt
                                    repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae,
                                    nostrum, reiciendis facere nemo!</p>
                                <button class="btn btn-primary btn-xl text-uppercase" data-dismiss="modal"
                                    type="button">
                                    <i class="fas fa-times me-1"></i>
                                    Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 6 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true"
        style="left:150px">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal"><img src="/components/img/close-icon.svg"
                        alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Shanghai City Restaurant</h2>
                                <div class="img-fluid d-block mx-auto" style="width:460px;height:400px;" id="modal6">
                                </div>
                                <script type="text/javascript">
                                    var myChart = echarts.init(document.getElementById('modal6'));
                                    var option;
                                    option = {
                                        tooltip: {
                                            trigger: 'item'
                                        },
                                        toolbox: {
                                            feature: {
                                                restore: {},
                                                saveAsImage: {}
                                            }
                                        },
                                        legend: {
                                            data: ['Peaches']
                                        },

                                        radar: {
                                            // shape: 'circle',
                                            indicator: [{
                                                    name: 'Services',
                                                    max: 100
                                                },
                                                {
                                                    name: 'Envrionment',
                                                    max: 100
                                                },
                                                {
                                                    name: 'Price',
                                                    max: 100
                                                },
                                                {
                                                    name: 'Location',
                                                    max: 100
                                                },
                                                {
                                                    name: 'Staffs',
                                                    max: 100
                                                },
                                                {
                                                    name: 'Dishes',
                                                    max: 100
                                                }
                                            ]
                                        },
                                        series: [{
                                            areaStyle: {},
                                            type: 'radar',
                                            data: [{
                                                value: [77, 87, 79, 60, 93, 83],
                                                name: 'Shanghai City Restaurant'
                                            }]
                                        }]
                                    };

                                    option && myChart.setOption(option);
                                </script>
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt
                                    repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae,
                                    nostrum, reiciendis facere nemo!</p>
                                <button class="btn btn-primary btn-xl text-uppercase" data-dismiss="modal"
                                    type="button">
                                    <i class="fas fa-times me-1"></i>
                                    Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--portfolio item 7 modal popup -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true"
        style="left:150px">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal"><img src="/components/img/close-icon.svg"
                        alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Regent Chinese Restaurant</h2>
                                <div class="img-fluid d-block mx-auto" style="width:460px;height:400px;" id="modal7">
                                </div>
                                <script type="text/javascript">
                                    var myChart = echarts.init(document.getElementById('modal7'));
                                    var option;
                                    option = {
                                        tooltip: {
                                            trigger: 'item'
                                        },
                                        toolbox: {
                                            feature: {
                                                restore: {},
                                                saveAsImage: {}
                                            }
                                        },
                                        legend: {
                                            data: ['Peaches']
                                        },

                                        radar: {
                                            // shape: 'circle',
                                            indicator: [{
                                                    name: 'Services',
                                                    max: 100
                                                },
                                                {
                                                    name: 'Envrionment',
                                                    max: 100
                                                },
                                                {
                                                    name: 'Price',
                                                    max: 100
                                                },
                                                {
                                                    name: 'Location',
                                                    max: 100
                                                },
                                                {
                                                    name: 'Staffs',
                                                    max: 100
                                                },
                                                {
                                                    name: 'Dishes',
                                                    max: 100
                                                }
                                            ]
                                        },
                                        series: [{
                                            areaStyle: {},
                                            type: 'radar',
                                            data: [{
                                                value: [96, 89, 91, 94, 93, 86],
                                                name: 'Regent Chinese Restaurant'
                                            }]
                                        }]
                                    };

                                    option && myChart.setOption(option);
                                </script>
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt
                                    repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae,
                                    nostrum, reiciendis facere nemo!</p>
                                <button class="btn btn-primary btn-xl text-uppercase" data-dismiss="modal"
                                    type="button">
                                    <i class="fas fa-times me-1"></i>
                                    Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--portfolio item 8 modal popup -->
    <div class="portfolio-modal modal fade" id="portfolioModal8" tabindex="-1" role="dialog" aria-hidden="true"
        style="left:150px">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal"><img src="/components/img/close-icon.svg"
                        alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Panda Kitchen</h2>
                                <div class="img-fluid d-block mx-auto" style="width:460px;height:400px;" id="modal8">
                                </div>
                                <script type="text/javascript">
                                    var myChart = echarts.init(document.getElementById('modal8'));
                                    var option;
                                    option = {
                                        tooltip: {
                                            trigger: 'item'
                                        },
                                        toolbox: {
                                            feature: {
                                                restore: {},
                                                saveAsImage: {}
                                            }
                                        },
                                        legend: {
                                            data: ['Peaches']
                                        },

                                        radar: {
                                            // shape: 'circle',
                                            indicator: [{
                                                    name: 'Services',
                                                    max: 100
                                                },
                                                {
                                                    name: 'Envrionment',
                                                    max: 100
                                                },
                                                {
                                                    name: 'Price',
                                                    max: 100
                                                },
                                                {
                                                    name: 'Location',
                                                    max: 100
                                                },
                                                {
                                                    name: 'Staffs',
                                                    max: 100
                                                },
                                                {
                                                    name: 'Dishes',
                                                    max: 100
                                                }
                                            ]
                                        },
                                        series: [{
                                            areaStyle: {},
                                            type: 'radar',
                                            data: [{
                                                value: [65, 67, 76, 85, 99, 93],
                                                name: 'Panda Kitchen'
                                            }]
                                        }]
                                    };

                                    option && myChart.setOption(option);
                                </script>
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt
                                    repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae,
                                    nostrum, reiciendis facere nemo!</p>
                                <button class="btn btn-primary btn-xl text-uppercase" data-dismiss="modal"
                                    type="button">
                                    <i class="fas fa-times me-1"></i>
                                    Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--portfolio item 9 modal popup -->
    <div class="portfolio-modal modal fade" id="portfolioModal9" tabindex="-1" role="dialog" aria-hidden="true"
        style="left:150px">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal"><img src="/components/img/close-icon.svg"
                        alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Saracen's Head Steakhouse</h2>
                                <div class="img-fluid d-block mx-auto" style="width:460px;height:400px;" id="modal9">
                                </div>
                                <script type="text/javascript">
                                    var myChart = echarts.init(document.getElementById('modal9'));
                                    var option;
                                    option = {
                                        tooltip: {
                                            trigger: 'item'
                                        },
                                        toolbox: {
                                            feature: {
                                                restore: {},
                                                saveAsImage: {}
                                            }
                                        },
                                        legend: {
                                            data: ['Peaches']
                                        },

                                        radar: {
                                            // shape: 'circle',
                                            indicator: [{
                                                    name: 'Services',
                                                    max: 100
                                                },
                                                {
                                                    name: 'Envrionment',
                                                    max: 100
                                                },
                                                {
                                                    name: 'Price',
                                                    max: 100
                                                },
                                                {
                                                    name: 'Location',
                                                    max: 100
                                                },
                                                {
                                                    name: 'Staffs',
                                                    max: 100
                                                },
                                                {
                                                    name: 'Dishes',
                                                    max: 100
                                                }
                                            ]
                                        },
                                        series: [{
                                            areaStyle: {},
                                            type: 'radar',
                                            data: [{
                                                value: [92, 97, 89, 60, 92, 78],
                                                name: 'Saracens Head Steakhouse'
                                            }]
                                        }]
                                    };

                                    option && myChart.setOption(option);
                                </script>
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt
                                    repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae,
                                    nostrum, reiciendis facere nemo!</p>
                                <button class="btn btn-primary btn-xl text-uppercase" data-dismiss="modal"
                                    type="button">
                                    <i class="fas fa-times me-1"></i>
                                    Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal popup end -->
    <footer id="footer">
        Copyright &copy; 2015 Material Admin

        <ul class="f-menu">
            <li><a href="admin/homepage">Home</a></li>
            <li><a href="">Dashboard</a></li>
            <li><a href="">Reports</a></li>
            <li><a href="">Support</a></li>
            <li><a href="">Contact</a></li>
        </ul>
    </footer>

    <!-- Page Loader -->
    <div class="page-loader">
        <div class="preloader pls-blue">
            <svg class="pl-circular" viewBox="25 25 50 50">
                <circle class="plc-path" cx="50" cy="50" r="20" />
            </svg>

            <p>Please wait...</p>
        </div>
    </div>
    <!-- Javascript Libraries -->
    <!-- @include('main.public.script') -->


</body>

</html>