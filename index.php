<?php get_header();
//Template name: Index
?>

<main>
    <div class="background"></div>
    <div class="margin">
        <div class="container">
            <div class="left">
                <section id="recentNewsLeft">

                <?php $recentPosts = new WP_Query();
                $recentPosts->query('showposts=1');?>


                    <?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
                    <?php $totalcomments = get_comments_number();
                    $category = get_the_category(); ?>

                        <div class="card" style="background-image: url('<?php the_post_thumbnail_url() ?>')">
                            <span class="category"><?php echo $category[0]->cat_name;; ?></span>
                            <a href="<?php the_permalink() ?>" class="linkcard">
                                <div class="contentText">
                                <h2><?php the_title(); ?></h2>
                                    <div class="flexInfo">
                                        <i class="fa-regular fa-calendar-days"></i><?php the_time('j F, Y'); ?>
                                        <span><i class="fa-solid fa-message"></i><?php echo $totalcomments; ?><span>
                                    </div>
                                </div>
                            </a>
                        </div>

                    <?php endwhile; ?>

                </section>

                <section class="recentNewsMobile">

                    <?php $recentPosts = new WP_Query();
                    $recentPosts->query('showposts=3');?>


                        <?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
                        <?php $totalcomments = get_comments_number(); ?>

                            <div class="card" style="background-image: url('<?php the_post_thumbnail_url() ?>')">
                                <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                                <i class="fa-regular fa-calendar-days"></i><?php the_time('j F, Y'); ?>
                                <span><i class="fa-solid fa-message"></i><?php echo $totalcomments; ?><span>
                            </div>

                        <?php endwhile; ?>

                </section>

                <section class="news">
                    <div class="title">
                        <h2>News & Features</h2>
                    </div>
                    <div class="content">
                        <?php 
                        $args = array(
                            'post_type' => 'post',
                            'category_name' => 'news',
                            'posts_per_page' => 3, 
                        );
                        $recentPosts = new WP_Query($args); ?>
                        <?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
                        <?php $totalcomments = get_comments_number(); ?>
                            <div class="article">
                                <img src="<?php the_post_thumbnail_url() ?>" class="img" alt="image des news">
                                <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>

                                <div class="flexInfo">
                                    <span></span>
                                    <i class="fa-regular fa-calendar-days"></i><p><?php the_time('j F, Y'); ?></p>
                                    <i class="fa-solid fa-message"></i><p><?php echo $totalcomments; ?></p>
                                    <i class="fa-solid fa-user"></i><p><?php the_author();?></p>
                                </div>

                                <div class="extrait">
                                    <?php the_excerpt(); ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        <div class="morePost">
                            <a href="<?php the_permalink(11) ?>">Plus d'articles...</a>
                        </div>
                    </div>
                </section>
                <section class="guide">
                    <div class="title">
                        <h2>Guide</h2>
                    </div>
                    <div class="content">
                        <?php 
                        $args = array(
                            'post_type' => 'post',
                            'category_name' => 'guide',
                            'posts_per_page' => 3, 
                        );
                        $recentPosts = new WP_Query($args); ?>


                        <?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
                        <?php $totalcomments = get_comments_number();
                        $category = get_the_category(); ?>

                        <div class="guide">
                            <div class="img" style="background-image: url('<?php the_post_thumbnail_url() ?>')" alt="image des guides">
                                <span><?php echo $category[0]->cat_name;; ?></span>
                            </div>
                            <div class="information">
                                <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                                <div class="flexInfo">
                                    <i class="fa-regular fa-calendar-days"></i><p><?php the_time('j F, Y'); ?></p>
                                    <i class="fa-solid fa-message"></i><p><?php echo $totalcomments; ?></p>
                                </div>
                                <div class="extrait">
                                    <?php the_excerpt(); ?>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; ?>
                        <div class="morePost">
                            <a href="<?php the_permalink(9) ?>">Plus de guides...</a>
                        </div>
                    </div>
                </section>
            </div>
            <div class="right">
                <section id="recentNewsRight">
                <?php 
                $args = array(
                    'offset'         => 1,
                    'posts_per_page' => 2,
                    'orderby'        => 'date',
                    'order'          => 'DESC',
                );
                $recentPosts = new WP_Query($args); ?>


                    <?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
                    <?php $totalcomments = get_comments_number();
                    $category = get_the_category(); ?>

                        <div class="card" style="background-image: url('<?php the_post_thumbnail_url() ?>')">
                            <span class="category"><?php echo $category[0]->cat_name;; ?></span>
                            <a href="<?php the_permalink() ?>" class="linkcard">
                                <div class="contentText">
                                    <h2><?php the_title(); ?></h2>
                                    <div class="flexInfo">
                                        <i class="fa-regular fa-calendar-days"></i><?php the_time('j F, Y'); ?>
                                        <span><i class="fa-solid fa-message"></i><?php echo $totalcomments; ?><span>
                                    </div>
                                </div>
                            </a>
                        </div>

                    <?php endwhile; ?>

                </section>
                <section class="wowtoken">
                    <div class="title">
                        <h2>Token Prices</h2>
                    </div>
                    <div class="content">
                        <?php echo wp_get_attachment_image(69); ?>
                        <span><?php the_field('token', 21); ?></span> GOLD
                        <div class="linkToken">
                            <a href="https://wowtokenprices.com/EU">Historique</a>
                        </div>
                    </div>
                </section>
                <section class="wowitems">
                    <div class="img">
                        <a href="https://eu.gear.blizzard.com/collections/world-of-warcraft">Buy WoW Items</a>
                    </div>
                </section>
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
                                <img src="<?php the_post_thumbnail_url() ?>" class="imgPopular" alt="image des articles populaires">
                                <div class="textContent">
                                    <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                                    <div class="flexInfo">
                                        <i class="fa-regular fa-calendar-days"></i><?php the_time('j F, Y'); ?>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                </section>
                <!-- <section class="live">
                    <div class="title">
                        <h2>Livestream</h2>
                    </div>
                    <div class="content">
                        <iframe src="https://player.twitch.tv/?channel=<?php the_field( 'livestream', 21 ); ?>&parent=twitch.tv" frameborder="0" allowfullscreen="true" scrolling="no" height="100%" width="100%" muted="true"></iframe>
                    </div>
                </section>

                <section class="comments">
                    <div class="title">
                        <h2>Latest comments</h2>
                    </div>
                    <div class="content">
                        <?php 
                        $comments_query = new WP_Comment_Query;
                        $comments = $comments_query->query( array( 'number' => 6 ) ); 
                        
                        foreach ( $comments as $comment ) {
                            $post = get_post( $comment->comment_post_ID );
                            echo '<span>' . get_comment_author( $comment->comment_ID ) . '</span> <p>on</p>';
                            echo '<p>' . wp_trim_words( $comment->comment_content, 10) . ' </p>';
                        }
                        
                        ?>
                    </div>
                </section>
                <section class="youtube">
                    <div class="title">
                        <h2>YouTube</h2>
                    </div>
                    <div class="content">
                        <iframe height="100%" width="100%" src="https://www.youtube.com/embed/<?php the_field( 'youtube', 21 ); ?>"  frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </section> -->
            </div>
        </div>        
    </div>
</main>


<?php get_footer();
?>