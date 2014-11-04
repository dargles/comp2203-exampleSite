<?php
  include("library/htmlPage.php");
  $page = new htmlPage();
  $page->streamTop();
?>
      <h3>And Finally...</h3>
      <p>You have arrived at page 4.</p>
<?php
  $page->streamBottom();
?>
