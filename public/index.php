<?php require_once('../private/initialize.php'); ?>

<?php

if (isset($_GET["id"])) {
  $page_id = $_GET["id"];
  $page = find_page_by_id($page_id);
  if (!$page) {
    include(SHARED_PATH . '/static_homepage.php');
  }
}

?>

<?php include(SHARED_PATH . '/public_header.php'); ?>

<div id="main">

  <?php include(SHARED_PATH . '/public_navigation.php'); ?>

  <div id="page">
    <?php

    if (isset($page)) {
      // TODO add html
      echo $page['content'];
    } else {
      include(SHARED_PATH . '/static_homepage.php');
    }

    ?>
  </div>

</div>

<?php include(SHARED_PATH . '/public_footer.php'); ?>