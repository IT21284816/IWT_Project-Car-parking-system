<?php
include('dbconnect.php');

$sql = "SELECT * FROM data";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
<?php
include('header.html');
?>
    <title>Packages</title>
    
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
        background-image: url('background.jpeg'); 
        background-repeat: no-repeat;
        background-size: cover; 
        background-attachment: fixed; 
    }
    .table-container {
        max-width: 1000px;
        margin: 0 auto;
    }
    table {
            background-color: #fff; 
            border-radius: 10px;
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
    <h2 class="mt-5 text-center">Packages</h2>
    <br>
    
        <div class="text-right">
            <a href="insert.php" class="btn btn-primary">Add Package</a>
        </div>
        <br>

        <div class="table-container">    
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Package Type</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>".$row['id']."</td>";
                        echo "<td>".$row['packageType']."</td>";
                        echo "<td>".$row['price']."</td>";
                        echo "<td><a href='update.php?id=".$row['id']."' class='btn btn-info btn-sm'>Edit</a> | <a href='delete.php?id=".$row['id']."' class='btn btn-danger btn-sm'>Delete</a></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No packages found.</td></tr>";
                }
                ?>
            </tbody>
        </table>
        </div>
    </div>

    <!-- Include Bootstrap JS and jQuery (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <br><br><br><br>

<?php
include('footer.html');
?>
</body>
</html>
