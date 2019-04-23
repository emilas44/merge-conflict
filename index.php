<?php

$files = [
   'files/file1.php',
   'files/file2.php',
   'files/file3.php',
   'files/file4.php',
];

foreach ($files as $file) {
    include $file;
}
