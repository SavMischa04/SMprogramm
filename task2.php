<?php
// task 2a
if(isset($_POST['submit'])){
    $text = $_POST['text'];
    $wordCount = str_word_count($text);
    $charCount = strlen($text);
    echo "Words count: $wordCount<br>";
    echo "Symbols count: $charCount";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
</head>
<body>
<form method="post">
    <textarea name="text"></textarea><br>
    <input type="submit" name="submit" value="Count">
</form>
</body>
</html> '<br />';

------------------------------------------------------------------------------------

<?php
// task 2b
session_start();

if ('POST' === $_SERVER['REQUEST_METHOD']) {
    if (isset($_POST['surname'])) {
        $_SESSION['surname'] = $_POST['surname'];
    }
    if (isset($_POST['name'])) {
        $_SESSION['name'] = $_POST['name'];
    }
    if (isset($_POST['age'])) {
        $_SESSION['age'] = $_POST['age'];
    }
}

if (isset($_SESSION['surname'], $_SESSION['name'], $_SESSION['age'])) {
    echo 'Surname: ' . $_SESSION['surname'];
    echo '<br />';
    echo 'Name: ' . $_SESSION['name'];
    echo '<br />';
    echo 'Age: ' . $_SESSION['age'];
    echo '<br />';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
<form method="post">
    Surname:
    <input type="text" name="surname"><br>

    Name:
    <input type="text" name="name"><br>

    Age:
    <input type="number" name="age"><br>
    <input type="submit" value="Submit">
</form>
</body>
</html>

------------------------------------------------------------------------

<?php
// task 2c
session_start();

if ('POST' === $_SERVER['REQUEST_METHOD']) {
    $name = '';
    $age = 0;
    $salary = '';
    $hobby = '';

    if (isset($_POST['name'])) {
        $name = $_POST['name'];
    }
    if (isset($_POST['age'])) {
        $age = $_POST['age'];
    }
    if (isset($_POST['salary'])) {
        $salary = $_POST['salary'];
    }
    if (isset($_POST['hobby'])) {
        $hobby = $_POST['hobby'];
    }

    $infoData = [
        'name' => $name,
        'age' => $age,
        'salary' => $salary,
        'hobby' => $hobby
    ];

    $_SESSION['userData'] = $infoData;
}

if (isset($_SESSION['userData'])) {
    echo '<ul>';
    foreach ($_SESSION['userData'] as $key => $value) {
        echo "<li>$key: $value</li>";
    }
    echo '</ul>';
    echo '<br />';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
<form method="post">
    Name:
    <input type="text" name="name"><br>

    Age:
    <input type="number" name="age"><br>

    Salary:
    <input type="text" name="salary"><br>
    
    Hobby:
    <input type="text" name="hobby"><br>
    <input type="submit" value="Submit">
</form>
</body>
</html>