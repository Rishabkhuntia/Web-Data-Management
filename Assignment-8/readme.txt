Using XQuery
Description
The purpose of this project is to learn XQuery.

This project must be done individually. No copying is permitted. Note: We will use a system for detecting software plagiarism, called Moss Links to an external site., which is an automatic system for determining the similarity of programs. That is, your program will be compared with the programs of the other students in class as well as with the programs submitted in previous years. This program will find similarities even if you rename variables, move code, change code structure, etc.

Note that, if you use a Search Engine to find similar programs on the web, we will find these programs too. So don't do it because you will get caught and you will get an F in the course (this is cheating). Don't look for code to use for your project on the web or from other students (current or past). Just do your project alone using the help given in this project description and from your instructor and GTA only.

Platform
You will do this project on your own PC/laptop. You will use Saxon, which is a free implementation of XQuery in Java.

Download the project8 zip file project8.zip Links to an external site.and unzip it. It contains the saxon.jar file with the Saxon implementation of XQuery in Java. To run the XQuery file q1.xq and store the output in the file o1.xml, use:

java -cp saxon.jar net.sf.saxon.Query -q:q1.xq -o:"o1.xml"
(if you omit -o:"o1.xml", it will print the results to the output). To run XQuery on the command line, use for example:

java -cp saxon.jar net.sf.saxon.Query -qs:'fn:doc("reed.xml")//course[reg_num=10778]//subj'
Documentation
The following provide some tutorials. Use them as a reference only.

Running XQuery from the Command LineLinks to an external site.
XQuery: A Query Language for XMLLinks to an external site.
XQuery: A Guided TourLinks to an external site.
Project Requirements
Consider the XML document available at reed.xml Links to an external site.with DTD reed.dtd Links to an external site.used in Project #7. Express the following queries using XQuery and run them against the file reed.xml using Saxon:

For each MATH course taught in room LIB 204, return an element tagged course with the title, the instructor, the start, and the end times of the course.
For each different course, return an element tagged course with the course title and all the instructor names that teach this course.
For each different department, display the department code and the number of courses taught by the department.
For each different instructor, return an element tagged instructor that contains the name of the instructor and the number of courses taught by the instructor.
For each different instructor, return an element tagged instructor that contains the name of the instructor and the titles of all courses taught by the instructor.
Write each XQuery into a separate file, such as q1.xq for the first query, and then use:
java -cp saxon.jar net.sf.saxon.Query -q:q1.xq -o:"o1.xml"
to write the results of the first query in the file o1.xml.
What to Submit
Zip your project6 directory and submit the zipped file.
