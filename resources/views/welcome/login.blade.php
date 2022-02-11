<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Stoke Restaurants</title>

    <!-- Vendor CSS -->
    <link href="/components/vendors/bower_components/animate.css/animate.min.css" rel="stylesheet">
    <link
        href="/components/vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css"
        rel="stylesheet">

    <!-- CSS -->
    <link href="{{asset('/components/css/app.min.1.css')}}" rel="stylesheet">
    <link href="{{asset('/components/css/app.min.2.css')}}" rel="stylesheet">
    <link href="{{asset('/components/css/customised.css')}}" rel="stylesheet">

    <!-- Background Video -->
    <video class="video-tvc" id="video-tvc" autoplay loop="loop" muted>
        <source src="/components/video/loginBgVideo.mp4" type="video/mp4" />
    </video>

    <!-- <script>
        function checkForm() {
            var nodex = document.getElementById("username");
            var reg = /^\s*$/; // if there is zero or more spaces, return true
            if (reg.test(nodex.value)) {
                return false;
            } else {
                return true;
            }
        }
    </script> -->
</head>

<body class="sw-toggled opacity-25">
    <!-- Login -->
    <form class="user" method="POST" action="/admin/homepage" onsubmit="return checkForm()">
        {{csrf_field()}}
        <div class="lc-block toggled opacity" id="l-login">
            @if(is_object($errors))
            @foreach($errors->all() as $error)
            <div class="alert alert-danger alert-dismissable" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                {{$error}}!
            </div>
            @endforeach
            @else
            <div class="alert alert-danger" role="alert">
                {{$errors}}
            </div>
            @endif
            <div class="input-group m-b-20">
                <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
                <div class="fg-line">
                    <input type="text" class="form-control" placeholder="Username" name="username" id="username">
                </div>
                <!-- <span class="input-group-addon">xxxxx</span> -->
            </div>

            <div class="input-group m-b-20">
                <span class="input-group-addon"><i class="zmdi zmdi-male"></i></span>
                <div class="fg-line">
                    <input type="password" class="form-control" placeholder="Password" name="password">
                </div>
            </div>

            <div class="input-group m-b-20">
                <span class="input-group-addon"><i class="zmdi zmdi-camera-alt"></i></span>
                <div class="fg-line">
                    <input type="text" id="verifyCode" class="form-control" placeholder="Verify Code" name="code">
                </div>
            </div>

            <img src="{{captcha_src('flat')}}" alt="" onclick="this.src='{{captcha_src('flat')}}'+Math.random()"
                class="verifycodeImg">
            <p class="notification">Click Image to Change!</p>

            <div class="clearfix"></div>

            <div class="checkbox">
                <label>
                    <input type="checkbox" value="">
                    <i class="input-helper"></i>
                    Keep me signed in
                </label>
            </div>
    </form>
    <button type="submit" class=" btn btn-login btn-danger btn-float"><i class="zmdi zmdi-arrow-forward"></i></button>
    <!--login-->

    <ul class="login-navigation">
        <li data-block="#l-register" class="bgm-red">Register</li>
        <li data-block="#l-forget-password" class="bgm-orange">Forgot Password?</li>
    </ul>
    </div>

    <!-- Register -->
    <div class="lc-block" id="l-register">
        <div class="input-group m-b-20">
            <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
            <div class="fg-line">
                <input type="text" class="form-control" placeholder="Username">
            </div>
        </div>

        <div class="input-group m-b-20">
            <span class="input-group-addon"><i class="zmdi zmdi-email"></i></span>
            <div class="fg-line">
                <input type="text" class="form-control" placeholder="Email Address">
            </div>
        </div>

        <div class="input-group m-b-20">
            <span class="input-group-addon"><i class="zmdi zmdi-male"></i></span>
            <div class="fg-line">
                <input type="password" class="form-control" placeholder="Password">
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="checkbox">
            <label>
                <input type="checkbox" value="">
                <i class="input-helper"></i>
                Accept the license agreement
            </label>
        </div>

        <a href="" class="btn btn-login btn-danger btn-float"><i class="zmdi zmdi-arrow-forward"></i></a>

        <ul class="login-navigation">
            <li data-block="#l-login" class="bgm-green">Login</li>
            <li data-block="#l-forget-password" class="bgm-orange">Forgot Password?</li>
        </ul>
    </div>

    <!-- Forgot Password -->
    <div class="lc-block" id="l-forget-password">
        <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu risus. Curabitur commodo
            lorem fringilla enim feugiat commodo sed ac lacus.</p>

        <div class="input-group m-b-20">
            <span class="input-group-addon"><i class="zmdi zmdi-email"></i></span>
            <div class="fg-line">
                <input type="text" class="form-control" placeholder="Email Address">
            </div>
        </div>

        <a href="" class="btn btn-login btn-danger btn-float"><i class="zmdi zmdi-arrow-forward"></i></a>

        <ul class="login-navigation">
            <li data-block="#l-login" class="bgm-green">Login</li>
            <li data-block="#l-register" class="bgm-red">Register</li>
        </ul>
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
    <script src="/components/vendors/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="/components/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="/components/vendors/bower_components/Waves/dist/waves.min.js"></script>

    <!-- Placeholder for IE9 -->
    <!--[if IE 9 ]>
            <script src="vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>
        <![endif]-->

    <script src="/components/js/functions.js"></script>

</body>

</html>