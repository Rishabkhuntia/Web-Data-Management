for $x in doc("reed.xml")//course
where $x/subj="MATH" and $x/place/building="LIB" and $x/place/room="204"
return <crse> <title>{$x/title}</title> 
<instructor>{$x/instructor}</instructor> 
<start_time>{$x/time/start_time}</start_time>
<end_time>{$x/time/end_time}</end_time>
</crse>
