<?php get_header(); ?>

    <div id="content">

        <div id="inner-content" class="wrap clearfix">

            <div id="main" class="eightcol first clearfix" role="main">

                <article id="post-not-found" class="hentry clearfix">

                    <header class="article-header">

                        <h1><?php _e( '404 - Article Not Found', 'bonestheme' ); ?></h1>

                    </header> <!-- end article header -->

                    <div class="entry-content">

                        <p><?php _e( 'The article you were looking for was not found, but maybe try looking again!', 'bonestheme' ); ?></p>

                    </div> <!-- end article section -->

                    <div class="search">

                        <p><?php get_search_form(); ?></p>

                    </div> <!-- end search section -->

                    <footer class="article-footer">
    <h2><a href="http://paradigmgroup.eu/">Return to the homepage</a></h2>
                            <p><?php _e( 'This is the 404.php template.', 'bonestheme' ); ?></p>

                    </footer> <!-- end article footer -->

                </article> <!-- end article -->

            </div> <!-- end #main -->

        </div> <!-- end #inner-content -->

    </div> <!-- end #content -->
    </div> <!-- end #content -->

<?php get_footer(); ?>
