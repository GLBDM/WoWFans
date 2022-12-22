<?php get_header();
//Template name: Index
?>

<main>
    <div class="background"></div>
    <div class="margin">
        <section id="recentNews">

            <?php $recentPosts = new WP_Query();
            $recentPosts->query('showposts=3');?>


            <?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
            <?php $totalcomments = get_comments_number(); ?>

                <div class="card" style="background-image: url('<?php the_post_thumbnail_url() ?>')">
                    <a href="<?php the_permalink() ?>">
                        <?php the_title(); ?>
                        <span><?php echo $totalcomments; ?><span>
                    </a>
                </div>

            <?php endwhile; ?>

        </section>
        <div class="container">
            <div class="left">
                <section class="news">
                    <div class="title">
                        <h2>News</h2>
                    </div>
                    <div class="content">
                        
                    </div>
                </section>
            </div>
            <div class="right"></div>
        </div>        
    </div>
</main>


<?php get_footer();
?>