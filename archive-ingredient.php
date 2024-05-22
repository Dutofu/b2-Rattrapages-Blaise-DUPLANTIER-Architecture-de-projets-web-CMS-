<?php get_header(); ?>
<div class="container">
    <h1>Ingrédients</h1>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="ingredient">
            <h2><?php the_title(); ?></h2>
            <p>Couleur: <?php the_field('couleur'); ?></p>
            <p>Prix: <?php the_field('prix'); ?> €</p>
        </div>
    <?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>
