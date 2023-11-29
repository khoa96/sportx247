<?php include "templates/head.php"; ?>

<body>
  <?php include "templates/header.php"; ?>
  <?php include "templates/subHeader.php"; ?>

  <!-- MAIN CONTENT -->
  <div class="home-page__wrapper view-match__wrapper">
    <div class="container">
      <div class="home-page__content view-match__content">
        <div class="view-match__breadcrumb">
          <a class="view-match__breadcrumb-item" href="#" target="">Home</a>
          <div class="arrow-right">></div>
          <a class="view-match__breadcrumb-item" href="#" target="">Football</a>
          <div class="arrow-right">></div>
          <a class="view-match__breadcrumb-item" href="#" target="">Houston Astros vs Los Angeles Angels</a>
        </div>

        <div class="view-match__match-title">
          <h2 class="match-title__text">Houston Astros vs Los Angeles Angels</h2>
        </div>
        <div class="view-match__player">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/zsc4JhnthHc?si=gHhBMJ2Cw2wu4e7J"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen></iframe>
        </div>
        <div class="view-match__bottom">
          <div class="view-match__list-option-view">
            <button class="list-option-view__item active">Server 1</button>
            <button class="list-option-view__item">Server 2</button>
          </div>
          <div class="view-match__list-contact">
            <a class="list-contact__item">
              <img src="./images/icon-facebook.png" class="player-icon" alt="">
            </a>
            <a class="list-contact__item">
              <img src="./images/icon-twitter.png" class="player-icon" alt="">
            </a>
            <a class="list-contact__item">
              <img src="./images/icon-link.png" class="player-icon" alt="">
              <span class="txt-label">Report</span>
            </a>
          </div>
        </div>

        <div class="view-match__intro-price-wrapper">
          <div class="intro-price__main-content">
            <p class="intro-price__month-label">Plan 3 Months</p>
            <div class="intro-price__middle-content">
              <div class="column">
                <div class="main-price">
                  <span class="sign-price">9.6</span>
                  <span class="sign-dollar">$</span>
                </div>
                <span class="sign-month">/mo</span>
              </div>
              <div class="column">
                <span class="text-line-through">$28.00</span>
              </div>
              <div class="column">
                <span class="save-label">save 28%</span>
              </div>

            </div>
            <div class="intro-price__get-plan">Get 3 months plan</div>

          </div>
          <a href="#" target="" title="" class="btn-show-more-plan">
            <span class="btn-text">See more plan </span>
            <img src="./images/arrow-right.png" class="icon-arrow" alt="">
          </a>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
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