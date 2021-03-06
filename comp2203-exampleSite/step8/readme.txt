Notes for step8
===============

Step8 deals with Responsive design.  The mantra is that one should design for 
"mobile first".  That's sound advice, but the reality is that, in CSS terms, the first 
section of CSS needs to satisfy legacy browsers.  Mobile devices understand the following 
"@media" statements - legacy browsers don't.

The process is basically as follows:
1. Decide on a maximum and minimum screen width that you wish to cater for and define 
   those.
2. Next decide on any "break points" in widths where you will decide to change the layout.
   Typically, I tend to go for three width ranges, something like:
   - 300 to 479 pixels
   - 480 to 599 pixels
   - 600 to 850 pixels
   The exact figures will depend on your page layout.  These assume a single column 
   display; more columns will typically require greater width.
3. I then define the 600 to 850 dsplay in the first block of the CSS, as this will be 
   understood by legacy browsers.  The @media section dealing with 300 to 479 pixels 
   comes next (mobile first!), next the intermediate 480 to 599 section, and lastly 
   the @media dealing with anything that is unique to 600 to 850 and hasn't come in the 
   initial section.
4. There's one extra bit that's really important.  All the above is dealt with in the 
   CSS.  But there's a line to add to the HTML which tells things like mobile phones 
   not to display at a tiny resolution.  At least, it notices on my MotoG, which has 
   a native resolution which is full HDMI.  Doing all the above results in a correct, 
   but microscopically tiny display.  To stop this happening, the following line needs 
   to be added in the <head> section of templateTop.html:
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   You won't notice any difference on a laptop, but it makes a huge difference on a 
   mobile device with a small screen but high resolution.
   
You can also use @media statements to define things like a different layout if printing 
the page out - but I haven't got into that here.

As before, you can inspect the code by downloading it and looking at it in a text editor; 
but to look at the php pages, you'll need to download the zip file, otherwise they'll be 
interpreted by the server before they're made available.

D.A.Argles
04.11.2014 @ 23:21h