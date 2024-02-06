<?php
include "db_conn.php";
?>

<!DOCTYPE html>
<html>
<head>
<title>Enhypen Club</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
</style>
<!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body class="w3-light-grey w3-content" style="max-width:1600px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <img src="photo/logo enha.jpg" style="width:45%;" class="w3-round" align="center"><br><br>
    <h4><b>ENGENE</b></h4>
    <p class="w3-text-grey">We Connect Together</p>
  </div>
  <div class="w3-bar-block">
    <a href="#home" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-green"><i class="fa fa-home fa-fw w3-margin-right"></i>HOME</a> 
	<a href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>ABOUT CLUB</a> 
	<a href="#committee" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>COMMITTEE</a> 
	<a href="#membership" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>MEMBERSHIP</a>
    <a href="#activity" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>ACTIVITY</a> 	
    <a href="#achievement" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>ACHIEVEMENTS</a> 
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>CONTACT</a>
	
  </div>
  <div class="w3-panel w3-small">
  <p class="w3-text-grey"><b>CONTACT US</b></p>
      <a href="https://weverseshop.io/en/shop/US_USD/artists/10/notices/1222"><i class="fa fa-envelope" style="font-size:48px;color:black"></i></a>
  </div>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">
<!-- Header -->
  <header id="home">
  <nav class="navbar navbar-light justify-content-center fs-3 mb-5 w3-text-white" style="background-color: #000000" >
  
  </nav>
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container">
    <h1><b>Welcome to Enhypen Official Club</b></h1>
    <div class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
<div class="w3-section w3-bottombar w3-padding-16">
    </div>
    </div>
  </header>
  
<!-- First Photo Grid-->
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="photo/enhaa.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
	  <p>
        <p><b>Members</b></p>
        <p>ENHYPEN (엔하이픈) is the final 7 members of the survival show I-LAND under BE:LIFT Lab, a subsidiary label under HYBE. The group consists of Heeseung, Jay, Jake, Sunghoon, Sunoo, Jungwon, and Ni-ki. They debuted on November 30th, 2020 with the mini album, “BORDER: DAY ONE“.</p>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="photo/fanbase.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
	  <p>
        <p><b>Fanbase</b></p>
        <p>"The pronunciation of the word "ENGENE" the first thing it means is that, "[our] fans are like 'engines' that let [us] grow and keep going." The second meaning is that the fans are "ENHYPEN's 'gene'" and that "[you] and ENHYPEN share the same DNA to connect, discover, and grow together.".</p>
      </div>
    </div>
    <div class="w3-third w3-container">
      <img src="photo/mv.jpeg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
	  <p>
        <p><b>Music Video</b></p>
        <p>"Their debut EP, "BORDER: DAY ONE," with songs "Given-Taken." The second EP, "BORDER: CARNIVAL," featuring tracks such as "Drunk-Dazed." Their third EP, "DIMENSION: DILEMMA," includes songs like "Dilemma." ENHYPEN's music blends pop, hip-hop, and EDM." </p>
      </div>
    </div>
  </div>
  
  <!-- Second Photo Grid-->
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="photo/al.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
	  <p>
        <p><b>Album</b></p>
        <p>Each album showcases ENHYPEN's unique style, blending genres like pop, hip-hop, and EDM. Their music has gained popularity both in South Korea and internationally, contributing to group's success and growing fanbase, known as "ENGENE."</p>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="photo/l.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
	  <p>
        <p><b>Lightstick</b></p>
        <p>Enhypen lightstick is crafted to represent the group's identity and include features like Bluetooth connectivity, synchronized lighting effects during concerts. Fans use these lightsticks to create vibrant and synchronized displays.</p>
      </div>
    </div>
    <div class="w3-third w3-container">
      <img src="photo/acc.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
	  <p>
        <p><b>Achievement</b></p>
        <p>Their debut EP, "BORDER: DAY ONE," garnered attention with the title track "Given-Taken." The group quickly gained popularity and international recognition, winning several awards and receiving positive reviews for their unique music style. </p>
      </div>
    </div>
  </div>
  
  <div class="w3-container w3-padding-large" style="margin-bottom:32px" "w3-white">
    
    
    <h4>Enhypen Skills</h4>
    <!-- Progress bars / Skills -->
    <p>Vocal</p>
	      <img src="photo/vocal.jpg" alt="Norway" style="width:15%" class="w3-hover-opacity" align="center">
    <a href="https://www.youtube.com/watch?v=n4PDo8W2FJQ" class="w3-bar-item w3-button w3-hover-black">«</a>
	<div class="w3-grey">
      <div class="w3-container w3-dark-grey w3-padding w3-center" style="width:100%">100%</div>
    </div>
	<p>
    <p>Dance</p>
	<img src="photo/dance.jpeg" alt="Norway" style="width:15%" class="w3-hover-opacity" align="center">
    <a href="https://www.youtube.com/watch?v=SAsGObLZxjYS" class="w3-bar-item w3-button w3-hover-black">«</a>
    <div class="w3-grey">
      <div class="w3-container w3-dark-grey w3-padding w3-center" style="width:100%">100%</div>
    </div>
	<p>
    <p>Rap</p>
	<img src="photo/rap.jpg" alt="Norway" style="width:15%" class="w3-hover-opacity" align="center">
    <a href="https://www.youtube.com/watch?v=gvKxnsyPwB8" class="w3-bar-item w3-button w3-hover-black">«</a>
    <div class="w3-grey">
      <div class="w3-container w3-dark-grey w3-padding w3-center" style="width:100%">100%</div>
    </div>
    <p>
      
</p> 
<p>
<p><p><p><p>
<p>
<p><p><p><p>
  <!-- Images of Me -->
    <div class="w3-row-padding w3-padding-16" id="about">
    <div class="w3-col m6">
      <img src="photo/enha1.jpg" alt="Me" style="width:100%">
    </div>
    <div class="w3-col m6">
      <img src="photo/enha2.jpg" alt="Me" style="width:100%">
    </div>
  </div>
   
<!-- Header -->
  <header id="about">
 <div class="w3-container w3-padding-large" style="margin-bottom:32px">
    <h1><b>About Us</b></h1>
    <h4><b>Enhypen Official Club</b></h4>
    <p>ENHYPEN's official fan club is known as "ENGENE." The term is a combination of "EN," representing the members as a unit, and "GENE," symbolizing a shared connection between the group and their fans. The official fan club serves as a platform for fans to connect, support, and engage with ENHYPEN.
Fans who join the official club, ENGENE, often receive various benefits, including exclusive content, early access to concert tickets, and opportunities to participate in special events or fan meetings. The fan club plays a crucial role in fostering a sense of community among ENHYPEN's supporters, allowing them to share their enthusiasm for the group.<p>
	<hr>
    </p>
    

<!-- Header -->
  <header id="committee">
<!-- Team Container -->
<div class="w3-container w3-padding-64 w3-center" id="team">
<h2>CLUB COMMITTEE</h2>
<p>We Connect Together</p>

<div class="w3-row-padding"><br>


<div class="w3-quarter">
  <img src="photo/wonyoung.jpg" alt="Boss" style="width:45%" class="w3-round w3-hover-opacity">
  <h3>WONYOUNG</h3>
  <p>CLUB PRESIDENT</p>
</div>

<div class="w3-quarter">
  <img src="photo/winter.jpg" alt="Boss" style="width:45%" class="w3-round w3-hover-opacity">
  <h3>WINTER</h3>
  <p>VICE PRESIDENT</p>
</div>

<div class="w3-quarter">
  <img src="photo/karina.jpg" alt="Boss" style="width:45%" class="w3-round w3-hover-opacity">
  <h3>KARINA</h3>
  <p>SECRETARY</p>
</div>

<div class="w3-quarter">
  <img src="photo/ning.jpg" alt="Boss" style="width:45%" class="w3-round w3-hover-opacity">
  <h3>NINGNING</h3>
  <p>TREASURER</p>
</div>

<!-- Second Header -->
  <header id="committee">
<!-- Second Team Container -->
<div class="w3-container w3-padding-64 w3-center" id="team">


<div class="w3-quarter">
  <img src="photo/giselle.jpg" alt="Boss" style="width:45%" class="w3-round w3-hover-opacity">
  <h3>GISELLE</h3>
  <p>MEMBER</p>
</div>

<div class="w3-quarter">
  <img src="photo/sakura.jpg" alt="Boss" style="width:45%" class="w3-round w3-hover-opacity">
  <h3>SAKURA</h3>
  <p>MEMBER</p>
</div>

<div class="w3-quarter">
  <img src="photo/yunjin.jpg" alt="Boss" style="width:45%" class="w3-round w3-hover-opacity">
  <h3>YUNJIN</h3>
  <p>MEMBER</p>
</div>

<div class="w3-quarter">
  <img src="photo/kazuha.jpg" alt="Boss" style="width:45%" class="w3-round w3-hover-opacity">
  <h3>KAZUHA</h3>
  <p>MEMBER</p>
</div>

<!-- Third Header -->
  <header id="committee">
<!-- Third Team Container -->
<div class="w3-container w3-padding-64 w3-center" id="team">

<div class="w3-quarter">
  <img src="photo/chaewon.jpg" alt="Boss" style="width:45%" class="w3-round w3-hover-opacity">
  <h3>CHAEWON</h3>
  <p>MEMBER</p>
</div>

<div class="w3-quarter">
  <img src="photo/eunchae.jpg" alt="Boss" style="width:45%" class="w3-round w3-hover-opacity">
  <h3>EUNCHAE</h3>
  <p>MEMBER</p>
</div>

<div class="w3-quarter">
  <img src="photo/yejin.jpg" alt="Boss" style="width:45%" class="w3-round w3-hover-opacity">
  <h3>MINJI</h3>
  <p>MEMBER</p>
</div>

<div class="w3-quarter">
  <img src="photo/soo.jpg" alt="Boss" style="width:45%" class="w3-round w3-hover-opacity">
  <h3>MIYEON</h3>
  <p>MEMBER</p>
</div>

<!-- Fourth Header -->
  <header id="committee">
<!-- Fourth Team Container -->
<div class="w3-container w3-padding-64 w3-center" id="team">

<div class="w3-quarter">
  <img src="photo/huhu.jpg" alt="Boss" style="width:45%" class="w3-round w3-hover-opacity">
  <h3>CHAEHYUN</h3>
  <p>MEMBER</p>
</div>

<div class="w3-quarter">
  <img src="photo/yuna.jpg" alt="Boss" style="width:45%" class="w3-round w3-hover-opacity">
  <h3>YUNA</h3>
  <p>MEMBER</p>
</div>

<div class="w3-quarter">
  <img src="photo/rose.jpg" alt="Boss" style="width:45%" class="w3-round w3-hover-opacity">
  <h3>ROSE</h3>
  <p>MEMBER<p>
</div>

<div class="w3-quarter">
  <img src="photo/jennie.jpg" alt="Boss" style="width:45%" class="w3-round w3-hover-opacity">
  <h3>JENNIE</h3>
  <p>MEMBER</p>
</div>

</div>
</div>

	
<!-- Header -->
  <header id="membership">	
	<p align="center"><h3>Member Form for Enhypen Official Club</h3></p>
	<p>
	<p>
	<p>
    <a href="add_membership.php" class="btn btn-dark mb-3">Add New</a>
<p>
<p>
<p>
<p>
<p>
<p>
<p>
<p>
<p>
<p>
    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Email</th>
          <th scope="col">Gender</th>
		  <th scope="col">Username</th>
		  <th scope="col">Password</th>
        </tr>
      </thead>
      <tbody>
	 
        <?php
        $sql = "SELECT * FROM `members`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["id"] ?></td>
            <td><?php echo $row["first_name"] ?></td>
            <td><?php echo $row["last_name"] ?></td>
            <td><?php echo $row["email"] ?></td>
            <td><?php echo $row["gender"] ?></td>
			<td><?php echo $row["username"] ?></td>
			<td><?php echo $row["password"] ?></td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>


   <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


<!-- Header -->
  <header id="activity">
  
  <title>Enhypen Official Club Activities</title>
</head>

<body>


	<p align="center"><h3>Activities form of Enhypen Official Club</h3></p>
    <a href="add_activity.php" class="btn btn-dark mb-3">Add New</a>
<p>
<p>
<p>
<p>
<p>
<p>
<p>
<p>
<p>
    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">Activity ID</th>
          <th scope="col">Activity Name</th>
          <th scope="col">Activity Date</th>
          <th scope="col">Club ID</th>
        </tr>
      </thead>
      <tbody>

        <?php
        $sql = "SELECT * FROM `activity`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["activity_id"] ?></td>
            <td><?php echo $row["activity_name"] ?></td>
            <td><?php echo $row["activity_date"] ?></td>
            <td><?php echo $row["club_id"] ?></td>
          </tr>
        <?php
        }
        ?>
     </tbody>
    </table>
  </div>



  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

  
  <!-- Header -->
  <header id="achievement">	
  <nav class="navbar navbar-light justify-content-center fs-3 mb-5 w3-text-white" style="background-color: #000000" >
  
  </nav>
    <p align ="center"><h4><b>Enhypen Official Club Achievements</b></h4></p>
    <!-- Pricing Tables -->
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-third w3-margin-bottom">
        <ul class="w3-ul w3-border w3-white w3-center w3-hover-opacity-off">
          <li class="w3-khaki w3-xlarge w3-padding-32">FANDOM</li>
          <li class="w3-padding-16">BEST FANDOM OF THE YEAR</li>
          <li class="w3-padding-16">BEST GLOBAL FANDOM</li>
          <li class="w3-padding-16">GOLD FANDOM</li>
          </li>
        </ul>
      </div>
      
      <div class="w3-third w3-margin-bottom">
        <ul class="w3-ul w3-border w3-white w3-center w3-hover-opacity-off">
          <li class="w3-khaki w3-xlarge w3-padding-32">DANCE COVER</li>
          <li class="w3-padding-16">BEST DANCE COVER</li>
          <li class="w3-padding-16">PERFORMANCE OF THE YEAR</li>
          <li class="w3-padding-16">BEST GLOBAL TEAM</li>
          </li>
        </ul>
      </div>
      
      <div class="w3-third">
        <ul class="w3-ul w3-border w3-white w3-center w3-hover-opacity-off">
          <li class="w3-khaki w3-xlarge w3-padding-32">MUSIC COVER</li>
          <li class="w3-padding-16">BEST MUSIC COVER </li>
          <li class="w3-padding-16">GLOBAL COVER FAVOURITE</li>
          <li class="w3-padding-16">TEAM OF THE YEAR</li>
          </li>
        </ul>
      </div>
    </div>
  </div>
  
  <!-- Header -->
  <header id="contact">
  <!-- Contact Section -->

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>Enhypen Official Club Contacts</title>
</head>

<body>
  <!-- Header -->
  <header id="contact">
<!-- Team Container -->
<div class="w3-container w3-padding-64 w3-center" id="contact">

  <div class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
	

	<p align="center"><h3>Contact form of Enhypen Official Club</h3></p>
    <a href="add_contact.php" class="btn btn-dark mb-3">Add New</a>

<p>

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">Contact ID</th>
          <th scope="col">Contact Name</th>
          <th scope="col">Member ID</th>
          <th scope="col">Description</th>
          <th scope="col">Email</th>
          <th scope="col">Phone Number</th>
        </tr>
      </thead>
      <tbody>
	 
        <?php
        $sql = "SELECT * FROM `contact`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["contact_id"] ?></td>
            <td><?php echo $row["contact_name"] ?></td>
            <td><?php echo $row["contact_studid"] ?></td>
            <td><?php echo $row["contact_desc"] ?></td>
            <td><?php echo $row["contact_email"] ?></td>
            <td><?php echo $row["contact_phone"] ?></td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
  
  <!-- Footer -->
  <footer class="w3-container w3-padding-32 w3-dark-grey">
  <div class="w3-row-padding">
    <div class="w3-third">


	 <h3>FOOTER</h3>
      <p>This is the Official Website of Enhypen Fanclub. If you have any question, feel free to contact us.</p>
      <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
    </div>
  
    <div class="w3-third">
      <h3>BLOG POSTS</h3>
      <ul class="w3-ul w3-hoverable">
        <li class="w3-padding-16">
          <img src="photo/enha1.jpg" class="w3-left w3-margin-right" style="width:50px">
          <span class="w3-large">Awards</span><br>
          <span>Artist of the Year</span>
        </li>
        <li class="w3-padding-16">
          <img src="photo/enhaa.jpg" class="w3-left w3-margin-right" style="width:50px">
          <span class="w3-large">Songs</span><br>
          <span>Best Song of the Year</span>
        </li> 
      </ul>
    </div>

    <div class="w3-third">
      <h3>POPULAR TAGS</h3>
      <p>
        <span class="w3-tag w3-black w3-margin-bottom">Enhypen</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">Gidle</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">New Jeans</span>
        <span class="w3-tag w3-grey w3-small w3-margin-bottom">Aespa</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">Seventeen</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">StayC</span>
        <span class="w3-tag w3-grey w3-small w3-margin-bottom">Txt</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">Itzy</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">Viviz</span>
        <span class="w3-tag w3-grey w3-small w3-margin-bottom">Bts</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">Ive</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">Kepler</span>
        <span class="w3-tag w3-grey w3-small w3-margin-bottom">Blackpink</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">Lesserafim</span>
      </p>
    </div>

  </div>
  </footer>
  
  <div class="w3-black w3-center w3-padding-24">@2024</a></div>

<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>

