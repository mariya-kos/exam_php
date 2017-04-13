<?php
require_once ('config.php');

$currentLang = 'en';
if ($_COOKIE['lang']) {
    $currentLang = $_COOKIE['lang'];
}

$phpSelf = $_SERVER['PHP_SELF'];
$rpos = strrpos($phpSelf, '/');
$fileName = '';
if ($rpos !== false){
    $fileName = substr($phpSelf, $rpos + 1);
}
else {
    $fileName = $phpSelf;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Natural shop</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
    <?php
    echo "<div class='container'>\n<div class='langs'>";
    foreach ($langs as $key => $value) {
        echo "<a href='changeLang.php?lang=" . $key . (($currentLang == $key)? "' class='active-lang'" : "") . "'>" . $value . "</a>";
    }
    echo "</div>\n</div>";
    ?>
    <h1><span>NATURAL</span> shop</h1>
    <div class="container">
        <nav>
            <?php
                foreach ($pages as $key => $value){
                    echo '<a href="' . $key . (($fileName == $key)? '" class="active-menu"' : '"') . '>' . $value[$currentLang]['menuTitle'] . '</a> ';
                }
            ?>
        </nav>
    </div>
</header>
<?php
echo '<div class="' . $pages[$fileName]['imgClass'] . '" style="background-image: url(\'' . $pages[$fileName]['img'] . '\');">';
    if ($fileName == 'index.php') {
        echo '<h3><span>' . $pages[$fileName][$currentLang]['imgTitle_1'] . '</span></h3>';
        echo '<h3><span>' . $pages[$fileName][$currentLang]['imgTitle_2'] . '</span></h3>';
    } else {
        echo '<div class="container">';
            echo '<h2 class="title">'. $pages[$fileName][$currentLang]['title'] .'</h2>';
            echo "<ul class='breadcrumbs'>\n<li><a href='index.php'>" . $pages['index.php'][$currentLang]['title'] . "</a></li>";
            if (isset($pages[$fileName])) {
                echo '<li>' . $pages[$fileName][$currentLang]['menuTitle'] . '</li>';
            }
            echo '</ul>';
        echo '</div>';
    }
echo '</div>';
?>