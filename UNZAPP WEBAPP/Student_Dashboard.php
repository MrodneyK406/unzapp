<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Student Dashboard</title>
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
      background-size: cover; /* Cover the entire background */
      background-position: center; /* Center the background image */
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
.welcome{
  position: absolute;
      top: 80px; /* Adjust this value to move text lower from the top */
      left: 30px; /* Adjust this value to move text right from the left edge */
      font-size: 16px; /* Adjust this for text size */
      color: white;
}
main {
    text-align: center;
}

.category {
    margin-bottom: 20px;
}
h2 {
    font-size: 25px;
    margin-right: 500px;
    margin-bottom: 10px;
    color:white;
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
footer{ 
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
            <h1>UNZAPP </h1>
      </div>
        <div class="user">
            <span>Welcome, User!</span>
            <a href="Index.html">
                <button class="logout-button">Logout</button>
            </a>
        </div>
   </header>
<div class="welcome">
  <h1> Welcome to the student Dashboard! Let's Interact!</h1>
</div>
<main>
  <div class="category">
      <h2>What do you want to view?</h2>
      <div class="button-container">
          <a href="">
              <button class="large-button">Courses</button>
          </a>
          <a href="">
              <button class="large-button">Storage (School Materials)</button>
          </a>
          <a href="calendar.html">
            <button class="large-button">Calendar (Schedules)</button>
        </a>
       
    </div>
    <div class="category">
      <h2>       </h2>
      <div class="button-container">
        <a href="">
          <button class="large-button">Notifications</button>
      </a>
      <a href="">
        <button class="large-button">Locate a Venue</button>
      </a>
      <a href="">
        <button class="large-button">Academic Timetable</button>
      </a>

      </div>
    </div>

  </div>
</main>
<footer>
   
  © 2024 JS Team. All rights reserved.
</footer>
<script src=""></script>
</body>
</html>
