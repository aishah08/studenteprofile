<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROFILE OF ANIS</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }
        .profile-container {
            width: 50%;
            margin: 50px auto;
            padding: 20px;
            background: white;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            text-align: left;
        }
        .profile-container h2 {
            text-align: center;
        }
        .profile-picture {
            display: block;
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin: 0 auto 20px;
        }
        .profile-info {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: center;
            text-align: justify;
            padding-left: 20px;
        }
        .profile-info p {
            display: flex;
            justify-content: space-between;
            width: 80%;
            margin: 5px auto;
        }
        .label {
            font-weight: bold;
            flex: 1;
        }
        .value {
            flex: 2;
        }
        .back-btn {
            display: block;
            width: 150px;
            margin: 20px auto;
            padding: 10px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            text-align: center;
            border-radius: 5px;
        }
        .back-btn:hover {
            background-color: #0056b3;
        }
        footer {
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 10px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="profile-container">
        <h2>PROFILE</h2>
        <img src="profile/ANIS.JPG" alt="Gambar Profil" class="profile-picture">
        <div class="profile-info">
            <p><span class="label">NAME:</span> <span class="value">NUR ANIS MAISARAH BINTI JEFRYSHAM</span></p>
            <p><span class="label">STUDENT ID:</span> <span class="value">2024745471</span></p>
            <p><span class="label">AGE:</span> <span class="value">21 YEARS OLD</span></p>
            <p><span class="label">PHONE NUMBER:</span> <span class="value">011-19487544</span></p>
            <p><span class="label">COURSE:</span> <span class="value">INFORMATION MANAGEMENT</span></p>
            <p><span class="label">HOMETOWN:</span> <span class="value">SUNGAI PETANI, KEDAH</span></p>
        </div>
        <a href="listofprofiles.php" class="back-btn">BACK</a>
    </div>
    
    <footer>
        &copy; 2025 UiTM e-Profile. All rights reserved.
    </footer>
</body>
</html>
