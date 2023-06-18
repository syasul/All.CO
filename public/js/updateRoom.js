function detail(id_room, name_room, image, description, total_room, price, image_src) {
    document.getElementById("id_room").setAttribute("value", id_room);
    document.getElementById("name_room").setAttribute("value", name_room);
    document.getElementById("image").setAttribute("value", image);
    document.getElementById('descripti').innerHTML = description.replace('<br />', '\n');
    document.getElementById("total_room").setAttribute("value", total_room);
    document.getElementById("price").setAttribute("value", price);
    document.getElementById("image_src").setAttribute("src", image_src);
}

$('#update').click(function update() {
    let name_room = document.getElementById("name_room").value;
    let image = document.getElementById("image").value;
    let description = document.getElementById("descripti").value;
    let total_room = document.getElementById("total_room").value;
    let price = document.getElementById("price").value;
    $.ajax({
        url: "<?= BASEURL; ?>/manageroom/updateRoom",
        data: {
            name_room: name_room,
            image: image,
            description: description,
            total_room: total_room,
            price: price
        },
        method: 'POST',
        success: function (data) {
            console.log(data)
        }
    });
});