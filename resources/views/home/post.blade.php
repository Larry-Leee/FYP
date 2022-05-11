<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Feedback | Comments</title>

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
                <li class="waves-effect"><a href="/admin/restauratns-details">Restaurant Details</a></li>
                <li class="waves-effect"><a href="/admin/meal-preview">Meal Preview</a></li>
                <li class="waves-effect"><a href="/admin/comments/index">Share Your Experience</a></li>
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

        <div class="col-md-12">
            <div class="card wall-posting col-9" style="margin-left:190px;">
                <div class="card-body card-padding">
                    <form class="wp-text" action="/admin/comments/" method="POST">
                        @csrf
                        <textarea name="comment" class="wp-text" data-auto-size
                            placeholder="Write Something..."></textarea>
                        <div class="tab-content p-0">
                            <div class="wp-media tab-pane" id="wpm-image">
                                Images - Coming soon...
                            </div>

                            <div class="wp-media tab-pane" id="wpm-video">
                                Video Links - Coming soon...
                            </div>

                            <div class="wp-media tab-pane" id="wpm-link">
                                Links - Coming soon...
                            </div>
                        </div>
                </div>
                <ul class="list-unstyled clearfix wpb-actions">
                    <li class="wpba-attrs">
                        <ul class="list-unstyled list-inline m-l-0 m-t-5">
                            <li><a data-wpba="image" data-toggle="tab" href="" data-target="#wpm-image"><i
                                        class="zmdi zmdi-image"></i></a></li>
                            <li><a data-wpba="video" data-toggle="tab" href="" data-target="#wpm-video"><i
                                        class="zmdi zmdi-play-circle"></i></a></li>
                            <li><a data-wpba="link" data-toggle="tab" href="" data-target="#wpm-link"><i
                                        class="zmdi zmdi-link"></i></a></li>
                        </ul>
                    </li>
                    <li class="pull-right"><button type="submit" class="btn btn-primary btn-sm">Post</button></li>
                </ul>
                </form>
            </div>
            @foreach ($post as $val)
            <div class="row">
                <div class="card col-md-9" style="margin-left: 200px;">
                    <div class="card-header">
                        <div class="media">
                            <div class="pull-left">
                                <img class="lv-img" src="/components/img/profile-pics/1.jpg" alt="">
                            </div>
                            <div class="media-body m-t-10">

                                <h2>{{$val->user}}<small>Posted on {{$val->created_at}}</small>
                                </h2>
                            </div>
                        </div>
                    </div>

                    <div class="card-body card-padding">
                        <p style="font-family: Franklin Gothic Medium; font-size: 15px;">
                            {{$val->comment}}
                        </p>
                        <div class="wall-img-preview lightbox clearfix">
                            <div class="wip-item" data-src="/components/img/headers/4.png"
                                style="background-image: url(/components/img/headers/4.png);">
                                <div class="lightbox-item"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
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


</body>

</html>