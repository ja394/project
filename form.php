<?php
$firstname = filter_input(INPUT_POST,'firstname');
$lastname = filter_input(INPUT_POST,'lastname');
$birthday = filter_input(INPUT_POST ,'birthday');
$Email = filter_input(INPUT_POST,'email');
$password = filter_input(INPUT_POST, 'password');
if(strlen($firstname)== 0){
    echo "the name is required";


}

if (strpos($email, '@')) {

}

if(strlen($password)<8){
    echo "its less than 8";

}

?>
<html
<head><title> Display form </title></head>
<Body>

  <h2> Text Input </h2>
  <div>
      Firstname:<?php echo $firstname; ?>
  </div>
   <div>
       Lastname:<?php echo $lastname; ?>
   </div>
    <div>
        Birthday:<?php echo $birthday; ?>
    </div>
    <div>
        Email:<?php echo $email; ?>
    </div>
    <div>
        password:<?php echo $password; ?>
    </div>
</Body>
</html>
