A Photo Album using Cloud Storage
Description
The goal of this project is to develop a photo-album application that uses cloud storage. More specifically, you will use the Dropbox API to create a photo album, in which you can upload, delete, and browse photographs.

This project must be done individually. No copying is permitted. Note: We will use a system for detecting software plagiarism, called Moss Links to an external site., which is an automatic system for determining the similarity of programs. That is, your program will be compared with the programs of the other students in class as well as with the programs submitted in previous years. This program will find similarities even if you rename variables, move code, change code structure, etc.

Note that, if you use a Search Engine to find similar programs on the web, we will find these programs too. So don't do it because you will get caught and you will get an F in the course (this is cheating). Don't look for code to use for your project on the web or from other students (current or past). Just do your project alone using the help given in this project description and from your instructor and GTA only.

Platform
You will develop this project on your PC/laptop using XAMPP and you will test it using your Chrome/Chromium-based web browser. Download project6.zip Links to an external site.and unzip it inside your web server document root directory.

Documentation
You should put your code in one file: album.php. Your PHP code must use the Dropbox API V2 Links to an external site.through the functions provided in project6/dropbox.php. You will first need to create a Dropbox account Links to an external site.and a Dropbox API app with both Files and datastores, which will have the App name: cse5335_xyz1234, where xyz1234 is your NetID. Steps: go to My apps Links to an external site.and push "Create app". On "1. Choose an API" select "Scoped Access". On "2. Choose the type of access you need" select "App folder". On "3. Name your app" use "cse5335_xyz1234", where xyz1234 is your NetID. Then go the "Permissions" tab and turn on all permissions (this is very important). Finally, the last thing to do is to go back to the "Settings" tab, set the "Access token expiration" to "No expiration" and push "Generate" on "Generated access token". See the screenshots for an example: Settings Permissions. Cut and paste this access token inside project6/album.php.

You can test your setup on your web browser by using the URL address http://localhost/project6/album.php Links to an external site.. Look at the code in album.php. It includes the file dropbox.php, which is a library of PHP functions that call the Dropbox API.

Note that you can run PHP on your terminal. The PHP interpreter is located inside the XAMPP installation directory (eg, on Windows, it's at C:\Xampp\php). You can just run php album.php in your terminal.

Project Requirements
You will develop a photo-album application on Dropbox. Your task is to modify your album.php script in your project6 directory to support the following operations:

Provide a form to upload a new image (a local *.jpg file from your PC) on your Dropbox images folder. Look at the class slides (page 34) for a PHP example that handles file uploads (http POST call album.php?userfile=file.jpg).
A display window that lists the names of the images in your Dropbox directory. For each image name you must have a link that, when you click it, it downloads and displays the image in the image section (http call album.php?display=file.jpg). Each image name also has a button to delete this image from the Dropbox storage (http call album.php?delete=file.jpg).
An image section that displays the current image. A photo must be downloaded inside the project6/tmp directory before it's displayed. Initially, this image can be empty.
Note that your program should be written in PHP using the dropbox.php functions. Don't use any additional PHP libraries or any other language.

What to Submit
Submit your zipped project6 directory.
