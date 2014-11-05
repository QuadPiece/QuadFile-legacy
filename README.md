QuadFile
========

Filesharing written in PHP, spaghetti edition
(Meaning that you deserve a medal if you can decode this PHP code)

How to use
========

**Requirements**

* A webserver capable of PHP
* The abillity to use .htaccess files

**How to set up**

Pretty simple actually:

* Drag all teh shit into a folder
* Create an empty folder named 'file' in the root folder
* Make sure that your webserver's config allows .htaccess in the folders that contain one
* Enable rewrites (Google it, not too hard) or deal with them yourself if you use nginx

**Optinally, but heavily recommended**

Scan through the files to look for any base URLs that need to be changed.  
The site will work well without doing this. But things such as Twitter cards and opengraph will probably be broken.
