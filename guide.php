<?php get_header();
//Template name: Guide
?>

<main class="guide">
    <section class="backgroundGuide">
        <?php $args = array(
            'category_name' => 'guide',
            'posts_per_page' => 6,
            'paged' => get_query_var('paged'), 
            'orderby'        => 'date',
            'order'          => 'DESC' );
            query_posts($args);?>
        <?php while (have_posts()) : the_post(); ?>
        <?php $totalcomments = get_comments_number();
        $category = get_the_category(); ?>
        <div class="newsGuide">
            <div class="image left" style="background-image: url('<?php the_post_thumbnail_url() ?>')"></div>
            <div class="content">
                <div class="realContent">
                    <h2><?php the_title(); ?></h2>
                    <div class="flexContent">
                        <span><?php echo $category[0]->cat_name; ?></span>
                        <i class="fa-regular fa-calendar-days"></i><p><?php the_time('j F, Y'); ?></p>
                        <i class="fa-solid fa-message"></i><p><?php echo $totalcomments; ?></p>
                        <i class="fa-solid fa-user"></i><p><?php the_author();?></p>
                    </div>
                    <p><?php the_excerpt() ?></p>
                    <a href="<?php the_permalink() ?>" class="button">Read More</a>
                </div>
            </div>
            <div class="image right" style="background-image: url('<?php the_post_thumbnail_url() ?>')"></div>
        </div>
        <?php endwhile;?>
        <?php the_posts_pagination( array( 'mid_size' => 2 ) ); 
        wp_reset_postdata();?>
    </section>

</main>


<?php get_footer(); ?>