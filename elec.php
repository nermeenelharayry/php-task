
<?php
if($_POST){
    $units= $_POST['units'];
    $unit_cost_first = .50;
    $unit_cost_second = .75;
    $unit_cost_third = 1.20;

    if($units <= 50) {
        $bill = ($units * $unit_cost_first) ;
        $totalBill= (($bill *20)/100)+ $bill;
    }
    else if($units > 50 && $units <= 150) {
        $temp = 50 * $unit_cost_first;
        $remaining_units = $units - 50;
        $bill = $temp + ($remaining_units * $unit_cost_second);
        $totalBill= (($bill *20)/100)+ $bill;

    }
    else if($units > 150 && $units <= 250) {
        $temp = 50 * $unit_cost_first;
        $temp2= 100*$unit_cost_second;
        $remaining_units = $units - 150;
        $bill = $temp + $temp2 + ($remaining_units *  $unit_cost_third);
        $totalBill= (($bill *20)/100)+ $bill;


    }else{
        $temp = 50 * $unit_cost_first;
        $temp2= 100 * $unit_cost_second;
        $temp3= 100 * $unit_cost_third;
        $remaining_units = $units - 250;
        $bill = $temp + $temp2 + $temp3 +($remaining_units * 1.50);
        $totalBill= (($bill *20)/100)+ $bill;

    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Calculate Electricity Bill</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>




<div id="page-title" class="container">
		<h1 class="mt-7" >Calculate Electricity Bill </h1>
		
		<form action="" method="POST">            
            	<input class="form-control" type="text" name="units" id="units" placeholder="number" />        
                <br>    
            	<input type="submit" name="unit-submit" id="unit-submit" value="Submit" class="btn btn-primary" />		
		</form>
 
		<div>
        <?php if(isset($totalBill)){ echo  "Your bill is: " . $totalBill;} ?>
		</div>	
	</div>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
