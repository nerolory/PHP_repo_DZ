function item(id){
    $.ajax({
        type: 'POST',
        url: 'controllers/con_basket.php',
        data: 'id='+id,
        success: function(data){
            alert("Вы добавили товар в корзину!");
            $(".basket-items").html(data);
        }
    });
}