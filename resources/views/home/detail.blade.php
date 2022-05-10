<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Restauran | Details </title>

    <!-- Vendor CSS -->
    @include('main.public.style')
    @include('main.public.script')
</head>

<body>
    <header id="header-2" class="clearfix" data-current-skin="teal">
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
                                <a href="/admin/login"><i class="zmdi zmdi-settings"></i> Log Out</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>

        <div class="search">
        </div>
        <nav class="ha-menu">
            <ul>
                <li class="waves-effect"><a href="/admin/dashboard">Dashboard</a></li>
                <li class="waves-effect"><a href="restauratns-details">Restaurants Details</a></li>
                <li class="waves-effect"><a href="index.html">Price Comparison</a></li>
                <li class="waves-effect"><a href="index.html">Meal Preview</a></li>
                <li class="waves-effect"><a href="comments/index">Share Your Experience</a></li>
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
                <span class="ss-skin ss-8 bgm-lightred" data-skin="lightred"></span>
            </div>
        </div>
    </header>
    <!--header ends -->
    <section id="main">
        <div class="row">
            @foreach($resdata as $val)
            <div class="card col-lg-4 col-sm-6 mb-4 p-4">
                <div class=" card-header">
                    <h2>{{$val->r_name}}</h2>
                </div>

                <div class="card-body">
                    <ul class="tab-nav tn-justified tn-icon" role="tablist">
                        <li role="presentation" class="active">
                            <a class="col-sx-4" href="#tab-1" aria-controls="tab-1" role="tab" data-toggle="tab">
                                <i class="zmdi zmdi-home icon-tab"></i>
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content p-20">
                        <div role="tabpanel" class="tab-pane animated fadeIn in active" id="tab-1">
                            <img src="/components/img/portfolio/3.jpg" class="img-responsive m-b-15" alt="">
                            <div class="pmo-contact">
                                <ul>
                                    <li class="ng-binding"><i class="zmdi zmdi-phone"></i>{{$val->r_contacts}}</li>
                                    <li class="ng-binding"><i class="zmdi zmdi-pin"></i>{{$val->r_location}}</li>
                                    <li class="ng-binding"><i class="zmdi zmdi-email"></i>{{$val->r_postcode}}
                                    </li>
                                    <li class="ng-binding"><i class="zmdi zmdi-cutlery"></i> {{$val->r_type}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="pagination">
            {{$resdata->links()}}
        </div>
    </section>
    <footer id="footer">
        Copyright &copy; 2020 Stoke Restaurants

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

</body>

</html>