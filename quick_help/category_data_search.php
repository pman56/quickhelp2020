<?php
$result = '{
"Child-Care":"0",
"Elderly-Care":1,
"Delivery":2,
"Transportations":3,
"Repair":4,
"HandyWork":5,
"Professional-Services":6,
"Technology-Help":7,
"Opportunities-Careers":8,
"Jobs":9,
"Foods":10,
"Others":11

}';






$json = json_decode($result, true);

echo "

<center>
<div class='dropdown'>
  <button title='Search Help Categories' class='cat_cssa btn1 btn-default1 dropdown-toggle' type='button'
 data-toggle='dropdown'>Help Category Search
  <span class='caret'></span></button>

<ul class='dropdown-menu col-sm-12'>";

foreach($json as $da => $va) {
  //echo $da . " => " . $va . "<br>";


echo "
<p><li title='$da'><a href='dashboard_category.php?data_type=$da'>$da</a></li></p>
";


}

echo "</ul></div></center>";
?>




