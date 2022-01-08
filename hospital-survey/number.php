<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Survey</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        body {
            width: 100%;
            min-height: 100vh;
            background: url('./images/bg.jpg') no-repeat center;
            background-size: cover;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php

        if ($_POST) {

            $number = $_POST['tel'];
            $_SESSION['tel'] = $number;
        }
        ?>
        <div class="py-5 row">
            <div class="col-6">
                <h1 class="text-danger">Hospital</h1>
                <form action="review.php" method="POST">
                    <div class="input-group input-group-lg mt-5">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-danger text-white" id="inputGroup-sizing-lg">Phone Number</span>
                        </div>
                        <input type="tel" name="tel" id="tel" class="form-control" aria-label="Large" placeholder="Enter your phone number" aria-describedby="inputGroup-sizing-sm">
                        <p class="mt-2 mb-2">We don't sell your personal information to anyone</p>

                    </div>
                    <button type="submit" class="btn btn-primary col-12 btn-danger mt-3" id="survey" name="survey">Survey</button>

                </form>

            </div>
        </div>
    </div>
</body>

</html>