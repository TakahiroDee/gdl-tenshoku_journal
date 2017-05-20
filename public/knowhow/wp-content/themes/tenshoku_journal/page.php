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
      <div class="c-relatedArticle" style="margin: 5.0rem 0;">
        <h2>関連する記事</h2>
        <div class="ui divider"></div>
        <div class="ui items">
          <div class="item">
            <div class="ui tiny image"><img src="./dist/image/wireframes/image.png" width="80" height="80"></div>
            <div class="content"><a class="header">Stevie Feliciano</a>
              <div class="description">
                <p>Stevie Feliciano is a<a>library scientist</a>living in New York City. She likes to spend her time reading, running, and writing.</p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="ui tiny image"><img src="./dist/image/wireframes/image.png" width="80" height="80"></div>
            <div class="content"><a class="header">Stevie Feliciano</a>
              <div class="description">
                <p>Stevie Feliciano is a<a>library scientist</a>living in New York City. She likes to spend her time reading, running, and writing.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php get_sidebar('page'); ?>
  </div>
</div>
<?php get_footer(); ?>
