<?php
$pagetitle = 'TCU - Web Standards';
include 'header.php';
?>

    <?php
    /*
     * We add #main to our content element because we have a skip
     * main navigation link for accessibility
     */
    ?>
    <main class="unit size1of1 m-size1of1 mjp-below16 cf mjp-main" id="main">
        <h2 class="unit size1of1 m-size1of1 mjp-mar-b0 mjp-alignc">
            TCU | Lead On
        </h2>

        <h3 class="unit h5 size1of1 m-size1of1 mjp-mar-t0 mjp-alignc">
            Role: Front &amp; Back End Developer
        </h3>

        <div class="group unit size1of1 m-size1of1 mjp-top64 cf">
            <div class="unit size3of8 m-size1of1 mjp-cards">
                <h3 class="h2">
                    WordPress Theme <br>
                </h3>
            </div>

            <div class="unit size5of8 m-size1of1">
                <p>The web visual guide is a collection of elements that creates a cohesive package—colors, typography, graphics, photography and tone of voice combine to communicate a strong and clear image that positions the University as a world-class institution.</p>

                <p>The elements reflect a university that’s whole is greater than the sum of its parts, and while there are many different audiences—a host of schools/colleges and departments—the guidelines outlined here create a common user experience and ensure that TCU is recognizable to all.</p>

                <p><a href="http://leadon.tcu.edu">Visit the Lead On website</a></p>
                <p><a href="https://bitbucket.org/TCUWebmanage/tcu_commons_child_theme">View the WordPress Theme code on Bitbucket at</a></p>
            </div>
        </div><!-- end of .group -->

        <div class="unit size1of1 m-size1of1 mjp-cards mjp-top32">
            <picture>
                <source srcset="./images/leadon-desktop-fullpage.jpg" media="(min-width: 1000px)">
                <source srcset="./images/leadon-desktop-medium.jpg" media="(min-width: 700px)">
                <img class="mjp-cards__image" src="./images/leadon-desktop-small.jpg" alt="TCU AddRan College of Liberal Arts">
            </picture>
        </div>
    </main><!-- end of .unit -->

<?php  include 'footer.php'; ?>
