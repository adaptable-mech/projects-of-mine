<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>[your name] | Portfolio</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body class="home-body">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-black shadow-lg">
  <div class="container">
    <a class="navbar-brand text-danger fw-bold" href="#">[your name]</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navMenu">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a href="#about" class="nav-link text-white">About</a></li>
        <li class="nav-item"><a href="#skills" class="nav-link text-white">Skills</a></li>
        <li class="nav-item"><a href="#projects" class="nav-link text-white">Projects</a></li>
        <li class="nav-item"><a href="#contact" class="nav-link text-white">Contact</a></li>
        <!-- Logout -->
        <li class="nav-item">
          <a href="logout.php" class="btn btn-danger ms-3">Log Out</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

  <!-- Hero Section -->
<section class="hero d-flex align-items-center justify-content-center text-center text-white">
  <video autoplay muted loop playsinline class="bg-video">
    <source src="assets/bg.mp4" type="video/mp4">
  </video>
  <div class="hero-content">
    <h1 class="fw-bold display-4">Hi, I'm [your name]</h1>
    <p class="lead text-danger">Web Developer | Designer | Coder</p>
  </div>
</section>

  <!-- About -->
  <section id="about" class="py-5 text-center bg-dark text-light">
  <h2 class="text-danger fw-bold mb-3">About Me</h2>
  <p>Im [your name], an aspiring web developer ...</p>
</section>

  <!-- Skills -->
  <section id="skills" class="py-5 bg-dark text-white">
    <div class="container text-center">
      <h2 class="text-danger fw-bold mb-4">Skills</h2>
      <div class="row">
        <div class="col-md-3"><div class="skill-box p-3 shadow">HTML</div></div>
        <div class="col-md-3"><div class="skill-box p-3 shadow">CSS</div></div>
        <div class="col-md-3"><div class="skill-box p-3 shadow">PHP</div></div>
        <div class="col-md-3"><div class="skill-box p-3 shadow">Bootstrap</div></div>
      </div>
    </div>
  </section>

  <!-- Projects -->
  <section id="projects" class="py-5 text-center bg-dark text-light">
    <h2 class="text-danger fw-bold mb-4">Projects</h2>
    <div class="row">
      <div class="col-md-4"><div class="card bg-black text-white p-3 shadow">Project 1</div></div>
      <div class="col-md-4"><div class="card bg-black text-white p-3 shadow">Project 2</div></div>
      <div class="col-md-4"><div class="card bg-black text-white p-3 shadow">Project 3</div></div>
    </div>
  </section>

  <!-- Contact -->
  <section id="contact" class="py-5 bg-dark text-center text-white">
    <h2 class="text-danger fw-bold mb-3">Contact Me</h2>
    <p>Email: [your email]</p>
    <p>Phone: [your number]</p>
  </section>
</body>
</html>
