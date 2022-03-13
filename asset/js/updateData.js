$(document).on('click', '.editBtn', function() {
    $('#editData').modal('show');

    $tr = $(this).closest('tr');

    var data = $tr.children("td").map(function () {
        return $(this).text();
    }).get();

    console.log(data);

    $('#editID').val(data[1]);
    $('#editDataName').val(data[2]);
    $('#editDataAmount').val(data[4]);
    $('#editDataExpire').val(data[5]);
  });
  