<?php
/**
 * page3.php is formed from a template page for our website
 *
 * It calls our class, htmlPage, sets the title for our page, sets the page content,
 * & streams the completed boilerplate code.
 * 
 * @author David Argles <d.argles@gmx.com>
 * @version 19-10-2013, 00:02h
 * @copyright 2013 Haven Consulting
 */

  /* The following line makes the server display error messages.
     Uncomment it during development. */
  ini_set("display_errors", 1);

  require("library/htmlPage.php");
  $page = new htmlPage();
  //$page->setTitle("Page 3: David's Site");
  /*$page->setContent("
      <h3>Welcome to Page 3</h3>
      <p>This is page three.</p>");*/
  echo $page->HTMLstream();
/**---------------------------------------------
 *             End of Code
 *----------------------------------------------
 */
?>

