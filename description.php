<?php




require_once('./config/mainFunction.php');

$snakes = $snakes->connect();




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snakes</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg">
    <div class="container  mt-1 rounded ">
        <!-- nav bar  -->
        <div class="d-flex justify-content-between ">
            <div class="">
                <h1 class="text-white m-2"><i class="fa-solid fa-staff-snake"></i></h1>
            </div>
            <div class="">
                <h1 class="text-white m-2">Snakes</i></h1>
            </div>
            <div class="">
                <h1 class="text-white m-2"><i class="fa-solid fa-staff-snake"></i></h1>
            </div>
        </div>

        <!-- description  -->
        <?php foreach ($snakes as $snake) : ?>
            <?php if ($snake['Id'] == $_GET['id']) : ?>
                <div class=" d-flex mt-2">
                    <div class="col-4">
                        <img src="<?php echo $snake['Img'] ?>" class="w-50  shadow-sm card-img-top rounded " alt="...">
                        <h4 class="mt-3 text-white"><?php echo $snake['MMName'] ?></h4>
                        <h4 class="mt-3 text-white"><?php echo $snake['EngName'] ?></h4>
                        <h4 id="dangerLetter" class="mt-3">
                            <?php
                            if ($snake['IsPoison'] == "Yes") {
                                echo "အဆိပ်ရှိ";
                            } else {
                                echo "အဆိပ်မရှိ";
                            }

                            ?>
                        </h4>

                        <h4 id="dangerLetter" class="mt-3">
                            <?php
                            if ($snake['IsDanger'] == "Yes") {
                                echo "အန္တရာယ်ရှိ";
                            } else {
                                echo "အန္တရာယ်မရှိ";
                            }

                            ?>
                        </h4>
                        <br>
                        <a href="snakesList.php" class="text-decoration-none">
                            <button style="background-color:steelblue;" class="btn text-white">Back</button>
                        </a>

                    </div>
                    <div class="col-8   p-3 rounded " id="snakeCard"><?php echo $snake['Detail'] ?></div>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>




    </div>


</body>

</html>