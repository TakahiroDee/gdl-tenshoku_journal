<div class="l-col-lg-4 l-sidebar">
  <?php
    // category list
    get_category_list();
    // fixed page list
    get_fixed_page_sidebar('fixed');
    // ranking list
    get_fixed_page_sidebar('ranking');

    get_template_part('template-parts/sidebar/ranking');
  ?>
</div>
