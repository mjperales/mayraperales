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

        <div class="unit size1of1 m-size1of1 mjp-cards">
            <a href="./tcu-web-standards.php" class="mjp-webstandards-bg mjp-cards__image"></a>
            <a class="mjp-top16" href="./tcu-web-standards.php">TCU | Web Standards</a>
        </div>

        <div class="group unit size1of1 m-size1of1 cf">
            <div class="unit size5of8 m-size1of1 mjp-cards">
                <a href="./tcu-addran-college.php" class="mjp-addran-bg mjp-cards__image"></a>
                <a class="mjp-top16" href="./tcu-addran-college.php">TCU | Addran College of Liberal Arts</a>
            </div>

            <div class="unit size3of8 m-size1of1 mjp-cards">
                <a  href="./tcu-leadon.php" class="mjp-leadon-bg mjp-cards__image"></a>
                <a class="mjp-top16" href="./tcu-leadon.php">TCU | Lead On</a>
            </div>
        </div>

        <div class="unit size1of1 m-size1of1 mjp-cards">
            <a href="./tcu-fine-arts.php" class="mjp-finearts-bg mjp-cards__image"></a>
            <a class="mjp-top16" href="./tcu-fine-arts.php">TCU | College of Fine Arts</a>
        </div>

    </main><!-- end of .unit -->

<?php  include 'footer.php'; ?>
