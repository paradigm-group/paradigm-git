<?php
/*
Template Name: Target Template
*/

?>

<?php get_header(); ?>

    <div id="content">

        <div id="inner-content" class="wrap clearfix">

            <?php get_sidebar( 'technical' ); ?>

                <div id="main" class="ninecol clearfix" role="main">

                    <article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            <header class="article-header">

                                <div class="breadcrumbs">
                                    <?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb();} ?>
                                </div>

                                <h1><?php the_title ()?></h1>
                            </header> <!-- end article header -->

                        <section class="entry-content clearfix" itemprop="articleBody">

                            <?php the_content () ?>
                        <?php endwhile; else: ?>
                        <?php endif; ?>

                        <?php
                            /*
                             * Loop through Categories and Display Posts within
                             */
                            $args = array(
                                'orderby'       => 'name',
                                'order'         => 'DESC',
                                'hide_empty'    => true,
                                'exclude'       => array(),
                                'exclude_tree'  => array(),
                                'include'       => array(),
                                'number'        => '',
                                'fields'        => 'all',
                                'slug'          => '',
                                'parent'         => '0',
                                'hierarchical'  => true,
                                'child_of'      => 0,
                                'get'           => '',
                                'name__like'    => '',
                                'pad_counts'    => false,
                                'offset'        => '',
                                'search'        => '',
                                'cache_domain'  => 'core'
                            );

                            // Gets every "category" (term) in this taxonomy to get the respective posts
                            $terms = get_terms( 'target_cat', $args );

                            foreach( $terms as $term ) : ?>

                                <h2><a href="http://paradigmgroup.eu/issue/<?php echo $term->slug ?>"><?php echo $term->name ?></a></h2>
                                <?php
                                    //list terms in a given taxonomy using wp_list_categories (also useful as a widget if using a PHP Code plugin)
                                    $taxonomy     = 'target_cat';
                                    $orderby      = 'slug';
                                    $show_count   = 0;      // 1 for yes, 0 for no
                                    $pad_counts   = 0;      // 1 for yes, 0 for no
                                    $hierarchical = 1;      // 1 for yes, 0 for no
                                    $title        = '';
                                    $child= $term->term_id;

                                    $args = array(
                                        'taxonomy'     => $taxonomy,
                                        'orderby'      => $orderby,
                                        'order'              => 'DESC',
                                        'show_count'   => $show_count,
                                        'pad_counts'   => $pad_counts,
                                        'hierarchical' => $hierarchical,
                                        'title_li'     => $title,
                                        'hide_empty'         => true,
                                        'child_of'      => $child,
                                        //'exclude'       => array (428)
                                    );
                                ?>

                                    <ul class="columns">
                                        <?php wp_list_categories( $args ); ?>
                                    </ul>
                            <?php endforeach;?>

                        </section> <!-- end article section -->

                    </article> <!-- end article -->

                </div> <!-- end #main -->

        </div> <!-- end #inner-content -->

    </div> <!-- end #content -->

<?php get_footer(); ?>
