<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecturer Courses</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #3b5760;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
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
.container {
    background-color: #ffffff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
    border-radius: 8px;
}

h1 {
    text-align: center;
    color: #333333;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

th, td {
    padding: 12px;
    border: 1px solid #dddddd;
    text-align: left;
}

th {
    background-color: #3b5760;
    color: white;
}

tr:nth-child(even) {
    background-color: #f9f9f9;
}

tr:hover {
    background-color: #f1f1f1;
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
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="logo">
              <h1>UNZAPP</h1>
        </div>
          <div class="user">
              <span>Welcome, Lecturer!</span>
              <a href="course.php">
                  <button class="logout-button">Logout</button>
              </a>
          </div>
     </header>
    <div class="container">
        <h1>Courses Assigned </h1>
        <table>
            <thead>
                <tr>
                    <th>Course Code</th>
                    <th>Course Name</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>CS101</td>
                    <td>Introduction to Computer Science</td>
                </tr>
                <tr>
                    <td>CS102</td>
                    <td>Data Structures</td>
                </tr>
                <tr>
                    <td>CS103</td>
                    <td>Algorithms</td>
                </tr>
                <tr>
                    <td>CS104</td>
                    <td>Operating Systems</td>
                </tr>
                <tr>
                    <td>CS105</td>
                    <td>Database Systems</td>
                </tr>
            </tbody>
        </table>
    </div>
    <footer>
   
        © 2024 JS Team. All rights reserved.
      </footer>
</body>
</html>

