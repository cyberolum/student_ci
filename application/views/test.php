<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


    <form action="<?= base_url(); ?>" method="POST">
    		
    		<input type="text" name="user_name" placeholder="Please input username">

    		<?php echo form_error('user_name'); ?>

    		<input type="text" name="email" placeholder="Please input email">
    		<?php echo form_error('email'); ?>

    		<button type="submit" name="submit">Register</button>

    </form>

</body>
</html>