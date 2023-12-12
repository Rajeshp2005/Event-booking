<?php
include('config.php');

if (isset($_POST['login'])) {
    $productname = $_POST['productname'];
    $productprice = $_POST['productprice'];
    $productdesc = $_POST['productdesc'];

    // Check if any of the required fields are empty
    if (empty($productname) || empty($productprice) || empty($productdesc)) {
        header("location:product.php");
    } else {
        // Image upload code
        $target_dir = "../img";
        $a = uniqid() . $_FILES["img"]["name"];
        $target_file = $target_dir . $a;

        if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
            $sql = "INSERT INTO services (product_name, product_desc, product_price, image) VALUES ('$productname', '$productdesc', '$productprice', '$target_file')";
            $result = mysqli_query($con, $sql);

            if ($result) {
                echo ("<script>
                        window.alert('Product item added successfully');
                        window.location.href = 'product.php';
                    </script>");
            } else {
                echo "Data not inserted: " . mysqli_error($con);
            }
        } else {
            echo "Image file upload failed.";
        }
    }
}
?>
