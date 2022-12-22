Display Best Restaurants on a Map
Description
This project extends Project 2 by displaying restaurants on a map. It combines two web services: the Yelp API (from Project 2) and Google Maps. After you center your Google Map to a geographical area and enter some terms, such as "Indian Restaurant", your application will find the best matches inside you map area, it will mark their location on the map, and will display some information about these restaurants on the map.

This project must be done individually. No copying is permitted. Note: We will use a system for detecting software plagiarism, called Moss Links to an external site., which is an automatic system for determining the similarity of programs. That is, your program will be compared with the programs of the other students in class as well as with the programs submitted in previous years.

Note that, if you use a Search Engine to find similar programs on the web, we will find these programs too. So don't do it because you will get caught and you will get an F in the course (this is cheating). Don't look for code to use for your project on the web or from other students (current or past). Just do your project alone using the help given in this project description and from your instructor and GTA only. Finally, you should not post your code nor deploy your project on a public web site.

Platform
As in Project 2, you will develop this project on your PC/laptop using XAMPP and you will test it using using a Chrome/Chromium-based web browser. The goal of this project is to extend your Project 2 to work with Google Maps. First, copy your project2 directory into a new project3 directory inside your web server document root directory. Your project is to edit yelp.html and yelp.js inside project3 as described in the description of the web application. Note that everything should be done asynchronously and your web page should never be redrawn completely. You should not use any JavaScript library, such as JQuery.

For this project, you will use:

Google Maps JavaScript API V3Links to an external site.
Google Map MarkersLinks to an external site.
Google Info WindowsLinks to an external site.
To use Google maps, you need to get a Google API key. See directions Links to an external site.. You will need to register and provide a credit card number. Your credit card will not be charged as long as you make less than 28000 calls to the Map API in a month. You should disable this account at the end of the semester so that there are no accidental charges.

Project Description
You need to edit the HTML file yelp.html and the JavaScript file yelp.js that you have created in Project 2. Your HTML web page must have two sections:

a search text area to put search terms with a button "Find"
a Google map of size 600*500 pixels, initially centered at (32.75, -97.13) with zoom level 16
Like in Project 2, when you write some search terms in the search text area, say "Indian buffet", and you push "Find", it will find the 10 best restaurants in the map area that match the search terms. Unlike Project 2 though, there is no city name input - instead, you search for restaurants only inside the displayed map. When you move the map to a different place or you zoom in/out, then the displayed area in the map is changed, which means that the next search will use the new map area. After you find the best restaurants inside the map that match the search keys, you do the following for each restaurant:

You put a map overlay marker on the restaurant location on the map (it's OK if the marker falls a little bit outside the displayed map). Each marker will have a label 1 to 10, which indicates the order of this restaurant within the best 10 matches.
The marker must have an event listener for "click" so that when you click on the marker it pops out an info window attached to the marker that displays the restaurant image, name, and rating (a number between 1-5). When you click again on the marker, the info window is removed. When you click on a different marker, this info window is removed and the info window of the other marker pops out (so there is always at most one info window displayed on the map).
There is no other output on the web page. When you search for new terms, it will clear all the map overlay markers and will create new ones based on the new search and the current displayed map.

Hints:

How do you find the latitude and longitude of a restaurant to put an overlay marker on the map? Each restaurant returned by Yelp has a "coordinate" which contains a "latitude" and a "longitude".
How do you tell Yelp to search only on the displayed map? You set the latitude, longitude, and radius on your Yelp search, which can be derived from the map bounding box from the Google Map. You can get the bounding box of the map using the getBounds Links to an external site.method (it returns 4 numbers).
What to Submit
Zip your project3 directory and submit the project3.zip file.
