<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Catalog</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
          integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../general/css/backgroundCubes.css">
    <link rel="stylesheet" href="../../general/css/header.css">
    <link rel="stylesheet" href="../../general/css/taskBar.css">
    <link rel="stylesheet" href="../../general/css/vars.css">
    <link rel="stylesheet" href="../../general/css/loginLink.css">
    <link rel="stylesheet" href="../../general/css/footer.css">
    <link rel="stylesheet" href="../../login/login.css">
    <link rel="stylesheet" href="imageBate.css">
    <script src="../../general/validation.js"></script>

</head>

<body>

<!-- Header Section -->
<?php
    require_once '../../header/header.html';
?>

<!-- Login modal -->
<?php
    require_once '../../login/modal.php';
?>

<!-- Catalog products section -->
<main>
    <?php
        // Get all products from the database
        $con = mysqli_connect('localhost', 'root', '', 'barak');
        $selectAllProducts = 'SELECT * FROM products';
        $productsData = mysqli_query($con, $selectAllProducts);
        
        // Show products data only if there are records in the products table
        if ($productsData->num_rows) {
            while ($product = mysqli_fetch_assoc($productsData)) {
                require 'product.php';
            }
        } else {
            // Show message when there are no records in the table
            echo '<h1>Currently there are no products.</h1>';
        }
        
        mysqli_close($con);
    ?>
</main>

<!-- Footer section -->
<?php
    require_once '../../footer/footer.html';
?>

</body>
</html>