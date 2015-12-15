<?php
/* Template Name: Login Page */ 

get_header(); ?>

<h1 class="text-center">Choose your path</h1>

<div class="row">
    <div class="col-md-10 col-md-offset-1 text-center">
        <?php
        if ( ! is_user_logged_in() ) { // Display WordPress login form:
            wp_login_form();
        } else { // If logged in:
            wp_loginout( home_url() ); // Display "Log Out" link.
        }
        ?>
    </div>
</div>

<?php
get_sidebar();
get_footer();
