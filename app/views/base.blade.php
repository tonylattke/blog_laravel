<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog with Laravel Framework">
    <meta name="author" content="Tony Lattke">

    <title>Laravel - Blog </title>

    <!-- This template com from http://startbootstrap.com/all-templates -->
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css"/>

    <!-- Add custom CSS here -->
    <link rel="stylesheet" href="css/main.css" type="text/css"/>

    <!-- Fonts -->

    <!-- IE8 support for HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <link rel="icon" type='image/x-icon' href="favicon.ico">
</head>

<body>
    <div class="container">
        
        <a href="/home">
            <img id="banner" src="http://placehold.it/1170x300" class="img-responsive">
        </a>

        <div class="row">
            <div class="col-lg-8">
                @yield('principal_content')
            </div>

            <div class="col-lg-4">

                    <!-- list of years -->
                    <div class="well">
                        <h4>Last posts</h4>
                        <ul class="list-unstyled">
                            
                            <li>
                                <a href="/year/2014">2014</a>
                            </li>
                            
                        </ul>
                    </div>
                    <!-- list of years -->

                    <!-- New Post -->
                    <div class="well">
                        <a href="/post/new">Create Post</a>
                    </div>
                    <!-- New Post -->

                    <!-- Logout -->
                    <div class="well">
                        <a href="/logout">Logout</a>
                    </div>
                    <!-- Logout -->

                    <!-- Login -->
                    <div class="well">
                        <a href="/login">Login</a>
                    </div>
                    <!-- Login -->

                <div class="well">
                    <a href="/posts.json">Export all posts to Json</a>
                </div>
                

                <div class="well">
                    <img src="img/logo-tony.png" id="logo">
                </div>
            </div>
        </div>

        <hr>

        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Developed by Tony Lattke - Laravel Blog 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/base.js"></script>

    <!-- Javascript end -->

</body>

</html>