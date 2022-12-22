All-Time Favorite Restaurants using PHP and MySQL
Description
The goal of this project is to develop a web application using PHP and MySQL. This application will use a database to store and query your all-time favorite restaurants.

This project must be done individually. No copying is permitted. Note: We will use a system for detecting software plagiarism, called Moss Links to an external site., which is an automatic system for determining the similarity of programs. That is, your program will be compared with the programs of the other students in class as well as with the programs submitted in previous years. This program will find similarities even if you rename variables, move code, change code structure, etc.

Note that, if you use a Search Engine to find similar programs on the web, we will find these programs too. So don't do it because you will get caught and you will get an F in the course (this is cheating). Don't look for code to use for your project on the web or from other students (current or past). Just do your project alone using the help given in this project description and from your instructor and GTA only.

Platform
You will develop this project on your PC/laptop using XAMPP and you will test it using using your Chrome/Chromium-based web browser.

Start the Apache Web Server and the Database server on your PC using the XAMPP manager console. Run phpMyAdmin Links to an external site.on your browser and create a new database with name yelp by clicking on New. After you create it, select this database (under the name yelp), go to the SQL tab, and cut and paste the following SQL code and push Go:

create table favorites (
   id             varchar(30) primary key,
   name           varchar(100),
   image_url      varchar(100),
   yelp_page_url  varchar(300),
   categories     varchar(100),
   price          varchar(5),
   rating         float,
   address        varchar(100),
   phone          varchar(15)
);
where the primary key is the id. This table will contain your favorite restaurants. It is important to use the above table as is because the GTA will grade your project based on this schema (varchar sizes can be changed though). For the same reason, the root password for the database should be kept empty (the default).

Project Requirements
You need to re-implement Project 4 using a relational database to store your favorite restaurants. So, like in Project 4, you will store the last city and the search results in the current session, but unlike Project 4, you need to store your favorite restaurants in the database table favorites. The web interface must be the same. You need to copy your yelp.php file that you created in Project 4 to yelp-project4.php, just in case you need it later. Then edit yelp.php so that it works with a database. The http calls to yelp.php must be the same as in Project 4 except the reset call which clears the session data but do not delete items from the database. You will need to use the PDO extension Links to an external site.of PHP to work with databases. Here is sample PHP code that uses PDO:

$dbh = new PDO("mysql:host=127.0.0.1:3306;dbname=yelp",
               "root","",array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
$dbh->beginTransaction();
$dbh->exec('delete from favorites where id="zIRGIbTPLxjawtBnFULSfw:"');
$dbh->commit();
$stmt = $dbh->prepare('select * from favorites');
$stmt->execute();
while ($row = $stmt->fetch()) {
  print_r($row);
}
Documentation
Read The PHP Data Objects (PDO) extension Links to an external site., especially the PDO class Links to an external site..

What to Submit
Submit your yelp.php file.
