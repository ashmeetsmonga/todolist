$(document).ready(function() {
    $.ajax({
        type: "POST",
        url: "add.php",
        data: {task: ''},
        dataType: "JSON",
        success: function (response) {
            var tasks = '';
            $.each(response, function (i, task) {
                tasks = tasks + "<li>" + task[1] + "</li>";
            });
            $('#list').html(tasks);
        }
    });
    $("#postform").on('submit', function() {
        var data = {
            task: $('#task').val()
        };
        $.ajax({
            type: "POST",
            url: "add.php",
            data: data,
            dataType: "JSON",
            success: function (response) {
                var tasks = '';
                $.each(response, function (i, task) {
                    tasks = tasks + "<li>" + task[1] + "</li>";
                });
                $('#list').html(tasks);
            }
        });
        $('#task').val('');

        return false;
    });
});