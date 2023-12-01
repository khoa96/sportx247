<?php include "templates/head.php"; ?>

<body>
  <?php include "templates/header.php"; ?>
  <?php include "templates/subHeader.php"; ?>

  <!-- PRICE PAGE CONTENT -->
  <div class="pricing-page__container">
    <div class="container">
      <div class="pricing-page__detail">
        <section class="pricing-page__header">
          <h1 class="pricing-page__primary-title">Pricing</h1>
        </section>
        <section class="pricing-page__common-title-block">
          <div class="pricing-page__step-number">1</div>
          <h2 class="pricing-page__secondary-title">Choose your Matchlist247 plan</h2>
        </section>

        <!-- START STEP: CHOOSE PLAN -->
        <section class="pricing-page__list-package-wrapper">
          <div class="pricing-page__list-package">
            <!-- thêm class active vào để xuất hiện dấu tích và border -->
            <div class="list-package__item active">
              <div class="package-item__header">
                <h4 class="month-label">1 Day</h4>
                <div class="check-label-wrapper">
                  <img src="./images/icon-check.png" class="icon-check" alt="">
                </div>
              </div>

              <div class="package-item__middle">
                <span class="prev-price">$10.99</span>
                <span class="save-label">save 10%</span>
              </div>

              <div class="package-item__footer">
                <div class="package-item__primary-price">
                  <span class="sign-dollar">$</span>
                  <span class="primary-price">4</span>
                  <span class="sign-month">/month</span>
                </div>

                <button class="btn-get-plan btn-default">
                  <span class="btn-text text-for-pc">Get 1 day plan</span>
                  <span class="btn-text text-for-mb">Get plan</span>
                </button>
              </div>

              <div class="package-item__list-feature">
                <div class="list-feature__item">
                  <img src="./images/icon-blue-check.png" class="icon-check" alt="">
                  <span class="feature-text">HD live streaming</span>
                </div>
                <div class="list-feature__item">
                  <img src="./images/icon-blue-check.png" class="icon-check" alt="">
                  <span class="feature-text">Full-screen mode - No popups</span>
                </div>
                <div class="list-feature__item">
                  <img src="./images/icon-blue-check.png" class="icon-check" alt="">
                  <span class="feature-text">Full matches & highlights replay</span>
                </div>
                <div class="list-feature__item">
                  <img src="./images/icon-blue-check.png" class="icon-check" alt="">
                  <span class="feature-text">Watch on your laptop, phone, or tablet</span>
                </div>
              </div>
            </div>
            <!-- START SPECIAL PACKAGE  thêm class special-package -->
            <div class="list-package__item special-package">
              <div class="package-item__spacial-header">
                <span class="special-text">SPECIAL DEAL</span>
              </div>
              <div class="package-item__header">
                <h4 class="month-label">12 + <span class="highlight"> 3 Months Free</span></h4>
                <div class="check-label-wrapper">
                  <img src="./images/icon-check.png" class="icon-check" alt="">
                </div>
              </div>

              <div class="package-item__middle">
                <span class="prev-price">$10.99</span>
                <span class="save-label">save 10%</span>
              </div>

              <div class="package-item__footer">
                <div class="package-item__primary-price">
                  <span class="sign-dollar">$</span>
                  <span class="primary-price">3.5</span>
                  <span class="sign-month">/month</span>
                </div>
                <!--thêm class btn-active để button có background dạng gradient -->
                <button class="btn-get-plan btn-active">
                  <span class="btn-text text-for-pc">Get 12 months plan</span>
                  <span class="btn-text text-for-mb">Get plan</span>
                </button>
              </div>

              <div class="package-item__list-feature">
                <div class="list-feature__item">
                  <img src="./images/icon-red-check.png" class="icon-check" alt="">
                  <span class="feature-text">HD live streaming</span>
                </div>
                <div class="list-feature__item">
                  <img src="./images/icon-red-check.png" class="icon-check" alt="">
                  <span class="feature-text">Full-screen mode - No popups</span>
                </div>
                <div class="list-feature__item">
                  <img src="./images/icon-red-check.png" class="icon-check" alt="">
                  <span class="feature-text">Full matches & highlights replay</span>
                </div>
                <div class="list-feature__item">
                  <img src="./images/icon-red-check.png" class="icon-check" alt="">
                  <span class="feature-text">Watch on your laptop, phone, or tablet</span>
                </div>
              </div>
            </div>
            <!-- END SPECIAL PACKAGE -->

            <div class="list-package__item">
              <div class="package-item__header">
                <h4 class="month-label">1 Months</h4>
                <div class="check-label-wrapper">
                  <img src="./images/icon-check.png" class="icon-check" alt="">
                </div>
              </div>

              <div class="package-item__middle">
                <span class="prev-price">$10.99</span>
                <span class="save-label">save 5%</span>
              </div>

              <div class="package-item__footer">
                <div class="package-item__primary-price">
                  <span class="sign-dollar">$</span>
                  <span class="primary-price">6</span>
                  <span class="sign-month">/month</span>
                </div>

                <button class="btn-get-plan btn-active">
                  <span class="btn-text text-for-pc">Get 1 months plan</span>
                  <span class="btn-text text-for-mb">Get plan</span>
                </button>
              </div>

              <div class="package-item__list-feature">
                <div class="list-feature__item">
                  <img src="./images/icon-blue-check.png" class="icon-check" alt="">
                  <span class="feature-text">HD live streaming</span>
                </div>
                <div class="list-feature__item">
                  <img src="./images/icon-blue-check.png" class="icon-check" alt="">
                  <span class="feature-text">Full-screen mode - No popups</span>
                </div>
                <div class="list-feature__item">
                  <img src="./images/icon-blue-check.png" class="icon-check" alt="">
                  <span class="feature-text">Full matches & highlights replay</span>
                </div>
                <div class="list-feature__item">
                  <img src="./images/icon-blue-check.png" class="icon-check" alt="">
                  <span class="feature-text">Watch on your laptop, phone, or tablet</span>
                </div>
              </div>
            </div>
            <div class="list-package__item">
              <div class="package-item__header">
                <h4 class="month-label">1 Month</h4>
                <div class="check-label-wrapper">
                  <img src="./images/icon-check.png" class="icon-check" alt="">
                </div>
              </div>

              <div class="package-item__middle">
                <span class="prev-price">$10.99</span>
                <span class="save-label">save 5%</span>
              </div>

              <div class="package-item__footer">
                <div class="package-item__primary-price">
                  <span class="sign-dollar">$</span>
                  <span class="primary-price">6</span>
                  <span class="sign-month">/month</span>
                </div>

                <button class="btn-get-plan btn-active">
                  <span class="btn-text text-for-pc">Get 1 day plan</span>
                  <span class="btn-text text-for-mb">Get plan</span>
                </button>
              </div>

              <div class="package-item__list-feature">
                <div class="list-feature__item">
                  <img src="./images/icon-blue-check.png" class="icon-check" alt="">
                  <span class="feature-text">HD live streaming</span>
                </div>
                <div class="list-feature__item">
                  <img src="./images/icon-blue-check.png" class="icon-check" alt="">
                  <span class="feature-text">Full-screen mode - No popups</span>
                </div>
                <div class="list-feature__item">
                  <img src="./images/icon-blue-check.png" class="icon-check" alt="">
                  <span class="feature-text">Full matches & highlights replay</span>
                </div>
                <div class="list-feature__item">
                  <img src="./images/icon-blue-check.png" class="icon-check" alt="">
                  <span class="feature-text">Watch on your laptop, phone, or tablet</span>
                </div>
              </div>
            </div>
          </div>

          <div class="pricing-page__package-description">
            <p class="text">All plans are covered by a 7-day money-back guarantee</p>
          </div>

        </section>
        <!-- END STEP: CHOOSE PLAN -->


        <!-- START STEP: CHOOSE METHOD PAYMENT-->
        <section class="pricing-page__method-payment">
          <section class="pricing-page__common-title-block">
            <div class="pricing-page__step-number">2</div>
            <h2 class="pricing-page__secondary-title">Choose your method of payment</h2>
          </section>


          <div class="pricing-page__method-content">
            <!-- START METHOD PAYMENT -->
            <article class="pricing-page__method-content-left">
              <!-- START LIST METHOD -->
              <div class="pricing-page__list-method-payment">
                <!-- thêm class selected để thành trạng thái đang được chọn -->
                <div class="list-method-payment__item selected">
                  <div class="control-selected">
                    <span class="icon-unchecked"></span>
                    <img src="./images/icon-check.png" class="icon-checked" alt="">
                  </div>
                  <div class="method-payment__info-detail">
                    <h3 class="method-name">Credit Card</h3>
                    <div class="payment-type__list">
                      <div class="payment-type__item">
                        <img src="./images/type-payment-1.png" class="credit-method type-image" alt="">
                      </div>
                      <div class="payment-type__item">
                        <img src="./images/type-payment-2.png" class="viva-method  type-image" alt="">
                      </div>
                      <div class="payment-type__item">
                        <img src="./images/type-payment-3.png" class="jcb-method  type-image" alt="">
                      </div>
                      <div class="payment-type__item">
                        <img src="./images/type-payment-4.png" class="union-method  type-image" alt="">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="list-method-payment__item">
                  <div class="control-selected">
                    <span class="icon-unchecked"></span>
                    <img src="./images/icon-check.png" class="icon-checked" alt="">
                  </div>
                  <div class="method-payment__info-detail">
                    <h3 class="method-name">Paypal</h3>
                    <div class="payment-type__list">
                      <div class="payment-type__item">
                        <img src="./images/type-payment-5.png" class="icon-16 type-image" alt="">
                      </div>

                    </div>
                  </div>
                </div>

                <div class="list-method-payment__item">
                  <div class="control-selected">
                    <span class="icon-unchecked"></span>
                    <img src="./images/icon-check.png" class="icon-checked" alt="">
                  </div>


                  <div class="method-payment__info-detail">
                    <h3 class="method-name">Crypto Currencies (Non-refundable)</h3>
                    <div class="middle-info">
                      <div class="recommend-wrapper">
                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M10.4525 8.35301C10.3014 8.49942 10.232 8.71117 10.2664 8.91884L10.785 11.7888C10.8288 12.0321 10.7261 12.2783 10.5225 12.4188C10.323 12.5647 10.0576 12.5822 9.84001 12.4655L7.25643 11.118C7.1666 11.0702 7.06685 11.0445 6.96476 11.0416H6.80668C6.75185 11.0498 6.69818 11.0673 6.64918 11.0941L4.06501 12.448C3.93726 12.5122 3.7926 12.5349 3.65085 12.5122C3.30551 12.4468 3.0751 12.1178 3.13168 11.7708L3.65085 8.90076C3.68526 8.69134 3.61585 8.47842 3.46476 8.32967L1.35835 6.28801C1.18218 6.11709 1.12093 5.86042 1.20143 5.62884C1.2796 5.39784 1.4791 5.22926 1.72001 5.19134L4.61918 4.77076C4.83968 4.74801 5.03335 4.61384 5.13251 4.41551L6.41001 1.79634C6.44035 1.73801 6.47943 1.68434 6.52668 1.63884L6.57918 1.59801C6.6066 1.56767 6.6381 1.54259 6.6731 1.52217L6.73668 1.49884L6.83585 1.45801H7.08143C7.30076 1.48076 7.49385 1.61201 7.59476 1.80801L8.88918 4.41551C8.98251 4.60626 9.16393 4.73867 9.37335 4.77076L12.2725 5.19134C12.5175 5.22634 12.7223 5.39551 12.8033 5.62884C12.8798 5.86276 12.8138 6.11942 12.6342 6.28801L10.4525 8.35301Z"
                            fill="#0F172A" />
                        </svg>
                        <span class="recommend-text">Recommended</span>
                      </div>
                      <span class="label-discount">-15%</span>
                    </div>
                    <div class="payment-type__list">
                      <div class="payment-type__item">
                        <img src="./images/type-payment-6.png" class="icon-16 type-image" alt="">
                      </div>
                      <div class="payment-type__item">
                        <img src="./images/type-payment-7.png" class="icon-16 type-image" alt="">
                      </div>
                      <div class="payment-type__item">
                        <img src="./images/type-payment-8.png" class="icon-16 type-image" alt="">
                      </div>
                      <div class="payment-type__item">
                        <img src="./images/type-payment-9.png" class="icon-16 type-image" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- END LIST METHOD -->

              <!-- METHOD STATISTICAL -->
              <div class="pricing-page__statical-method">
                <div class="column-50 left-column">
                  <div class="statical__row">
                    <div class="statical__name">6 months</div>
                    <div class="statical__value">
                      <span class="text-value text-line-through">$75</span>
                      <span class="text-value">$18</span>
                    </div>
                  </div>
                  <div class="statical__row">
                    <div class="statical__name">Fee payment</div>
                    <div class="statical__value">
                      <span class="text-value">$3</span>
                    </div>
                  </div>
                  <div class="statical__row">
                    <div class="statical__name">Total</div>
                    <div class="statical__value">
                      <span class="text-total">$21</sparen>
                    </div>
                  </div>
                  <a href="#" target="" title="" class="link-coupon-code">Have coupon code?</a>
                </div>
                <div class="column-50 right-column">
                  <img src="./images/money-back-image.png" class="money-back-image" alt="">
                </div>
              </div>
              <!-- METHOD STATISTICAL -->


              <!-- START REGISTER FORM -->
              <div class="pricing-page__register-form">
                <div class="register-form__header">
                  <div class="form-group-item">
                    <label for="">Email</label>
                    <input type="text" name="" value="" placeholder="Enter your email" class="input">
                  </div>
                   <div class="form-group-item">
                    <label for="">Password</label>
                    <input type="password" name="" value="" placeholder="Enter password" class="input">
                  </div>
                </div>
                <div class="register-form__middle">
                  <h4 class="sign-up-viva-title">Sign up via</h4>
                  <div class="list-register-with-viva">
                    <a href="#" target="" title="" class="link-item">
                      <img src="./images/icon-facebook.png" class="viva-image" alt="" />
                    </a>
                     <a href="#" target="" title="" class="link-item">
                      <img src="./images/icon-google.png" class="viva-image" alt="" />
                    </a>
                     <a href="#" target="" title="" class="link-item">
                      <img src="./images/icon-apple.png" class="viva-image"  alt="" />
                    </a>
                  </div>
                </div>
                <div class="register-form__footer">
                  <a href="#" class="btn-payment-now">Payment Now</a>
                  <div class="privacy-and-terms-block">
                    <p class="privacy-and-terms-block__text">By proceeding, you agree to our <a href="#" class="privacy-and-terms-block__link">Terms of Service</a> and <a href="#" class="privacy-and-terms-block__link">Privacy Policy.</a></p>
                  </div>
                </div>
              </div>
              <!-- END REGISTER FORM -->

            </article>
            <!-- END METHOD PAYMENT -->

            <!-- START BENEFIT -->
            <article class="pricing-page__method-content-right">
              <h3 class="vip-benefit-title">VIP benefits</h3>
              <div class="pricing-page_list-benefit">
                <div class="list-benefit__item active">
                  <img src="./images/icon-benefit-1.png" class="icon-benefit" alt="" />
                  <p class="text-benefit-description">100% Safe and secure</p>
                </div>
                <div class="list-benefit__item active">
                  <img src="./images/icon-benefit-2.png" class="icon-benefit" alt="" />
                  <p class="text-benefit-description">100+ football leagues and tournaments</p>
                </div>
                <div class="list-benefit__item active">
                  <img src="./images/icon-benefit-3.png" class="icon-benefit" alt="" />
                  <p class="text-benefit-description">More than 140,000 movies and TV shows</p>
                </div>
                <div class="list-benefit__item">
                  <img src="./images/icon-benefit-4.png" class="icon-benefit" alt="" />
                  <p class="text-benefit-description">English commentary</p>
                </div>
                <div class="list-benefit__item">
                  <img src="./images/icon-benefit-5.png" class="icon-benefit" alt="" />
                  <p class="text-benefit-description">No ads/popups</p>
                </div>
                <div class="list-benefit__item">
                  <img src="./images/icon-benefit-6.png" class="icon-benefit" alt="" />
                  <p class="text-benefit-description">256-bit encrypted</p>
                </div>
                <div class="list-benefit__item">
                  <img src="./images/icon-benefit-7.png" class="icon-benefit" alt="" />
                  <p class="text-benefit-description">24/7 dedicated support</p>
                </div>
                <div class="list-benefit__item">
                  <img src="./images/icon-benefit-8.png" class="icon-benefit" alt="" />
                  <p class="text-benefit-description">Discreet billing</p>
                </div>
              </div>
            </article>
            <!-- END METHOD BENEFIT -->

          </div>

        </section>
        <!-- START STEP: CHOOSE METHOD PAYMENT-->


      </div>
    </div>
  </div>
  <!-- PRICE PAGE CONTENT -->

  <?php include "templates/footer.php"; ?>
  <script>
  // Hàm tính toán chiều cao
  function calculatorWidth() {
    const listPackageWidth = $('.pricing-page__list-package').width()
    console.log('listPackageWidth ====', listPackageWidth)
    var packageCount = $('.list-package__item').length
    console.log('packageCount =====', packageCount)

    var newWidth = (listPackageWidth - (packageCount - 1) * 12) / packageCount
    $('.list-package__item').css('width', newWidth + 'px');
  }

  // Sự kiện khi trang được tải
  $(document).ready(function() {
    calculatorWidth();

    // Sự kiện resize cửa sổ
    $(window).resize(function() {
      calculatorWidth();
    });
  });
  </script>

</body>

</html>