<div class="l-col-lg-4 l-sidebar">
  <div class="l-aside">
  <?php
    get_category_list();
    // fixed page list
    get_fixed_page_sidebar('fixed');
    get_fixed_page_sidebar('ranking');

    get_template_part('template-parts/sidebar/ranking');
  ?>
  </div>
</div>
