<!DOCTYPE html>
<html>
<head>
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/summernote-master/dist/summernote.css">
    <meta charset="UTF-8">
    <title>Create Blog</title>
    <style type="text/css">
        .bg-white {
            background: #ffffff;
            opacity: .9;
        }
        .popover-content{
            display: none;

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
                <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
            </div>
        </div>
    </header>

    <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
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
        <form action="create.php" method="post">
            <h2>Create blog:</h2>
            <textarea type="text" class="form-control" placeholder="Title"></textarea>
            <h2>Content:</h2>
            <textarea class="summernote" name="editordata"></textarea>

        </form>
    </div>

    &nbsp;&nbsp;<input class="btn btn-sm btn-outline-secondary" value="Submit">
</div>

<main role="main" class="container bg-white">
    <div class="row">
        <div class="col-md-8 blog-main">
            <h3 class="pb-3 mb-4 font-italic border-bottom">
            </h3>
        </div><!-- /.blog-main -->
    </div><!-- /.row -->
</main><!-- /.container -->

<footer class="blog-footer bg-white">
    <p>Kenji built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.
    </p>
    <p>
        <a href="#">Back to top</a>
    </p>
</footer>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://getbootstrap.com/assets/js/vendor/popper.min.js"></script>
<script src="https://getbootstrap.com/dist/js/bootstrap.min.js"></script>
<script src="https://getbootstrap.com/assets/js/vendor/holder.min.js"></script>
<script src="/assets/summernote-master/dist/summernote.js"></script>
<script>
    Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
    });
    $(document).ready(function () {
        $('.summernote').summernote({
            placeholder: 'Content',
            height: 500
        });
    });
</script>

</body>
</html>