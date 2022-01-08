<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey review</title>
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

    <body>
        <div class="container">
   
            <div class="py-5 row">
                <div class="col-9">
                    <h1 class="text-danger">Hospital</h1>
                    <form action="result.php" method="POST">
                        <table class="table table-active table-striped" dir="rtl">
                            <thead>
                                <tr>
                                    <th scope="col">الأسئله?</th>
                                    <th scope="col">سئ</th>
                                    <th scope="col">جيد</th>
                                    <th scope="col">جيد جدا</th>
                                    <th scope="col">ممتاز</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>هل انت راضي عن مستوى النظافة?</td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input position-static" type="radio" name="q1" id="bad1" value="0" aria-label="...">
                                        </div>
                                    </td>
                                    <td>   <div class="form-check">
                                            <input class="form-check-input position-static" type="radio" name="q1" id="good1" value="3" aria-label="...">
                                        </div></td>
                                    <td>
                                    <div class="form-check">
                                            <input class="form-check-input position-static" type="radio" name="q1" id="vgood1" value="5" aria-label="...">
                                        </div>
                                    </td>
                                    <td>
                                    <div class="form-check">
                                            <input class="form-check-input position-static" type="radio" name="q1" id="exce1" value="10" aria-label="...">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>هل انت راضي علي اسعار الخدمات؟</td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input position-static" type="radio" name="q2" id="bad2" value="0" aria-label="...">
                                        </div>
                                    </td>
                                    <td>   <div class="form-check">
                                            <input class="form-check-input position-static" type="radio" name="q2" id="good2" value="3" aria-label="...">
                                        </div></td>
                                    <td>
                                    <div class="form-check">
                                            <input class="form-check-input position-static" type="radio" name="q2" id="vgood2" value="5" aria-label="...">
                                        </div>
                                    </td>
                                    <td>
                                    <div class="form-check">
                                            <input class="form-check-input position-static" type="radio" name="q2" id="exce2" value="10" aria-label="...">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>هل انت راضي عن خدمة التمريض؟</td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input position-static" type="radio" name="q3" id="bad3" value="0" aria-label="...">
                                        </div>
                                    </td>
                                    <td>   <div class="form-check">
                                            <input class="form-check-input position-static" type="radio" name="q3" id="good3" value="3" aria-label="...">
                                        </div></td>
                                    <td>
                                    <div class="form-check">
                                            <input class="form-check-input position-static" type="radio" name="q3" id="vgood3" value="5" aria-label="...">
                                        </div>
                                    </td>
                                    <td>
                                    <div class="form-check">
                                            <input class="form-check-input position-static" type="radio" name="q3" id="exce3" value="10" aria-label="...">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>هل انت راضي علي مستوي الدكاترة؟</td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input position-static" type="radio" name="q4" id="bad4" value="0" aria-label="...">
                                        </div>
                                    </td>
                                    <td>   <div class="form-check">
                                            <input class="form-check-input position-static" type="radio" name="q4" id="good4" value="3" aria-label="...">
                                        </div></td>
                                    <td>
                                    <div class="form-check">
                                            <input class="form-check-input position-static" type="radio" name="q4" id="vgood4" value="5" aria-label="...">
                                        </div>
                                    </td>
                                    <td>
                                    <div class="form-check">
                                            <input class="form-check-input position-static" type="radio" name="q4" id="exce4" value="10" aria-label="...">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>هل انت راضي علي الهدوء بالمستشفي؟</td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input position-static" type="radio" name="q5" id="bad5" value="0" aria-label="...">
                                        </div>
                                    </td>
                                    <td>   <div class="form-check">
                                            <input class="form-check-input position-static" type="radio" name="q5" id="good5" value="3" aria-label="...">
                                        </div></td>
                                    <td>
                                    <div class="form-check">
                                            <input class="form-check-input position-static" type="radio" name="q5" id="vgood5" value="5" aria-label="...">
                                        </div>
                                    </td>
                                    <td>
                                    <div class="form-check">
                                            <input class="form-check-input position-static" type="radio" name="q5" id="exce5" value="10" aria-label="...">
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <button type="submit" class="btn btn-primary col-12 btn-danger mt-3" id="result" name="result">Result </button>
                        <?php
               if (isset($_POST['result'])) {
            $q1 = $_POST['q1'];
            $q2 = $_POST['q2'];
            $q3 = $_POST['q3'];
            $q4 = $_POST['q4'];
            $q5 = $_POST['q5'];
            $number = $_POST['tel'];
            $_SESSION['tel'] = $number;
               }
            ?>
                    </form>

                </div>
            </div>
        </div>
    </body>
</body>

</html>