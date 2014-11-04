<?php
/**
 * htmlPage.php provides a basic web page class for our website
 *
 * It defines a class, htmlPage, which has 
 * 
 * @author David Argles <d.argles@gmx.com>
 * @version 28-10-2013, 17:54h
 * @copyright 2013 Haven Consulting
 */

/**
 * htmlPage provides a basic web page class for our website
 *
 * It defines several page attributes which are loaded from an htmlPage.ini file. 
 * It also defines an HTMLstream method which outputs the necessary HTML code to 
 * make up our boilerplate page.
 * 
 * @param void
 * @return void
 */
  class htmlPage
  {
    protected $title = "Default Page Title";
    protected $content = "Default page content";
    protected $heading = "Default Website Heading";
    protected $tagline = "Default website description";
    protected $menu = array ("Page 1"=>"page1.php", "Page 2"=>"page2.php");

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

    public function __construct()
    {
      if(@parse_ini_file("htmlPage.ini",true)){
        $iniFile = (object) parse_ini_file("htmlPage.ini",true);
/*echo("<pre>");
print_r($iniFile);
echo("</pre>");*/
        $this->heading = $iniFile->heading;
        $this->tagline = $iniFile->tagline;
        $this->menu = (object) $iniFile->menu;
      }
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
    <link rel="stylesheet" type="text/css" href="library/htmlPage.css">
    <title><?php echo($this->title); ?></title>
  </head>

  <body>
    <container> 
      <header>
        <h3><?php echo($this->heading); ?></h3>
        <p><?php echo($this->tagline); ?></p>
      </header>
      <nav>
        <?php
          foreach($this->menu as $label=>$link){
            echo('        <a href="'.$link.'">'.$label."</a>\n");
          }
        ?>
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
