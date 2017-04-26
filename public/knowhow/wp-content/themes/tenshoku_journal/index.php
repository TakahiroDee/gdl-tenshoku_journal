<?php get_header();?>
<div class="l-main" id="page-knowhow">
  <div class="l-inner l-row">    
    <?php get_breadcrumb(); ?>
  </div>
  <div class="l-inner l-row l-col tj-articles">
    <div class="l-col-lg-8">
      <h1 class="tj-articles__lead"><?php bloginfo('name'); ?><span class="tj-articles__leadmeta"><?php bloginfo('description'); ?></span></h1>
      <div class="ui items">
        <?php
          if( have_posts() ):
            while( have_posts() ): the_post();

            get_template_part('template-parts/post/content', get_post_format());

            endwhile;
          else:
        ?>
        お探しの記事はありません。
        <?php
          endif;
        ?>
      </div>

      <?php
        if( $wp_query->max_num_pages > 1):
          get_pagination(3);
        endif; ?>
    </div>
    <?php get_sidebar(); ?>
  </div>
</div>
<?php get_footer(); ?>
