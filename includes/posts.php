<section>
    <h2>Latest Posts</h2>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article>
            <h3><?php the_title(); ?></h3>
            <p><?php the_excerpt(); ?></p>
        </article>
    <?php endwhile; else : ?>
        <p>Sorry... No posts yet.</p>
    <?php endif; ?>
</section>