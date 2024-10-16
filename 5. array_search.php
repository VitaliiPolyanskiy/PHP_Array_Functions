<?php
$langs = array("PHP","ASP.NET","Lisp","Python","Java", "Perl");
if (array_search("PHP",$langs)===false)
    echo "Надо бы изучить PHP<br>";
else {
  $k = array_search("PHP",$langs);
  echo "PHP я изучил $k-м";
}
?>
