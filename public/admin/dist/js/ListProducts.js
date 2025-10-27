$(document).ready(function() {
    let table = $('#dataTables-example').DataTable({
        responsive: true,
        paging: true, // Bật phân Trang
        lengthChange: true, //cho phép chọn số dòng hiển thị
        pageLength: 10, //Số dòng mặc định mỗi Trang
        searching: true, // Bật tìm kiếm
        ordering: true, // Cho phép sắp xếp cột
        info: true, // Thông tin số Trang
        language: {
            search: "Tìm kiếm:",
            lengthMenu: "Hiển thị _MENU_ dòng",
            info: "Hiển thị _START_ đến _END_ của _TOTAL_ dòng",
            paginate: {
                first: "Đầu",
                last: "Cuối",
                next: "Sau",
                previous: "Trước"
            },
            zeroRecords: "Không tìm thấy dữ liệu phù hợp",
        }
    });

    // Gọi đến API bằng AJAX 
    $.ajax({
        url: apiproducts,
        type: "GET",
        dataType: "json",
        success: function(data) {
            //xóa dữ liệu cũ
            if (table.rows().count() > 0) {
                table.clear();
            }

            console.log(data);
            //Duyệt dữ liệu và thêm vào bảng
            // $.each(data,function(index,sp){
            //     $('#dataTables-example tbody').append(`
            //     <tr>
            //         <td>${sp.MaSP}</td>
            //         <td>${sp.TenSP}</td>
            //         <td>${sp.ModelNo}</td>
            //         <td>${sp.Gia}</td>
            //         <td>${sp.MoTa}</td>
            //         <td>${sp.SoLuongTon}</td>
            //         <td>${sp.MaDanhMuc}</td>
            //         <td>${sp.MaThuongHieu}</td>
            //         <td>${sp.TrangThai == 1 ? 'Còn bán':'Ngưng Bán'}</td>
            //     </tr>
            //     `);
            // });
            $.each(data, function(index, sp) {
                table.row.add([
                    sp.MaSP ?? '',
                    sp.TenSP ?? '',
                    sp.ModelNo ?? '',
                    sp.Gia ?? '',
                    sp.MoTa ?? '',
                    sp.SoLuongTon ?? '',
                    sp.MaDanhMuc ?? '',
                    sp.MaThuongHieu ?? '',
                    sp.TrangThai == 1 ? 'Còn bán' : 'Ngưng bán'
                ]);
            });
            table.draw();
        },
        error: function(xhr, status, error) {
            alert('Không thể tải dữ lệu :' + error);
        }
    })
});