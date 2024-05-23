<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style/style.css">
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <title>UNZAPP Welcome Page</title>
</head>
<body>
  <div class="father-container">
    <div class="main-container-for-login">
      <div class="welcome-text">
        <h1>Log into<br>Unzapp</h1>
      </div>

      <div class="main-container">
        <h2>Logging In As?</h2>
        <p id="or-sign-up">Or Sign up</p>
        <div class="login-buttons">
          <button id="student-log-in">Student</button>
          <button id="lecturer-log-in">Lecturer</button>
        </div>

        <div class="forms-container">
          <div class="login-container" id="Lecturer-login-form">
            <h2>Lecturer Login</h2>
            <form action="" method="POST">
                <input type="email" id="email" name="email" placeholder="Lecturer Email" required><br>
                <input type="password" id="password" name="password" placeholder="Lecturer Password" required><br>
                <input type="submit" class="button-log-in" value="Login" name="submit_lecturer">
            </form>
            <a href="#" class="forgot-password">Forgot Password?</a>
          </div>

          <div class="login-container" id="student-login-form">
            <h2>Student Login</h2>
            <form action="" method="POST">
                <input type="email" id="email" name="email" placeholder="Student Email" required><br>
                <input type="password" id="password" name="password" placeholder="Student Password" required><br>
                <input type="submit" class="button-log-in" value="Login" name="submit_student">
            </form>
            <a href="#" class="forgot-password">Forgot Password?</a>
          </div>
        </div>
      </div>
    </div>


    <div class="main-container-for-signup">
      <p>Sign up into <br>Unzapp</p>
      <h4 id="or-login">Or Login</h4>
      <div class="sign-up-button-choose">
        <button id="sign-up-as-student">Student</button>
        <button id="sign-up-as-lecturer">Lecturer</button>
      </div>

      <div class="forms-forms-for-the-sign-up">
        <div class="sign-up-forms">
          <div class="studnet-sign-up">
            <p>Student's sign up</p>
            <form action="" method="POST">
              <label>Full Name</label><br>
              <input type="text" name="full_name"><br>
              <label>Gender</label>
              <label for="male"><input type="radio" name="GENDER" value="m" id="radio-male">Male</label>
              <label for="female"><input type="radio" name="GENDER" value="f" id="radio-female">Female</label><br>
              <label>Date of Birth</label><br>
              <input type="text" name="date_of_birth"><br>
              <label>NRC</label><br>
              <input type="text" name="nrc"><br>
              <label>Computer Number</label><br>
              <input type="text" name="Computer_number"><br>
              <label>Password</label><br>
              <input type="text" name="password"><br>
              <label>Re-Enter Password</label><br>
              <input type="text" name="confirm_password"><br>
              <input type="submit" name="sign-up" value="Sign Up" id="studnet-sign-up-button"><br>
            </form>
          </div>

          <div class="lecturer-sign-up">
            <p>Lecturer's Sign up</p>
            <form action="" method="POST">
              <label>Full Name</label><br>
              <input type="text" name="full_name"><br>
              <label>Gender</label><br>
              <label for="male"><input type="radio" name="GENDER" value="m" id="radio-male">Male</label>
              <label for="female"><input type="radio" name="GENDER" value="f" id="radio-female">Female</label><br>
              <label>Date of Birth</label><br>
              <input type="text" name="date_of_birth"><br>
              <label>NRC</label><br>
              <input type="text" name="nrc"><br>
              <label>School</label><br>
              <input type="text" name="school"><br>
              <label>Department</label><br>
              <input type="text" name="department"><br>
               <label>Lecturer id</label><br>
              <input type="text" name="Lecturer_id"><br>
               <label>Lecturer Email</label><br>
              <input type="text" name="lecturer_email"><br>
              <label>Password</label><br>
              <input type="text" name="password"><br>
              <label>Re-Enter Password</label><br>
              <input type="text" name="confirm_password"><br>
              <input type="submit" name="sign-up" value="Sign Up" id="lecturer-sign-up-button">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php
   
  ?>

  <script type="text/javascript" src="script/Scripts.js"></script>
</body>
</html>
