<?php
/**
 * page4.php is the fourth page for our website
 *
 * It calls and streams our top template, templateTop.html.  
 * The main centre section of this file makes space to stream the page content.  
 * Finally, it calls and streams our bottom template, templateBottom.html for the 
 * remainder of our boilerplate code.
 * 
 * @author David Argles <d.argles@gmx.com>
 * @version 15-10-2014, 18:05h
 * @copyright 2014 Haven Consulting
 */
 
 /* The next two lines call our partials class and instantiate the class */
 include("library/partials.php");
 $template = new partials();
 /* Now we can stream our initial template code */
 echo $template->render("templateTop", array("title" => "Page 4"));
?>
      <!-- Our main page content follows -->
      <h3>Page 4</h3>
      <p>You have reached page 4.  This uses CSS to get a bit of formatting.  Notice that 
      	there's the beginnings of a responsive layout here - try changing the width of the 
      	browser window!</p>
<?php
 /* Now we stream our final boilerplate code */
 echo $template->render("templateBottom", array());
?>