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
                <a href="index.php">
                    <h1 class="text-white m-2"><i class="fa-solid fa-staff-snake"></i></h1>
                </a>
            </div>
            <div class="">
                <h1 class="text-white m-2">Snakes</i></h1>
            </div>
            <div class="">
                <a href="index.php">
                    <h1 class="text-white m-2"><i class="fa-solid fa-staff-snake"></i></h1>
                </a>
            </div>
        </div>

        <!-- card  -->

        <div class="row mt-2 mb-2 d-flex justify-content-around">
            <?php

            //number of item per page 
            $cardsPerPage = 8;

            // Get the current page from the query parameter 
            $page = isset($_GET['page']) ? $_GET['page'] : 1;

            // Calculate the starting index for the current page
            $startIndex = ($page - 1) * $cardsPerPage;


            // Get a subset of data for the current page
            $currentPageData = array_slice($snakes, $startIndex, $cardsPerPage);

            // Pagination links
            $totalItems = count($snakes);
            $totalPages = ceil($totalItems / $cardsPerPage);


            ?>
            <div class=" d-flex justify-content-start">
                <p class="text-white">Pagination <i class="fa-solid fa-forward"></i> </p>

                <?php

                for ($i = 1; $i <= $totalPages; $i++) {

                    echo " <div>
                    <h5><a style='color:Aquamarine; text-decoration:none; margin:5px; '  href='?page=$i'>$i</a></h5>
                    </div>";
                }
                ?>


            </div>

            <div class="">
                <a href="index.php" class="text-decoration-none">
                    <button style="background-color:steelblue;" class="btn text-white">Back</button>
                </a>
            </div>

            <?php foreach ($currentPageData as $snake) : ?>
                <div class="card  mt-3 mb-4 shadow-lg" style="width: 18rem;" id="snakeCard">
                    <a href="description.php?id=<?php echo $snake['Id']; ?>" class="text-decoration-none">
                        <img src="<?php echo $snake['Img']; ?>" class="w-full text-center shadow-sm card-img-top rounded mt-1" alt="...">
                        <div class="card-body">
                            <h6 style="color:navy;" class="card-title"><?php echo $snake['MMName']; ?></h6>
                            <div class="d-flex">
                                <p style="color:black;" class="card-text"><?php echo $snake['EngName']; ?></p>

                            </div>

                        </div>
                    </a>

                </div>

            <?php endforeach; ?>

        </div>


    </div>

</body>

</html>