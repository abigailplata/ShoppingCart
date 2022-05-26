<?php

// include function files for this application
require_once('sticker_sc_fns.php');
session_start();

do_html_header("Deleting sticker");
if (check_admin_user()) {
  if (isset($_POST['stickerID'])) {
    $stickerID = $_POST['stickerID'];
    if(delete_sticker($stickerID)) {
      echo "<p>Sticker ".$stickerID." was deleted.</p>";
    } else {
      echo "<p>Book ".$stickerID." could not be deleted.</p>";
    }
  } else {
    echo "<p>We need an stickerID to delete a sticker.  Please try again.</p>";
  }
  do_html_url("admin.php", "Back to administration menu");
} else {
  echo "<p>You are not authorised to view this page.</p>";
}

do_html_footer();

?>
