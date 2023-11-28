<!-- start of includes -->
<?php
$page_title = "Player profile";
include ("includes/Header.php");
include ("includes/Nav.php");
?>
<!-- end of includes -->
<!DOCTYPE html>
<html>
	<link rel="stylesheet" href="css/style.css">

<style>
.dropdown {
    display: none;
    position: absolute;
    background-color: rgba(255, 255, 255, 0.8);
    padding: 5px;
    z-index: 1;
    border: 1px solid #ccc;
    text-align: left;
    color: black; 
}
.dropdown.active {
    display: block;
    margin-top: -500px;
    margin-left: 35px; 
}
.card {
    padding: 0px;
    margin-top: 20px;
    margin-left: 20px;
    margin-right: 20px;
    background-color: #0d4e97;
    
}


</style>

</head>
<body>
<!-- start of content 1 -->
<div class="container-fluid">
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card">
      <img src="image/alex.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Alex Fraser</h5>
        <button class="dropdown-button">View Description</button>
<div class="dropdown">
<h4>Position:</h4>
<p>defender</p>
<h4>Type:</h4>
<p>last man back</p>
<h4>Stats:</h4>
<p>goals: 10<p>
<p>assists: 10<p>
<h4>Description:</h4>
<p>Alex is our stongest defender and stops absolutely anyone from scoring.</p>
</div>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card">
      <img src="image/arthur.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Arthur Bradford</h5>
        <button class="dropdown-button">View Description</button>
<div class="dropdown">
<h4>Position:</h4>
<p>Midfeild</p>
<h4>Type:</h4>
<p>Play maker</p>
<h4>Stats:</h4>
<p>goals: 5<p>
<p>assists: 30<p>
<h4>Description:</h4>
<p>Arthur is a great center-attacking-mid (CAM) with deadly passing vision, making him a threat.</p>
</div>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card">
      <img src="image/austin.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Austin Wilkinson</h5>
        <button class="dropdown-button">View Description</button>
<div class="dropdown">
<h4>Position:</h4>
<p>Midfeild</p>
<h4>Type:</h4>
<p> Pivot Player</p>
<h4>Stats:</h4>
<p>goals: 2<p>
<p>assists: 20<p>
<h4>Description:</h4>
<p>Austin is a demon and manages to find the open pass and intercepts like a ballerina.</p>
</div>
      </div>
    </div>
  </div>
  
  <div class="col">
    <div class="card">
      <img src="image/jackson.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Jackson Graham</h5>
        <button class="dropdown-button">View Description</button>
<div class="dropdown">
<h4>Position:</h4>
<p>Stiker</p>
<h4>Type:</h4>
<p> finisher</p>
<h4>Stats:</h4>
<p>goals: 20<p>
<p>assists: 5<p>
<h4>Description:</h4>
<p>Jackson is always on the back post ready for that tap in.</p>
</div>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card">
      <img src="image/marcus.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Marcus Locke</h5>
        <button class="dropdown-button">View Description</button>
<div class="dropdown">
<h4>Position:</h4>
<p>striker</p>
<h4>Type:</h4>
<p>Finisher</p>
<h4>Stats:</h4>
<p>goals: 30<p>
<p>assists: 2<p>
<h4>Description:</h4>
<p>Marcus will often score a trick goal after killing his defender.</p>
</div>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card">
      <img src="image/sjaak.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Sjaak</h5>
        <button class="dropdown-button">View Description</button>
<div class="dropdown">
<h4>Position:</h4>
<p>goalie</p>
<h4>Type:</h4>
<p>brick wall</p>
<h4>Stats:</h4>
<p>goals: 1<p>
<p>assists: 10<p>
<h4>Description:</h4>
<p>Sjaak is our best goalie and saves absolutely everythig.</p>
</div>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card">
      <img src="image/will.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">William Hassed</h5>
        <button class="dropdown-button">View Description</button>
<div class="dropdown">
<h4>Position:</h4>
<p>striker</p>
<h4>Type:</h4>
<p>Finisher</p>
<h4>Stats:</h4>
<p>goals: 29<p>
<p>assists: 2<p>
<h4>Description:</h4>
<p>William is the meanest striker and reliably scores amazing goals.</p>
</div>
      </div>
    </div>
  </div>


</div>
</div>
   
<!-- botton drop down code -->
<div>
<script>
const dropdownButtons = document.querySelectorAll('.dropdown-button');
dropdownButtons.forEach(button => {
const dropdown = button.nextElementSibling;
button.addEventListener('click', () => {
dropdown.classList.toggle('active');
});
});
</script>
</body>
</html>


<?php
include ("includes/Footer.php");
?>