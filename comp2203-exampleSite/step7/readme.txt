Notes for step7
===============

The task tackled in step7 is to make the site compatible with legacy browsers.  Older 
versions of Firefox, Chrome, Safari and the like are straighforward.  It's IE, and 
especially IE6 that's the challenge! 

The process for dealing with it is easy, though.  There are just two steps:
1. Declare the HTML semantic elements as "display:block".  That sorts out legacy versions 
   of Firefox, Safari, Chrome, etc.  It also sorts out IE11 (yes - IE11 *does* need 
   fixing!!)
2. Include a comment in the <head> section that versions before IE9 will read.  This 
   goes over the Internet and brings in html5shiv, a Javascript fix for those pesky IE 
   browsers.  If you prefer to keep a local copy (for faster page load times), it is 
   freely available for download. 

As before, you can inspect the code by downloading it and looking at it in a text editor; 
but to look at the php pages, you'll need to download the zip file, otherwise they'll be 
interpreted by the server before they're made available.

D.A.Argles
15.10.2014 @ 21:55h