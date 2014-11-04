<?php
/**
 * htmlPage.php provides a basic web page class for our website
 *
 * It defines a class, htmlPage, which has two functions, streamTop()
 * and streamBottom()
 * 
 * @author David Argles <d.argles@gmx.com>
 * @version 10-08-2013, 21:58h
 * @copyright 2013 Haven Consulting
 */

/**
 * htmlPage provides a basic web page class for our website
 *
 * It defines two functions, streamTop() and streamBottom() which
 * stream the necessary HTML code to make up our boilerplate page
 * 
 * @return void
 */
  class htmlPage
  {
/**
 * streamTop() streams all the code necessary for our boilerplate
 * HTML page before the main page content
 * 
 * @param void
 * @return void
 */
    public function streamTop()
    {
?>
<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="library/normal.css">
    <title>David's Website</title>
  </head>

  <body>
    <container> 
      <header>
        <h3>David's Website</h3>
        <p>A Little Test Site</p>
      </header>
      <nav>
        <a href="page1.php">Home</a>
        <a href="page2.php">Page 2</a>

        <a href="page3.php">Page 3</a>
        <a href="page4.php">Page 4</a>
      </nav>

    <section>
<?php
    }

/**
 * streamBottom() streams all the code necessary for our boilerplate
 * HTML page after the main page content
 * 
 * @param void
 * @return void
 */
    public function streamBottom()
    {
?>
    </section>

    <footer>
      <p>&copy;2013 David</p>
    </footer>
   </container>
  </body>
</html>
<?php
    }
  }

/**---------------------------------------------
 *             End of Code
 *----------------------------------------------
 */
?>
