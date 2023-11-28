// Hàm tính toán chiều cao
function resizeWidth() {
  $(".text-overflow").each(function (index) {
    const parent = $(this).parent();
    const widthParent = parent.width();
    const maxWidth = widthParent - 24;
    $(this).css("maxWidth", maxWidth + "px");
  });
}

// Sự kiện khi trang được tải
$(document).ready(function () {
  resizeWidth(); // Cập nhật chiều cao khi trang được tải

  // Sự kiện resize cửa sổ
  $(window).resize(function () {
    resizeWidth(); // Cập nhật chiều cao khi cửa sổ được resize
  });
});
