(:~ declare variable $count:=0;

for $x in doc("reed.xml")//course
(:~ where $x/subj="MATH" and $x/place/building="LIB" and $x/place/room="204" ~:)
return <crse> <title>{$x/title}</title> 
<start_time>{$x/time/start_time}</start_time>
<end_time>{$x/time/end_time}</end_time>
</crse> ~:)

(:~ let $count := 0
for $prod in doc("catalog.xml")//product[@dept = ("ACC", "WMN")]
let $count := $count + 1
return <p>{$count}. {data($prod/name)}</p> ~:)

for $x in doc("reed.xml")//course
let $dou := $x/subj
group by $dou
return 
<DEPT> <Department_code>{data($dou)}</Department_code>
<No_of_classes>{count($x)}</No_of_classes>
</DEPT>
