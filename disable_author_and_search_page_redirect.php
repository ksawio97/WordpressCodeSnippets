<?php
  function disable_author_and_search_page_redirect() {
      if (is_author() || is_search()) {
          wp_redirect(home_url());
          exit;
      }
  }
  add_action('template_redirect', 'disable_author_page_redirect');
?>
