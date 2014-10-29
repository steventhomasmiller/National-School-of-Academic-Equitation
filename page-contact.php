<?php
/*
Template Name: contact template
*/

get_header(); ?>

<div class="row">
    <div class="span6"><!-- ****** column 1 ****** -->
                        <p><h2><?php the_title(); ?></h2>
                        The National School of Academic Equitation<br />
                        11901 215th Place SE<br />
                        Snohomish, WA 98296<br />
                        <br />
                        We’re located half way between Monroe and Woodinville.<br />
                        Just thirty minutes from Seattle.</p>
    </div>

    <div class="span6"><!-- ****** column 2 ****** -->
                        <p>Appointments for new visitors<br />
                        can be made by email or telephone.</p><br />
                        <p>nsae@classical-equitation.com<br />
                        360-668-5242</p>
    </div>
</div><!-- end first row -->

    <div class="row">
                        <dive class="span12"><p>Please don't come unannounced -- we do occasionally take some time off site, and we would hate to miss you.</p></div>
    </dive>

<?php 

if (have_posts()) :
    while (have_posts()) : the_post(); ?>

    <article class="post page">
        <?php the_content(); ?>
    </article>

    <?php endwhile;

    else : 
        echo '<p>No content found</p>';
    endif; ?>

<?php get_footer(); ?>