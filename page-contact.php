<?php
/*
Template Name: contact template
*/

get_header(); ?>

<div class="content-main">


<p><h2><?php the_title(); ?></h2>
<div class="row-fluid">
    <div class="col-md-6"><!-- ****** column 1 ****** -->
                        
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

    <div class="row-fluid">
                        <dive class="col-lg-12"><p>Please don't come unannounced -- we do occasionally take some time off site, and we would hate to miss you.</p></div>
    </div>


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
</div>
<div id="contact-sidebar">
<?php dynamic_sidebar("Contact Right Sidebar"); ?>
</div>
<?php get_footer(); ?>