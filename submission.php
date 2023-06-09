<?php
if (isset($_POST['submit']))
{
    if ((!isset($_POST['name'])) || 
        (!isset($_POST['color'])) || (!isset($_POST['size']))) {
        $error = "*" . "Please fill all the fields";
		echo $error;
    } else {
        $name = $_POST['name'];
        $color = $_POST['color'];
        $size = $_POST['size'];
		$output = fopen('output.txt', 'a', false);
		fwrite($output, $name);
		fwrite($output, "\n");
		fwrite($output, $color);
		fwrite($output, "\n");
		fwrite($output, $size);
		fwrite($output, "\n");
		fwrite($output, "\n");
		fclose($output);  
    }
}

?>


