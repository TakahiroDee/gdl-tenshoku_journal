<div class="l-col-lg-4 l-sidebar">
  <div class="l-aside">
  <?php
    get_fixed_page_sidebar('ranking');

    get_template_part('template-parts/sidebar/ranking');

    get_site_rankings();

    get_agent_rankings();
  ?>
  </div>
</div>
