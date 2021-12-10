function item(id){

    $.ajax({
        type: 'POST',
        url: '../config/bascket.php',
        data: 'id='+id,
        success: function(data){//data - ответ сервера
            alert("Вы добавили товар в корзину!");
            $(".basket-items").html(data);
        }
    });
}