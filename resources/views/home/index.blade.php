<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Stoke Restaurants</title>
    <!-- Vendor CSS -->
    @include('main.public.style')

</head>

<body>

    <header id="header-2" class="clearfix" data-current-skin="green">
        <!-- Make sure to change both class and data-current-skin when switching sking manually -->
        <ul class="header-inner clearfix">
            <li id="menu-trigger" data-trigger=".ha-menu" class="visible-xs">
                <div class="line-wrap">
                    <div class="line top"></div>
                    <div class="line center"></div>
                    <div class="line bottom"></div>
                </div>
            </li>

            <li class="logo hidden-xs">
                <a href="/admin/homepage"><b>Stoke Restaurants</b></a>
            </li>

            <li class="pull-right">
                <ul class="top-menu">
                    <li class="dropdown">
                        <a data-toggle="dropdown" href=""><i class="tm-icon zmdi zmdi-more-vert"></i></a>
                        <ul class="dropdown-menu dm-icon pull-right">
                            <li class="hidden-xs">
                                <a data-action="fullscreen" href=""><i class="zmdi zmdi-fullscreen"></i> Toggle
                                    Fullscreen</a>
                            </li>
                            <li>
                                <a href=""><i class="zmdi zmdi-settings"></i> Log Out</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- <li class="pull-right">
                <div class="profile-menu">
                    <a href="">
                        <div class="profile-pic">
                            <img src="/components/img/profile-pics/1.jpg" alt="">
                        </div>
                        <div class="profile-info">
                            Larry
                            <i class="zmdi zmdi-caret-down"></i>
                        </div>
                    </a>
                    <ul class="main-menu">
                        <li>
                            <a href="profile-about.html"><i class="zmdi zmdi-account"></i> View Profile</a>
                        </li>
                        <li>
                            <a href=""><i class="zmdi zmdi-time-restore"></i> Logout</a>
                        </li>
                    </ul>
                </div>
            </li> -->
            </li>
        </ul>

        <div class="search">
            <div class="fg-line">
                <input type="text" class="form-control" placeholder="Search...">
            </div>
        </div>

        <nav class="ha-menu">
            <ul>
                <li class="waves-effect"><a href="index.html">Home</a></li>
                <li class="waves-effect"><a href="index.html">Dashboard</a></li>
                <li class="dropdown">
                    <div class="waves-effect" data-toggle="dropdown">Restaurants Details</div>
                    <ul class="dropdown-menu">
                        <li><a href="widget-templates.html">Templates</a></li>
                        <li><a href="widgets.html">Widgets</a></li>
                    </ul>
                </li>
                <li class="waves-effect"><a href="index.html">Price Comparison</a></li>
                <li class="waves-effect"><a href="index.html">Meal Preview</a></li>
                <li class="waves-effect"><a href="index.html">Help Us</a></li>
            </ul>
        </nav>
        <div class="skin-switch dropdown hidden-xs">
            <button data-toggle="dropdown" class="btn ss-icon"><i class="zmdi zmdi-palette"></i></button>
            <div class="dropdown-menu">
                <span class="ss-skin ss-1 bgm-lightblue" data-skin="lightblue"></span>
                <span class="ss-skin ss-2 bgm-bluegray" data-skin="bluegray"></span>
                <span class="ss-skin ss-3 bgm-cyan" data-skin="cyan"></span>
                <span class="ss-skin ss-4 bgm-teal" data-skin="teal"></span>
                <span class="ss-skin ss-5 bgm-green" data-skin="green"></span>
                <span class="ss-skin ss-6 bgm-orange" data-skin="orange"></span>
                <span class="ss-skin ss-7 bgm-blue" data-skin="blue"></span>
                <span class="ss-skin ss-8 bgm-purple" data-skin="purple"></span>
            </div>
        </div>
    </header>

    <section id="main" data-layout="layout-1">
        <section id="content">
            <div class="container">
                <div class="block-header">
                    <h2>Dashboard</h2>

                    <ul class="actions">
                        <li>
                            <a href="">
                                <i class="zmdi zmdi-trending-up"></i>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="zmdi zmdi-check-all"></i>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="" data-toggle="dropdown">
                                <i class="zmdi zmdi-more-vert"></i>
                            </a>

                            <ul class="dropdown-menu dropdown-menu-right">
                                <li>
                                    <a href="">Refresh</a>
                                </li>
                                <li>
                                    <a href="">Manage Widgets</a>
                                </li>
                                <li>
                                    <a href="">Widgets Settings</a>
                                </li>
                            </ul>
                        </li>
                    </ul>

                </div>

                <div class="card">
                    <div class="card-header">
                        <h2>Sales Statistics <small>Vestibulum purus quam scelerisque, mollis nonummy metus</small></h2>

                        <ul class="actions">
                            <li>
                                <a href="">
                                    <i class="zmdi zmdi-refresh-alt"></i>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="zmdi zmdi-download"></i>
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="" data-toggle="dropdown">
                                    <i class="zmdi zmdi-more-vert"></i>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li>
                                        <a href="">Change Date Range</a>
                                    </li>
                                    <li>
                                        <a href="">Change Graph Type</a>
                                    </li>
                                    <li>
                                        <a href="">Other Settings</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <div class="card-body">
                        <div class="chart-edge">
                            <div id="curved-line-chart" class="flot-chart "></div>
                        </div>
                    </div>
                </div>

                <div class="mini-charts">
                    <div class="row">
                        <div class="col-sm-6 col-md-3">
                            <div class="mini-charts-item bgm-cyan">
                                <div class="clearfix">
                                    <div class="chart stats-bar"></div>
                                    <div class="count">
                                        <small>Website Traffics</small>
                                        <h2>987,459</h2>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-3">
                            <div class="mini-charts-item bgm-lightgreen">
                                <div class="clearfix">
                                    <div class="chart stats-bar-2"></div>
                                    <div class="count">
                                        <small>Website Impressions</small>
                                        <h2>356,785K</h2>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-3">
                            <div class="mini-charts-item bgm-orange">
                                <div class="clearfix">
                                    <div class="chart stats-line"></div>
                                    <div class="count">
                                        <small>Total Sales</small>
                                        <h2>$ 458,778</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="mini-charts-item bgm-bluegray">
                                <div class="clearfix">
                                    <div class="chart stats-line-2"></div>
                                    <div class="count">
                                        <small>Support Tickets</small>
                                        <h2>23,856</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dash-widgets">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div id="site-visits" class="dash-widget-item bgm-teal">
                                <div class="dash-widget-header">
                                    <div class="p-20">
                                        <div class="dash-widget-visits"></div>
                                    </div>

                                    <div class="dash-widget-title">For the past 30 days</div>

                                    <ul class="actions actions-alt">
                                        <li class="dropdown">
                                            <a href="" data-toggle="dropdown">
                                                <i class="zmdi zmdi-more-vert"></i>
                                            </a>

                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li>
                                                    <a href="">Refresh</a>
                                                </li>
                                                <li>
                                                    <a href="">Manage Widgets</a>
                                                </li>
                                                <li>
                                                    <a href="">Widgets Settings</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>

                                <div class="p-20">

                                    <small>Page Views</small>
                                    <h3 class="m-0 f-400">47,896,536</h3>

                                    <br />

                                    <small>Site Visitors</small>
                                    <h3 class="m-0 f-400">24,456,799</h3>

                                    <br />

                                    <small>Total Clicks</small>
                                    <h3 class="m-0 f-400">13,965</h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div id="pie-charts" class="dash-widget-item">
                                <div class="bgm-pink">
                                    <div class="dash-widget-header">
                                        <div class="dash-widget-title">Email Statistics</div>
                                    </div>

                                    <div class="clearfix"></div>

                                    <div class="text-center p-20 m-t-25">
                                        <div class="easy-pie main-pie" data-percent="75">
                                            <div class="percent">45</div>
                                            <div class="pie-title">Total Emails Sent</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="p-t-20 p-b-20 text-center">
                                    <div class="easy-pie sub-pie-1" data-percent="56">
                                        <div class="percent">56</div>
                                        <div class="pie-title">Bounce Rate</div>
                                    </div>
                                    <div class="easy-pie sub-pie-2" data-percent="84">
                                        <div class="percent">84</div>
                                        <div class="pie-title">Total Opened</div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="dash-widget-item bgm-lime">
                                <div id="weather-widget"></div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div id="best-selling" class="dash-widget-item">
                                <div class="dash-widget-header">
                                    <div class="dash-widget-title">Best Sellings</div>
                                    <img src="/components/img/widgets/alpha.jpg" alt="">
                                    <div class="main-item">
                                        <small>Samsung Galaxy Alpha</small>
                                        <h2>$799.99</h2>
                                    </div>
                                </div>

                                <div class="listview p-t-5">
                                    <a class="lv-item" href="">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="/components/img/widgets/note4.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lv-title">Samsung Galaxy Note 4</div>
                                                <small class="lv-small">$850.00 - $1199.99</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="lv-item" href="">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="/components/img/widgets/mate7.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lv-title">Huawei Ascend Mate</div>
                                                <small class="lv-small">$649.59 - $749.99</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="lv-item" href="">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="/components/img/widgets/535.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lv-title">Nokia Lumia 535</div>
                                                <small class="lv-small">$189.99 - $250.00</small>
                                            </div>
                                        </div>
                                    </a>

                                    <a class="lv-footer" href="">
                                        View All
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <!-- Recent Items -->
                        <div class="card">
                            <div class="card-header">
                                <h2>Recent Items <small>Phasellus condimentum ipsum id auctor imperdie</small></h2>
                                <ul class="actions">
                                    <li class="dropdown">
                                        <a href="" data-toggle="dropdown">
                                            <i class="zmdi zmdi-more-vert"></i>
                                        </a>

                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li>
                                                <a href="">Refresh</a>
                                            </li>
                                            <li>
                                                <a href="">Settings</a>
                                            </li>
                                            <li>
                                                <a href="">Other Settings</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>

                            <div class="card-body m-t-0">
                                <table class="table table-inner table-vmiddle">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th style="width: 60px">Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="f-500 c-cyan">2569</td>
                                            <td>Samsung Galaxy Mega</td>
                                            <td class="f-500 c-cyan">$521</td>
                                        </tr>
                                        <tr>
                                            <td class="f-500 c-cyan">9658</td>
                                            <td>Huawei Ascend P6</td>
                                            <td class="f-500 c-cyan">$440</td>
                                        </tr>
                                        <tr>
                                            <td class="f-500 c-cyan">1101</td>
                                            <td>HTC One M8</td>
                                            <td class="f-500 c-cyan">$680</td>
                                        </tr>
                                        <tr>
                                            <td class="f-500 c-cyan">6598</td>
                                            <td>Samsung Galaxy Alpha</td>
                                            <td class="f-500 c-cyan">$870</td>
                                        </tr>
                                        <tr>
                                            <td class="f-500 c-cyan">4562</td>
                                            <td>LG G3</td>
                                            <td class="f-500 c-cyan">$690</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div id="recent-items-chart" class="flot-chart"></div>
                        </div>

                        <!-- Todo Lists -->
                        <div id="todo-lists">
                            <div class="tl-header">
                                <h2>Todo Lists</h2>
                                <small>Add, edit and manage your Todo Lists</small>

                                <ul class="actions actions-alt">
                                    <li class="dropdown">
                                        <a href="" data-toggle="dropdown">
                                            <i class="zmdi zmdi-more-vert"></i>
                                        </a>

                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li>
                                                <a href="">Refresh</a>
                                            </li>
                                            <li>
                                                <a href="">Manage Widgets</a>
                                            </li>
                                            <li>
                                                <a href="">Widgets Settings</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>

                            <div class="clearfix"></div>

                            <div class="tl-body">
                                <div id="add-tl-item">
                                    <i class="add-new-item zmdi zmdi-plus"></i>

                                    <div class="add-tl-body">
                                        <textarea placeholder="What you want to do..."></textarea>

                                        <div class="add-tl-actions">
                                            <a href="" data-tl-action="dismiss"><i class="zmdi zmdi-close"></i></a>
                                            <a href="" data-tl-action="save"><i class="zmdi zmdi-check"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="checkbox media">
                                    <div class="pull-right">
                                        <ul class="actions actions-alt">
                                            <li class="dropdown">
                                                <a href="" data-toggle="dropdown">
                                                    <i class="zmdi zmdi-more-vert"></i>
                                                </a>

                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="">Delete</a></li>
                                                    <li><a href="">Archive</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="media-body">
                                        <label>
                                            <input type="checkbox">
                                            <i class="input-helper"></i>
                                            <span>Duis vitae nibh molestie pharetra augue vitae</span>
                                        </label>
                                    </div>
                                </div>

                                <div class="checkbox media">
                                    <div class="pull-right">
                                        <ul class="actions actions-alt">
                                            <li class="dropdown">
                                                <a href="" data-toggle="dropdown">
                                                    <i class="zmdi zmdi-more-vert"></i>
                                                </a>

                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="">Delete</a></li>
                                                    <li><a href="">Archive</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="media-body">
                                        <label>
                                            <input type="checkbox">
                                            <i class="input-helper"></i>
                                            <span>In vel imperdiet leoorbi mollis leo sit amet quam fringilla varius
                                                mauris orci turpis</span>
                                        </label>
                                    </div>
                                </div>

                                <div class="checkbox media">
                                    <div class="pull-right">
                                        <ul class="actions actions-alt">
                                            <li class="dropdown">
                                                <a href="" data-toggle="dropdown">
                                                    <i class="zmdi zmdi-more-vert"></i>
                                                </a>

                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="">Delete</a></li>
                                                    <li><a href="">Archive</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="media-body">
                                        <label>
                                            <input type="checkbox">
                                            <i class="input-helper"></i>
                                            <span>Suspendisse quis sollicitudin erosvel dictum nunc</span>
                                        </label>
                                    </div>
                                </div>

                                <div class="checkbox media">
                                    <div class="pull-right">
                                        <ul class="actions actions-alt">
                                            <li class="dropdown">
                                                <a href="" data-toggle="dropdown">
                                                    <i class="zmdi zmdi-more-vert"></i>
                                                </a>

                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="">Delete</a></li>
                                                    <li><a href="">Archive</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="media-body">
                                        <label>
                                            <input type="checkbox">
                                            <i class="input-helper"></i>
                                            <span>Curabitur egestas finibus sapien quis faucibusras bibendum ut justo at
                                                sagittis. In hac habitasse platea dictumst</span>
                                        </label>
                                    </div>
                                </div>

                                <div class="checkbox media">
                                    <div class="pull-right">
                                        <ul class="actions actions-alt">
                                            <li class="dropdown">
                                                <a href="" data-toggle="dropdown">
                                                    <i class="zmdi zmdi-more-vert"></i>
                                                </a>

                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="">Delete</a></li>
                                                    <li><a href="">Archive</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="media-body">
                                        <label>
                                            <input type="checkbox">
                                            <i class="input-helper"></i>
                                            <span>Suspendisse potenti. Cras dolor augue, tincidunt sit amet lorem id,
                                                blandit rutrum libero</span>
                                        </label>
                                    </div>
                                </div>

                                <div class="checkbox media">
                                    <div class="pull-right">
                                        <ul class="actions actions-alt">
                                            <li class="dropdown">
                                                <a href="" data-toggle="dropdown">
                                                    <i class="zmdi zmdi-more-vert"></i>
                                                </a>

                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="">Delete</a></li>
                                                    <li><a href="">Archive</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="media-body">
                                        <label>
                                            <input type="checkbox">
                                            <i class="input-helper"></i>
                                            <span>Proin luctus dictum nisl id auctor. Nullam lobortis condimentum arcu
                                                sit amet gravida</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <!-- Calendar -->
                        <div id="calendar-widget"></div>

                        <!-- Recent Posts -->
                        <div class="card">
                            <div class="card-header ch-alt m-b-20">
                                <h2>Recent Posts <small>Phasellus condimentum ipsum id auctor imperdie</small></h2>
                                <ul class="actions">
                                    <li>
                                        <a href="">
                                            <i class="zmdi zmdi-refresh-alt"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <i class="zmdi zmdi-download"></i>
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="" data-toggle="dropdown">
                                            <i class="zmdi zmdi-more-vert"></i>
                                        </a>

                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li>
                                                <a href="">Change Date Range</a>
                                            </li>
                                            <li>
                                                <a href="">Change Graph Type</a>
                                            </li>
                                            <li>
                                                <a href="">Other Settings</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>

                                <button class="btn bgm-cyan btn-float"><i class="zmdi zmdi-plus"></i></button>
                            </div>

                            <div class="card-body">
                                <div class="listview">
                                    <a class="lv-item" href="">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="/components/img/profile-pics/1.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lv-title">David Belle</div>
                                                <small class="lv-small">Cum sociis natoque penatibus et magnis dis
                                                    parturient montes</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="lv-item" href="">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="/components/img/profile-pics/2.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lv-title">Jonathan Morris</div>
                                                <small class="lv-small">Nunc quis diam diamurabitur at dolor elementum,
                                                    dictum turpis vel</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="lv-item" href="">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="/components/img/profile-pics/3.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lv-title">Fredric Mitchell Jr.</div>
                                                <small class="lv-small">Phasellus a ante et est ornare accumsan at vel
                                                    magnauis blandit turpis at augue ultricies</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="lv-item" href="">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="/components/img/profile-pics/4.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lv-title">Glenn Jecobs</div>
                                                <small class="lv-small">Ut vitae lacus sem ellentesque maximus, nunc sit
                                                    amet varius dignissim, dui est consectetur neque</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="lv-item" href="">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="/components/img/profile-pics/4.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lv-title">Bill Phillips</div>
                                                <small class="lv-small">Proin laoreet commodo eros id faucibus. Donec
                                                    ligula quam, imperdiet vel ante placerat</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="lv-footer" href="">View All</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>

    <footer id="footer">
        Copyright &copy; 2015 Material Admin

        <ul class="f-menu">
            <li><a href="">Home</a></li>
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

    <!-- Older IE warning message -->
    <!--[if lt IE 9]>
            <div class="ie-warning">
                <h1 class="c-white">Warning!!</h1>
                <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
                <div class="iew-container">
                    <ul class="iew-download">
                        <li>
                            <a href="http://www.google.com/chrome/">
                                <img src="img/browsers/chrome.png" alt="">
                                <div>Chrome</div>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.mozilla.org/en-US/firefox/new/">
                                <img src="img/browsers/firefox.png" alt="">
                                <div>Firefox</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.opera.com">
                                <img src="img/browsers/opera.png" alt="">
                                <div>Opera</div>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.apple.com/safari/">
                                <img src="img/browsers/safari.png" alt="">
                                <div>Safari</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                                <img src="img/browsers/ie.png" alt="">
                                <div>IE (New)</div>
                            </a>
                        </li>
                    </ul>
                </div>
                <p>Sorry for the inconvenience!</p>
            </div>   
        <![endif]-->

    <!-- Javascript Libraries -->
    @include('main.public.script')

    <!-- Placeholder for IE9 -->
    <!--[if IE 9 ]>
            <script src="vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>
        <![endif]-->


</body>

</html>