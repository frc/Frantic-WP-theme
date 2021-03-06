<?php get_header(); ?>

    <div class="l-constrained">

        <div role="main" class="l-main">

            <?php if (have_posts()) : ?>

                <?php while (have_posts()) : the_post(); ?>

                    <article <?php post_class(); ?>>

                        <h2><?php the_title(); ?></h2>


                            <?php the_content(); ?>


                    </article>

                <?php endwhile; ?>

            <?php endif; ?>

        </div><!-- end main -->

        <aside role="complementary" class="l-complementary">



        </aside><!-- end complementary -->

    </div><!-- end content -->

<?php get_footer(); ?>