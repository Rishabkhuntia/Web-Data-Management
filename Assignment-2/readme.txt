Find Best Restaurants
Description
The goal of this project is to use the Yelp API for Developers to print the best restaurants in a city based on some search criteria. This project must use JavaScript and AJAX.

This project must be done individually. No copying is permitted. Note: We will use a system for detecting software plagiarism, called Moss Links to an external site., which is an automatic system for determining the similarity of programs. That is, your program will be compared with the programs of the other students in class as well as with the programs submitted in previous years.

Note that, if you use a Search Engine to find similar programs on the web, we will find these programs too. So don't do it because you will get caught and you will get an F in the course (this is cheating). Don't look for code to use for your project on the web or from other students (current or past). Just do your project alone using the help given in this project description and from your instructor and GTA only. Finally, you should not post your code nor deploy your project on a public web site.

Platform
You will do this project on your own PC/laptop. You need to install the XAMPP Links to an external site.web server, which includes the Apache http web server, PHP, MySQL (MariaDB), and PHPMyAdmin (these are the only components you need). It's about 125MBs (775MBs after installation) and can be installed on Windows, Linux, and Mac OS. The installation directory is \xampp for Windows, /opt/lampp for Linux, and /Applications/XAMPP for Mac. To start the server on Windows, you run \xampp\xampp-control.exe and you start the Apache web server. You may have to change the Security properties of this executable to Full Control for Users. To start the server on Linux, run /opt/lampp/xampp start as root (or run the app). If you get the message "XAMPP: Another web server with SSL is already running.", this means you have another web server running (use netstat -nap | grep :443 to see which app is running a web server and kill it). To start the server on Mac OS, run the XAMPP/manager-asx app in Applications, go to Manage Servers, and run the Apache Web Server.

You will test the project on your PC/laptop using the Chrome or Chromium-based web browser (as in Project #1).

Setting up your project
Download the project2 zip file project2.zip Links to an external site.. Unzip it inside your web server document root directory (ie, inside the htdocs sub-directory in the XAMPP installation directory). On Linux, you may have to do this as the root user and you should add permissions +x and +r).

The project2 directory contains 3 files: proxy.php, yelp.html, and yelp.js. The proxy script proxy.php is used to avoid the cross-domain restriction when using Ajax. All the web service requests to Yelp should go through this proxy. See the example in yelp.js. Your project is to edit yelp.html and yelp.js as described in the description of the web application.

The Yelp Web Service
For this project, you will use the Yelp Fusion API (v3.0) Links to an external site.from Yelp Links to an external site.(more specifically, the Search API)

To use the Yelp Fusion API (v3), you need to register and get an API key at the Yelp API page Links to an external site.. It's free. After you register, you go to Fusion API Links to an external site.and then "Manage App" and you click on "Generate new API key" from the Yelp API site. You cut-and-paste the API key into your proxy.php, and you test your setup on your web browser by using http://localhost/project2/yelp.html Links to an external site.and by pushing the Find button. It will display the the top 5 Indian restaurants in Arlington in JSON format. If you don't get anything, try this on your browser: http://localhost/project2/proxy.php?term=indian+restaurant&location=Arlington+Texas&limit=5 Links to an external site.. If it gives an empty page, your Yelp API must be wrong. Get a new one.
Project Description
You need to edit the HTML file yelp.html and the JavaScript file yelp.js. Your HTML web page must have 2 sections:

text areas to put the city name and the search terms, and a button "Find"
a display area
When you write a city name, say "Dallas, Texas", and some search terms in the search text area, say "Indian buffet", and you push the "Find" button, it will clear the display and will find and print in the display the 10 best restaurants in that city that match the search terms. They may be less than 10 (including zero) sometimes. The display area will display various information about these restaurants. It will be an ordered list from 1 to 10 that correspond to the best 10 matches. Each list item in the display area will include the following information about the restaurant: the image "image_url" displayed on the browser with an img tag, the "name" as a clickable "url" to the Yelp page of this restaurant, the categories, the price, the rating (a number between 1-5), the postal address and phone in human readable form. When you search for new terms, it will clear the display area, and will write new information based on the new search.

Note that everything should be done asynchronously and your web page should never be redrawn completely. You should not use any JavaScript library, such as JQuery.

What to Submit
Zip your project2 directory and submit the project2.zip file.
