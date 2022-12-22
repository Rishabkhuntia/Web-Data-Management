for $x in doc("reed.xml")//course
let $dou := $x/instructor
group by $dou
return 
<INSTRUCTOR> <Instructor_name>{data($dou)}</Instructor_name>
<No_of_courses>{count(distinct-values($x/crse))}</No_of_courses>
</INSTRUCTOR>

