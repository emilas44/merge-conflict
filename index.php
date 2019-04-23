<?php

$files = [
   'files/file1.php',
   'files/file2.php',
   'files/file3.php',
   'files/file4.php',
   'files/file5.php',
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
</head>
<body>

<h1>Test</h1>

<?php 

foreach ($files as $k => $file) {
    $includedFile = include $file;

    if (file_exists($file)) {
    	echo $var . ($k+1) . '<br>';
    }
}



?>

</body>
</html>


