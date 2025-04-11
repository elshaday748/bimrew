<!DOCTYPE html>
<html >
<head>
  <title>Welcome to St. Alphonsus Primary School</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <a href="login.php" class="btn btn-custom">Login</a>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      background-image: url('IMG_0729.JPG'); 
      background-size: cover;
      background-position: center;
      min-height: 100vh;
      font-family: 'Segoe UI', sans-serif;
      color: #333;
    }
    


    .container img {
    width: 50px; 
    height: auto; 
    margin-right: 15px; 
    border-radius: 50%;
  
  }


   .container h1 {
   font-size: 1.8rem; 
   font-weight: bold; 
   margin-bottom: 8px; 
   color: White;
}


   .container p {
    font-size: 1rem; 
    color: white;
   }

    .navbar {
      background-color: #ADD8E6; 
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .navbar-brand {
      font-weight: bold;
      font-size: 24px;
      color: #fff;
    }

    .navbar-nav .nav-link {
      color: #fff !important;
      font-size: 16px;
    }

    .navbar-nav .nav-link:hover {
      color: #1E90FF;
      background-color: transparent;
    }

    .container-main {
      background-color: rgba(0, 0, 0, 0.5); 
      padding: 3rem 2rem;
      margin-top: 100px;
      border-radius: 20px;
      box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.2);
      text-align: center;
    }

    .container-main h1 {
      font-size: 3rem;
      font-weight: 700;
      margin-bottom: 1rem;
      color: #87CEFA; 
    }

    .container-main p {
      font-size: 1.2rem;
      color: #f0f0f0;
    }

    .btn-custom {
      background-color: #4682B4;
      color: white;
      font-weight: bold;
    }

    .btn-custom:hover {
      background-color: #1E90FF;
      color: white;
    }

    footer {
      margin-top: 60px;
      background-color: #ADD8E6;
      padding: 20px 0;
      text-align: center;
      color: #fff;
      font-size: 14px;
      border-top: 1px solid #444;
    }

    footer h3 {
      margin-bottom: 1rem;
      color: #1E90FF;
    }

    .social-links a {
      margin: 0 10px;
      text-decoration: none;
      color: #fff;
    }

    footer .social-links a:hover {
      color: #87CEFA;
    }

    .navbar-nav .nav-link:hover {
      background-color: #1E90FF;
      color: white;
    }

  </style>
</head>
<body>
  <div class="container mt-4 d-flex align-items-center">
    <img src="IMG_0731.JPG" alt="School Logo" class="me-3">
    <div>
      <h1>St. Alphonsus Primary School</h1>
      <p class="lead">Nurturing Excellence in Education</p>
    </div>
  </div>
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">SchoolDB</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="pupilsDropdown" role="button" data-bs-toggle="dropdown">
              Pupils
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="add_pupil.php">Add New Pupil</a></li>
              <li><a class="dropdown-item" href="pupils.php">View All Pupils</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="classesDropdown" role="button" data-bs-toggle="dropdown">
              Classes
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="add_class.php">Add New Class</a></li>
              <li><a class="dropdown-item" href="classes.php">View All Classes</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="teachersDropdown" role="button" data-bs-toggle="dropdown">
              Teachers
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="add_teacher.php">Add New Teacher</a></li>
              <li><a class="dropdown-item" href="teachers.php">View All Teachers</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="parentsDropdown" role="button" data-bs-toggle="dropdown">
              Parents
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="add_parent.php">Add New Parent</a></li>
              <li><a class="dropdown-item" href="parents.php">View All Parents</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="teaching_assistanceDropdown" role="button" data-bs-toggle="dropdown">
           Teacher assistance
          </a>
          <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="add_ta.php">Add New Teacher</a></li>
          <li><a class="dropdown-item" href="tas.php">View All Teachers</a></li>
           </ul>
        </li>
        </ul>
        <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle" href="#" id="attendanceDropdown" role="button" data-bs-toggle="dropdown">
            Attendance
         </a>
        <ul class="dropdown-menu">
       <li><a class="dropdown-item" href="add_attendance.php">Mark Attendance</a></li>
      <li><a class="dropdown-item" href="attendance.php">View Attendance</a></li>
      </ul>
      </li>
      </div>
    </div>
  </nav>
  <div class="container-main">
    <h1>Welcome to St. Alphonsus Primary School</h1>
    <p>We are dedicated to nurturing excellence in every child. Join us in providing a foundation for a bright future.</p>
  </div>
  <footer>
    <div class="container footer-content">
      <div class="footer-section">
        <h3>Contact Us</h3>
        <address>
          123 Bury Road<br>
          Learning City, LC 12345<br>
          Phone: (123) 456-7890<br>
          Email: info@stalphonsus.edu
        </address>
      </div>

      <div class="footer-section">
        <h3>Follow Us</h3>
        <div class="social-links">
          <a href="#" class="fab fa-facebook"> Facebook</a>
          <a href="#" class="fab fa-twitter"> Twitter</a>
          <a href="#" class="fab fa-instagram"> Instagram</a>
        </div>
      </div>
    </div>

    <div class="copyright">
      &copy; 2023 St. Alphonsus Primary School. All rights reserved.
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
