<?php get_header(); ?>

<main class="wrap">
    <section class="content-area content-thin">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <article class="article-full">
            <header>
                <h2><?php the_title(); ?></h2>
            </header>
            <?php the_content(); ?>
        </article>

        <?php endwhile; else : ?>

        <article>
            <p>Lo sentimos, no hay publicaciones para mostrar.</p>
        </article>
        <?php endif; ?>

    </section>

    <?php get_sidebar(); ?>

</main>

<?php get_footer(); ?>