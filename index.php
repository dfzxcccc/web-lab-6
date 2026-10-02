<?php
$tasks = [
    ['id' => 1, 'title' => 'Виконати лабу з php', 'priority' => 'High'],
    ['id' => 2, 'title' => 'Розібратись з формами', 'priority' => 'Medium']
];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Лабораторна 6</title>
</head>
<body>

    <h1>Мої завдання</h1>
    <a href="create.php">Додати нове завдання</a>
    <br><br>

    <ul>
        <?php foreach($tasks as $t): ?>
            <li>
                <strong>[<?php echo $t['priority']; ?>]</strong> 
                <?php echo $t['title']; ?>
            </li>
        <?php endforeach; ?>
    </ul>

</body>
</html>