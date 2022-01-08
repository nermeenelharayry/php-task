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
            <?php

            $q1 = $_POST['q1'];
            $q2 = $_POST['q2'];
            $q3 = $_POST['q3'];
            $q4 = $_POST['q4'];
            $q5 = $_POST['q5'];
            $result=(int)$q1+(int)$q2+(int)$q3+(int)$q4+(int)$q5;
            if($result < 25){
                $messageCall="We will Call You Later on this Number";
            }else{
                $message="Thanks";
            }
            function getRate($rate) {
switch($rate){
    case 0:
        echo "سئ";
        break;
    case 3:
        echo "جيد";
        break;
    case 5:
        echo "جيد جدا";
        break;
    case 10:
        echo "ممتاز";
        break;
  
}              }
            ?>
            <div class="py-5 row">
                <div class="col-9">
                    <h1 class="text-danger">Hospital</h1>
                    <form method="POST">
                        <table class="table table-active table-striped" dir="rtl">
                            <thead>
                                <tr>
                                    <th scope="col">الأسئله?</th>
                                    <th scope="col">التقييم</th>
                                  

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>هل انت راضي عن مستوى النظافة?</td>
                                    <td>
                                    <?php   getRate($q1) ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>هل انت راضي علي اسعار الخدمات؟</td>
                                    <td>
                                    <?php   getRate($q2) ?>

                                    </td>
                                </tr>
                                <tr>
                                    <td>هل انت راضي عن خدمة التمريض؟</td>
                                    <td>
                                    <?php   getRate($q3) ?>

                                    </td>
                                </tr>
                                <tr>
                                    <td>هل انت راضي علي مستوي الدكاترة؟</td>
                                    <td>
                                    <?php   getRate($q4) ?>

                                    </td>
                                </tr>
                                <tr>
                                    <td>هل انت راضي علي الهدوء بالمستشفي؟</td>
                                    <td>
                                    <?php   getRate($q5) ?>

                                    </td>
                                </tr>
                                <tr>
                                    <td>النتيجه</td>
                                    <td>
                                    <?php if($result <25){
                                        echo "BAD";
                                    }else{
                                        echo 'GOOD';
                                    } ?>

                                    </td>
                                </tr>
                               
                            </tbody>
                        </table>
                        <?php if(isset($messageCall)) : ?>
                        <div class="bg-danger p-3 success text-white">
                            
                                    <?php echo $messageCall; ?>

                                    </div>
                                    <?php endif; ?>
                                    <?php if(isset($message)) : ?>

                                    <div class="bg-success p-3 success text-white">
                                    <?php  echo $message; ?>

                                    </div>
                                    <?php endif; ?>
                    </form>

                </div>
            </div>
        </div>
    </body>
</body>

</html>