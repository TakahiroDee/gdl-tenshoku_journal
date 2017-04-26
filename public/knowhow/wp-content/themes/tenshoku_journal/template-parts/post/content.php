<article class="item tj-article__item" id="post-<?php the_ID(); ?>">
  <a href="<?php the_permalink(); ?>" class="image tj-article__thumb">
    <?php the_post_thumbnail('full'); ?>
  </a>
  <div class="content tj-article__content">
    <h1 class="tj-article__contentTitle">
      <a class="header tj-article__contentLink" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h1>
    <div class="description tj-article__contentDesc">
      <?php the_excerpt(); ?>
    </div>
    <div>
      <?php echo get_category_tags();?>
    </div>
  </div>
</article>
