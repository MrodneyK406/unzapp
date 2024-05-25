<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Lecturer Dashboard</title>
<style>
    body {
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        margin: 50px;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 95vh;
        background-image: url(University_of_Zambia_School_of_Engineering.jpg);
        background-size: cover;
        background-position: center;
    }
    header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 97%;
        padding: 10px 20px;
        background-color: rgba(0, 0, 0, 0.5);
        color: #fff;
        position: absolute;
        top: 0;
    }
    .logo {
        font-size: 10px;
        margin-top: 0;
        text-align: right;
    }
    .user {
        display: flex;
        align-items: center;
    }
    .logout-button {
        background-color: #3b5760;
        color: #fff;
        border: none;
        border-radius: 4px;
        padding: 8px 16px;
        font-size: 16px;
        cursor: pointer;
        margin-left: 10px;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    }
    .welcome {
        position: absolute;
        top: 80px;
        left: 30px;
        font-size: 16px;
        color: white;
    }
    main {
        text-align: center;
    }
    .category {
        margin-bottom: 20px;
    }
    .button-container {
        display: flex;
        gap: 50px;
        justify-content: center;
    }
    .large-button {
        padding: 20px 40px;
        font-size: 20px;
        background-color: #3b5760;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    }
    footer {
        background-color: rgba(0, 0, 0, 0.5);
        padding: 20px;
        text-align: center;
        font-family: Arial, Helvetica, sans-serif;
        position: fixed;
        bottom: 0;
        width: 100%;
        color: #fff;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    }
</style>
</head>
<body>
<header>
    <div class="logo">
        <h1>UNZAPP</h1>
    </div>
    <div class="user">
        <span>Welcome, Lecturer!</span>
        <a href="Index.html">
            <button class="logout-button">Logout</button>
        </a>
    </div>
</header>
<div class="welcome">
    <h1>Welcome to the Lecturer Dashboard! Knowledge is Potential Power!</h1>
</div>
<main>
    <div class="category">
        <div class="button-container">
            <a href="">
                <button class="large-button">Lecturer Courses</button>
            </a>
            <a href="">
                <button class="large-button">Course Materials</button>
            </a>
            <a href="announce.php">
                <button class="large-button">Announce</button>
            </a>
        </div>
    </div>
</main>
<footer>
    © 2024 JS Team. All rights reserved.
</footer>
<script src="scripts.js"></script>
</body>
</html>
