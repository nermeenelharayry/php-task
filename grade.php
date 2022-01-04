<?php
if($_POST){

    $phy = $_POST['phy'];
                $chym = $_POST['chym'];
                $bio = $_POST['bio'];
                $math = $_POST['math'];
                $comp = $_POST['comp'];

               
$percentage = (($phy + $chym + $bio + $math + $comp) / 250 ) * 100;
              if($percentage >= 90){
                  $result= "You got " . $percentage . "% And your Grade is A";
              }elseif($percentage >= 80){
                $result= "You got " . $percentage . "% And your Grade is B";

              }elseif($percentage >= 70){
                $result= "You got " . $percentage . "% And your Grade is C";

            }elseif($percentage >= 60){
                $result= "You got " . $percentage . "% And your Grade is D";

              }elseif($percentage >= 40){
                $result= "You got " . $percentage . "% And your Grade is E";

              }else{
                $result= "You got " . $percentage . "% And your Grade is F";

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
		<h1 class="mt-7" >Calculate Grade Percentage </h1>
		
		<form action="" method="POST" >            
            	<input class="form-control" type="number" min="0" max="50" name="phy" id="phy" placeholder="Physiscs" />    
                <input class="form-control" type="number" min="0" max="50" name="chym" id="chym" placeholder="Chimistry" />   
                <input class="form-control" type="number" min="0" max="50" name="bio" id="bio" placeholder="Biology" />        
                <input class="form-control" type="number" min="0" max="50" name="math" id="math" placeholder="Math" />        
                <input class="form-control" type="number" min="0" max="50" name="comp" id="comp" placeholder="Computer" />        

    
                <br>    
            	<input type="submit" name="submit" id="submit" value="Total Grades" class="btn btn-primary" />		
		</form>
 
		<div class="alert alert-success mt-3">
        <?php if(isset($result)){ echo  $result;} ?>
		</div>	
	</div>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
