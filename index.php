<!doctype html>
<html>
<head>
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/style.css">
    <meta charset="UTF-8">
    <title>blog</title>
    <style type="text/css">
        .bg-white{
            background: #ffffff;
            opacity: .9;
        }
    </style>
</head>
<body style="background: url('images/background.jpg') fixed; background-size: auto;">
<div class="container  bg-white">
    <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-4 text-center">
                <a class="blog-header-logo text-dark" href="index.php">KEN BLOG</a>
            </div>
            <div class="col-4 d-flex justify-content-end align-items-center">
                <a class="text-muted" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3"><circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>
                </a>
                <a class="btn btn-sm btn-outline-secondary" href="article_create.php">Create</a>&nbsp;&nbsp;&nbsp;<a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
            </div>
        </div>
    </header>

    <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between"S>
            <h5>
            <a class="p-2 text-muted" href="#">World</a>
            <a class="p-2 text-muted" href="#">Thailand</a>
            <a class="p-2 text-muted" href="#">Technology</a>
            <a class="p-2 text-muted" href="#">Design</a>
            <a class="p-2 text-muted" href="#">Culture</a>
            <a class="p-2 text-muted" href="#">Business</a>
            <a class="p-2 text-muted" href="#">Politics</a>
            <a class="p-2 text-muted" href="#">Opinion</a>
            <a class="p-2 text-muted" href="#">Science</a>
            <a class="p-2 text-muted" href="#">Health</a>
            <a class="p-2 text-muted" href="#">Style</a>
            <a class="p-2 text-muted" href="#">Travel</a>
            </h5>
        </nav>
    </div>

    <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="images/erawan_travel.jpg" height="450" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>Travel</h1>

                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/business.jpg" height="450"  alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>Business</h1>

                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/Culture.jpg" height="450" alt="Third slide"><div class="carousel-caption d-none d-md-block">
                        <h1>Culture</h1>

                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-md-6">
            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-primary">Business</strong>
                    <h3 class="mb-0">
                        <a class="text-dark" href="#">Featured post</a>
                    </h3>
                    <div class="mb-1 text-muted">Jan 20</div>
                    <p class="card-text mb-auto">You ideas,Oue work </p>
                    <a href="#">Continue reading</a>
                </div>
                <img class="card-img-right flex-auto d-none d-md-block" src="images/lattesoft.jpg" alt="Card image cap">
            </div>
        </div>
        <div class="col-md-6">
            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-success">Thailand</strong>
                    <h3 class="mb-0">
                        <a class="text-dark" href="#">BNK48 WE NEED YOU 2nd Generation Audition </a>
                    </h3>
                    <div class="mb-1 text-muted">24 Dec</div>
                    <p class="card-text mb-auto"></p>
                    <a href="#">Continue reading</a>
                </div>
                <img class="card-img-right flex-auto d-none d-md-block" src="images/bnk48.jpg" width="300" alt="Card image cap">
            </div>
        </div>
    </div>
</div>

<main role="main" class="container bg-white">
    <div class="row">
        <div class="col-md-8 blog-main">
            <h3 class="pb-3 mb-4 font-italic border-bottom">
            </h3>

            <div class="blog-post">
                <img class="d-block w-100" src="images/japan.jpg" >
                <a class="blog-post-title" href="artile_show.php"> <strong>“JAPAN EXPO THAILAND”
                        THE BIGGEST ALL JAPAN EVENT IN THAILAND AND ASIA</strong> </a>
                <p class="blog-post-meta">January 20, 2018 by <a href="#">kenji</a></p>

            </div><!-- /.blog-post -->

            <div class="blog-post">
                <img class="d-block w-90" src="images/bcc_tcc.jpg">
                <h2 class="blog-post-title">Bangkok Comic Con x Thailand Comic Con 2018</h2>
                <p class="blog-post-meta">January 20, 2018 by<a href="#">kenji</a></p>

            </div><!-- /.blog-post -->

            <div class="blog-post">
                <img class="d-block w-85" src="images/TGS.jpg">
                <a class="blog-post-title"><strong>THAILAND GAME SHOW BIG FESTIVAL 2017</strong></a>
                <p class="blog-post-meta">October 20, 2017 by<a href="#">kenji</a></p>

            </div><!-- /.blog-post -->

            <nav class="blog-pagination">
                <a class="btn btn-outline-primary" href="#">Older</a>
                <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
            </nav>

        </div><!-- /.blog-main -->

        <aside class="col-md-4 blog-sidebar">
            <div class="p-3 mb-3 bg-light rounded">
                <h4 class="font-italic">About</h4>
                <p class="mb-0">Thailand,cosplay,japan,fetival</p>
            </div>

            <div class="p-3">
                <h4 class="font-italic">Archives</h4>
                <ol class="list-unstyled mb-0">
                    <li><a href="#">January 2018</a></li>
                    <li><a href="#">December 2017</a></li>
                    <li><a href="#">November 2017</a></li>
                    <li><a href="#">October 2017</a></li>
                    <li><a href="#">September 2017</a></li>
                    <li><a href="#">August 2017</a></li>
                    <li><a href="#">July 2017</a></li>
                    <li><a href="#">June 2017</a></li>
                    <li><a href="#">May 2017</a></li>
                    <li><a href="#">April 2017</a></li>
                </ol>
            </div>

            <div class="p-3">
                <h4 class="font-italic">Elsewhere</h4>
                <ol class="list-unstyled">
                    <li><a href="#">GitHub</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Facebook</a></li>
                </ol>
            </div>
        </aside><!-- /.blog-sidebar -->

    </div><!-- /.row -->

</main><!-- /.container -->

<footer class="blog-footer bg-white">
    <p>Kenji built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
    <p>
        <a href="#">Back to top</a>
    </p>
</footer>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://getbootstrap.com/assets/js/vendor/holder.min.js"></script>
<script>window.jQuery || document.write('<script src="https://getbootstrap.com/assets/js/vendor/popper.min.js"><\/script>')</script>
<script src="https://getbootstrap.com/assets/js/vendor/popper.min.js"></script>
<script src="https://getbootstrap.com/dist/js/bootstrap.min.js"></script>
<script src="https://getbootstrap.com/assets/js/vendor/holder.min.js"></script>
<script>
    Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
    });
</script>

</body>
</html>