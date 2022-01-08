<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Super Market</title>

</head>

<body>
  <?php

  if (isset($_POST['varities'])) {

    $name = $_POST['user'];
    $city = $_POST['city'];
    $GLOBALS['varity'] = $_POST['varity'];
    $_SESSION['username'] = $name;
    $_SESSION['city'] = $city;
    $_SESSION['varity'] = $varity;
    switch ($city) {
      case 'cairo':
        $shipping = 0;
        break;
      case "giza":
        $shipping = 30;
        break;
      case "alex":
        $shipping = 50;
        break;
      case "other":
        $shipping = 100;
        break;
    }
    $_SESSION['shipping']=  $shipping;
  } elseif (isset($_POST['products'])) {

    for ($i = 0; $i < $_SESSION['varity']; $i++) {

      $prodprice[$i] = $_POST["price" . $i] * $_POST["quantity" . $i];
    }
  }
  ?>
  <div class="container-fluid">
    <div class="container p-4">
      <form action="" method="POST">
        <div class="form-group">
          <label for="user">user name</label>
          <input type="user" class="form-control" id="user" name="user" placeholder="Enter user name" value="<?php echo $_SESSION['username'] ?? ''; ?>">
        </div>
        <div class="form-group">
          <label for="city">City</label>
          <select id="city" name="city" class="form-control" value="<?php echo $_SESSION['city'] ?? ''; ?>">
            <option value="cairo">Cairo</option>
            <option value="giza">Giza</option>
            <option value="alex">Alex</option>
            <option value="other">Other</option>

          </select>
        </div>
        <div class="form-group">
          <label for="varity">Number Of Varaities</label>
          <input type="number" class="form-control" id="varity" value="<?php echo $_SESSION['varity'] ?? '0'; ?>" name="varity" placeholder="Number Of Varity">
        </div>

        <button type="submit" class="btn btn-primary col-12 btn-danger" name="varities">Enter Products</button>


        <?php if (isset($_POST['varities'])) : ?>
          <table class="table mt-4 table-light">
            <thead class="thead-light">
              <tr>
                <th scope="col">Product Name</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
              </tr>
            </thead>
            <tbody>
              <?php for ($product = 0; $product < $_SESSION['varity']; $product++) : ?>
                <tr>
                  <td>
                    <div class="form-group">
                      <input type="text" class="form-control" id="prodName<?php echo $product; ?>" name="prodName<?php echo $product; ?>" placeholder="product name">
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <input type="number" class="form-control" id="price<?php echo $product; ?>" name="price<?php echo $product; ?>" placeholder="price">
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <input type="number" class="form-control" id="quantity<?php echo $product; ?>" name="quantity<?php echo $product; ?>" placeholder="quantity">
                    </div>
                  </td>
                </tr>
              <?php endfor; ?>
            </tbody>
          </table>
          <button type="submit" class="btn btn-primary col-12 btn-danger" id="products" name="products">Enter Products</button>


      </form>

    <?php endif; ?>








    <?php if (isset($_POST['products'])) : ?>

      <table class="table mt-4 table-light">
        <thead class="thead-light">
          <tr>
            <th scope="col">Product Name</th>
            <th scope="col">Price</th>
            <th scope="col">Quantity</th>
            <th scope="col">Sub Total</th>
          </tr>
        </thead>
        <tbody>
          <?php for ($i = 0; $i < $_SESSION['varity']; $i++) : ?>
            <?php $totalPrice = $totalPrice +  $_POST["price" . $i] * $_POST["quantity" . $i]  ?>
            <tr>
              <td>
                <div class="form-group">
                  <?php echo
                  $_POST["prodName" . $i]

                  ?> </div>
              </td>
              <td>
                <div class="form-group">
                  <?php echo
                  $_POST["price" . $i]

                  ?> </div>
              </td>
              <td>
                <div class="form-group">
                  <?php echo
                  $_POST["quantity" . $i]

                  ?>
                </div>
              </td>
              <td>
                <div class="form-group">
                  <?php echo
                  $_POST["price" . $i] * $_POST["quantity" . $i]

                  ?>
                </div>
              </td>
            </tr>
          <?php endfor; ?>
        </tbody>
      </table>

      <div class="container bg-danger container p-3">
        <div class="row border-bottom p-2">
          <div class="col-6">
            Client Name
          </div>
          <div class="col-6">
            <?php echo  $_SESSION['username'] ?>
          </div>
        </div>

        <div class="row border-bottom p-2">
          <div class="col-6">
            City
          </div>
          <div class="col-6">
            <?php echo  $_SESSION['city'] ?>
          </div>
        </div>

        <div class="row border-bottom p-2">
          <div class="col-6">
            Total
          </div>
          <div class="col-6">
            <?php echo $totalPrice."  EGP" ?>
          </div>
        </div>
        <div class="row border-bottom p-2">
          <div class="col-6">
            Discount
          </div>
          <div class="col-6">
            <?php
            if($totalPrice < 1000){
              $discount=0;
              $totalPriceWithDiscount=$totalPrice;
              echo $discount ." EGP";

            }elseif($totalPrice <3000){
              $discount=$totalPrice * (10/100);
              $totalPriceWithDiscount=$totalPrice- $discount;
              echo $discount ." EGP";

            }elseif($totalPrice <4500){
              $discount=$totalPrice * (15/100);
              $totalPriceWithDiscount=$totalPrice-$discount;
              echo $discount ." EGP";

            }else{
              $discount=$totalPrice * (20/100);
              $totalPriceWithDiscount=$totalPrice-$discount;
              echo $discount ." EGP";
            }
            ?>
          </div>
        </div>
        <div class="row border-bottom p-2">
          <div class="col-6">
            Total After discount
          </div>
          <div class="col-6">
            <?php echo $totalPriceWithDiscount ." EGP";
 ?>
          </div>
        </div>
        <div class="row border-bottom p-2">
          <div class="col-6">
            Shipping
          </div>
          <div class="col-6">
            <?php echo   $_SESSION['shipping'] ." EGP"?>
          </div>
        </div>
        <div class="row border-bottom p-2">
          <div class="col-6">
            bill
          </div>
          <div class="col-6">
            <?php echo $totalPriceWithDiscount  +$_SESSION['shipping'] ." EGP"?>
          </div>
        </div>
      </div>

    <?php endif; ?>


    </div>

  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>