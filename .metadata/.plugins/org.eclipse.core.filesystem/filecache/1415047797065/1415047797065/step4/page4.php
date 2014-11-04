<?php
/**
 * page4.php is formed from a template page for our website
 *
 * It calls our class, htmlPage, sets the title for our page, sets the page content,
 * & streams the completed boilerplate code.
 * 
 * @author David Argles <d.argles@gmx.com>
 * @version 19-10-2013, 00:03h
 * @copyright 2013 Haven Consulting
 */

  require("library/htmlPage.php");
  $page = new htmlPage();
  $page->setTitle("Page 4: David's Site");
  $page->setContent("
      <h3>And Finally...</h3>
      <p>You have arrived at page 4.</p>
");
  echo $page->HTMLstream();
/**---------------------------------------------
 *             End of Code
 *----------------------------------------------
 */
?>

