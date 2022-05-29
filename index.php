<?php
  include ('sticker_sc_fns.php');
  // The shopping cart needs sessions, so start one
  session_start();
  
  do_html_header("Welcome to StickersXYZ");

  // display a random book - Jonathan Ebueng
  echo "<h1>Check out this sticker!</h1>";
  random_sticker();

  echo "<p>Please choose a category:</p>";

  // get categories out of database
  $cat_array = get_categories();

  // display as links to cat pages
  display_categories($cat_array);

  // if logged in as admin, show add, delete, edit cat links
  if(isset($_SESSION['admin_user'])) {
    display_button("admin.php", "admin-menu", "Admin Menu");
  }
  do_html_footer();
?>
