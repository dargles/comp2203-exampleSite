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
   
Just to underline - yes there are just two lines changed between steps 6 and 7.  Making 
website cross-browser compatible really -is- that easy! (Well, making simple designs 
compatible is, at any rate...)

As before, you can inspect the code by downloading it and looking at it in a text editor; 
but to look at the php pages, you'll need to download the zip file, otherwise they'll be 
interpreted by the server before they're made available.

+++

NOTE: In the lecture, I came unglued because I was relying on running XP in "VirtualBox". 
Actually, it's much simpler than that.  If you want to see what a web page looks like in 
legacy IE, and if you're running Windoze8 (as I am), just fire up IE11, bring up the 
developer tools, and you can then select a "compatibility mode" - i.e. yu can tell IE11 
to behave like IE5, 7, 8, 9, 10, or "Edge" (=IE11).

If you want a legacy version of other browsers, you have to be careful about where you 
download from - it's really easy to pick up malware.  Mozilla maintain their own 
repository of legacy versions of Firefox.  You can find it at:
   
	https://ftp.mozilla.org/pub/mozilla.org/firefox/releases/

Mozilla attach huge warnings about using legacy versions and point out that you should 
always use the latest version.  True... but not if you need to check backwards 
compatibility!

D.A.Argles
04.11.2014 @ 23:08h