<?php
$profiles = [
    ["name" => "SITI NURATIKAH BINTI ALANG REZWAN", "id" => "20224746045", "image" => "profile/ATIKAH.JPG", "profile_link" => "profile1.php"],
    ["name" => "QISTINA AYUNI BINTI ROSDI", "id" => "2024530941", "image" => "profile/QISTINA.JPG", "profile_link" => "profile2.php"],
    ["name" => "MASYITAH BINTI AMINUDDIN", "id" => "2024333355", "image" => "profile/MASYITAH.JPG", "profile_link" => "profile3.php"],
    ["name" => "NUR ANIS MAISARAH BINTI JEFRYSHAM", "id" => "2024745471", "image" => "profile/ANIS.JPG", "profile_link" => "profile4.php"],
    ["name" => "SITI AISHAH BINTI MASRI", "id" => "2024919605", "image" => "profile/AISHAH.JPG", "profile_link" => "profile5.php"]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UiTM e-Profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        .profile-img {
            width: 150px; 
            height: 150px;
            object-fit: cover;
            margin: auto;
            display: block;
            border-radius: 50%;
        }
        .card {
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        .card-body {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .row {
            row-gap: 30px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">UiTM e-Profile</a>
        </div>
    </nav>

    <div class="container mt-5">
        <h2 class="text-center">LIST OF PROFILES</h2>
        <div class="row">
            <?php foreach ($profiles as $profile): ?>
                <div class="col-md-4 d-flex align-items-stretch">
                    <div class="card text-center w-100">
                        <img src="<?= $profile['image'] ?>" class="profile-img" alt="Profile Picture">
                        <div class="card-body">
                            <h5 class="card-title text-center"><?= htmlspecialchars($profile['name']) ?></h5>
                            <p class="card-text text-center">Student ID: <?= htmlspecialchars($profile['id']) ?></p>
                        </div>
                        <div class="card-footer bg-white border-0">
                            <a href="<?= isset($profile['profile_link']) ? $profile['profile_link'] : '#' ?>" class="btn btn-primary d-block text-center">View Profile</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <footer class="bg-dark text-white text-center p-3 mt-5">
        &copy; 2025 UiTM e-Profile. All rights reserved.
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
