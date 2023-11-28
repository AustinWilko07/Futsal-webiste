<!-- Calling header -->
<?php
  include ('includes/Header.php');
  include ('includes/Nav.php');
?>

<!DOCTYPE html>
<html>
<head>
  <title>About | Rongotai Futsal</title>
  <link rel="stylesheet" href="css/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function() {
      $(".dropdown-button").click(function() {
        $(this).toggleClass("active");
        var content = $(this).next();
        if (content.is(":visible")) {
          content.slideUp();
        } else {
          content.slideDown();
        }
      });
    });
  </script>
 
  <style>
    .dropdown-button {
      background-color: #0d4e97;
      color: #fec625;
      padding: 10px;
      cursor: pointer;
      border-radius: 5px;
    }
 
    .content {
      display: none;
      background-color: white;
      color: black;
      padding: 10px;
      margin-top: 10px;
    }
 
    .content p {
      margin: 0;
    }
  </style>
</head>
<body>

  <!-- Start of content 1 -->
  <div class="container pt-5">
    <div class="row">
      <h1 class="heading_1 text-center">About </h1>
    </div>
    <div class="container pt-3">
      <h2 class="text-center heading_3">About Rongotai Futsal</h2>
      <h4 class="text-center heading_3 dropdown-button">View</h4>
      <div class="content">
        <p>
          Welcome to the Rongotai College futsal Website! We are a passionate team of futsal enthusiasts who love everything about this
          exciting and dynamic sport. We believe that futsal is more than just a game, its a lifestyle, a community, and a culture.
          Our mission is to share our passion for futsal with the world and inspire others to discover the joy of this beautiful sport.
        </p>
      </div>
      <h2 class="text-center heading_3">Our history</h2>
      <h4 class="text-center heading_3 dropdown-button">View</h4>
      <div class="content">
        <p>
          This Futsal Website was founded in 2023 by a group of futsal players and coaches who wanted to create a central hub for all things
          futsal. Over the years, we've grown into a vibrant community of futsal lovers, united by our love of the game.
        </p>
      </div>
      <h2 class="text-center heading_3">Our Team</h2>
      <h4 class="text-center heading_3 dropdown-button">View</h4>
      <div class="content">
        <p class="text-center text secondary">
          Meet our core team members:
        </p>
        <ul style="text-align: center; padding-inline-start: 0;">
          <li><strong>Manager:</strong> Mahad Cismam</li>
          <li><strong>Coach:</strong> Ahmed Algebawy</li>
          <li><strong>Assistant coach:</strong> Manny Solakua</li>
          <li><strong>Equipment manager:</strong> Clair Beggs</li>
          <li><strong>Founder:</strong> Charlote Hassed</li>
        </ul>
      </div>
    </div>
    <div class="col-sm-1"></div>
  </div>

  <!-- Calling footer page -->
  <?php
  include 'includes/Footer.php';
  ?>
</body>
</html>
