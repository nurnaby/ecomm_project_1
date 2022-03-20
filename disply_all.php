<?php
include('includes/connect.php');
include('function/common_function.php');



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommars website using php and mysqule</title>
    <!-- bootstrap css link  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- fontwsome cdn  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- costom css  -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- navbar start  -->
    <div class="contiainr-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-info ">
            <div class="container-fluid">
                <img src="images/images.jpg" alt="" class="logo">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="disply_all.php">products</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Register</a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa-solid fa-cart-arrow-down"></i> <sup>1</sup></a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" href="#">Total Price:100</a>
                        </li>


                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </div>
    <!-- second child  -->
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
        <ul class="navbar-nav me-auto">
            <li class="nav-item">
                <a href="#" class="nav-link text-light">Welcome Guest</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link text-light">Logo Out</a>
            </li>
        </ul>
    </nav>
    <!-- second child end  -->
    <!-- third child  -->
    <div class="bg-light text-center p-3">
        <h3>Hidden Store</h3>
        <p>Communications is at the heart of e-commerce and community</p>
    </div>
    <!-- fourth child  -->
    <div class="row">
        <div class="col-sm-10">
            <div class="row">
                <?php
                    
                    get_all_product();
                    get_unique_categories();
                    get_unique_brands();
                ?>
            </div>
        </div>
        <div class="col-sm-2 bg-secondary p-0">
            <ul class="navbar-nav me-auto text-center">
                <!-- brands displying  -->
                <li class="nav-item bg-info ">
                    <a href="#" class="nav-link text-light">
                        <h4>Delivery Brands</h4>
                    </a>
                </li>
                <?php
                getbrand();

                
                
                ?>

                <!-- categories displing  -->
                <li class="nav-item bg-info ">
                    <a href="#" class="nav-link text-light">
                        <h4>Categories</h4>
                    </a>
                </li>

                <?php 
                    getcategory(); 
                ?>

            </ul>
        </div>
    </div>

    <!-- navbar end  -->
    <!-- footer section  -->
    <?php
        include('includes/footer.php');
    ?>




    <!-- bootstrap js link  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>