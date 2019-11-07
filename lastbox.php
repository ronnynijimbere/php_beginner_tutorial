<?php 
	
	//file system -part 2

$file = 'readme.txt';

//opening a file for reading 'r'=read, 'r+'= read and write; 'a'= points at the end/writes from the end

$handle = fopen($file, 'a+');

//read the file (whole)
//echo fread($handle, filesize($file));
//echo fread($handle, 120);


//read a single line

//echo fgets($handle);
//echo fgets($handle);
//echo fgets($handle);

//read a single character
//echo fgetc($handle);
//echo fgetc($handle);

//writing to a file
//fwrite($handle, "\nPHP is good language to learn");

//Good Practice to close the file
fclose($handle);

//how to delete a file
unlink();

?>