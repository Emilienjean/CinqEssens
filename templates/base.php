<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1">
    <link rel="stylesheet" href="output.css">
    <title><?= $seo_title ?? ''; ?> - Mon site</title>

</head>
<body>
<?php

include 'header.php';

//foreach ($_SESSION ['flashes'] as $aMessages) {
//    foreach ($aMessages as $sType => $sMessage) {
//        echo '<div class = "alert alert-' . $sType . '">' . $sMessage . '</div>';
//    }
//}
//$_SESSION ['flashes'] = [];

if (file_exists('../templates/' . $sView)) {
    include $sView;
}
include 'footer.php';

?>
</body>
</html>