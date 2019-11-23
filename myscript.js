$(document).ready(function() {
    $("#postform").on('submit', function() {
        var data = {
            task: $('#task').val()
        };
        $.ajax({
            type: "POST",
            url: "add.php",
            data: data,
            success: function (response) {}
        });

        $('#task').val('');

        return false;
    });
});