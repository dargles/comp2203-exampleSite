Notes for step6
===============

In step 6, the main thing we've done is to access the $_SERVER variable, PHP_SELF, to find out 
automatically which page we're currently on.  This enables us to do two things; (1) we can 
change the menu button in the <nav> section so that the current page is highlighted; and 
(2) we can automate the title in the browser tab so that it doesn't have to be specified on 
every calling page.

PHP_SELF returns the entire path as well as the page filename, so we have to extract the 
filename using a combination of the functions substr and strrchr:

    $thispage = substr(strrchr($_SERVER['PHP_SELF'],"/"),1);
    
Basically, this gets everything -after- the final "/" - i.e. just the page's filename.  So 
"/mydir/page1.php" gets truncated to "page1.php" which is what we want.

Having identified the filename of the current page and the link that refers to it, we can 
now choose a version of the menu link that carries a different definition in the CSS.  So 
in this example, you'll see the selected page having a tab the same colour as the page itself, 
whilst the unselected page tabs are grey.

Note that we've now automated just about everything, so the page template partials can be 
called without specifying any replacements. So:

    echo $template->render("templateTop". ["title" => "Page 1"]);
becomes:
    echo $template->render("templateTop");
    
In passing, we may note that this now all works fine; but if we want to override anything 
on a particular page, we can add it in to the (now optional) list of replacements following 
the specified partials filename.      

As before, you can inspect the individual pages' code by downloading it and looking at it in a 
text editor.

D.A.Argles
05.09.2014 @ 17:36h