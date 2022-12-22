Using DOM, XPath, and XSLT
Description
The goal of this project is to learn DOM, XPath, and XSLT to query XML data.

This project must be done individually. No copying is permitted. Note: We will use a system for detecting software plagiarism, called Moss Links to an external site., which is an automatic system for determining the similarity of programs. That is, your program will be compared with the programs of the other students in class as well as with the programs submitted in previous years. This program will find similarities even if you rename variables, move code, change code structure, etc.

Note that, if you use a Search Engine to find similar programs on the web, we will find these programs too. So don't do it because you will get caught and you will get an F in the course (this is cheating). Don't look for code to use for your project on the web or from other students (current or past). Just do your project alone using the help given in this project description and from your instructor and GTA only.

Platform
You will do this project on your own PC/laptop using Java. You may use a text editor to develop your Java programs but you may use an IDE, such as IntelliJ Idea or Eclipse, if you want.

Here are some examples:

Using DOM in JavaDownload Using DOM in Java
Using XPath in JavaDownload Using XPath in Java
An XSLT transformationDownload An XSLT transformation
Using XSLT in JavaDownload Using XSLT in Java
The cs.xml XML document used in Java Download The cs.xml XML document used in Java
Documentation
The following web pages provide some tutorials. Use them as a reference only.

DOM Java APILinks to an external site.
XPath TutorialLinks to an external site.
Java API for javax.xml.xpathLinks to an external site.
XSLT TutorialLinks to an external site.
Another XSLT tutorialLinks to an external site.
XSL Transformations (by XML Bible)Links to an external site.
Project Requirements
You will evaluate DOM, XPath, and XSLT over XML data that represents courses from Reed College, available at reed.xml Links to an external site.with DTD reed.dtd Links to an external site.. More specifically:

Write a plain Java program dom.java that uses the Java DOM API over the XML data in reed.xml to print the titles of all MATH courses that are taught in room LIB 204
Write a plain Java program xpath.java that evaluates the following XPath queries over the XML data in reed.xml:
Print the titles of all MATH courses that are taught in room LIB 204
Print the instructor name who teaches MATH 412
Print the titles of all courses taught by Wieting
Write an XSLT program math.xsl to display all MATH courses in Reed College by transforming the XML file reed.xml to XHTML using XSLT. Your XHTML must contain a table, where each table row is a Math course. Modify the Java program xslt.java Download xslt.javato test your XSLT and then load the resulting html output file on your web browser.
What to Submit
Submit your zipped directory project7 with your files dom.java, xpath.java, math.xsl, xslt.java, and the output from your DOM, XPath, and XSLT programs.
