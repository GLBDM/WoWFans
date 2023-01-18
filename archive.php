<?php get_header();
//Template name: Archive
?>

<main id="blog">
    <div class="background"></div>
    <div class="margin">
        <div class="container">
            <div class="left">
            <?php $args = array(   
                   'posts_per_page' => 8,
                   'paged' => get_query_var('paged'),
                   );
                query_posts($args);?>

            <?php while (have_posts()) : the_post(); ?>

                <div class="card">
                    <img src="<?php the_post_thumbnail_url() ?>" class="imgBlog" alt="image de l'article">
                    <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
                    <div class="flexInfo">
                        <i class="fa-regular fa-calendar-days"></i><p><?php the_time('j F, Y'); ?></p>
                        <i class="fa-solid fa-user"></i><p><?php the_author();?></p>
                    </div>
                    <p><?php the_excerpt() ?></p>
                </div>
            <?php endwhile; 

            the_posts_pagination( array( 'mid_size' => 2 ) ); 

            wp_reset_postdata();
            ?>
           
            </div>
            <div class="right">
                
                <section class="popularPosts">
                    <?php
                        $args = array(
                            'orderby' => 'comment_count',
                            'posts_per_page' => 5,
                            );
                        $popularPost = new WP_Query( $args );
                    ?>
                    <div class="title">
                        <h2>Popular Posts</h2>
                    </div>
                    <div class="content">
                        <?php while ($popularPost->have_posts()) : $popularPost->the_post(); ?>
                            <div class="popularPost">
                                <img src="<?php the_post_thumbnail_url() ?>" class="imgPopular" alt="image des articles populaires">
                                <div class="textContent">
                                    <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                                    <div class="flexInfo">
                                        <i class="fa-regular fa-calendar-days"></i><?php the_time('j F, Y'); ?>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </section>

                <!-- <section class="comments">
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
                </section> -->
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>