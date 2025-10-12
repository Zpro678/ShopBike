$(document).ready(function(){
    $.ajax({
        url:apiCategoryUrl,
        type:"GET",
        dataType:'json',
        success:function(dataDanhMuc)
        {
            // đảm bảo clear trước khi thêm (tránh thêm chồng)
                var $select = $('#danhmucSelect');
                $select.find('option:not(:first)').remove();
           $.each(dataDanhMuc,function(index,dm){
                if(dm.LoaiDanhMuc == "Xe")
                {
                    var $option = $('<option>',{
                        value: dm.MaDanhMuc,
                        text:dm.TenDanhMuc,
                    });
                    $select.append($option);
                }
           });
        },
        error:function(){
            alert("Lỗi load danh mục");
        }
    });

    $('.select2').select2({
        placeholder:"--Chọn Danh Mục --",
        allowClear:true
    });
});
