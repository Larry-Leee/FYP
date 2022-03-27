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
            <div class="fg-line">
                <input type="text" class="form-control" placeholder="Search...">
            </div>
        </div>
        <nav class="ha-menu">
            <ul>
                <li class="waves-effect"><a href="homepage">Home</a></li>
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
                <span class="ss-skin ss-8 bgm-lightred" data-skin="lightred"></span>
            </div>
        </div>
    </header>
    <!--header ends -->
    <section id="main">
        <aside id="sidebar" class="sidebar c-overflow">
            <div class="profile-menu">
                <a href="">
                    <div class="profile-pic">
                        <img src="/components/img/profile-pics/1.jpg" alt="">
                    </div>

                    <div class="profile-info">
                        Malinda Hollaway

                        <i class="zmdi zmdi-caret-down"></i>
                    </div>
                </a>

                <ul class="main-menu">
                    <li>
                        <a href="profile-about.html"><i class="zmdi zmdi-account"></i> View Profile</a>
                    </li>
                    <li>
                        <a href=""><i class="zmdi zmdi-input-antenna"></i> Privacy Settings</a>
                    </li>
                    <li>
                        <a href=""><i class="zmdi zmdi-settings"></i> Settings</a>
                    </li>
                    <li>
                        <a href=""><i class="zmdi zmdi-time-restore"></i> Logout</a>
                    </li>
                </ul>
            </div>

            <ul class="main-menu">
                <li><a href="index.html"><i class="zmdi zmdi-home"></i> Home</a></li>
                <li class="sub-menu">
                    <a href=""><i class="zmdi zmdi-view-compact"></i> Headers</a>

                    <ul>
                        <li><a href="textual-menu.html">Textual menu</a></li>
                        <li><a href="image-logo.html">Image logo</a></li>
                        <li><a href="top-mainmenu.html">Mainmenu on top</a></li>
                    </ul>
                </li>
                <li><a href="typography.html"><i class="zmdi zmdi-format-underlined"></i> Typography</a></li>
                <li class="sub-menu">
                    <a href=""><i class="zmdi zmdi-widgets"></i> Widgets</a>

                    <ul>
                        <li><a href="widget-templates.html">Templates</a></li>
                        <li><a href="widgets.html">Widgets</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href=""><i class="zmdi zmdi-view-list"></i> Tables</a>

                    <ul>
                        <li><a href="tables.html">Normal Tables</a></li>
                        <li><a href="data-tables.html">Data Tables</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href=""><i class="zmdi zmdi-collection-text"></i> Forms</a>

                    <ul>
                        <li><a href="form-elements.html">Basic Form Elements</a></li>
                        <li><a href="form-components.html">Form Components</a></li>
                        <li><a href="form-examples.html">Form Examples</a></li>
                        <li><a href="form-validations.html">Form Validation</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href=""><i class="zmdi zmdi-swap-alt"></i>User Interface</a>
                    <ul>
                        <li><a href="colors.html">Colors</a></li>
                        <li><a href="animations.html">Animations</a></li>
                        <li><a href="box-shadow.html">Box Shadow</a></li>
                        <li><a href="buttons.html">Buttons</a></li>
                        <li><a href="icons.html">Icons</a></li>
                        <li><a href="alerts.html">Alerts</a></li>
                        <li><a href="preloaders.html">Preloaders</a></li>
                        <li><a href="notification-dialog.html">Notifications & Dialogs</a></li>
                        <li><a href="media.html">Media</a></li>
                        <li><a href="components.html">Components</a></li>
                        <li><a href="other-components.html">Others</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href=""><i class="zmdi zmdi-trending-up"></i>Charts</a>
                    <ul>
                        <li><a href="flot-charts.html">Flot Charts</a></li>
                        <li><a href="other-charts.html">Other Charts</a></li>
                    </ul>
                </li>
                <li><a href="calendar.html"><i class="zmdi zmdi-calendar"></i> Calendar</a></li>
                <li class="sub-menu">
                    <a href=""><i class="zmdi zmdi-image"></i>Photo Gallery</a>
                    <ul>
                        <li><a href="photos.html">Default</a></li>
                        <li><a href="photo-timeline.html">Timeline</a></li>
                    </ul>
                </li>

                <li><a href="generic-classes.html"><i class="zmdi zmdi-layers"></i> Generic Classes</a></li>
                <li class="sub-menu active toggled">
                    <a href=""><i class="zmdi zmdi-collection-item"></i> Sample Pages</a>
                    <ul>

                        <li><a href="profile-about.html">Profile</a></li>
                        <li><a href="list-view.html">List View</a></li>
                        <li><a href="messages.html">Messages</a></li>
                        <li><a href="pricing-table.html">Pricing Table</a></li>
                        <li><a href="contacts.html">Contacts</a></li>
                        <li><a class="active" href="wall.html">Wall</a></li>
                        <li><a href="invoice.html">Invoice</a></li>
                        <li><a href="login.html">Login and Sign Up</a></li>
                        <li><a href="lockscreen.html">Lockscreen</a></li>
                        <li><a href="404.html">Error 404</a></li>

                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="form-examples.html"><i class="zmdi zmdi-menu"></i> 3 Level Menu</a>

                    <ul>
                        <li><a href="form-elements.html">Level 2 link</a></li>
                        <li><a href="form-components.html">Another level 2 Link</a></li>
                        <li class="sub-menu">
                            <a href="form-examples.html">I have children too</a>

                            <ul>
                                <li><a href="">Level 3 link</a></li>
                                <li><a href="">Another Level 3 link</a></li>
                                <li><a href="">Third one</a></li>
                            </ul>
                        </li>
                        <li><a href="form-validations.html">One more 2</a></li>
                    </ul>
                </li>
            </ul>
        </aside>

        <aside id="chat" class="sidebar c-overflow">

            <div class="chat-search">
                <div class="fg-line">
                    <input type="text" class="form-control" placeholder="Search People">
                </div>
            </div>

            <div class="listview">
                <a class="lv-item" href="">
                    <div class="media">
                        <div class="pull-left p-relative">
                            <img class="lv-img-sm" src="/components/img/profile-pics/2.jpg" alt="">
                            <i class="chat-status-busy"></i>
                        </div>
                        <div class="media-body">
                            <div class="lv-title">Jonathan Morris</div>
                            <small class="lv-small">Available</small>
                        </div>
                    </div>
                </a>

                <a class="lv-item" href="">
                    <div class="media">
                        <div class="pull-left">
                            <img class="lv-img-sm" src="img/profile-pics/1.jpg" alt="">
                        </div>
                        <div class="media-body">
                            <div class="lv-title">David Belle</div>
                            <small class="lv-small">Last seen 3 hours ago</small>
                        </div>
                    </div>
                </a>

                <a class="lv-item" href="">
                    <div class="media">
                        <div class="pull-left p-relative">
                            <img class="lv-img-sm" src="/components/img/profile-pics/3.jpg" alt="">
                            <i class="chat-status-online"></i>
                        </div>
                        <div class="media-body">
                            <div class="lv-title">Fredric Mitchell Jr.</div>
                            <small class="lv-small">Availble</small>
                        </div>
                    </div>
                </a>

                <a class="lv-item" href="">
                    <div class="media">
                        <div class="pull-left p-relative">
                            <img class="lv-img-sm" src="img/profile-pics/4.jpg" alt="">
                            <i class="chat-status-online"></i>
                        </div>
                        <div class="media-body">
                            <div class="lv-title">Glenn Jecobs</div>
                            <small class="lv-small">Availble</small>
                        </div>
                    </div>
                </a>

                <a class="lv-item" href="">
                    <div class="media">
                        <div class="pull-left">
                            <img class="lv-img-sm" src="img/profile-pics/5.jpg" alt="">
                        </div>
                        <div class="media-body">
                            <div class="lv-title">Bill Phillips</div>
                            <small class="lv-small">Last seen 3 days ago</small>
                        </div>
                    </div>
                </a>

                <a class="lv-item" href="">
                    <div class="media">
                        <div class="pull-left">
                            <img class="lv-img-sm" src="img/profile-pics/6.jpg" alt="">
                        </div>
                        <div class="media-body">
                            <div class="lv-title">Wendy Mitchell</div>
                            <small class="lv-small">Last seen 2 minutes ago</small>
                        </div>
                    </div>
                </a>
                <a class="lv-item" href="">
                    <div class="media">
                        <div class="pull-left p-relative">
                            <img class="lv-img-sm" src="img/profile-pics/7.jpg" alt="">
                            <i class="chat-status-busy"></i>
                        </div>
                        <div class="media-body">
                            <div class="lv-title">Teena Bell Ann</div>
                            <small class="lv-small">Busy</small>
                        </div>
                    </div>
                </a>
            </div>
        </aside>

        <div class="col-md-12">
            <div class="card wall-posting">
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
                <div class="card col-md-12">
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
                        <p>
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

        <div class="col-md-4 hidden-sm">

            <div class="pl-body">
                <div class="col-xs-3">
                    <a href="">
                        <img src="img/headers/square/1.png" alt="">
                    </a>
                </div>

                <div class="col-xs-3">
                    <a href="">
                        <img src="img/headers/square/2.png" alt="">
                    </a>
                </div>
                <div class="col-xs-3">
                    <a href="">
                        <img src="img/headers/square/3.png" alt="">
                    </a>
                </div>
                <div class="col-xs-3">
                    <a href="">
                        <img src="img/headers/square/4.png" alt="">
                    </a>
                </div>
                <div class="col-xs-3">
                    <a href="">
                        <img src="img/headers/square/5.png" alt="">
                    </a>
                </div>
                <div class="col-xs-3">
                    <a href="">
                        <img src="img/headers/square/6.png" alt="">
                    </a>
                </div>
                <div class="col-xs-3">
                    <a href="">
                        <img src="img/headers/square/7.png" alt="">
                    </a>
                </div>
                <div class="col-xs-3">
                    <a href="">
                        <img src="img/headers/square/8.png" alt="">
                    </a>
                </div>
                <div class="col-xs-3">
                    <a href="">
                        <img src="img/headers/square/9.png" alt="">
                    </a>
                </div>
                <div class="col-xs-3">
                    <a href="">
                        <img src="img/headers/square/1.png" alt="">
                    </a>
                </div>
                <div class="col-xs-3">
                    <a href="">
                        <img src="img/headers/square/2.png" alt="">
                    </a>
                </div>
                <div class="col-xs-3">
                    <a href="">
                        <img src="img/headers/square/3.png" alt="">
                    </a>
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


</body>

</html>