<?php

use Web\Controller\ClassController;

require __DIR__."/vendor/autoload.php";
$classController = new ClassController();
$page = isset($_REQUEST['page']) ? $_REQUEST['page']:"";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
switch ($page){
    case "list-class":
        $classController->getAllClass();
        break;
    case "add-class":
        $classController->addClass();
        break;
    case "update-class":
        $classController->updateClass();
        break;
    case "delete-class":
        $classController->deleteClass();
        break;
    default:
        $classController->getAllClass();
}
?>

</body>
</html>
