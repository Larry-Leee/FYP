<!-- /*
/*
 * @Author: Li, Hang
 * @Date: 2021-04-28 20:11:20
 * @LastEditors: Li, Hang
 * @FilePath: /finalYearProject/resources/views/welcome/index.blade.php
 */
* @Author: Larry
* @Date: 2022-01-21 19:30:35
 * @LastEditTime: 2022-02-05 19:18:22
* @LastEditors: Please set LastEditors
* @Description: 打开koroFileHeader查看配置 进行设置: https://github.com/OBKoro1/koro1FileHeader/wiki/%E9%85%8D%E7%BD%AE
* @FilePath: /finalYearProject/resources/views/welcome/index.blade.php
*/ -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Restaurants</title>
    <link rel="icon" type="image/x-icon" href="/components/assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i"
        rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" href="{{ asset('/components/css/styles.css')}}" type="text/css">
    <!-- customised CSS formate -->
    <link rel="stylesheet" href="{{ asset('/components/css/customised.css')}}" type="text/css">
    <link rel="shortcut icon" type="image/png" href="components/img/icon.png" />
</head>

<body>
    <!-- Navigation-->
    <nav class=" navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#!">Stoke Restaurants</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span
                    class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">Sign Up</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="masthead text-center text-white">
        <div class="masthead-content">
            <div class="container">
                <h1 class="masthead-heading mb-0">Nice To Meet You</h1>
                <h2 class="masthead-subheading mb-0">Find A Suitable Restaurant Around Stoke</h2>
                <a class="btn btn-primary btn-xl rounded-pill mt-5" href="/admin/login">Log In</a>
            </div>
        </div>
        <div class="bg-circle-1 bg-circle"></div>
        <div class="bg-circle-2 bg-circle"></div>
        <div class="bg-circle-3 bg-circle"></div>
        <div class="bg-circle-4 bg-circle"></div>
    </header>
    <!-- Footer starts here-->
    <footer class="py-1 bg-black">
        <div class="container">
            <p class="m-1 text-center small"><b>Copyright &copy; Stoke Restaurant 2022</b></p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="/components/js/scripts.js"></script>
</body>

</html>