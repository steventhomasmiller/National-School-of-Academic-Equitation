<?php
/*
Template Name: contact template
*/
get_header(); ?>


<h2><?php the_title(); ?></h2><!-- title of page -->
<div class="row-fluid">
    <div class="col-md-6"><!-- ****** column 1 ****** -->
    <p>
    The National School of Academic Equitation<br />
    11901 215th Place SE<br />
    Snohomish, WA 98296<br />
    <br />
    We’re located half way between Monroe and Woodinville.<br />
    Just thirty minutes from Seattle.</p>
    </div>

        <div class="col-md-6"><!-- ****** column 2 ****** -->
        <p>Appointments for new visitors<br />
        can be made by email or telephone.</p><br />
        <p>nsae@classical-equitation.com<br />
        360-668-5242</p>
        </div>
</div><!-- end first row -->

        <div class="row-fluid"><!-- second row -->
            <div class="col-md-12"><p>Please don't come unannounced -- we do occasionally take some time off site, and we would hate to miss you.</p></div>
        </div>

<div class="row-fluid"><!-- map and form -->
    <div class="col-md-8 map">
        <p><?php echo '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2679.913438437759!2d-122.07241210000001!3d47.8025137!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5490099fa8cb1b87%3A0x58fdfaa57191842b!2s11901+215th+Pl+SE%2C+Snohomish%2C+WA+98296!5e0!3m2!1sen!2sus!4v1415999981823" width="600" height="450" frameborder="0" style="border:0"></iframe>';?> </p>
    </div>

    <div class="col-md-4 contact">
        <?php get_post(); ?><p> <?php echo do_shortcode("[contact-form-7 id='48']"); ?></p> <!--Change id to 406 when pushing to live site -->
    </div>
</div>


<?php get_footer(); ?>