Notes for step4
===============

In this example, we introduce a "partials" class which is defined in "partials.php".  This 
class gives us a "render" method which not only allows us to access the partials files, it 
also allows us to change specific parts of the template.  We've chosen to mark the "variables" 
by enclosing them in double curly brackets, like this: {{marker}}.  

The class is instantiated like this:  $template = new partials(); 
and the partials are called up like this: echo $template->render("templateTop", ["title" => "Page 1"]).

We've taken this example one step further from what we looked at in the lecture and made it so 
it could be used as a "template website".  You can make a new website very quickly indeed by 
following this procedure:

1) Copy the entire contents of the <library> directory to <public_html> on your webserver.
2) Make as many copies of template-page.php as you need pages on your website; put them 
    outside <library>, and rename them appropriately (index.php, contact.php... whatever).
3) Change the details of templateTop and templateBottom.html to suit your requirements 
    (e.g. page heading, tagline, etc.  Also make sure you change the menu as appropriate).
4) Test it out and correct any errors.

Job done!

As before, you can inspect the individual pages' code by downloading it and looking at it in a 
text editor.

D.A.Argles
05.09.2014 @ 14:14h