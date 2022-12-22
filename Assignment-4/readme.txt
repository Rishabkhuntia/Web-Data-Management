PHP Scripting
Description
The goal of this project is to develop a web application in PHP to find best restaurants and pick some of them as your favorites.

This project must be done individually. No copying is permitted. Note: We will use a system for detecting software plagiarism, called Moss Links to an external site., which is an automatic system for determining the similarity of programs. That is, your program will be compared with the programs of the other students in class as well as with the programs submitted in previous years. This program will find similarities even if you rename variables, move code, change code structure, etc.

Note that, if you use a Search Engine to find similar programs on the web, we will find these programs too. So don't do it because you will get caught and you will get an F in the course (this is cheating). Don't look for code to use for your project on the web or from other students (current or past). Just do your project alone using the help given in this project description and from your instructor and GTA only.

Platform
You will develop this project on your PC/laptop using XAMPP and you will test it using using your Chrome/Chromium-based web browser.

Documentation
The following are tutorials on PHP. Use them as a reference only.

PHP TutorialLinks to an external site.
PHPLinks to an external site.
PHP.netLinks to an external site.
Project Requirements
This project is based on Project 2. You will develop a web application in PHP that finds the best restaurants in a city, allows you to pick some of them as your favorites, and stores them in your current session. Your project is to write only one PHP program yelp.php. You don't need to use JavaScript. You don't need any proxy. This PHP script must generate HTML with 3 areas:

search-form: an HTML form to search Yelp (like in Project 2) that has two text areas to put the city name and the search terms, a button "Find", and a button "Reset".
search-results: displays the results of the current search where the restaurant image is clickable to allow you to pick this restaurant as one of your favorites (that is, unlike Project 2, the image is not a clickable "url" to a Yelp page).
favorites: displays the list of your current favorite restaurants.
The search-form is on top, and the search-results and the favorites lists at the bottom, displayed in two columns next to each other (you may use an HTML table to structure your page). The city name displayed in the search-form is always the last city you used in your search. The "Reset" button clears the search results and the favorite list (can be implemented as a button widget inside an anchor tag). When you click on a restaurant image, this restaurant is stored in your favorite list but the search results are not cleared (the PHP script always displays the last search results).

You will use 3 PHP session values:

$_SESSION["city"]: stores the last city used in search (a string)
$_SESSION["search"]: the last search results (an array)
$_SESSION["favorites"]: the favorite restaurants (an array)
Your PHP script must respond to the following http calls:

yelp.php?city=Arlington+Texas&keywords=Indian+buffet: It calls the Yelp web service to find the best 10 restaurants in this city that match the keywords (like in Project 2). It converts the JSON response to a PHP object using json-decode Links to an external site.and appends the returned business objects (restaurants) in the array $_SESSION["search"] as new associations from a business id to a PHP object.
yelp.php?store=zIRGIbTPLxjawtBnFULSfw: It copies the restaurant with this business id from the $_SESSION["search"] array to the $_SESSION["favorites"] array.
yelp.php?reset: It clears all the session values.
How to call the Yelp web service from PHP: use either file_get_contents Links to an external site.or curl Links to an external site.- see project2/proxy.php

What to Submit
Submit your yelp.php file only.
