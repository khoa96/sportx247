<?php include "templates/head.php"; ?>

<body>
  <?php include "templates/header.php"; ?>
  <?php include "templates/subHeader.php"; ?>

  <!-- MAIN CONTENT -->

  <?php include "templates/footer.php"; ?>
  <script>
  // Hàm tính toán chiều cao
  function updateHeight() {
    var wrapperWidth = $('.view-match__player').width();
    var newHeight = (wrapperWidth * 9) / 16;
    $('.view-match__player').css('height', newHeight + 'px');
  }

  // Sự kiện khi trang được tải
  $(document).ready(function() {
    updateHeight(); // Cập nhật chiều cao khi trang được tải

    // Sự kiện resize cửa sổ
    $(window).resize(function() {
      updateHeight(); // Cập nhật chiều cao khi cửa sổ được resize
    });
  });
  </script>

</body>

</html>