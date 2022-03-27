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
    <div class="col-md-8 m-5">
        <div class="card wall-posting">
            <div class="card-body card-padding">
                <form class="wp-text" action="/admin/comments" method="POST">
                    @csrf
                    <textarea name="comment" class="wp-text" data-auto-size placeholder="Write Something..."></textarea>
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
</body>

</html>