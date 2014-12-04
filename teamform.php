<!DOCTYPE html>
<head>
<!-- teamform.html
         INFO8240 Assignment 2 Conestoga Pizzeria
         HTML 5 and PHP technologies used
         
         Revision History
                Thida Pao, 2014.11.27: Created                
-->
<?php
//inital setup for this page, this has to be set before include header
$page_title = "Our team";
$page_author = "Chanthida Pao";
$page_description = "This it the UWAFT team page";
//put each needed css link as a element in this array
$page_css = array("<link href=\"css/carousel.css\" rel=\"stylesheet\">");
//put each needed meta data as a element in this array
$page_meta = array();
//put needed javascript script here
$page_js = array();
include_once "includes/header.php";
?>

        <meta charset="utf-8" />

        <title>Team Page Info Form</title>

        <style>
          body {
            padding-top: 60px;
          }
          @media (max-width: 980px) {
            body {
              padding-top: 0;
            }
          }
        </style>

</head>

    <body>

    <?php
    include("includes/databaseConnection.php");
    ?>
    <div class="container">
        <div class="row">
        <div class="col-md-6 col-md-offset-3">
    <h1>Team Member Info Form</h1>

    <form  role= "form" name="memberForm" action="webFormValidation.php" method="post" enctype="multipart/form-data">
    	<div class="form-group form-group-lg">
    		<label for="teamcategory">Category</label><br>
    		<select name="teamcategory" id="teamcategory" class="form-control input-lg">
                <option selected disabled>Please select one</option> 
    			<option value="projectmanagement">Project Management Team</option>
    			<option value="technical">Technical Team</option>
    			<option value="communications">Communications Team</option>
    		</select>
	    </div>      
 		<div class="form-group form-group-lg"> 
		 	<label for="firstName">First Name</label> <br>
         	<input type="text" class="form-control input-lg" placeholder="First Name" id="firstName" name="firstName" /> 			
 		</div>
 		<div class="form-group form-group-lg"> 
		 	<label for="lastName">Last Name</label> <br>
         	<input type="text" class="form-control input-lg" placeholder="Last Name" id="lastName" name="lastName" /> 			
 		</div>
 		<div class="form-group form-group-lg"> 
		 	<label for="position">Position</label> <br>
         	<input type="text" class="form-control input-lg" placeholder="Position" id="position" name="position" /> 			
 		</div>
 		<div class="form-group form-group-lg"> 
		 	<label for="program">Program</label> <br>
         	<input type="text" class="form-control input-lg" placeholder="Program" id="program" name="program" /> 			
 		</div> 		
 		<div class="form-group form-group-lg"> 
		 	<label for="growup">When I was a kid I wanted to be:</label> <br>
         	<input type="text" class="form-control input-lg" placeholder="When I grow up" id="growup" name="growup" /> 			
 		</div> 	
 		<div class="form-group form-group-lg"> 
		 	<label for="favEco">Favorite part of EcoCAR/UWAFT:</label> <br>
         	<textarea class="form-control input-lg" id="favEco" name="favEco" rows="3"> </textarea>      		
 		</div> 			
 		<div class="form-group form-group-lg"> 
		 	<label for="cereal">Favorite Breakfast Cereal:</label> <br>
         	<input type="text" class="form-control input-lg" placeholder="cereal" id="cereal" name="cereal" /> 			
 		</div> 		
 		 <div class="form-group form-group-lg"> 
		 	<label for="bucket">Three things on your bucket list: </label> <br>
            <textarea class="form-control input-lg" id="bucket" name="bucket" rows="3"></textarea>         	
 		</div> 
        <div class="form-group form-group-lg"> 
            <label for="facts">Two things about you: </label> <br>
            <textarea class="form-control input-lg" id="facts" name="facts" rows="3"> </textarea>             
        </div> 
        <div class="form-group form-group-lg"> 
            <label for="profileImage">Profile Picture Upload</label> <br>
            <input type="file" id="profileImage" name="profileImage" accept="image/*"/>    
            <p class="help-block">Upload your profile picture here.</p>      
        </div>  
        <div class="formButtons">
            <input type="submit" value="Submit" class="btn btn-primary" />
            <input type="reset" value="Clear" class="btn btn-default"/>
        </div> 		
	</form>

    <h2>Current Members</h2>

    <p></p>
    <h3>Project Management</h3>
<div class="table-responsive">
    <table class="table table-striped">

    <?php 
    include("includes/databaseConnection.php");

    $projectmanagementTeamResult=mysqli_query($link,"SELECT id,firstName,lastName,position FROM projectmanagement ORDER BY firstName");
    
    $i=0;
    while( $row = mysqli_fetch_array($projectmanagementTeamResult, MYSQLI_BOTH) )
    {
        echo "<tr>";
        echo "<td><b>".$row['firstName']."</b></td>";
        echo "<td>".$row['lastName']."&nbsp;</td>";
        echo "<td>".$row['position']."&nbsp;</td>";

        echo "<td><a onclick=\"return confirm('Are you sure?');\" href=teamform.php?action=del&id=".$row['id']."><span class=red>delete</span></a></td>";
        echo "<td></td>";
        echo "</tr>";
        $i++;

    }
    if(@$_REQUEST['action']=="del")
    {
        mysqli_query($link, "DELETE FROM projectmanagement WHERE id=".round($_REQUEST['id']));
    }

    ?>

    </table>
    <p></p>
    <h3>Technical Team</h3>
    <table class="table table-striped">
    <?php    
    include("includes/databaseConnection.php");

    $technicalTeamResult=mysqli_query($link,"SELECT id,firstName,lastName,position FROM technical ORDER BY firstName");

    $i=0;
    while( $row = mysqli_fetch_array($technicalTeamResult, MYSQLI_BOTH) )
    {
        echo "<tr>";
        echo "<td class=tabval><b>".$row['firstName']."</b></td>";
        echo "<td class=tabval>".$row['lastName']."&nbsp;</td>";
        echo "<td class=tabval>".$row['position']."&nbsp;</td>";

        echo "<td class=tabval><a onclick=\"return confirm('Are you sure?');\" href=teamform.php?action=del&id=".$row['id']."><span class=red>delete</span></a></td>";
        echo "<td class=tabval></td>";
        echo "</tr>";
        $i++;

    }
    if(@$_REQUEST['action']=="del")
    {
        mysqli_query($link, "DELETE FROM technical WHERE id=".round($_REQUEST['id']));
    }
?>
    </table>
    <table class="table table-striped">

    <h3>Communications Team</h3>
    <?php
    include("includes/databaseConnection.php");

    $comunicationsTeamResult=mysqli_query($link,"SELECT id,firstName,lastName,position FROM communications ORDER BY firstName");
    
    $i=0;
    while( $row = mysqli_fetch_array($comunicationsTeamResult, MYSQLI_BOTH) )
    {

        echo "<tr valign=center>";
        echo "<td class=tabval><b>".$row['firstName']."</b></td>";
        echo "<td class=tabval>".$row['lastName']."&nbsp;</td>";
        echo "<td class=tabval>".$row['position']."&nbsp;</td>";

        echo "<td class=tabval><a onclick=\"return confirm('Are you sure?');\" href=teamform.php?action=del&id=".$row['id']."><span class=red>delete</span></a></td>";
        echo "<td class=tabval></td>";
        echo "</tr>";
        $i++;

    }
    if(@$_REQUEST['action']=="del")
    {
        mysqli_query($link, "DELETE FROM communications WHERE id=".round($_REQUEST['id']));
    }    
    ?>
    </table>
    </div>
</div>
</div>
</div>
	</body>
    <?php
    include_once "includes/footer.php";
    ?>    
</html>