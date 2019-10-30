<?php
$questionname = filter_input(INPUT_POST,'questionname');
$questionbody = filter_input(INPUT_POST,'questionbody');
$questionskills = filter_input(INPUT_POST,'questionskills');
?>


<html
<head><title> Question form </title></head>
<Body>

<h2> Text Input </h2>
<div>
    Question name: <?php echo questionname ; ?>
</div>
<div>
    Question body: <?php echo questionbody; ?>
</div>
<div>
    Question body: <?php echo questionskills; ?>
</div>
</div>
</Body>
</html>
