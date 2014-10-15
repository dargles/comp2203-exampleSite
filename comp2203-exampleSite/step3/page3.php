<?php
/**
 * page3.php is the third page for our website
 *
 * It calls and streams our top template, templateTop.html.  
 * The main centre section of this file makes space to stream the page content.  
 * Finally, it calls and streams our bottom template, templateBottom.html for the 
 * remainder of our boilerplate code.
 * 
 * @author David Argles <d.argles@gmx.com>
 * @version 03-09-2014, 17:04h
 * @copyright 2014 Haven Consulting
 */
 /* The next line calls and streams our initial boilerplate code */
 include("library/templateTop.html");
?>
      <!-- Our main page content follows -->
      <h3>Welcome to Page 3</h3>
      <p>This is page three, and it is using a CSS to get a bit of formatting.</p>
<?php
 /* Now we call and stream our final boilerplate code */
 include("library/templateBottom.html");
?>