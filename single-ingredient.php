<?php get_header(); ?>
<div class="container">
    <h1><?php the_title(); ?></h1>
    <div class="ingredient-details">
        <p>Couleur: <?php the_field('couleur'); ?></p>
        <p>Prix: <?php the_field('prix'); ?> €</p>
    </div>
</div>
<?php get_footer(); ?>

<style>
    .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
    }
    .ingredient-details {
        background: #fff;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        text-align: center;
    }
</style>
