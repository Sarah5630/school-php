<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<?php

require_once ('app/class/person.php');
require_once('app/class/student.php');
require_once('app/class/teacher.php');

$student = new Student('Dujardin', 'Jean','Locminé','3ème');
echo $student->getEtatCivil();
var_dump($student);
$student2 = new Student('Lefresne', 'Jeanne','Colpo','5ème');
echo $student2->getEtatCivil();
var_dump($student2);

$teacher = new Teacher('Moisan', 'Delphine', 'Vannes','Mathématiques');
var_dump($teacher);
$teacher2 = new Teacher('Le Brun', 'Georges', 'Lorient', 'Latin');
var_dump($teacher2);




student::getEffectif();




?>
</body>
</html>