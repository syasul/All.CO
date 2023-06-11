$(function () {
    $('.showModalUpdate').on('click', function () {
        $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/all.co/updateUser');

        const id_user = $(this).data('id_user');
        $.ajax({
            url: 'http://localhost/phpmvc/public/all.co/getDataUpdate',
            data: { id_user: id_user },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                $('#username').val(data.username);
                $('#password').val(data.password);
                $('#role').val(data.role);
                $('#id_user').val(data.id_user);
            }
        });

    });

});