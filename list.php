<!doctype html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;700&display=swap" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="fonts/icomoon/style.css">
  <link rel="stylesheet" href="fonts/feather/style.css">
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="css/jquery.fancybox.min.css">
  <link rel="stylesheet" href="css/aos.css">
  <link rel="stylesheet" href="css/card.css">


  <title>About Us</title>
</head>
<body>
<section class="property" id="property">
        <div class="container" style="width: 100%; height: 100%;">
          <ul class="property-list has-scrollbar">
<?php
// Establish a database connection (assuming MySQL)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "listing";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Construct the query
$sql = "SELECT `id`, `name`, `description`, `img_path`, `bed`, `bath`, `sq_ft`, `address`,`rent` FROM `listing` WHERE 1";

// Execute the query
$result = $conn->query($sql);

// Check if any rows are returned
if ($result->num_rows > 0) {
    // Loop through each row and echo the values
    while ($row = $result->fetch_assoc()) {
        $id = $row["id"];
        $name = $row["name"];
        $description = $row["description"];
        $img_path = $row["img_path"];
        $bed = $row["bed"];
        $bath = $row["bath"];
        $sq_ft = $row["sq_ft"];
        $address = $row["address"];
        $rent = $row["rent"];
    
    echo '<li>
              <div class="property-card" style="width: 100%; height: 100%">
                <figure class="card-banner">
                  <a href="#">';
                  
                  echo '<img src="'.$img_path.'" alt="New Apartment Nice View" class="w-100">';
                  echo '
                  </a>
                  <div class="card-badge green">For Rent</div>
                  <div class="banner-actions">
                    <button class="banner-actions-btn">
                      <ion-icon name="location"></ion-icon>';
                      
                      echo '<address>'.$address.'</address>';
                      echo '</button>
                    <button class="banner-actions-btn">
                      <ion-icon name="camera"></ion-icon>
                      <span>4</span>
                    </button>
                    <button class="banner-actions-btn">
                      <ion-icon name="film"></ion-icon>
                      <span>2</span>
                    </button>
                  </div>
                </figure>
                <div class="card-content">
                  <div class="card-price">';
                    
                    echo '<strong>$'.$rent.'</strong>/Month';
                    echo '
                  </div>
                  <h3 class="h3 card-title">';
                    
                    echo '<a href="#">'.$name.'</a>';
                    echo '
                  </h3>';
                  
                  echo '<p class="card-text">';
                  echo $description;
                  echo '</p>';
                  echo '
                  <ul class="card-list">
                    <li class="card-item">';
                    
                    echo '<strong>'.$bed.'</strong>';
                    echo '
                      <ion-icon name="bed-outline"></ion-icon>
                      <span>Bedrooms</span>
                    </li>
                    <li class="card-item">';
                      
                    echo '<strong>'.$bath.'</strong>';
                    echo '
                      <ion-icon name="man-outline"></ion-icon>
                      <span>Bathrooms</span>
                    </li>
                    <li class="card-item">';
                     
                    echo '<strong>'.$sq_ft.'</strong>';
                    echo '
                      <ion-icon name="square-outline"></ion-icon>
                      <span>Square Ft</span>
                    </li>
                  </ul>
                </div>
              </div>
            </li>
          ';
    }
  }

  ?>
  </ul>
        </div>
      </section>

    
  </body>
  </html>
