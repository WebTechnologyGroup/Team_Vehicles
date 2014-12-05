

    <!-- Team Page
             UWAFT Team Page Website
             HTML 5 and PHP technologies used
             
             Revision History
                    Thida Pao, 2014.11.04: Complete redesign of Team Page
					Terene,    2014.11.05: re-organized the html page to php with header and footer
                    
    -->
<html>	
	<?php
//inital setup for this page, this has to be set before include header
$page_title = "Our team";
$page_author = "Chanthida Pao";
$page_description = "This it the UWAFT team page";
//put each needed css link as a element in this array
$page_css = array();
//put each needed meta data as a element in this array
$page_meta = array();
//put needed javascript script here
$page_js = array();

include_once "includes/header.php";
include("includes/databaseConnection.php");


?>
<head>

	<link href="css/team.css" rel="stylesheet">
	<!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <title>UWAFT Team Page</title>

</head>
  <center>
  <img src="images/teamAmerica.jpg" class="img-responsive">
  </center>
  <p></p>
  <p></p>
    <div class="container marketing">

<!-- Project Management Section -->
    <h2>Project Management</h2>
      <div class="row">

    <?php 
    include("includes/databaseConnection.php");

    $projectmanagementTeamResult=mysqli_query($link,"SELECT firstName, lastName,
    position, program, growup, favEco, cereal, bucket, facts, profileImage FROM projectmanagement ORDER BY firstName");
    
    while( $row = mysqli_fetch_array($projectmanagementTeamResult, MYSQLI_BOTH) )
    {
        if($projectmanagementTeamResult->num_rows > 0)
        {

        echo '<div class='."col-lg-4".'>';
        //echo '<div class='."teampic".'>';
       // echo '<img src='."./images/patrickellsworth.jpg".' class= '."img-responsive".'>';
        echo '<img src= '."./".$row['profileImage']."".' class= '."teampic".'>';
        
        echo '<p class='."img-overlay".'>';
        //text for each profile picture             
        echo '<h3>'.$row['firstName'].' '.$row['lastName'].'</h3>';
        echo '<h4>'.$row['position'].'</h4>';
        echo '<h5> Program '.$row['program'].'</h5>';
        echo '<p>When I was a kid I wanted to be: '.$row['growup'].'</p>';
        echo '<p>Favorite part of EcoCAR/UWAFT: '.$row['favEco'].'</p>';
        echo '<p>Favorite Breakfast Cereal: '.$row['cereal'].'</p>';
        echo '<p>Three things on my bucket list: '.$row['bucket'].'</p>';
        echo '<p>Two things about me: '.$row['facts'].'</p>';
        echo '</p>';
        echo '</div>';
        //echo '</div>';
      }
    }

          mysqli_close($link);
    ?>
    </div><!-- /.row -->

<!-- Technical Team Section -->
    <h2>Technical Team</h2>
      <div class="row">

    <?php 
    include("includes/databaseConnection.php");

    $technicalTeamResult=mysqli_query($link,"SELECT firstName, lastName,
    position, program, growup, favEco, cereal, bucket, facts, profileImage FROM technical ORDER BY firstName");
    

    while( $row = mysqli_fetch_array($technicalTeamResult, MYSQLI_BOTH) )
    {
        if($technicalTeamResult->num_rows > 0)
        {

        echo '<div class='."col-lg-4".'>';
        //echo '<div class='."teampic".'>';
        echo '<img src= '."./".$row['profileImage']."".' class= '."teampic".'>';
        
        echo '<p class='."img-overlay".'>';
        //text for each profile picture  

        echo '<h3>'.$row['firstName'].' '.$row['lastName'].'</h3>';
        echo '<h4>'.$row['position'].'</h4>';
        echo '<h5> Program '.$row['program'].'</h5>';
        echo '<p>When I was a kid I wanted to be: '.$row['growup'].'</p>';
        echo '<p>Favorite part of EcoCAR/UWAFT: '.$row['favEco'].'</p>';
        echo '<p>Favorite Breakfast Cereal: '.$row['cereal'].'</p>';
        echo '<p>Three things on my bucket list: '.$row['bucket'].'</p>';
        echo '<p>Two things about me: '.$row['facts'].'</p>';
        echo '</div>';
        //echo '</div>';
      }
    }

          mysqli_close($link);
    ?>
    </div><!-- /.row -->

<!-- Communications Team Section -->
    <h2>Communications Team</h2>
      <div class="row">

    <?php 
    include("includes/databaseConnection.php");

    $comTeamResult=mysqli_query($link,"SELECT firstName, lastName,
    position, program, growup, favEco, cereal, bucket, facts, profileImage FROM communications ORDER BY firstName");
    

    while( $row = mysqli_fetch_array($comTeamResult, MYSQLI_BOTH) )
    {
        if($comTeamResult->num_rows > 0)
        {

        echo '<div class='."col-lg-4".'>';
        //echo '<div class='."teampic".'>';
        echo '<img src= '."./".$row['profileImage']."".' class= '."teampic".'>';
        
        echo '<p class='."img-overlay".'>';
        //text for each profile picture  

        echo '<h3>'.$row['firstName'].' '.$row['lastName'].'</h3>';
        echo '<h4>'.$row['position'].'</h4>';
        echo '<h5> Program '.$row['program'].'</h5>';
        echo '<p>When I was a kid I wanted to be: '.$row['growup'].'</p>';
        echo '<p>Favorite part of EcoCAR/UWAFT: '.$row['favEco'].'</p>';
        echo '<p>Favorite Breakfast Cereal: '.$row['cereal'].'</p>';
        echo '<p>Three things on my bucket list: '.$row['bucket'].'</p>';
        echo '<p>Two things about me: '.$row['facts'].'</p>';
        echo '</div>';
        //echo '</div>';
      }
    }

          mysqli_close($link);
    ?>
    </div><!-- /.row -->
      

 </div>
<?php
    include_once "includes/footer.php";
 ?>