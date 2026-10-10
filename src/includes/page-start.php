<?php
require_once __DIR__ . '/config.php';

$lang = $lang ?? 'fr';
$show_header = $show_header ?? true;
$main_id = $main_id ?? null;
?>
<!DOCTYPE html>
<html lang="<?= $lang ?>">

<head>
    <?php require __DIR__ . '/head.php'; ?>
</head>

<body>
    <?php if ($show_header) : ?>
    <header>
        <?php require __DIR__ . '/header.php'; ?>
    </header>
    <?php endif; ?>

    <main<?= $main_id ? ' id="' . $main_id . '"' : '' ?>>
