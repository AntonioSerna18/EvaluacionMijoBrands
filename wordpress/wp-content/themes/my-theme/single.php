<?php get_header(); ?>

<main class="wrap">
    <section class="content-area content-full-width">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <article class="article-full">
            <header>
                <h2>
                    <?php the_title(); ?>
                </h2>
            </header>
            
            <?php the_content(); ?>
        </article>

        <?php endwhile; else : ?>

        <article>
            <p>Lo sentimos, no encontramos publicaciones para mostrar.</p>
        </article>

        <?php endif; ?>

    </section>
</main>

<?php get_footer(); ?>