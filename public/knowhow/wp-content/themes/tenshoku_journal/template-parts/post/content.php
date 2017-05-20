<article class="item c-article__item" id="post-<?php the_ID(); ?>">
  <a href="<?php the_permalink(); ?>" class="image c-article__thumb">
    <?php the_post_thumbnail('full'); ?>
  </a>
  <div class="content c-article__content">
    <h1 class="c-article__contentTitle">
      <a class="header c-article__contentLink" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h1>
    <div class="description c-article__contentDesc">
      <?php the_excerpt(); ?>
    </div>
    <div>
      <?php echo get_category_tags();?>
    </div>
  </div>
</article>
