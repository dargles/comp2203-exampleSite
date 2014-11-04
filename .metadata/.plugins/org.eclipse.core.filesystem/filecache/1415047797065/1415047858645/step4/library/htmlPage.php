<?php
/**
 * htmlPage.php provides a basic web page class for our website
 *
 * It defines a class, htmlPage, which has 
 * 
 * @author David Argles <d.argles@gmx.com>
 * @version 18-10-2013, 23:17h
 * @copyright 2013 Haven Consulting
 */

/**
 * htmlPage provides a basic web page class for our website
 *
 * It defines  which
 * stream the necessary HTML code to make up our boilerplate page
 * 
 * @return void
 */
  class htmlPage
  {
    protected $title = "Default Page Title";
    protected $content = "Default page content";

    public function setTitle($newTitle)
    {
      $this->title = $newTitle;
      return;
    }

    public function setContent($newContent)
    {
      $this->content = $newContent;
      return;
    }
/**
 * HTMLstream() streams all the code necessary for our boilerplate HTML page
 * 
 * @param void
 * @return void
 */
    public function HTMLstream()
    {
?>
<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="library/normal.css">
    <title><?php echo($this->title); ?></title>
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
      <?php echo($this->content); ?>
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
