<?php
    require 'function.php';
    require 'cek.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- My FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <!-- My CSS -->
    <link rel="stylesheet" href="style_index.css">
    <title>My Website</title>
  </head>
  <body class="index">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="#">FahrizalSA</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
            <a class="nav-link active " aria-current="page" href="#home">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link " href="#about">About</a>
            </li>
            <li class="nav-item">
            <a class="nav-link " href="#contact">Contact</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle " href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Blog
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="bloghome.php">Blog Home</a></li>
                <li><a class="dropdown-item" href="blogpost.php">Blog Post</a></li>
                <li><a class="dropdown-item" href="motivation.php">Blog Motivation</a></li>
            </ul>
            </li>
            <li class="nav-item">
            <a class="nav-link  btn btn-danger" href="logout.php">Logout</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>
    <!-- Akhir navbar -->
    
    <!-- Jumbortron -->
    <section id="home">
      <div class="container">
        <div class="row custom-section">
          <div class="col-12 col-lg-4">
            <h1 class="display-4"><span> Welcome  Genius!</span>, are yor ready for be a champion ?</h1>
            <a class="btn btn-danger btn-lg" href="blogpost.php" role="button">Read more</a>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Jumbotron -->

    <!-- about -->
    <section class="about" id="about">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>About</h2>
            <hr>
          </div>
        </div>
        <div class="row justify-content-around fs-5 text-center">
          <div class="col-4">
            <img src="phone.png" alt="" width="400px">
          </div>
          <div class="col-4">
            <p class="text-about"> My name is Fahrizal Shofyan Aziz, i live in Central Java, Banjarnegara. my hobby is computer, i am very
            comfortable when i open the pc, its like i have new world that i never seen before.
            </p>
            </div>
        </div>
     </div> 
    </section>
    <!-- akhir about -->

    <!-- contact -->
    <section class="contact" id="contact">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>Contact</h2>
            <hr>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-6 ">
            <form method="POST">
              <div class="mb-3">
            
                <input type="text" class="form-control" id="name" aria-describedby="name" name="nama" placeholder="What's your name ?...">
    
              </div>
              <div class="mb-3">
                
                <input type="email" class="form-control" id="email" aria-describedby="email" name="email" placeholder="What's your email address?...">
              
              </div>
              <div class="mb-3">
              
                <textarea class="form-control" id="pesan" rows="3" name="pesan" placeholder="Give me a something messages..."></textarea>
              </div>
              <button class="btn btn-warning button" name="submitcontact">Submit</button>
            </form>
          </div>
        </div>
     </div> 
     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff"
        fill-opacity="1" d="M0,192L34.3,192C68.6,192,137,192,206,176C274.3,
        160,343,128,411,149.3C480,171,549,245,617,256C685.7,267,754,213,823,
        181.3C891.4,149,960,139,1029,165.3C1097.1,192,1166,256,1234,
        266.7C1302.9,277,1371,235,1406,213.3L1440,192L1440,320L1405.7,
        320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,
        320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,
        320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
      </svg>
    </section>
    <!-- akhir contact -->

    <!-- footer -->
    <footer class=" text-center p-3">
      
    </footer>
    <!-- akhir footer -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>