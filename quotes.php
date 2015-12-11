<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Papyrus">
    <link rel="shortcut icon" href="img/favicon.ico">

    <title>Quotes</title>

    <!-- Bootstrap Core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="custom.css" rel="stylesheet" type="text/css">

    <!-- Core JavaScript Files -->
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/scrolling-nav.js"></script>

    <script>
        $(function () {
            $("#footer").load("./footer.html");
        });
    </script>


</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <nav class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">

            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand navbar-brand-custom" href="index.php"><img class="img-responsive" src="img/papyrus-logo.png" alt="Papyrus"></a>
            </div>

            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="index.php#technologies">Technologies</a>
                    </li>
                    <li class="page-scroll">
                        <a href="download.html">Downloads</a>
                    </li>
                    <li class="page-scroll">
                        <a href="documentation.html">Documentation</a>
                    </li>
                    <li class="page-scroll">
                        <a href="community.html">Community</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>

    <section class="custom-section">
         <h1 class="section-title">Quotes</h1>
        <div class="container">
            <?php
                require_once ('quotes/quotes2html.php');
                $papyrusquotes = quote_to_html("quotes/quotes.xml");
                echo $papyrusquotes;
            ?>
        </div>
    </section>


    <div id="footer"></div>

</body>

</html>