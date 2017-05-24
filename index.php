<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
  <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
    <header>
      <h2 class="post-title">
        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
          <?php the_title(); ?>
        </a>
      </h2>
    </header>
    <main>
      <?php the_content(); ?>
    </main>
    <footer>
      <ul>
        <li>Date: <?php the_date(); ?></li>
        <li>Author: <?php the_author_meta('display_name'); ?></li>
        <li>Categories: <?php the_category(", ") ?></li>
        <li><?php the_tags(); ?></li>
        <li>Comments: <a href="<?php echo the_permalink(); ?>#comments-section" title="Comments section for <?php the_title_attribute(); ?>"><?php comments_number(); ?></a></li>
      </ul>
    </footer>
  </article>
<?php endwhile; else: ?>
  <h2>404 Not found</h2>
  <p>Sorry, but you're looking for something that isn't here :(</p>
<?php endif; ?>
<?php get_footer(); ?>
