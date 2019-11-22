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