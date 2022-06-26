<?php get_header(); ?>
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <section class="hero">
                        Hero
                    </section>
                    <section class="services">
                        Services
                    </section>
                    <section class="home-blog">
                        <div class="container">
                            <div class="blog-items">
                                <?php 
                                    if( have_posts() ):
                                        while( have_posts() ) : the_post();
                                        ?>
                                            <article>
                                                <!-- the_title chama titulo do post -->
                                                <h2><?php the_title(); ?></h2> 
                                                <div class="meta-info">
                                                    <!-- get_the_date pega data de publicacao do post e the_author_posts_link pega o autor do post-->
                                                    <!-- maioria do get tem que ter mostrada ex: echo -->
                                                    <p>Posted in <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></p>
                                                    <!-- the_category pega category do post, primeirp parametro é divisao entre as categorias  -->
                                                    <p>Categories: <?php the_category( ' ' ); ?></p>
                                                    <!-- the_tags para pegar as tags do wp, primeiro parametro oq é mostrando antes da lista de tags, segundo é separados -->
                                                    <p>Tags: <?php the_tags( '', ', '); ?></p>
                                                </div>
                                                <!-- the_content é conteudo do post  -->
                                                <?php the_content(); ?>
                                            </article>
                                        <?php
                                        endwhile;
                                    else: ?>
                                        <p>Nothing yet to be displayed!</p>
                                <?php endif; ?>                                
                            </div>
                        </div>
                    </section>
                </main>
            </div>
        </div>
<?php get_footer(); ?>