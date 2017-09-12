<?php
$pagetitle = 'TCU - College of Fine Arts Project';
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
            TCU | College of Fine Arts
        </h2>

        <h3 class="unit h5 size1of1 m-size1of1 mjp-mar-t0 mjp-alignc">
            Role: Front &amp; Back End Developer
        </h3>

        <div class="group unit size1of1 m-size1of1 mjp-top64 cf">
            <div class="unit size3of8 m-size1of1">
                <h3 class="h2">
                    WordPress Theme <br>
                </h3>
            </div>

            <div class="unit size5of8 m-size1of1">
                <p>
                    The College of Fine Arts uses The Commons Child Theme that I developed. The intention for this child-theme was to be able to add different elements to the homepage since we were going to be using it for all departments. This is a multisite install and it uses the Faculty &amp; Staff plugin, accordion plugin, and other custom widget plugins.
                </p>

                <p><a target="_blank" href="http://finearts.tcu.edu">Visit the College of Fine Arts website</a></p>
                <p><a target="_blank" href="https://bitbucket.org/TCUWebmanage/tcu_commons_child_theme">View the WordPress Theme code on Bitbucket at</a></p>
            </div>
        </div><!-- end of .group -->

        <div class="unit size1of1 m-size1of1 mjp-top32">
            <picture>
                <source srcset="./images/finearts-fullpage-desktop.jpg" media="(min-width: 1000px)">
                <source srcset="./images/finearts-fullpage-medium.jpg" media="(min-width: 700px)">
                <img class="mjp-cards" src="./images/finearts-fullpage-small.jpg" alt="TCU AddRan College of Liberal Arts">
            </picture>
        </div>


        <div class="unit size1of1 m-size1of1 mjp-top32">
            <h3>The Graphic Design Department</h3>
            <p>
                Each department in The College of Fine Arts uses the same child-theme but they use different elements of the theme to give it it's own personality.
            </p>
            <picture>
                <source srcset="./images/graphic-design-desktop.jpg" media="(min-width: 1000px)">
                <source srcset="./images/graphic-design-medium.jpg" media="(min-width: 700px)">
                <img class="mjp-cards" src="./images/graphic-design-small.jpg" alt="TCU AddRan College of Liberal Arts">
            </picture>
        </div>

    </main><!-- end of .unit -->

<?php  include 'footer.php'; ?>
