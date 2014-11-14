<?php
/*
Template Name: contact template
*/

get_header(); ?>

<div class="row-fluid">
<h2><?php the_title(); ?></h2><!-- title of page -->
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

    <div class="col-md-8">
        <?php get_post(); ?><p> there is a call for get_post(id) once we have the id for the map inside a col-md-8</p>
    </div>
    <div class="col-md-4">
        <?php get_post(); ?><p> there is a call for the form post here, or hand code the form here</p>
    </div>

</div>







<?php get_footer(); ?>