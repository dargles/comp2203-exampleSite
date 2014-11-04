<?php
  include("library/htmlPage.php");
  $page = new htmlPage();
  $page->streamTop();
?>
      <h3>Page 2</h3>
      <p>This is page 2.</p>
<?php
  $page->streamBottom();
?>
