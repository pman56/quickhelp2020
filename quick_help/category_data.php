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
"Sexual-Harrasment":9,
"Racism":10,
"Police-Brutality":11,
"Marginalized":12

}';






$json = json_decode($result, true);

echo "<div class='dropdown'>
  <button class='btn btn-default dropdown-toggle' type='button' data-toggle='dropdown'>Select Category Type
  <span class='caret'></span></button>

<ul class='dropdown-menu col-sm-12'>";

foreach($json as $da => $va) {
  //echo $da . " => " . $va . "<br>";


echo "
<p><li title='$da'><a href='dashboard_category.php?data_type=$da'>$da</a></li></p>
";


}

echo "
</ul></div>
</div>
<br><br><br>
</div><br>";
?>




