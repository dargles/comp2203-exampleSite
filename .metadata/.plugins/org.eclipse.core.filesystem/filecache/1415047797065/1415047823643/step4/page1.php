<?php
/**
 * page1.php is formed from a template page for our website
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
  $page->setTitle("Home: David's Site");
  $page->setContent("
      <h3>Welcome!</h3>
      <p>Welcome to my Site!</p>
");
  echo $page->HTMLstream();
/**---------------------------------------------
 *             End of Code
 *----------------------------------------------
 */
?>

