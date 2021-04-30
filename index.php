<?php get_header(); ?> 
<section class="main">
    <div class="content">
        <?php while ( have_posts() ) : the_post(); ?>
        <article>
            <h1><?php the_title(); ?></h1>
            <?php if ( has_post_thumbnail() ) { the_post_thumbnail('full'); }?>
            <?php the_content(); ?> 
            <?php edit_post_link( __( 'Edit Content', '' )); ?>
        </article>
        <?php endwhile; ?>
    </div>

    <aside>
        <?php get_sidebar(); ?>
    </aside>
</section> 

<?php get_footer(); ?>