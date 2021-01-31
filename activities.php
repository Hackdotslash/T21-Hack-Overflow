<!DOCTYPE html>
<html lang="en">

<head>
  <title>Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/profile.css">
  <link rel="shortcut icon" type="image/png" href="images/logo.png" />
</head>

<body>

  <div class="container">
    <ul class="nav nav-tabs">
      <!-- <li class="active"><a data-toggle="tab" href="#menu1"><i class="fas fa-user"></i> Profile</a></li> -->
      <!-- <li><a data-toggle="tab" href="#menu2"><i class="fas fa-utensils"></i> Mess Council</a></li> -->
      <li class="active"><a data-toggle="tab" href="#menu3"><i class="fas fa-chart-line"></i> My Activities</a></li>
      <!-- <li><a data-toggle="tab" href="#menu4"><i class="fas fa-poll"></i> Complaints</a></li> -->
      <!-- <li><a data-toggle="tab" href="#menu5"><i class="fas fa-poll"></i> Student Pivot</a></li> -->
      <li><a href="/"><i class="fas fa-sign-out-alt"></i> Log Out</a></li>
    </ul>

    <div class="tab-content">
      <div id="menu3" class="tab-pane fade in active">
        <h3>My Activities</h3>

        <div class="tab">
          <button class="tablinks" onclick="openCity(event, 'FeedBack')" id="defaultOpen">FeedBack, Grievances & Requests</button>
          <button class="tablinks" onclick="openCity(event, 'Attendance')">Go Points</button>
          <!-- <button class="tablinks" onclick="openCity(event, 'Leave')">Leave Application</button> -->
          <button class="tablinks" onclick="openCity(event, 'Laundary')">GoGreen Card</button>
          <a href="/gogreen/gogreenbox.php" style="text-decoration: none;" target="_blank"><button class="tablinks" onclick="openCity(event, 'Fee')">Donate</button></a>
          <button class="tablinks" onclick="openCity(event, 'Grades')">GoGreen Reports</button>
          <!-- <button class="tablinks" onclick="openCity(event, 'Notices')">Circular and Notices</button> -->
        </div>

        <div id="FeedBack" class="tabcontent">
          <h3>FeedBack, Grievances & Requests</h3>
          <textarea rows="4" cols="50" name="comment" form="usrform" placeholder="Enter your feedback here..."></textarea>
        </div>

        <div id="Attendance" class="tabcontent">
          <h3>Your Go points are: 1200</h3>
          <p>You can shop goodies with your Go points</p>

          <img src="images/deals.jpg" id="deals">
        </div>

        <div id="Laundary" class="tabcontent">
          <h3>GoGreen Card</h3>
          <p>You can avail upto 50% cashback on offline stores using GoGreen cards.</p>
          <button type="button" name="button" class="btn-success">Get / Renew GoGreen card</button>
          <img src="images/coupons.jpg" id="coupons">
        </div>

        <div id="Grades" class="tabcontent">
          <h3>GoGreen Reports</h3>
          <img src="images/pie.svg" id="pie">
          <!-- <p>Check your Result</p> -->
        </div>

      </div>

    </div>
  </div>

  <script>
    function openCity(evt, cityName) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(cityName).style.display = "block";
      evt.currentTarget.className += " active";
    }
    document.getElementById("defaultOpen").click();
  </script>
</body>

</html>