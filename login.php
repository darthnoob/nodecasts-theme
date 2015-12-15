<?php
/* Template Name: Login Page */ 

get_header(); ?>

<h1 class="text-center">Choose your path</h1>

<div class="row">
    <div class="col-md-10 col-md-offset-1 text-center">
        <?php wp_login_form(); ?>
    </div>
</div>

<?php
get_sidebar();
get_footer();
