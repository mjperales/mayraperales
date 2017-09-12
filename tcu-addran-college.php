<?php
$pagetitle = 'TCU - AddRan College of Liberal Arts Project';
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
            TCU | AddRan College of Liberal Arts
        </h2>

        <h3 class="unit h5 size1of1 m-size1of1 mjp-mar-t0 mjp-alignc">
            Role: Front &amp; Back End Developer
        </h3>

        <div class="group unit size1of1 m-size1of1 mjp-top64 cf">
            <div class="unit size3of8 m-size1of1">
                <h3 class="h2">
                    WordPress Theme <br>
                </h3>

                <h4>With custom build plugins like the Faculty &amp; Staff Directory</h4>

            </div>

            <div class="unit size5of8 m-size1of1">
                <p>
                    The AddRan College of Liberal Arts uses The Academic Child theme that I developed. The intention for this child-theme was to be able to add different elements to the homepage since we were going to be using it for all departments. This is a multisite install and it uses the Faculty &amp; Staff plugin, Accordion plugin, and other custom widget plugins.
                </p>

                <p><a target="_blank" href="http://addran.tcu.edu">Visit the AddRan College of Liberal Arts website</a></p>
                <p><a target="_blank" href="https://bitbucket.org/TCUWebmanage/tcu-department-child-theme">View the WordPress Theme code on Bitbucket</a></p>
            </div>
        </div><!-- end of .group -->

        <div class="unit size1of1 m-size1of1 mjp-top32">
            <picture>
                <source srcset="./images/addran-fullpage-desktop.jpg" media="(min-width: 1000px)">
                <source srcset="./images/addran-fullpage-medium.jpg" media="(min-width: 700px)">
                <img class="mjp-cards" src="./images/addran-fullpage-small.jpg" alt="TCU AddRan College of Liberal Arts">
            </picture>
        </div>

        <div class="group unit size1of1 m-size1of1 mjp-top64 cf">
            <div class="unit size3of8 m-size1of1">
                    <h4>Faculty &amp; Staff Directory</h4>
            </div>

            <div class="unit size5of8 m-size1of1">
            <p>
                The idea was to be able to list all Faculty/Staff for the college. We needed all faculty and staff to live in the main multisite install. We also needed to easily display only employees of each department within department websites. This was a great opportunity to use WordPress' taxonomy feature.
            </p>
            <p>
                College Level: <a target="_blank" alt="AddRan Faculty &amp; Staff" href="https://addran.tcu.edu/faculty_staff/">Faculty &amp; Staff</a> <br>
                Department Level: <a target="_blank" alt="AddRan Faculty &amp; Staff | Department of Economics" href="https://addran.tcu.edu/department/economics/">Faculty &amp; Staff</a> <br>
                Areas of Study Level: <a target="_blank" alt="AddRan Faculty &amp; Staff | Asian Studies" href="https://addran.tcu.edu/areas_of_study/asian-studies/">Faculty &amp; Staff</a> <br>
            </p>
            </div>
        </div><!-- end of .group -->

        <div class="unit size1of1 m-size1of1 mjp-top32">
            <picture>
                <source srcset="./images/addran-faculty-staff-directory.jpg" media="(min-width: 1000px)">
                <source srcset="./images/addran-faculty-staff-directory-medium.jpg" media="(min-width: 700px)">
                <img class="mjp-cards" src="./images/addran-faculty-staff-directory-small.jpg" alt=" TCU Admissions Website">
            </picture>
        </div>
    </main><!-- end of .unit -->

<?php  include 'footer.php'; ?>
