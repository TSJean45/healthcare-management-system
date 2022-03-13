$(document).ready(function () {

    $('.deleteBtn').on('click', function () {

        $('#deleteData').modal('show');

        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function () {
            return $(this).text();
        }).get();

        console.log(data);

        $('#deleteID').val(data[1]);

    });
});