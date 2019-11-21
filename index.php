<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div id="container">
        <h1>Todo List</h1>
        <ul>
        <li>Go Study</li>
        <li>Go Play</li>
        </ul>
        <form id='postform' method="POST">
            <input type="text" name="task" id="task" placeholder = "Enter task" required autocomplete = "off">
            <input type="submit" value="Add" id="btn">
        </form>
    </div>
</body>
<script>
    document.getElementById('btn').addEventListener('click', posttask);
    function posttask(e) {
        e.preventDefault();
        var task = document.getElementById('task').value;
        var params = "name="+task;

        xhr = new XMLHttpRequest();
        xhr.open('POST', 'add.php', true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.send(params);
    }
</script>
</html>