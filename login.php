<?php
$email = filter_input(INPUT_POST,'email');
$password = filter_input(INPUT_POST ,'password')
?>
<html
<head><title> Display form </title></head>
<Body>

<h2> Text Input </h2>
<div>

</div>
<div>
    Email:<?php echo $email; ?>
</div>
<div>
    password:<?php echo $password; ?>
</div>
</Body>
</html>
