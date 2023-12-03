<?php include "templates/head.php"; ?>

<body>
  <?php include "templates/header.php"; ?>
  <?php include "templates/subHeader.php"; ?>

  <!-- MAIN CONTENT -->
  <div class="home-page__wrapper view-match__wrapper">
    <div class="container">
      <div class="home-page__content view-match__content">
        <!-- BREADCRUMB  -->
        <div class="view-match__breadcrumb">
          <a class="view-match__breadcrumb-item" href="#" target="">Home</a>
          <div class="arrow-right">></div>
          <a class="view-match__breadcrumb-item" href="#" target="">Football</a>
          <div class="arrow-right">></div>
          <a class="view-match__breadcrumb-item" href="#" target="">Houston Astros vs Los Angeles Angels</a>
        </div>
        <!-- BREADCRUMB  -->


        <!-- MATCH TITTLE -->
        <div class="view-match__match-title">
          <h2 class="match-title__text">Houston Astros vs Los Angeles Angels</h2>
        </div>
        <!-- MATCH TITTLE -->

        <!-- MATCH PLAYER -->
        <div class="view-match__player">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/zsc4JhnthHc?si=gHhBMJ2Cw2wu4e7J"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen></iframe>
        </div>
        <!-- MATCH PLAYER -->


        <!-- CONTROL PLAYER -->
        <div class="view-match__bottom">
          <div class="view-match__list-option-view">
            <button class="list-option-view__item active">Server 1</button>
            <button class="list-option-view__item">Server 2</button>
          </div>
          <div class="view-match__list-contact">
            <a class="list-contact__item">
              <img src="./images/icon-white-facebook.png" class="player-icon" alt="">
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
        <!-- CONTROL PLAYER -->

        <!-- PRICE INTRO FOR ONLY PC-->
        <div class="view-match__intro-price-wrapper show-only-for-pc">
          <div class="intro-price__main-content">
            <span class="intro-price__month-label">Plan 3 Months</span>
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
            <a href="#" class="intro-price__get-plan">Get 3 months plan</a>
          </div>
          <a href="#" target="" title="" class="btn-show-more-plan">
            <span class="btn-text">See more plan </span>
            <img src="./images/arrow-right.png" class="icon-arrow" alt="">
          </a>
        </div>
        <!--  PRICE INTRO FOR ONLY PC  -->

        <!-- PRICE INTRO FOR ONLY MOBILE-->
        <div class="view-match__intro-price-for-mb">
          <div class="view-match__plan-item">
            <div class="plan-item__header">
              <span class="month">1 Months</span>
              <span class="save-label">Save 5%</span>
            </div>
            <div class="plan-item__middle">
              <span class="prev-price">$10.99</span>
            </div>
            <div class="plan-item__footer">
              <div class="plan-item__primary-price">
                <span class="sign-dollar">$</span>
                <span class="value-price">4</span>
                <span class="sign-month">/month</span>
              </div>
              <a href="#" target="" class="plan-item__btn-get-plan" title="">Get plan</a>
            </div>
          </div>
          <a href="#" target="" title="" class="view-match__btn-show-more-plan">
            <span class="btn-text">See more plan </span>
            <img src="./images/arrow-right.png" class="icon-arrow" alt="">
          </a>
        </div>
        <!-- PRICE INTRO FOR ONLY MOBILE-->

        <!-- LIST CLUB INFO -->
        <div class="view-match__list-club">
          <div class="view-match__list-club-item">
            <div class="club-info__avatar">
              <img src="./images/sport-league-1.png" class="club-avatar" alt="">
            </div>
            <div class="club-info__description">
              <div class="club-info__item">
                <p>Local team: Greuther Fürth</p>
              </div>
              <div class="club-info__item">
                <p>Local formation: No data</p>
              </div>
              <div class="club-info__item">
                <p>Local venue: Sportpark Ronhof Thomas Sommer</p>
              </div>
            </div>
          </div>
          <div class="view-match__list-club-item">
            <div class="club-info__avatar">
              <img src="./images/sport-league-2.png" class="club-avatar" alt="">
            </div>
            <div class="club-info__description">
              <div class="club-info__item">
                <p>Local team: Bayern Munchen</p>

              </div>
              <div class="club-info__item">
                <p>Visitor formation: No data</p>
              </div>
              <div class="club-info__item">
                <p>Visitor venue: Allianz Arena</p>
              </div>
            </div>
          </div>
        </div>
        <!-- LIST CLUB INFO -->


        <!-- LIST MATCH -->
        <div class="view-match__list-match">
            <!-- LIVE MATCH -->
          <section class="common-section-match">
            <div class="common-section-match__header">
              <img src="./images/icon-radian.png" class="common-section-match__header-image" alt="">
              <h3 class="common-section-match__header-title">LIVE</h3>
            </div>
            <div class="common-section-match__body">
              <div class="common-section-match__list">
                <a class="common-section-match__item">
                  <div class="column-40 league-column">
                    <div class="first-column">
                      <div class="status-icon">
                        <div class="blob red"></div>
                      </div>
                      <span class="status-text">live</span>
                    </div>
                    <div class="middle-column">
                      <p class="time-label__content">2nd half 52'</p>
                    </div>
                    <div class="last-column">
                      <p class="league-name text-overflow">Premier League nguyen dang khoa</p>
                    </div>
                  </div>
                  <div class="column-60 match-column">
                    <div class="clubs-wrapper">
                      <p class="match-txt text-overflow">Premier League Premier League Premier League</p>
                    </div>
                    <button class="btn-watch">Watch</button>
                  </div>
                </a>
                <a class="common-section-match__item">
                  <div class="column-40 league-column">
                    <div class="first-column">
                      <div class="status-icon">
                        <div class="blob red"></div>
                      </div>
                      <span class="status-text">live</span>
                    </div>
                    <div class="middle-column">
                      <p class="time-label__content">2nd half 52'</p>
                    </div>
                    <div class="last-column">
                      <p class="league-name text-overflow">Premier League nguyen dang khoa</p>
                    </div>
                  </div>
                  <div class="column-60 match-column">
                    <div class="clubs-wrapper">
                      <div class="club__item first-club">
                        <div class="club-name__wrapper">
                          <p class="club-name text-overflow">Manchester United United nguyen dang khoa nguye United
                            nguyen dang khoa nguye</p>
                        </div>
                        <img src="./images/sport-league-1.png" class="club-image" alt="">
                      </div>
                      <div class="result-score">1 - 2</div>
                      <div class="club__item second-club">
                        <img src="./images/sport-league-2.png" class="club-image" alt="">
                        <div class="club-name__wrapper">
                          <p class="club-name text-overflow">Manchester United nguyen dang khoa nguyen United nguyen
                            dang khoa nguye</p>
                        </div>
                      </div>
                    </div>
                    <button class="btn-watch">Watch</button>
                  </div>
                </a>
                <a class="common-section-match__item">
                  <div class="column-40 league-column">
                    <div class="first-column">
                      <div class="status-icon">
                        <div class="blob red"></div>
                      </div>
                      <span class="status-text">live</span>
                    </div>
                    <div class="middle-column">
                      <p class="time-label__content">1nd half 2'</p>
                    </div>
                    <div class="last-column">
                      <p class="league-name text-overflow">Premier League </p>
                    </div>
                  </div>
                  <div class="column-60 match-column">
                    <div class="clubs-wrapper">
                      <div class="club__item first-club">
                        <div class="club-name__wrapper">
                          <p class="club-name text-overflow">Manchester</p>
                        </div>
                        <img src="./images/sport-league-3.png" class="club-image" alt="">
                      </div>
                      <div class="result-score">1 - 2</div>
                      <div class="club__item second-club">
                        <img src="./images/sport-league-4.png" class="club-image" alt="">
                        <div class="club-name__wrapper">
                          <p class="club-name text-overflow">Manchester United</p>
                        </div>
                      </div>
                    </div>
                    <button class="btn-watch">Watch</button>
                  </div>
                </a>
                <a class="common-section-match__item">
                  <div class="column-40 league-column">
                    <div class="first-column">
                      <div class="status-icon">
                        <div class="blob red"></div>
                      </div>
                      <span class="status-text">live</span>
                    </div>
                    <div class="middle-column">
                      <p class="time-label__content">2nd half 34'</p>
                    </div>
                    <div class="last-column">
                      <p class="league-name text-overflow">Premier League </p>
                    </div>
                  </div>
                  <div class="column-60 match-column">
                    <div class="clubs-wrapper">
                      <div class="club__item first-club">
                        <div class="club-name__wrapper">
                          <p class="club-name text-overflow">Manchester</p>
                        </div>
                        <img src="./images/sport-league-5.png" class="club-image" alt="">
                      </div>
                      <div class="result-score">1 - 2</div>
                      <div class="club__item second-club">
                        <img src="./images/sport-league-6.png" class="club-image" alt="">
                        <div class="club-name__wrapper">
                          <p class="club-name text-overflow">United</p>
                        </div>
                      </div>
                    </div>
                    <button class="btn-watch">Watch</button>
                  </div>
                </a>
                <a class="common-section-match__item">
                  <div class="column-40 league-column">
                    <div class="first-column">
                      <div class="status-icon">
                        <div class="blob red"></div>
                      </div>
                      <span class="status-text">live</span>
                    </div>
                    <div class="middle-column">
                      <p class="time-label__content">2nd half 34'</p>
                    </div>
                    <div class="last-column">
                      <p class="league-name text-overflow">Premier League Manchester CityManchester CityManchester City
                      </p>
                    </div>
                  </div>
                  <div class="column-60 match-column">
                    <div class="clubs-wrapper">
                      <div class="club__item first-club">
                        <div class="club-name__wrapper">
                          <p class="club-name text-overflow">Manchester </p>
                        </div>
                        <img src="./images/sport-league-7.png" class="club-image" alt="">
                      </div>
                      <div class="result-score">1 - 2</div>
                      <div class="club__item second-club">
                        <img src="./images/sport-league-8.png" class="club-image" alt="">
                        <div class="club-name__wrapper">
                          <p class="club-name text-overflow">United Manchester City Manchester City Manchester City
                            Manchester City Manchester City</p>
                        </div>
                      </div>
                    </div>
                    <button class="btn-watch">Watch</button>
                  </div>
                </a>
              </div>
            </div>
          </section>
          <!-- LIVE MATCH -->
        </div>
        <!-- LIST MATCH -->
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