<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML//EN">
<html> <head>
<title></title>
</head>

<body>
<?php
$conn = mysql_connect("localhost", "carol", "gas67sey");
mysql_select_db("carol", $conn);

$sql = "select * from inventory";

$result = mysql_query($sql, $conn);

echo "<table border='1'>\n";
echo "<tr>\n";
while ($field = mysql_fetch_field($result)){
  echo "<th>$field->name</th>\n";
}

echo "</tr>\n";
echo "<tr>\n";
while ($row = mysql_fetch_assoc($result)){
  foreach ($row as $key => $value){
    
    echo "<td>$key</td>\n"
    echo "<td>$value</td>\n"
    
  }
echo "</tr>\n";
}


echo "</table>\n";

?>



<hr>
<address></address>
<!-- hhmts start -->
Last modified: Mon Apr 18 09:19:00 PDT 2011
<!-- hhmts end -->
</body> </html>
