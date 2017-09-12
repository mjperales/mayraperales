<?php
$pagetitle = 'Current Work';
include 'header.php';
?>

    <?php
    /*
     * We add #main to our content element because we have a skip
     * main navigation link for accessibility
     */
    ?>
    <main class="unit size1of1 m-size1of1 mjp-below16 mjp-main cf" id="main">
        <p class="h2 unit size1of1 m-size1of1">
            I am a Web Developer at <br>
            TCU - Texas Christian University
        </p>

        <ul id="mjp-masonry" class="mjp-unstyled-list effect-1 group size1of1 m-size1of1 mjp-masonry cf">
            <li class="mjp-cards">
                <picture>
                    <source srcset="./images/finearts-phone.jpg" media="(min-width: 1000px)">
                    <source srcset="./images/finearts-phone.jpg" media="(min-width: 700px)">
                    <img src="./images/finearts-phone.jpg" alt="TCU College of Liberal Arts">
                </picture>
                <div class="mjp-cards__content">
                    <h2 class="h4">College of Fine Arts</h2>
                    <a aria-label="Learn more about the College of Fine Arts project" class="mjp-top16 mjp-button mjp-button--transparent" href="/tcu-fine-arts">Learn More</a>
                </div>
            </li>
            <li class="mjp-cards">
                <img src="./images/addran-desktop.jpg" alt="TCU AddRan College of Liberal Arts">
                <div class="mjp-cards__content">
                    <h2 class="h4">Addran College of Liberal Arts</h2>
                    <a aria-label="Learn more about the College of Liberal Arts project" class="mjp-top16 mjp-button mjp-button--transparent" href="/tcu-addran-college">Learn More</a>
                </div>
            </li>
            <li class="mjp-cards">
                <img src="./images/leadon-desktop.jpg" alt="TCU Lead On">
                <div class="mjp-cards__content">
                    <h2 class="h4">Lead On</h2>
                    <a aria-label="Lear more about the TCU Lead on project" class="mjp-top16 mjp-button mjp-button--transparent" href="/tcu-leadon">Learn More</a>
                </div>
            </li>
            <li class="mjp-cards">
                <picture>
                    <source srcset="./images/webstandards-desktop.jpg" media="(min-width: 1000px)">
                    <source srcset="./images/webstandards-medium.jpg" media="(min-width: 700px)">
                    <img src="./images/webstandards-small.jpg" alt="TCU Web Standards">
                </picture>
                <div class="mjp-cards__content">
                    <h2 class="h4">Web Standards</h2>
                    <a aria-label="Learn more about TCU's web standards" class="mjp-top16 mjp-button mjp-button--transparent" href="/tcu-web-standards">Learn More</a>
                </div>
            </li>
        </ul>

    </main><!-- end of .unit -->

<?php  include 'footer.php'; ?>
