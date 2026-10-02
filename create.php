<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo "<h3>Дані з форми:</h3>";
    echo "<pre>";
    var_dump($_POST);
    echo "</pre>";
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Додати завдання</title>
</head>
<body>

    <a href="index.php">Назад до списку</a>
    <h3>Створення завдання</h3>

    <form action="create.php" method="POST">
        <div>
            <label>Назва:</label><br>
            <input type="text" name="title">
        </div>
        <br>
        <div>
            <label>Опис:</label><br>
            <textarea name="description"></textarea>
        </div>
        <br>
        <div>
            <label>Пріоритет:</label><br>
            <select name="priority">
                <option value="Low">Low</option>
                <option value="Medium">Medium</option>
                <option value="High">High</option>
            </select>
        </div>
        <br>
        <button type="submit">Зберегти</button>
    </form>

</body>
</html>