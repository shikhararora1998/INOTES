<?php

$INSERT =false;
$UPDATE =false;
$DELETE =false;
// Expand Requery Edit Bookmark Database : crud Queried time : 20:14:43
// INSERT INTO `notes` (`srno`, `title`, `description`, `tstamp`) VALUES (NULL, 'safsf', 'fsassf', current_timestamp());
// INSERT INTO `notes` (`srno`, `title`, `description`, `tstamp`) VALUES (NULL, 'second', 'jjksakjhjkf', current_timestamp());
//Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$database = "crud";
$conn = mysqli_connect($servername, $username, $password, $database);

// if(!$conn){
//     die("Connection Disabled");
// }
// else{
//     echo "connection Successfully ";
// }

if (isset($_GET['delete'])){
    $sno = $_GET['delete'];
    // echo $sno;
    $sql ="DELETE FROM `notes` WHERE `srno`=$sno";
    $result=mysqli_query($conn,$sql);
    $DELETE =true;
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset( $_POST['srnoEdit'])){
        // Update the record
          $srno = $_POST["srnoEdit"];
          $title = $_POST['titleEdit'];
          $description = $_POST['descriptionEdit'];
          $sql ="UPDATE `notes` SET `title` = '$title', `description` = '$description' WHERE `notes`.`srno` = $srno";
          $result=mysqli_query($conn,$sql);
          $UPDATE =true;
        //   if ($result){
        //     echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
        //     <strong>SUCCESS!</strong> Note Updated.
        //     <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        //       <span aria-hidden='true'>&times;</span>
        //     </button>
        //   </div>";
        //   }
        //   else {
        //       echo "Note Can't Update because of this error --> ";
        //   }
          
        }
    else {   
    $title = $_POST['title'];
    $description = $_POST['description'];
    $sql = "INSERT INTO `notes` ( `title`, `description`) VALUES ( '$title', '$description')";
    $result = mysqli_query($conn, $sql);
    $INSERT =true;
//     echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
//   <strong>SUCCESS!</strong> Record has been inserted successfully.
//   <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
//     <span aria-hidden='true'>&times;</span>
//   </button>
// </div>";
    // if (!$result) {
    //     echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
    //   <strong>Error!</strong> Record has not been inserted .
    //   <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    //     <span aria-hidden='true'>&times;</span>
    //   </button>
    // </div>";
    // }
}
}

?>