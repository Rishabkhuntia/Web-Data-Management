for $x in doc("reed.xml")//course
let $dou := $x/instructor
group by $dou
return 
<INSTRUCTOR> <Instructor_name>{data($dou)}</Instructor_name>
<Course_title>{data(distinct-values($x/title))}</Course_title>
</INSTRUCTOR>
