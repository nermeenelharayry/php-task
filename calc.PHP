
<?php
if($_POST){

    $result1 = $_POST['numb1'];
                $result2 = $_POST['numb2'];
                $operator = $_POST['operator'];
                echo $operator;
                switch ($operator) {
                    case 'None':
                        echo "You need to select any operator";
                        break;
                    case 'Add':
                        echo $result1 + $result2;
                        break;
                    case 'Subtract':
                        echo $result1 - $result2;
                        break;
                    case 'Multiply':
                        echo $result1 * $result2;
                        break;
                    case 'Divide':
                        echo $result1 / $result2;
                        break;
                    case 'Square':
                        echo $result1 ** $result2;
                        break;
                }
}


         ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Calculator</title>
</head>
<body>

<form action="" method="POST">
    <label> numb1 </label>
            <input type="text" name="numb1">
            <label> numb2 </label>
            <input type="text" name="numb2">
            <select name="operator" id="operator">
               <option value="none">None</option>
               <option value="Add">Add</option>
               <option value="Subtract">Subtract</option>
               <option value="Multiply">Multiply</option>
               <option value="Divide">Divide</option>
               <option value="Square">Square</option>
            </select>
            <button  name="answer" id="answer">Calculate</button>

         </form>

</form>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
