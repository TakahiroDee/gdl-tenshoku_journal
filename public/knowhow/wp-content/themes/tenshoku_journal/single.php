<?php get_header(); ?>
<div class="l-main" id="p-knowhow">
  <div class="l-inner l-row">
    <?php get_breadcrumb(); ?>
  </div>
  <div class="l-inner">
    <?php
      if( have_posts() ):
        while( have_posts() ): the_post();
    ?>
    <div class="ui divider u-dn"></div>
    <div class="c-articleHeader">
      <?php get_eyecatch(); ?>
      <div class="c-articleHeader__txtbox">
        <h1 class="c-articleHeader__title"><?php the_title(); ?></h1>
      </div>
      <p class="c-articleHeader__lead">
        <?php echo get_post_meta($post->ID, 'headline', true); ?>
      </p>
    </div>
    <?php
      endwhile;
      endif;
    ?>
    <div class="ui divider"></div>
  </div>
  <div class="l-inner l-row c-articleMain">
    <div class="l-col-lg-8" style="color:#666;">
      <div class="c-articleContent">
        <?php
          if( have_posts() ):
            while( have_posts() ): the_post();

            the_content();

            endwhile;
          endif;
        ?>
      </div>


      <?php
        $tags = wp_get_post_tags($post->ID);

        if($tags):
          $tagIDList = [];

          foreach($tags as $tag){
            array_push($tagIDList, $tag->term_id);
          }

          $args = [
            'tag__in'      => $tagIDList,
            'post__not_in' => array($post->ID),
            'showposts'    => 3,
            'orderby'      => 'rand',
          ];

          $relatedQuery = new WP_Query($args);

          if($relatedQuery->have_posts()):
      ?>


      <div class="c-relatedArticle" style="margin: 5.0rem 0;">
        <h2>関連する記事</h2>
        <div class="ui divider"></div>
        <div class="ui items">

        <?php
            while($relatedQuery->have_posts()): $relatedQuery->the_post();
        ?>

          <div class="item">
            <a href="<?php the_permalink(); ?>" class="image c-article__thumb">
              <?php the_post_thumbnail('full'); ?>
            </a>
            <div class="content"><a class="header"><?php the_title(); ?></a>
              <div class="description">
                <?php the_excerpt(); ?>
              </div>
            </div>
          </div>

        <?php
          endwhile;
        ?>

        </div>
      </div>

      <?php
        endif;
        endif;
        wp_reset_query();
      ?>

    </div>    
    <?php get_sidebar('detail'); ?>
  </div>
</div>
<?php get_footer(); ?>
