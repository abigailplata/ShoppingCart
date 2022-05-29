<?php

// include function files for this application
require_once('sticker_sc_fns.php');
session_start();

do_html_header("Updating sticker");
if (check_admin_user()) {
  if (filled_out($_POST)) {
    $oldstickerID = $_POST['oldstickerID'];
    $stickerID = $_POST['stickerID'];
    $title = $_POST['title'];
    $color = $_POST['color'];
    $catid = $_POST['catid'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    if(update_sticker($oldstickerID, $stickerID, $title, $color, $catid, $price, $description)) {
      echo "<p>Sticker was updated.</p>";
    } else {
      echo "<p>Sticker could not be updated.</p>";
    }
  } else {
    echo "<p>You have not filled out the form.  Please try again.</p>";
  }
  do_html_url("admin.php", "Back to administration menu");
} else {
  echo "<p>You are not authorised to view this page.</p>";
}

do_html_footer();

?>
