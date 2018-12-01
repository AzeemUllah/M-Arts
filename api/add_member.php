<?php
include './config/config.php';

$sql = "INSERT INTO `members` (`id`, `first_name`, `last_name`, `medication`, `address`, `marc`, 
`club_area`, `email`, `phone_number`, `mobile_number`, `dob`, `date_joined`, `feko`, `renewal_date`, 
 `photos`, `grade`, `expired`) VALUES 
(NULL, '".$_POST['first_name']."', '".$_POST['last_name']."', '".$_POST['medication']."',
 '".$_POST['address']."', 
'".$_POST['marc']."', '".$_POST['club_area']."', '".$_POST['email']."',
 '".$_POST['phone_number']."', '".$_POST['mobile_number']."', 
'".$_POST['dob']."', '".$_POST['date_joined']."', '".$_POST['feko']."', '".$_POST['renewal_date']."',
  '".$_POST['photos']."', '".$_POST['grade']."', 'no');";

if(isset($_POST['id'])){
    $sql = "UPDATE `members` SET `first_name` = '".$_POST['first_name']." ',
     `last_name` = '".$_POST['last_name']." ', 
     `medication` = '".$_POST['medication']."',
      `address` = '".$_POST['address']."',
       `marc` = '".$_POST['marc']."', 
       `club_area` = '".$_POST['club_area']."',
        `email` = '".$_POST['email']."',
         `phone_number` = '".$_POST['phone_number']."',
          `mobile_number` = '".$_POST['mobile_number']."',
           `dob` = '".$_POST['dob']."',
            `date_joined` = '".$_POST['date_joined']."',
             `feko` = '".$_POST['feko']."',
              `renewal_date` = '".$_POST['renewal_date']."',
             
                `photos` = '".$_POST['photos']."',
                 `grade` = '".$_POST['grade']."' 
                 WHERE `members`.`id` = ".$_POST['id'].";";
}


if ($conn->query($sql) === TRUE) {
    echo "1";
} else {
    echo "0";
}

$conn->close();
?>