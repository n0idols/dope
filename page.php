<?php get_header();

$theParent = wp_get_post_parent_id(get_the_ID());

while (have_posts()) {
    the_post(); ?>
    <div class="px-8">
        <h1><?php the_title(); ?></h1>
        <p><?php the_content(); ?> hey </p> 
    </div>


<?php

$testArr = get_pages(array(
    'child_of' => get_the_ID()
));

    if ($theParent or $testArr) { ?>
    <div>
        <a href="<?php echo get_the_permalink($theParent)?>">  
            <?php echo get_the_title($theParent);?>
        </a>
        
        <?php

        if ($theParent) {
            $findChildrenOf = $theParent;
        } else {
            $findChildrenOf = get_the_ID();
        }
        wp_list_pages(array(
            'title_li' => null,
            'child_of' => $findChildrenOf,
            'sort_column' => 'menu_order'
        ));
        ?>
    
    </div>
<?php }?>


    <?php
}

get_footer();
?>