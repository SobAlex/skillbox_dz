<?php

require $_SERVER['DOCUMENT_ROOT'] . '/functions/show_menu.php'; // функция для работы с меню
require $_SERVER['DOCUMENT_ROOT'] . '/functions/is_current_url.php'; // функция для определения текущего пути
require $_SERVER['DOCUMENT_ROOT'] . '/includes/main_menu.php'; // основное меню массив

?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="/styles/styles.css" rel="stylesheet">
    <title>Project - ведение списков</title>
</head>

<body>

<div class="header">
    <div class="logo"><img src="/img/logo.png" width="68" height="23" alt="Project"></div>
    <div class="clearfix"></div>
</div>

<div class="clear">
    <?php
    showMenu($mainMenu, 'main-menu', 'sort', SORT_ASC); // вызов функции с аргументом для стилизации в header
    ?>

    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td class="left-collum-index">
                <h1><?= getHeader($mainMenu) ?></h1>
            </td>
        </tr>
    </table>
</div>