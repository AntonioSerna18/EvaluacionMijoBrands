<?php get_header(); ?>

<main class="wrap">
    <section class="content-area content-thin">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <article class="article-full">
            <header>
                <h2><?php the_title(); ?></h2>
                
            </header>
        </article>

    </section>
</main>