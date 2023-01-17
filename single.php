<?php get_header();
?>

<main id="actu">

    <div class="background"></div>
    <div class="margin">
        <div class="container">
            <div class="left">
                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                <?php $totalcomments = get_comments_number();
                    $category = get_the_category(); 
                ?>
                
                <article class="article">
                    <div class="title"><?= the_title() ?></div>
                    <div class="content">
                        <img src="<?php the_post_thumbnail_url() ?>" alt="image de l'article">
                        <div class="flexInfo">
                            <span><?php echo $category[0]->cat_name; ?></span>
                            <i class="fa-regular fa-calendar-days"></i><p><?php the_time('j F, Y'); ?></p>
                            <i class="fa-solid fa-message"></i><p><?php echo $totalcomments; ?></p>
                            <i class="fa-solid fa-user"></i><p><?php the_author();?></p>
                        </div>
                        <div class="text">
                            <?= the_content() ?>
                        </div>
                
                        <div class="hashtag"></div>
                    </div>
                </article>
                
                

                <?php endwhile; ?>
                <?php endif; ?>
                <section class="author">
                    <div class="title">
                        <h2>About author</h2>
                    </div>
                    <div class="content">
                        <div class="textContent">
                            <p><?= the_author();?></p> 
                        </div>
                    </div>
                </section>
            </div>
            <div class="right">
                <section class="popularPosts">
                    <?php $args = array(
                        'orderby' => 'comment_count',
                        'posts_per_page' => 5,);
                    $popularPost = new WP_Query( $args ); ?>
                    <div class="title">
                        <h2>Popular Posts</h2>
                    </div>
                    <div class="content">
                        <?php while ($popularPost->have_posts()) : $popularPost->the_post(); ?>
                            <img src="<?php the_post_thumbnail_url() ?>" class="imgPopular" alt="image des articles populaires">
                            <div class="textContent">
                                <?php echo the_title() ?>
                                <div class="flexInfo">
                                    <i class="fa-regular fa-calendar-days"></i><?php the_time('j F, Y'); ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </section>

                <section class="comments">
                    <div class="title">
                        <h2>Latest comments</h2>
                    </div>
                    <div class="content">
                        <?php $comments_query = new WP_Comment_Query;
                        $comments = $comments_query->query( array( 'number' => 6 ) ); 
                        
                        foreach ( $comments as $comment ) {
                            $post = get_post( $comment->comment_post_ID );
                            echo '<span>' . get_comment_author( $comment->comment_ID ) . '</span> <p>on</p>';
                            echo '<p>' . wp_trim_words( $comment->comment_content, 10) . ' </p>';
                        }
                        
                        ?>
                    </div>
                </section>
            </div>
        </div>
    </div>
    
    
</main>

<?php get_footer();
?>


















