$(document).ready(function(){
	$(".cart_quantity_up").on('click', function(){
        var id = $(".idcartitem").text();
        var sizeUp = $(".cart_size p").text();
        var size = sizeUp.toLowerCase();
        //alert(id);
        var url = '/webthoitrang';
        $.ajax({
          type: 'POST',
          cache:  false,
          url: url + '/mua-hang',
          data: {id: id , size: size},
          success:function(data){
                var obj = $.parseJSON(data);
                //console.log(data);
    			 var soluong = $(".cart_quantity_input").text();
        		//alert(soluong); 
        		var intsoluong = parseInt(soluong);
        		//alert(intsoluong);
        		$(".cart_quantity_input").empty();
        		$(".cart_quantity_input").append(intsoluong + 1);
            $(".cart_total_price").empty();
            $(".cart_total_price").append(obj.subtotal + ' VNĐ');
          }
        })

        .error(function(xhr, status, error) {
          alert('Có lỗi xảy ra');
        })
        .done(function(){
          alert('Thêm giỏ hàng thành công');
        })
        // .success(function(data) {
        //   alert("Thêm giỏ hàng thành công");
        // });
        //$(this).parent().parent().parent().remove();
       
  
    });
    $(".cart_quantity_down").on('click', function(){
        var id = $(".idcartitem").text();
        var sizeUp = $(".cart_size p").text();
        var size = sizeUp.toLowerCase();
        //alert(id);
        var url = '/webthoitrang';
        $.ajax({
          type: 'POST',
          cache:  false,
          url: url + '/giam-hang',
          data: {id: id , size: size},
          success:function(data){
                var obj = $.parseJSON(data);
                //console.log(data);
           var soluong = $(".cart_quantity_input").text();
            //alert(soluong); 
            var intsoluong = parseInt(soluong);
            //alert(intsoluong);
            $(".cart_quantity_input").empty();
            $(".cart_quantity_input").append(intsoluong - 1);
            $(".cart_total_price").empty();
            $(".cart_total_price").append(obj.subtotal + ' VNĐ');
          }
        })

        .error(function(xhr, status, error) {
          alert('Có lỗi xảy ra');
        })
        .done(function(){
          alert('Trừ giỏ hàng thành công');
        })
        // .success(function(data) {
        //   alert("Thêm giỏ hàng thành công");
        // });
        //$(this).parent().parent().parent().remove();
       
  
    });
  
});