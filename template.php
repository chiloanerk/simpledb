<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Template for an interactive web page</title>
    <!-- Bootstrap CSS File -->
    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
          integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4"
          crossorigin="anonymous">
</head>
<body>
<div class="container" style="margin-top:30px">
    <!-- Header Section #1-->
    <header class="jumbotron text-center row"
            style="margin-bottom:2px; background:linear-gradient(white, #0073e6);padding:20px;">
        <?php include('header-for-template.php'); ?>
    </header>

    <!-- Body Section #2-->
    <div class="row" style="padding-left: 0;">
        <!-- Left-side Column Menu Section -->
        <nav class="col-sm-2">
            <ul class="nav nav-pills flex-column">
                <?php include('nav.php'); ?>
            </ul>
        </nav>
        <!-- Center Column Content Section -->
        <div class="col-sm-8">
            <h2 class="text-center">This is the Home Page</h2>
            <p>The home page content. The home page content. The home page content. The home
                page content. <br>
                The home page content. The home page content. The home page content. The home page
                content. <br>
                The home page content. The home page content. <br>
                The home page content. The home page content. The home page content. </p>
        </div>

        <!-- Right-side Column Content Section #3-->
        <aside class="col-sm-2">
            <?php include('info-col.php'); ?>
        </aside>
    </div>
    <!-- Footer Content Section #4-->
    <footer class="jumbotron text-center row"
            style="padding-bottom:1px; padding-top:8px;">
        <?php include('footer.php'); ?>
    </footer>
</div>


</body>
</html>