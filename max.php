<?php
if($_POST){
$number1 = $_POST['number1'];
$number2 = $_POST['number2'];
$number3 = $_POST['number3'];

if($number1>$number2 && $number1>$number3){
    
    $messageMax= $number1 ." is the max number";
  }
  else{
    if($number2>$number1 && $number2>$number3){
        $messageMax= $number2 ." is the max number";;
    }
    else
    $messageMax= $number3 ." is the max number";;
  }

  if($number1<$number2 && $number1<$number3){
    $messageMin= $number1 ." is the min number";
  }
  else{
    if($number2<$number1 && $number2<$number3){
        $messageMin= $number2 ." is the min number";;
    }
    else
    $messageMin= $number3 ." is the min number";;
  }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>calculate max and mini </title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center mt-3 mb-3 "> calculate max and mini</h1>
            </div>
            <div class="offset-4 col-4">
                 <form action="" method="post">
                        <div class="form-group">
                          <label for="number1">number1</label>
                          <input type="text" name="number1" id="number1" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                          <label for="number2">number2</label>
                          <input type="text" name="number2" id="number2" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>

                        <div class="form-group">
                          <label for="number3">number3</label>
                          <input type="text" name="number3" id="number3" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group mb-2">
                            <button name="calculate"  class="btn btn-dark rounded">calculate !</button>
                        </div>

                 </form>
                 <div class="alert alert-info">
                 <?php if(isset($messageMax)){ echo  $messageMax;} ?>

                 </div>
                 <div class="alert alert-info">
                 <?php if(isset($messageMin)){ echo  $messageMin;} ?>

                 </div>

        </div>
    </div>








<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>