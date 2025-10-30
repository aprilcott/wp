<!DOCTYPE html>
<html>
<head lang="en">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <meta charset="UTF-8">
    <title><?php echo $pageTitle; ?></title>
    <meta name="author" content="Test">
    <link rel="icon" href="assets/images/favicon.ico">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baskervville:ital,wght@0,400..700;1,400..700&family=Ysabeau+SC:wght@1..1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=search"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body>
    <?php
session_start();
if ($_SERVER["PHP_SELF"] == "/public_html/wp/a3/edit.php") {
    if ($_SESSION['userName'] === null || $_SESSION['userName'] != $_SESSION['editUname']) {
    $_SESSION['flash_error_id'] = 4;
    header('Location: index.php');
    }
    $skill = $_SESSION['editRow'];
    echo '<body onload="fillForm(' . $skill['title'] . ", " . $skill['description'] . ", " . $skill['category'] . ", " . $skill['rate_per_hr'] . ", " . $skill['level'] . '">';
} else if (array_key_exists('newLogin', $_SESSION)) {
    echo '<div class="container-fluid">';
    echo '<div id="index-welcome" class="index-alert alert alert-success mt-2 rounded-end rounded-start">Welcome, ' . $_SESSION['userName'] . '</div>';
    echo '</div>';
    unset($_SESSION["newLogin"]);
    }
    if (array_key_exists('flash_error', $_SESSION)) {
        if ($_SESSION['flash_error_id'] == 1) {
    print('<body onload="showError(' . "'" . $_SESSION['flash_error'] . "', '" . $_SESSION['flash_bio'] . "'" . ')">');
    unset($_SESSION['flash_error']);
    unset($_SESSION['flash_bio']);
    unset($_SESSION['flash_error_id']);
    } else if ($_SESSION['flash_error_id'] == 2) {
    print('<body onload="errorRegisterPass(' . "'" . $_SESSION['flash_error'] . "', '" . $_SESSION['flash_bio'] . "', '" . $_SESSION['flash_name'] . "', '" . $_SESSION['flash_email'] . "'" . ')">');
        unset($_SESSION['flash_error_id']);    
        unset($_SESSION['flash_error']);
        unset($_SESSION['flash_bio']);
        unset($_SESSION['flash_name']);
        unset($_SESSION['flash_email']);

    } else if ($_SESSION['flash_error_id'] == 3) {
    print('<body onload="showError(' . "'" . $_SESSION['flash_error'] . "'" . ')">');
    unset($_SESSION['flash_error_id']);    
    unset($_SESSION['flash_error']);
    } else {
        print('<body>');

    }
}
?>