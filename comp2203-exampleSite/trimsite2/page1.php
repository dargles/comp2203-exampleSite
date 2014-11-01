<?php
/**
 * page1.php is the home page for our website
 *
 * It calls and streams our top template, templateTop.html.  
 * The main centre section of this file makes space to stream the page content.  
 * Finally, it calls and streams our bottom template, templateBottom.html for the 
 * remainder of our boilerplate code.
 * 
 * @author David Argles <d.argles@gmx.com>
 * @version 03-09-2014, 16:55h
 * @copyright 2014 Haven Consulting
 */
 
  error_reporting(-E_ALL);
  ini_set('display_errors', 'On');
  
 /* The next two lines call our partials class and instantiate the class */
 include("trimsite2/partials.php");
 $template = new partials();
 
 /* Now we can stream our initial template code */
 echo $template->render("Head");
?>

      <!-- Our main page content follows -->
      <h3>Welcome!</h3>
      <p>Welcome to my Site!</p>
      
<?php
 /* Now we stream our final boilerplate code */
 echo $template->render("Tail");
?>