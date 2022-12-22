for $y in doc("reed.xml")//course
let $dou := $y/title
group by $dou
return <crse><title>{data($dou)}</title>
<instructors>{data(distinct-values($y/instructor))}</instructors>
</crse>

