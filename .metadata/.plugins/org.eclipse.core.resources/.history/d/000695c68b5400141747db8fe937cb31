<?php
/**
 * partials.php provides access to our partials
 *
 * It defines a class, partials, which gives access to our boilerplate partials which we 
 * re-use on every page.
 * 
 * @author David Argles <d.argles@gmx.com>
 * @version 03-09-2014, 18:18h
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
  	
