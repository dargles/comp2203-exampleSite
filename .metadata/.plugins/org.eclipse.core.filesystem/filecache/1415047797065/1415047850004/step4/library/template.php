<?php
/**
 * template.php is the template webpage for our website
 *
 * It calls our class, htmlPage, sets the title for our page, sets the page content,
 * & streams the completed boilerplate code.
 * 
 * @author David Argles <d.argles@gmx.com>
 * @version 19-10-2013, 11:15h
 * @copyright 2013 Haven Consulting
 */

  /* The following line makes the server display error messages.
     Uncomment it during development. */
  //ini_set("display_errors", 1);

  /* The next two lines bring in the htmlPage class and create a new instance.
     Don't change these lines! */
  require("library/htmlPage.php");
  $page = new htmlPage();
  /* setTitle() changes what appears in the tab at the top of the browser.  Change this
     to suit your page */
  $page->setTitle("Template Page: David's Site");
  /* setContent() sets the main page content.  This is where you put whatever you want
     your page to display. */
  $page->setContent("
      <h3>Template Page</h3>
      <p>Welcome to my Site!</p>
");
  /* The final line streams the html.  Don't change this. */
  echo $page->HTMLstream();
/**---------------------------------------------
 *             End of Code
 *----------------------------------------------
 */
?>

