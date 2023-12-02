<!DOCTYPE html>
<html>
<head>
<?php
include('header.html');
?>
    <title>Profile Page</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <style>
        body {
        background-image: url('background.jpeg'); 
        background-repeat: no-repeat;
        background-size: cover; 
        background-attachment: fixed; 
    }
    h2.mt-3.text-center {
            background-color: #337ab7; 
            color: #fff; 
            padding: 10px; 
            border-radius: 10px;
        }

        .form-control {
            border-radius: 10px; 
            background-color: #f2f2f2; 
            font-family: Arial, sans-serif; 
        }

        .border-rounded {
            border-radius: 15px; 
            background-color: #e0e0e0; 
        }
        h4.mb-3 {
            background-color: #337ab7; 
            color: #fff; 
            padding: 10px; 
            border-radius: 10px;
        }

    </style>
</head>
<body>
    <br>
<h2 class="mt-3 text-center">Edit Your Profile</h2>
<br>

    <div class="container mt-3">
        <div class="row">
            <!-- Edit Profile Form -->
            <div class="col-md-6">
                <form action="update_profile.php" method="POST" class="border-rounded p-3">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Address:</label>
                        <input type="text" class="form-control" id="address" name "address" required>
                    </div>
                    <div class="form-group">
                        <label for="id_number">ID Number:</label>
                        <input type="text" class="form-control" id="id_number" name="id_number" required>
                    </div>
                    <div class="form-group">
                        <label for="register_number">Register Number:</label>
                        <input type="text" class="form-control" id="register_number" name="register_number" required>
                    </div>
                    <div class="form-group">
                        <label for="telephone_number">Telephone Number:</label>
                        <input type="tel" class="form-control" id="telephone_number" name="telephone_number" required>
                    </div>
                    <button type="submit" class="btn btn-primary float-right">Update</button>
                </form>
                
            </div>
            <br>
            
            
            <div class="col-md-6">
                <div class="border-rounded p-3">
                    <h3 class="mb-3">Subscribed Vehicles</h3>
                    <ul>
                        <li>Bike</li>
                        <li>Car</li>
                    </ul>
                    <p>Remaining Subscription Days: 90 days</p>
                </div>
                <br>

                 <!-- password change -->
                <div class="col-md-14">
                <h4 class="mb-3">Change Password</h4>
                <form id="passwordForm" class="border-rounded p-3">
                    <div class="form-group">
                        <label for="currentPassword">Current Password:</label>
                        <input type="password" class="form-control" id="currentPassword" name="currentPassword" required>
                    </div>
                    <div class="form-group">
                        <label for="newPassword">New Password:</label>
                        <input type="password" class="form-control" id="newPassword" name="newPassword" required>
                    </div>
                    <div class="form-group">
                        <label for="retypePassword">Retype Password:</label>
                        <input type="password" class="form-control" id="retypePassword" name="retypePassword" required>
                    </div>
                    <button type="submit" class="btn btn-primary float-right">Change Password</button>
                </form>
            </div>
            <br>
            </div>
        </div>
    </div>
    <br><br><br><br>

<?php
include('footer.html');
?>
</body>
</html>
