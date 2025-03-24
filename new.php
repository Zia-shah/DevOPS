<?php
    $name = "ZIA ULLAH";
    $title = "Web Developer & Designer";
    $bio = "Passionate about creating beautiful and functional websites. Specializing in front-end and back-end development.";
    $email = "zia@example.com";
    $phone = "+1234567890";
    $location = "Attock, PAKISTAN";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            color: #333;
        }
        .profile-card {
            background: white;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .profile-card img {
            border-radius: 50%;
            width: 120px;
            height: 120px;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="profile-card">
                    <img src="https://via.placeholder.com/120" alt="Profile Picture">
                    <h2><?php echo $name; ?></h2>
                    <h5 class="text-muted"><?php echo $title; ?></h5>
                    <p><?php echo $bio; ?></p>
                    <hr>
                    <p><strong>Email:</strong> <?php echo $email; ?></p>
                    <p><strong>Phone:</strong> <?php echo $phone; ?></p>
                    <p><strong>Location:</strong> <?php echo $location; ?></p>
                    <a href="mailto:<?php echo $email; ?>" class="btn btn-primary">Contact Me</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
