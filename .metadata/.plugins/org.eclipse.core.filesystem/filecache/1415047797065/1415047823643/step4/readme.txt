Notes for step4
===============

In this example, we've made significant changes to our htmlPage object in order to make it more consistent.  Basically, we instantiate the htmlPage, set the necessary attributes (including the page content), and then stream the entire html in one go.

Note that we've made sure that attributes are not accessible directly outside of the object - they can only be changed using the methods we've provided.  This is Good Practice... ;-)

For fun, I've commented out the lines setting the attributes in page3.php so you can see what the default page looks like.

As before, you can inspect the code for the individual files by downloading them and looking at them in a text editor.

I've made another change here as well.  I've added a "template.php" into the library subdirectory.  This is because, at this stage, it's Really Easy to create a new site using the code we've produced B-)  The process is as follows:
 1) Create the web directory for your new website (let's call it "newsite")
 2) Copy the entire library directory into "newsite"
 3) Now make as many copies of "template.php" in "newsite" as you need pages for the site
 4) Rename the template pages as appropriate (i.e. "index.php", "about.php"... whatever)
 5) Update the <nav> section in htmlPage.php with the new page names
 6) Now go through each webpage in turn and update the <title> and content
Job done!  Obviously for a different website, you will probably want to go in to normal.css and change the colours/layout or whatever, but it's a really quick way to get things up and running.  And... you only need to change anything ONCE in ONE PLACE... :-) !

D.A.Argles
19.10.2013 @ 11:50h
