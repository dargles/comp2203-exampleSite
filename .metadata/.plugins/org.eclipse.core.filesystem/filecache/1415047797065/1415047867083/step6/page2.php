<?php
/**
 * page2.php is also formed from a template page for our website
 *
 * It calls our class, htmlPage, sets the title for our page, sets the page content,
 * & streams the completed boilerplate code.
 * 
 * @author David Argles <d.argles@gmx.com>
 * @version 19-10-2013, 00:02h
 * @copyright 2013 Haven Consulting
 */

  require("library/htmlPage.php");
  $page = new htmlPage();
  $page->setTitle("Page 2: David's Site");
  $page->setContent("
      <h3>Page 2</h3>
      <p>This is page 2.</p>
");
  echo $page->HTMLstream();
/**---------------------------------------------
 *             End of Code
 *----------------------------------------------
 */
?>

