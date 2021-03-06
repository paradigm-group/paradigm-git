<?php
/*
Template Name: New Member Template
*/
?>

<?php get_header(); ?>

    <div id="content">

        <div id="inner-content" class="wrap clearfix">

            <?php get_sidebar( 'members' ); ?>

                <div id="main" class="ninecol clearfix" role="main">

                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

                        <header class="article-header">

                            <h1 class="h2"><?php the_title ();?></h1>

                        </header> <!-- end article header -->

                        <section class="entry-content clearfix" itemprop="articleBody">
                            <?php the_content(); ?>
                        </section> <!-- end article section -->

                    </article> <!-- end article -->

                <?php endwhile; else : ?>

                <?php endif; ?>

            </div> <!-- end #main -->

        </div> <!-- end #inner-content -->

    </div> <!-- end #content -->

<?php get_footer(); ?>
