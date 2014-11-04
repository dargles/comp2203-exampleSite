Notes for step5
===============

You won't see any difference at all in the look and feel of the website (oh - except I tinkered a bit more with the css.  And I've changed the labels on the navigation tabs).

What I have done is to introduce an "ini" file ("htmlPage.ini" in the "library" sub-directory) to initialise the key attributes of the htmlPage class.  There are two reasons for doing this.
a) The first is a "because it's good for you" reason - it gives another way to introduce arrays into our code, so you get practice at handling objects and arrays.
b) But there's also a really good practical reason - it makes for much more easily maintained code.  If you want to change things in the boilerplate look and feel, it's *much* easier to change things in an ini file than to wade through the php code to find the relevant place and then change it without making a syntax error ;-) .  If you want to make a boilerplate website that you can re-use (e.g. like my ECS notes pages websites), this has to be the way to go.

The page3.php attributes are still commented out so you can see what the default page looks like.  Except that the ini file takes over, so there's very little "default" left!

As before, you can inspect the code for the individual files by downloading them and looking at them in a text editor.

D.A.Argles
25.10.2013 @ 13:56h
