<?php
include('dbconnect.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM data WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $package = $result->fetch_assoc();

    if ($package) {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $packageType = $_POST['packageType'];
            $price = $_POST['price'];

            $sql = "UPDATE data SET packageType=?, price=? WHERE id=?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sdi", $packageType, $price, $id);

            if ($stmt->execute()) {
                header("Location: index.php");
            } else {
                echo "Error: " . $conn->error;
            }
        }
    } else {
        echo "Package not found.";
    }
} else {
    echo "Package ID not provided.";
}
?>

<!DOCTYPE html>
<html>
<head>
<?php
include('header.html');
?>
    <title>Edit Package</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css">
    <style>
        body {
        background-image: url('background.jpeg'); 
        background-repeat: no-repeat;
        background-size: cover; 
        background-attachment: fixed; 
    }
    h2.mt-5.text-center {
            background-color: #337ab7; 
            color: #fff; 
            padding: 10px; 
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
    <div class="row justify-content-center">
            <div class="col-md-6">
        <h2 class="mt-5 text-center">Edit Package</h2>
        <br>
        <div class="border rounded p-4" style="background-color: #c3c3c3;"> 
        <form method="POST">
            <div class="form-group">
                <label for="packageType">Package Type:</label>
                <input type="text" class="form-control" name="packageType" required value="<?php echo $package['packageType']; ?>">
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="number" step="0.01" class="form-control" name="price" required value="<?php echo $package['price']; ?>">
            </div>
            <div class="text-right">
            <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
        </div>
    </div>
    </div>
    </div>
    <br><br><br><br><br><br><br>
    <?php
include('footer.html');
?>
</body>
</html>

