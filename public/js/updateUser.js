function detail(id, username, password, role) {
    document.getElementById("id_user").setAttribute("value", id);
    document.getElementById("username").setAttribute("value", username);
    document.getElementById("password").setAttribute("value", password);
    document.getElementById(role + "1").setAttribute("selected", "selected");
}

function hapusselect(role) {
    document.getElementById(role + "1").removeAttribute("selected", "selected");
}
$('#update').click(function update() {
    let username = document.getElementById("username").value;
    let password = document.getElementById("password").value;
    let role = document.getElementById("role").value;
    $.ajax({
        url: "<?= BASEURL; ?>/manageuser/updateUser",
        data: {
            username: username,
            password: password,
            role: role
        },
        method: 'POST',
        success: function (data) {
            console.log(data)
        }
    });
});