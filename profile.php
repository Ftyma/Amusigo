<?php require_once('connect.php'); ?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/userprofile.css">
    <style>
        .profile-btn {
            background-color: #e9baff;
            border-style: none;
            font-size: 1.2rem;
            padding-inline: 2rem;
            padding-block: 0.8rem;
            border-radius: 20px;
            float: right;
            margin-block: 1rem;
        }
        
        @media screen and (max-width: 768px) {
            .profile-btn {
                font-size: 0.8rem;
            }
        }
    </style>
</head>

<body>
    <a href="userprofile.php">
        <button class="profile-btn">
            <i class="fa-regular fa-user"></i>
                Profile
        </button>
    </a>
        
</body>

</html>
