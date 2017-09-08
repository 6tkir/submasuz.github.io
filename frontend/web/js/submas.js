$(function () {

    $('#liModal').on('click','#modalProduct',function(){
        var  id=$(this).data('id');
        var modalDiv=$('#quickview-wrapper');
        var modal=$('#productModal');

        $.ajax({
            type:'GET',
            url:'/products/modal',
            data:{id:id},
            success:function (res) {
                modalDiv.html(res);
                modal.modal();
            },
            error:function () {
                alert(id);
            }
        });
    });
});

