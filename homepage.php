<?php
/* Template Name: Home Page */ 

$args = array(
  'hide_empty' => 0,
  'parent' => 0,
  'exclude' => 1
);

get_header(); ?>

<h1 class="text-center">Choose your path</h1>

<div class="row">
    <div class="col-md-10 col-md-offset-1 text-center">
        <div class="row">
            <?php foreach (get_categories($args) as $key => $cat) : ?>
            <?php if ($key == 3) { echo '</div><div class="row">'; } ?>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <h5 class="panel-heading">
                        <?php echo $cat->cat_name; ?>
                    </h5>
                    <div class="panel-body path-body">
                        <a href="<?php echo get_category_link($cat->term_id); ?>">
                            <?php echo $cat->description; ?>
                            <img src="<?php echo z_taxonomy_image_url($cat->term_id); ?>" width="100"/>
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<h1 class="text-center">Features Series</h1>

<div class="row">
    <div class="col-md-10 col-md-offset-1 text-center">
        <div class="row">
            <?php foreach (get_categories(array('include' => '12,9,10')) as $cat) : ?>
                <div class="col-md-4">
                    <a href="<?php echo get_category_link($cat->term_id); ?>">
                        <div class="thumbnail">
                            <img src="<?php echo z_taxonomy_image_url($cat->term_id); ?>" />
                            <div class="caption"> 
                                <h4 class="text-center"><?php echo $cat->cat_name; ?></h4>
                                <p><?php echo $cat->description; ?></p>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?php
get_sidebar();
get_footer();
