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
        /**
         * So I can have different titles
         * on each page
         */
        $sitename = 'Mayra Perales';
        $pagetitle;

        if (isset($pagetitle)){
            echo "<title>".$sitename." | ".$pagetitle."</title>";
        }
        else {
            echo "<title>".$sitename."</title>";
        }
        ?>

        <?php // mobile meta ?>
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
        <link href="//fonts.googleapis.com/css?family=Lato|Raleway" rel="stylesheet">
        <script type="text/javascript" src="js/modernizr.custom.min.js"></script>
    </head>

    <body>
        <?php // Our SVG Library - Do not remove! ?>
        <?php echo @file_get_contents("images/sprite.symbol.svg"); ?>

        <div class="mjp-layout-container mjp-layoutwrap--transparent mjp-layout-constrain">

            <header class="mjp-header unit size1of1 m-size1of1 mjp-below32 cf" role="banner">

                <button class="mjp-button mjp-overlay-open mjp-button--transparent mjp-hamburger cf" type="button">
                    Menu
                    <span class="mjp-hamburger-box">
                        <span class="mjp-hamburger-inner"></span>
                    </span>
                </button>

                <div class="mjp-header__site-title cf">
                    <h1 class="h2 mjp-mar-b0"><a aria-label="Go back to the homepage" href="./">Mayra Perales</a></h1>
                    <h2 class="h5 mjp-cabin mjp-mar-t0">Front &amp; Back End Developer</h2>
                </div>

                <div class="mjp-overlay mjp-overlay-hugeinc">
                    <button type="button" class="mjp-overlay-close">Close</button>
                    <?php
                    /**
                     * Make sure to have a container with the #main ID
                     * include it in the main content
                     */
                    ?>
                    <a aria-hidden="true" href="#main" class="mjp-skip-nav mjp-visuallyhidden">Skip to main content</a>
                    <nav class="mjp-top-nav cf">
                    	<ul>
                            <li><a href="./">Home</a></li>
                            <li><a href="./">Work</a></li>
                            <li><a href="./about-me.php">About</a></li>
                    	</ul>
                    </nav>
                </div>
            </header><!-- end of .mjp-header -->
