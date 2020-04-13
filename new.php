<!DOCTYPE html>
<head>

<title>Electricity Bill</title>

<style>


.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 28px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 3px 2px;
  cursor: pointer;
}


.center {
  text-align: center;
  border: 3px solid green;
}
</style>

</head>


<?php
$result_str = $result = '';
if (isset($_POST['unit-submit'])) {
    $units = $_POST['units'];
    if (!empty($units)) {
        $result = calculate_bill($units);
        $result_str = 'BILL RECEIPT'."<br>".'Eastern powerstation'."<br>".'Units used = '. $units ."<br>".'Total amount for '. $units . ' unit is '."<br>" .'rs'. $result."<br>".'THANK YOU';
       echo "<br>";
       echo "<br>";
       echo "<br>";
       echo "<br>";
       echo "<br>";
       echo "<br>";
       
       
       
       
       
    }
}




function calculate_bill($units) {
    $unit_cost_first = 9.00;
    $unit_cost_second = 12.00;
    $unit_cost_third = 15.00;
 
    if($units <= 50) {
        $bill = $units * $unit_cost_first;
    }
    else if($units > 50 && $units <= 100) {
       $bill = $units * $unit_cost_second;
    }
    
    else {
        $bill = $units * $unit_cost_third;
    }
    return number_format((float)$bill, 2, '.', '');
}
 
?>



<body background="1.jpg" text="white">

<div class="center" id="page-wrap">

<h1>WELCOME</h1>
<h2>Electricity bill calculator</h2>

<form action="" method="post" id="quiz-form">   
<p>first 50units it will charge rs 9 per unit,
for next 50 units it will charge 12 and 
above it will charge rs15.</p>         
                <font color="white">Enter No Of Units</font><input type="number" name="units" id="units"  size="50" />            
                <input type="submit" name="unit-submit" id="unit-submit" class="button" value="Submit" />      
        </form>
<div>
            <?php echo '<br />' . $result_str; ?>
        </div>  

</div>

</body>
</html>