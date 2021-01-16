<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>TSF Bank</title>
  <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
  <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Baloo+Bhai+2&family=Roboto:wght@300&display=swap');
  </style>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">

        <img src="images/logo.png" alt="logo" style="width:40px;">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href=" index.php ">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#services"> Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
        </ul>

        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-primary" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->

  <!-- Home -->
  <section class="topContent">
    <div class="mainHeading">
      <div>
        <span class="main-content">Basic Banking System</span>
      </div>
      <div style="margin-top: 12px;">
        <span class="sub-content">A Basic Banking System for making transactions between users</span>
      </div>
      <a href="#services" class="btn btn-outline-primary mt-3">Get Started</a>
    </div>
    <div class="topContentImg">
      <img src="images/banking_homepage.jpg" alt="Banking">
    </div>
  </section>
  <!-- End Home -->

  <!-- About -->
  <section id="about" class="container">
    <h2 class="heading">About Us</h2>
    <div class="container">
      <div class="row">
        <div class="col-md-6 mx-auto">
          <img class=" mt-3 " style="width:400px;" src="images/about.jpg" alt="TSF Bank">
        </div>
        <div class="col-md-6 mx-auto mt-4">
          <div>
            <span class="text">TSF Bank</span>
          </div>
          <div class="mt-2">
            <span class="sub-content">It is a Basic Banking System for making transactions between users.
              It can transfer Money between multiple accounts,view all Customer's data and view all the past
              transactions happened between different accounts.</span>
          </div>
          <a href="#services" class="btn btn-outline-primary mt-3">Learn More</a>
        </div>
      </div>
    </div>
  </section>
  <!-- End About -->

  <!-- Services -->
  <section class="container" id="services">
    <h2 class="heading">Our Services</h2>

    <div class="container  text-center">
      <div class="row">
        <div class="card col-md-3 mx-auto" style="width: 18rem;">
          <img src="images/customer.png" class="card-img-top mt-3 img" alt="Responsive image">
          <div class="card-body">
            <h5 class="card-title">View Customers</h5>
            <p class="card-text">View all Customer's data</p>
            <a href="transfermoney.php" class="btn btn-primary">View Customers</a>
          </div>
        </div>

        <div class="card col-md-3 mx-auto" style="width: 18rem;">
          <img src="images/transactions.png" class="card-img-top mt-3 img" alt="Responsive image">
          <div class="card-body">
            <h5 class="card-title">View Transactions</h5>
            <p class="card-text">View all the past transactions happened between different accounts</p>
            <a href="transactionhistory.php" class="btn btn-primary">View Transactions</a>
          </div>
        </div>

        <div class="card col-md-3 mx-auto" style="width: 18rem;">
          <img src="images/transfer.jpg" class="card-img-top mt-3 img" alt="Responsive image">
          <div class="card-body">
            <h5 class="card-title" id="harry">Transfer Money</h5>
            <p class="card-text"> Transfer Money between multiple accounts</p>
            <a href="transfermoney.php" class="btn btn-primary">Transfer Money</a>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <!-- End Services -->

  <!-- Contact -->
  <section class="mx-auto" id="contact">
    <h2 class="heading">Contact Us</h2>
    <form>
      <div class="row mb-3">
        <div class="col">
          <input type="text" class="form-control" placeholder="First name" aria-label="First name">
        </div>
        <div class="col">
          <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
        </div>
      </div>
      <div class="mb-3">

        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
          placeholder="Enter your E-Mail">

      </div>
      <div class="mb-3">
        <input type="text" class="form-control" placeholder="Enter Your City" aria-label="City">
      </div>
      <div class="mb-3">

        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
          placeholder="Leave your comments here...."></textarea>
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>

    </form>
  </section>
  <!-- End Contact -->

  <!-- Footer -->
  <footer>
    <div class="follow">
      <h3 style="color: black; font-family: 'Baloo Bhai 2', cursive; font-size: 25px;">Follow Us</h3>
      <div class="social">
        <a href="#facebook" class="facebook">
          <i class="fa fa-facebook"></i>
        </a>
        <a href="#twitter" class="twitter">
          <i class="fa fa-twitter"></i>
        </a>
        <a href="#linkedin" class="linkedin">
          <i class="fa fa-linkedin"></i>
        </a>
        <a href="#instagram" class="instagram">
          <i class="fa fa-instagram"></i>
        </a>
      </div>
    </div>
    <p class="text-copy">
      Copyright &copy; 2021 All rights reserved
    </p>
  </footer>
  <!-- End Footer -->

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>

</html>