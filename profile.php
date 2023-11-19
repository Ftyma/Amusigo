<?php require_once('connect.php'); ?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/userprofile.css">
    <style>
        .profile-btn {
            /* background-color: #e9baff;
            border-style: none;
            font-size: 1.2rem;
            padding-inline: 2rem;
            padding-block: 0.8rem;
            border-radius: 20px;
            float: right;
            margin-block: 1rem; */
            margin: 25px;
            background: linear-gradient(
                90.11deg,
                rgba(200, 83, 219, 0.18) 32.29166567325592%,
                rgba(200, 83, 219, 0.1) 100%
            );
            border-radius: 25px;
            border-style: solid;
            border-color: #a654d8;
            border-width: 2px;
            width: 150px;
            height: 40px;
            position: relative;
            font: 600 16px "NotoSans-SemiBold", sans-serif;
            color: #a654d8;
            float:right;
            font-size:1.2rem;
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
