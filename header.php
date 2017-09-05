<!doctype html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"><!--<![endif]-->

    <head>
        <meta charset="utf-8">

        <?php // force Internet Explorer to use the latest rendering engine available ?>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <?php
        $sitename = 'Mayra Perales';
        $pagetitle;

        if(isset($pagetitle)){
            echo "<title>".$sitename." | ".$pagetitle."</title>";
        }
        else {
            echo "<title>".$sitename."</title>";
        }
        ?>

        <?php // mobile meta?>
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <?php // icons & favicons ?>
        <link rel="apple-touch-icon" href="images/apple-icon-touch.png">
        <link rel="icon" href="favicon.png">
        <!--[if IE]>
            <link rel="shortcut icon" href="favicon.ico">
        <![endif]-->
        <?php // favicon.ico for IE10 win ?>
        <meta name="msapplication-TileColor" content="#FFFFFF">
        <meta name="msapplication-TileImage" content="images/win8-tile-icon.png">
        <link rel="stylesheet" href="css/style.css">
        <script type="text/javascript" src="js/modernizr.custom.min.js"></script>
    </head>

    <body>
        <?php // Our SVG Library - Do not remove! ?>
        <?php echo @file_get_contents("images/svg/sprite.symbol.svg"); ?>

        <div class="mjp-layout-container">

            <header class="mjp-header cf" role="banner">

                <div class="mjp-layout-constrain">
                    <h1 class="h3 mjp-mar-b0 mjp-header__site-title"><a aria-label="Go back to the homepage" href="/">Mayra Perales</a></h1>
                    <h2 class="h4 mjp-cabin mjp-mar-t0">Front &amp; Back End Developer</h2>
                </div>

                <?php // #menu-main-menu for meanmenu.js?>
                <nav class="mjp-layout-constrain mjp-main-nav mjp-pad-t0 mjp-pad-b0">

                    <?php
                    /**
                     * Make sure to have a container with the #main ID
                     * include it in the main content
                     */
                    ?>
                    <a aria-hidden="true" href="#main" class="mjp-skip-nav mjp-visuallyhidden">Skip to main content</a>
                    <ul class="mjp-top-nav cf">
                        <li><a href="#">Work</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </nav>
            </header><!-- end of .mjp-header -->
