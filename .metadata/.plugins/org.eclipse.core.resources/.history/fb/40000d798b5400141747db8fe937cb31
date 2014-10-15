<?php
/**
 * template-page.php is the template page for our website
 *
 * It calls and streams our top template, templateTop.html.  
 * The main centre section of this file makes space to stream the page content.  
 * Finally, it calls and streams our bottom template, templateBottom.html for the 
 * remainder of our boilerplate code.
 * 
 * @author David Argles <d.argles@gmx.com>
 * @version 05-09-2014, 14:02h
 * @copyright 2014 Haven Consulting
 */
 
 /* The next two lines call our partials class and instantiate the class 
  * Don't change these lines.
  */
 include("library/partials.php");
 $template = new partials();
 
 /* Now we stream our initial template code
  * Change "Template Page" to be whatever the name of this page is.
  */
 echo $template->render("templateTop", ["title" => "Template Page"]);
?>

      <!-- Our main page content follows -->
      <!-- Change the following two lines to be whatever you need for this page -->
      <h3>Welcome!</h3>
      <p>Welcome to my Site!</p>
      
<?php
 /* Now we stream our final boilerplate code 
  * Don't change anything in the following line
  */
 echo $template->render("templateBottom", []);
?>