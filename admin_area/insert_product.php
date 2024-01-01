<?php
    include('../include/connect.php');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <!-- bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
    crossorigin="anonymous">

    <!-- font-awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" 
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" 
    crossorigin="anonymous" 
    referrerpolicy="no-referrer" />

    <!-- css file -->
    <link rel="stylesheet" href="../style.css">

</head>
<body calss="bg-light">
    <div class="container mt-3">
        <h1 class="text-center">
            Insert Products
        </h1>
        <!-- form -->
        <form action="" method="post" enctype="multipart/form-data">
            <!-- title -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_title" class="form-label">
                    Product Title
                </label>
                <input type="text" name="product_title" id="product_title" class="form-control" 
                placeholder="Enter Product Description" autocomplete="off" required="required">
            </div>
            <!-- description -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="description" class="form-label">
                    Product Description
                </label>
                <input type="text" name="description" id="description" class="form-control"
                 placeholder="Enter Product Description" autocomplete="off" required="required">
            </div>
            <!-- keywords -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="keywords" class="form-label">
                    Product Keywords
                </label>
                <input type="text" name="keywords" id="keywords" class="form-control"
                 placeholder="Enter Product Keywords" autocomplete="off" required="required">
            </div>
            <!-- categories -->
            <div class="form-outline mb-4 w-50 m-auto">
                <select name="product_categories" id="" class="form-select">
                    <option value=""> Select a Category</option>
                    <?php
                        $select_categories="SELECT * FROM categories ";
                        $result_categories=mysqli_query($conn,$select_categories);
                        while($row_data=mysqli_fetch_assoc($result_categories)){
                            $category_title=$row_data['category_title'];
                            $category_id=$row_data['category_id'];
                            echo "<option value='$category_id'>$category_title</option>";
                        }
                    ?>
                </select>
            </div>
            <!-- brands -->
            <div class="form-outline mb-4 w-50 m-auto">
                <select name="product_brands" id="" class="form-select">
                    <option value=""> Select a Brand</option>
                    <?php
                        $select_brands="SELECT * FROM brands ";
                        $result_brands=mysqli_query($conn,$select_brands);
                        while($row_data=mysqli_fetch_assoc($result_brands)){
                            $brand_title=$row_data['brand_title'];
                            $brand_id=$row_data['brand_id'];
                            echo "<option value='$brand_id'>$brand_title</option>";
                        }
                    ?>
                </select>
            </div>
            <!-- image 1 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image1" class="form-label">
                    Product Image 1
                </label>
                <input type="file" name="product_image1" id="product_image1" class="form-control"
                 placeholder="Enter Product Keywords" autocomplete="off" required="required">
            </div>
            <!-- image 2 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image2" class="form-label">
                    Product Image 2
                </label>
                <input type="file" name="product_image2" id="product_image2" class="form-control"
                 placeholder="Enter Product Keywords" autocomplete="off">
            </div>
            <!-- image 3 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image3" class="form-label">
                    Product Image 3
                </label>
                <input type="file" name="product_image3" id="product_image3" class="form-control"
                 placeholder="Enter Product Keywords" autocomplete="off" required="required">
            </div>  
             <!-- price -->
             <div class="form-outline mb-4 w-50 m-auto">
                <label for="price" class="form-label">
                    Price
                </label>
                <input type="text" name="price" id="price" class="form-control"
                 placeholder="Enter Product Price" autocomplete="off" required="required">
            </div>
            <!-- submit -->
            <div class="form-outline mb-4 w-50 m-auto">
                <input type="submit" name="insert_product" class="btn btn-info mb-3 px-3" value="Insert Product">
            </div>            
        </form>
    </div>

    <!-- bootstrap JS link-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" 
    crossorigin="anonymous"></script>
</body>
</html>