<html>
    <head>
        <title>{{ $page->baseTitle }}</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ $page->baseUrl }}assets/assets/resources/styles.css">
        <script src="{{ $page->baseUrl }}assets/dist/all.js"></script>
        <link rel="shortcut icon" type="image/png" href="./favicon.ico"/>
    </head>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- <a class="navbar-brand" href="#"><i class="fa fa-building" aria-hidden="true"></i></a> -->
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#/">الصفحة الرئيسية</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    
    <body>
    @yield('body')
    </body>
   <footer>
        <div class="footer">
            <img src="{{ $page->baseUrl }}assets/assets/resources/img/logo.png" alt="">
            <b>جميع الحقوق محفوظة - 2018</b>
        </div>
    </footer>
    <script src="{{ $page->baseUrl }}assets/dist/core.js"></script>
</html>