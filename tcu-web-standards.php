<?php
$pagetitle = 'TCU - Web Standards Project';
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
            TCU | Web Standards
        </h2>

        <h3 class="unit h5 size1of1 m-size1of1 mjp-mar-t0 mjp-alignc">
            Role: Front &amp; Back End Developer
        </h3>
        <div class="group unit size1of1 m-size1of1 mjp-top32 cf">
            <div class="unit size3of8 m-size1of1">
                <h3 class="h2">
                    Web Visual Guide <br>
                    for Developers
                </h3>

            </div>

            <div class="unit size5of8 m-size1of1">
                <p>The web visual guide is a collection of elements that creates a cohesive package—colors, typography, graphics, photography and tone of voice combine to communicate a strong and clear image that positions the University as a world-class institution.</p>

                <p>The elements reflect a university that’s whole is greater than the sum of its parts, and while there are many different audiences—a host of schools/colleges and departments—the guidelines outlined here create a common user experience and ensure that TCU is recognizable to all.</p>

                <p>
                    This was a two year project between our web designer, graphic designer and me (web developer). We met weekly to discuss design, functionality and user experience. I built the pattern library that includes HTML, CSS, and JavaScript. Then I incorporated the pattern library into a parent theme.
                </p>

                <p><a target="_blank" href="https://brand.tcu.edu/web-standards/">Read more about our web standards</a></p>

                <p><a target="_blank" href="http://brand.tcu.edu">Visit the Web Standards website</a></p>
                <p><a target="_blank" href="https://bitbucket.org/TCUWebmanage/tcu_web_standards">View the WordPress Theme code on Bitbucket</a></p>

            </div>
        </div><!-- end of .group -->

        <div class="unit size1of1 m-size1of1 mjp-top32">
            <h4>Putting it all together</h4>
            <picture>
                <source srcset="./images/admissions-fullpage-desktop.jpg" media="(min-width: 1000px)">
                <source srcset="./images/admissions-fullpage-medium.jpg" media="(min-width: 700px)">
                <img class="mjp-cards" src="./images/admissions-fullpage-small.jpg" alt=" TCU Admissions Website">
            </picture>
        </div>

        <div class="group unit size1of1 m-size1of1 mjp-top32 cf">
            <div class="unit size3of8 m-size1of1">
                <h4>TCU | Standard Header</h4>
            </div>

            <div class="unit size5of8 m-size1of1">
                <p>The header contains the University’s signature in the top left corner that links back to the tcu.edu site. The design of the header should never be altered. For this reason the header.php file should never be modified and your child theme should never contain its own version.</p>
            </div>
        </div><!-- end of .group -->

        <div class="unit size1of1 m-size1of1 mjp-top32">
            <picture>
                <source srcset="./images/standard-header.jpg" media="(min-width: 1000px)">
                <source srcset="./images/standard-header-medium.jpg" media="(min-width: 700px)">
                <img class="mjp-cards" src="./images/standard-header-small.jpg" alt=" TCU Admissions Website">
            </picture>
        </div>

        <div class="group unit size1of1 m-size1of1 mjp-top32 cf">
            <div class="unit size3of8 m-size1of1">
                <h4>TCU | Standard Footer</h4>
            </div>

            <div class="unit size5of8 m-size1of1">
                <p>The footer includes basic University information only, with three widget areas for individual units to display their word mark and list contact information as necessary. The design of the footer should never be altered. For this reason the footer.php file should never be modified and your child theme should never contain its own version.</p>
            </div>
        </div><!-- end of .group -->

        <div class="unit size1of1 m-size1of1 mjp-top32">
            <picture>
                <source srcset="./images/standard-footer.jpg" media="(min-width: 1000px)">
                <source srcset="./images/standard-footer-medium.jpg" media="(min-width: 700px)">
                <img class="mjp-cards" src="./images/standard-footer-small.jpg" alt=" TCU Admissions Website">
            </picture>
        </div>

        <div class="unit size1of1 m-size1of1">

            <h4>PRIMARY COLORS</h4>
            <div class="tcu-circle-container">
                <div class="unit size1of4 m-size1of2">
                    <div class="tcu-circle--small tcu-circle--purple"></div>
                    Horned Frog Purple <br>
                    PMS 268 C<br>
                    CMYK 79, 100, 0, 20<br>
                    RGB 77, 25, 121

                </div><!-- end of .unit -->
                <div class="unit size1of4 m-size1of2">
                    <div class="tcu-circle--small tcu-circle--white"></div>
                    Horned Frog White<br>
                    CMYK 0, 0, 0, 0<br>
                    RGB 255, 255, 255<br>

                </div><!-- end of .unit -->

                <div class="unit size1of4 m-size1of2">
                    <div class="tcu-circle--small tcu-circle--grey"></div>
                    Horned Frog Grey<br>
                    PMS 429 C<br>
                    CMYK 38, 27, 27, 0<br>
                    RGB 164, 169, 173
                </div><!-- end of .unit -->

                <div class="unit size1of4 m-size1of2">
                    <div class="tcu-circle--small tcu-circle--black"></div>
                    Horned Frog Black<br>
                    CMYK 0, 0, 0, 100<br>
                    RGB 0, 0, 0
                </div><!-- end of .unit -->
            </div><!-- end of .circle-container -->
        </div>
    </main><!-- end of .unit -->

<?php  include 'footer.php'; ?>
