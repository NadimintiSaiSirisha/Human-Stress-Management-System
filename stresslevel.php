<?php
$p1 = $_REQUEST["bp"];
$p2 = $_REQUEST["bt"];

if ($p1 < "100" && $p2<="98") {
header("location:stress1.html");
} else if  ($p1 < "120" && $p2 <="100") {
   header("location:stress2.html");
} else {
  header("location:stress3.html");
}


?>
