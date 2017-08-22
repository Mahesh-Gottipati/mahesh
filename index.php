<?php
$url = "https://api.coursera.org/api/courses.v1";    //API
$json = file_get_contents($url); //calling API
$json = json_decode($json); //Parsing
$num=count($json->elements); //Finding number of keys in element object
for($i=0;$i<$num;$i++)
{
$courseId[$i] = $json->elements[$i]->id;  //Array containing courseIds
$courseName[$i]=$json->elements[$i]->name; //Array containing courseNames
$courseType[$i]=$json->elements[$i]->courseType;//Array containg courseTypes
}
echo "<html>";
echo "<body>";
echo  "<a href='result.php' >VIEW(Click to view Database Data)</a><br />";
echo "<table border=20%>";
echo "<br > <thead>The Below table shows data comes from Coursera API(KRACKIN Technologies)</thead>";
echo "<tr>";
echo "<th>COURSEID</th>";
echo "<th>COURSENAME</th>";
echo "<th>COURSETYPE</th>";
echo "<th>SAVE</th>";
echo "</tr>";
for($i=0;$i<$num;$i++)
{
echo "<tr>";
echo "<td>$courseId[$i]</td>";
echo "<td>$courseName[$i]</td>";
echo "<td>$courseType[$i]</td>";
echo  "<td><a href='db.php?name=$courseName[$i]&&id=$courseId[$i]&&type=$courseType[$i]' >Save</a> </td>";
echo "</tr>";
}
echo "</table>";
echo  "</body>";
echo  "</html>";
?>