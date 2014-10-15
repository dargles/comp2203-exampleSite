<?php
/**
 * partials.php provides access to our partials
 *
 * It defines a class, partials, which gives access to our boilerplate partials which we 
 * re-use on every page.
 * 
 * @author David Argles <d.argles@gmx.com>
 * @version 04-09-2014, 23:15h
 * @copyright 2014 Haven Consulting
 */

  /**
   * partials provides access to our partials
   *
   * Besides allowing us to load a particular partials file, it also allows us to change 
   * parameters in the file.
   * 
   */
  class partials
  {
    /**
     * @access protected
     * @var class
     */
    protected $heading = "Default Website Heading";
    protected $tagline = "Default website description";
    protected $footer = "Default footer";
    protected $menu = array ("Page 1"=>"page1.php", "Page 2"=>"page2.php");
	
	public function __construct()
    {
      if(@parse_ini_file("library/partials.ini",true)){
        $iniFile = (object) parse_ini_file("partials.ini",true);
        $this->heading = $iniFile->heading;
        $this->tagline = $iniFile->tagline;
        $this->footer = $iniFile->footer;
        $this->menu = (object) $iniFile->menu;
      }
      return;
    }
	     
    /**
     * render() allows us to change the css file used for a particular page
     * 
     * @param text filename (minus extension)
	 * @param array update information in [tag] => [value] format
     * @return The updated partials text
     */
    public function render($partial, $substitutions = []) 
  	{
      // Check that the partial exists
      $filename = "library/$partial.html";
      if(!file_exists($filename)) throw new Exception("Could not find partial $partial in $filename.");
      // Load the partial
      $template = file_get_contents($filename);
	  // Insert simple values from ini file into the substitions list 
      $substitutions = $substitutions + ["heading" => $this->heading, "tagline" => $this->tagline, 
        "footer" => $this->footer];
      // Now add the menu entries from the ini file
      $menu = "\n";
      foreach($this->menu as $name => $page)$menu = $menu."      <a href=\"$page\">$name</a>\n";
	  $substitutions = $substitutions + ["menu" => $menu];
      // Substitute any placeholders
      foreach($substitutions as $key => $replacement) $template = str_replace('{{'.$key.'}}', $replacement, $template); 
      // Send back the result
      return $template;
    }
  }
/**---------------------------------------------
 *             End of Code
 *----------------------------------------------
 */
?>