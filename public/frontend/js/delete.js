$(function(){
  $(".btn-delete").on('click', function(){
    var confirm_mess = confirm("Bạn có muốn xóa sản phẩm này không");
    if (confirm_mess) {
      var id = $(this).data('id');
      var url = '/webthoitrang';
      $.ajax({
        type: 'POST',
        cache:  false,
        url: url + '/deletesanpham',
        data: {id: id},
      })
      .error(function(xhr, status, error) {
        alert(xhr.responseText);
      })
      .success(function(data) {
        alert("Đã xóa thành công");
      });
      $(this).parent().parent().parent().remove();
    }
  
  });
});
