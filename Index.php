<?php

// Developer : Jordy Meijer 


/**Define variable
 * string, 'Hallo Wererld'
 * booLean, True or False
 * integer, 1 10
 * float, 1.10
 * array,['Stephan, 'Arie', 'Wout']
 * date, 06/09/2023
 */

 // Variable
//string
$name = "Jordy Meijer"; 
echo "Naam: " . $name .  "<br>"; 

//integer geheel getal
$age = 18;
echo "Age: " . $age . "<br>";

$mobile = 31634271862;
echo "Mobile: " . $mobile . "<br>";

$email = "jmeijer04@hotmail.com";
echo "Email: " . $email . "<br>";

$study = "AD Software Development";
echo "<br>" . "Study: " . $study . "<br>";

$school = "Windesheim";
echo "School: " . $school . "<br>";

$year = "1st year";
echo "Year: " . $year . "<br>";

$work = "KPN Servicdesk";
echo "Work: " . $work . "<br>";

$languages = ["-HTML", "-CSS", "-php"];
    echo "<br>" . "Languages: " . "<br>";
foreach ($languages as $language) { 
    echo $language . "<br>";
}

$hobbies = ["-Fitness", "-Reading", "-Learning", "-Gaming"];
    echo "<br>" . "Hobbies: " . "<br>";
foreach ($hobbies as $hobby) {
    echo $hobby . "<br>";
}


