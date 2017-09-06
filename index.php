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
    <main class="unit size1of1 m-size1of1 mjp-below16 cf" id="main">
        <p class="h2">
            I am a Web Developer at <br>
            TCU - Texas Christian University
        </p>

        <div class="group unit size1of1 m-size1of1 cf">
            <div class="unit size5of8 m-size1of1 mjp-pad-l0 mjp-cards">
                <div class="mjp-leadon-bg mjp-modal"></div>
                <a class="mjp-top16" href="#">TCU Lead On Website</a>
            </div>

            <div class="unit size3of8 m-size1of1 mjp-pad-r0 mjp-cards">
                <div class="mjp-webstandards-bg mjp-modal"></div>
                <a class="mjp-top16" href="#">TCU Web Standards</a>
            </div>
        </div>

        <div class="unit size1of1 m-size1of1 mjp-pad-lr0 mjp-cards">
            <div class="mjp-addran-bg mjp-modal"></div>
            <a class="mjp-top16" href="#">Addran College of Liberal Arts</a>
        </div>

    </main><!-- end of .unit -->

<?php  include 'footer.php'; ?>
