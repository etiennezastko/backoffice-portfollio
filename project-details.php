<?php
session_start();

if ($_SESSION['username']) {
    if (isset($_GET['id']) && !empty($_GET['id'])) {
        require_once('db-connect.php');
        $id = strip_tags($_GET['id']);
        $sql = 'SELECT * FROM `projects` WHERE `project_id`=:id';
        $query = $db->prepare($sql);
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->execute();
        $result = $query->fetch();
        /*  var_dump($result); */
    } else {
        echo 'id manquant';
    }
} else {
    echo 'identifiez-vous';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="project-details.css">
</head>

<body>

    <?= $result['project_title'] ?>
    <?= $result['project_context'] ?>
    <?= $result['project_specs'] ?>

    <a href="project-delete.php?id=<?= $result['project_id'] ?>">supprimer <?= $result['project_title'] ?></a><br>
    <a href="project-edit.php?id=<?= $result['project_id'] ?>">modifier <?= $result['project_title'] ?></a><br>
    <a href="home.php"><button>Retour</button></a>


</body>

</html>