<?php 
session_start();

if(!isset($_SESSION['valid']) && !isset($_SESSION['password']))
            {
            header("location: Login/LoginSite.php");
        	}
            
    else
    {  
               


include "Connection.php";

$username=$_SESSION['valid'];
$password=$_SESSION['password'];


$sql = "SELECT * FROM `users` WHERE `username`='$username' AND `password`='$password'";
$result = mysqli_query($conn, $sql);  
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
$count = mysqli_num_rows($result);  
//print_r($row);
$FirstName=$row['first_name'];
$LastName=$row['last_name'];
$email=$row['email'];
$bio=$row['bio'];
$profile_image=$row['profile_image'];
?>
<!-- ----------------------------------------------------------------HTML Page------------------------------------------------------------- -->
     <!DOCTYPE html>
<html lang="ar" dir="rtl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="profile.css" >
        <title>Votre Profil</title>
    </head>

    <!-- ------------------------------------------------------------Body--------------------------------------------------------------- -->

    <body>

    <!-- ------------------------------------------------------- Profile Card ---------------------------------------------------------- -->

            <div class="Profile-card">

                <img style="border-radius:100px;" alt="My profile photo" src="assets/uploads/users/<?php echo $profile_image;?>"  width="200" height="200"  />

                    
                <h2>Bienvenue <?php echo $FirstName;?> <?php echo $LastName;?></h2>
                <h4>sur votre profil</h4>
                

               <!-- --------------------------------------------------------- Buttons ----------------------------------------------------------------------- -->

                <button type="submit" name="submit" onclick="location.href='EditProfile/edit.php';"><b>Modifier le profil</b></button>
                <button type="submit" name="submit" onclick="location.href='Liste/liste.php';"><b>Voir la liste des membres</b></button>

                <button class="CancelButton" onclick="location.href='logout.php';"><b>Se deconnecter</b></button>

                <button class="CancelButton" onclick="location.href='deleteacc.php';"><b>Suprimer ce compte<b></button>

                
             </div>
    </body>
</html>
<?php }?>