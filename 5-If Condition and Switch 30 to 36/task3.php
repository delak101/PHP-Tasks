<?php 

$admins = ["Osama", "Ahmed", "Sayed"];

// Input Name "Osama"
// Needed Output
if ($_SERVER["REQUEST_METHOD"] === "POST"){
    #here we take the username the user enters and save it in $username
    $username = $_POST['user'];

    echo "The Request Method Is Post And Username Is " . $username;
    
    echo "<br>";
    #here we check if username exists in the array above
    if(in_array($username, $admins)==true){
        echo "This Username $username Is Admin";
    }
}

?>

<form action="" method="POST">
  <input type="text" name="user">
  <input type="submit" value="Send">
</form>