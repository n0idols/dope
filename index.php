<?php get_header();

while (have_posts()) {
    the_post(); ?>
    <div>
        <h1 class="bg-gray-700 font-spaceg">
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
        </h1> 
        <p>
            <?php the_content() ; ?>
        </p>
    </div>
    <?php
}




wp_list_pages(array(
    'title_li' => null,

));
get_footer();
?>

