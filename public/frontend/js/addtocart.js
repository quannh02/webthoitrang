$(document).ready(function(){
    $(".sizechose").change(function(){
      size = $(this).find("option:selected").val();
    });
    $(".add-to-cart").on('click', function(){
      var confirm_mess = confirm("Bạn có muốn thêm vào giỏ hàng không");
      if (confirm_mess) {
        var id = $(this).data('id');
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
                $('.soluongsanpham').empty();
                $('.soluongsanpham').append(obj.count);
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
      }
  
    });

});