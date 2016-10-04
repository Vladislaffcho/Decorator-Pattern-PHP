<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <!-- Once user has chosen ingredients, data will be passed to the coffe.php -->
    <!-- The ingredients will be "blended" there -->
    <form method="post" action="coffee.php">
        <input type="checkbox" name="sugar" value="sugar"> Сахар<br/>
        <input type="checkbox" name="cinnamon" value="cinnamon"> Корица<br/>
        <input type="checkbox" name="cream" value="cream"> Сливки<br/>
        <button type="submit">Order</button>
    </form>
</body>
</html>