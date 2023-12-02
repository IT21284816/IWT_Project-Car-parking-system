<?php
include('dbconnect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $packageType = $_POST['packageType'];
    $price = $_POST['price'];

    $sql = "INSERT INTO data (packageType, price) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sd", $packageType, $price);
    
    if ($stmt->execute()) {
        header("Location: index.php");
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<?php
include('header.html');
?>
    <title>Add Package</title>
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
                <h2 class="mt-5 text-center">Add Package</h2>
                <br>
                <div class="border rounded p-4" style="background-color: #c3c3c3;"> 
                    <form method="POST">
                        <div class="form-group">
                            <label for="packageType">Package Type:</label>
                            <input type="text" class="form-control" name="packageType" required>
                        </div>
                        <div class="form-group">
                            <label for="price">Price:</label>
                            <input type="number" step="0.01" class="form-control" name="price" required>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Add</button>
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


