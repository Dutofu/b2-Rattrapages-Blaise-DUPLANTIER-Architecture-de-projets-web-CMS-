<?php get_header(); ?>
<div class="container">
    <h1><?php single_term_title(); ?></h1>
    <?php if ( have_posts() ) : ?>
        <div class="grid">
            <?php while ( have_posts() ) : the_post(); ?>
                <div class="grid-item">
                    <h2><?php the_title(); ?></h2>
                    <p>Couleur: <?php the_field('couleur'); ?></p>
                    <p>Prix: <?php the_field('prix'); ?> €</p>
                </div>
            <?php endwhile; ?>
        </div>
    <?php else : ?>
        <p>Aucun ingrédient trouvé.</p>
    <?php endif; ?>
</div>
<?php get_footer(); ?>

<style>
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
    }
    .grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 20px;
    }
    .grid-item {
        background: #fff;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        text-align: center;
    }
</style>
