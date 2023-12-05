<?php include "templates/head.php"; ?>

<body>
  <?php include "templates/header.php"; ?>
  <?php include "templates/subHeader.php"; ?>

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

          <!-- secure checkout chỉ hiển thị với mobile-->
          <div class="pricing-page__secure-checkout">
            <img src="./images/icon-secure-checkout.png" class="secure-checkout__icon" alt="">
            <div class="secure-checkout__detail">
              <h3 class="secure-checkout__title">Secure checkout</h3>
              <h3 class="secure-checkout__description">Your payment information is fully protected.</h3>
            </div>
          </div>
          <!-- secure checkout chỉ hiển thị với mobile-->
          <div class="pricing-page__method-content">
            <!-- START METHOD PAYMENT -->
            <article class="pricing-page__method-content-left">
              <!-- START LIST METHOD -->
              <div class="choose-payment-type-wrapper">
                <div id="payment-method-tabs">
                  <ul class="payment-method-tabs">
                    <li class="payment-method-tab-item">
                      <a href="#tabs-1" class="payment-type-item">
                        <div class="checked-box">
                          <div class="icon-checked">
                            <img src="./images/icon-check.png" class="icon-checked" alt="">
                          </div>
                        </div>
                        <div class="payment-method-detail">
                          <h6 class="payment-title">Credit Card</h6>
                          <div class="list-method-type">
                            <div class="method-type-item">
                              <img class="image-payment-credit" src="./images/type-payment-1.png" alt="" />
                            </div>
                            <div class="method-type-item">
                              <img class="image-payment-visa" src="./images/type-payment-2.png" alt="" />
                            </div>
                            <div class="method-type-item">
                              <img class="image-payment-jcb" src="./images/type-payment-3.png" alt="" />
                            </div>
                            <div class="method-type-item">
                              <img class="image-payment-union" src="./images/type-payment-4.png" alt="" />
                            </div>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li class="payment-method-tab-item">
                      <a href="#tabs-2" class="payment-type-item">
                        <div class="checked-box">
                          <div class="checked">
                            <div class="icon-checked">
                              <img src="./images/icon-check.png" class="icon-checked" alt="">
                            </div>
                          </div>
                        </div>
                        <div class="payment-method-detail">
                          <h6 class="payment-title">Paypal</h6>
                          <div class="list-method-type">
                            <div class="method-type-item ">
                              <img class="image-payment-paypal" src="./images/type-payment-5.png" alt="" />
                            </div>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li class="payment-method-tab-item">
                      <a href="#tabs-3" class="payment-type-item tab-no-refundable-content">
                        <div class="checked-box">
                          <div class="checked">
                            <div class="icon-checked">
                              <img src="./images/icon-check.png" class="icon-checked" alt="">
                            </div>
                          </div>
                        </div>
                        <div class="payment-method-detail">
                          <div class="d-flex payment-recommend-title">
                            <h6 class="payment-title">Non Refundable</h6>
                            <div class="d-flex">
                              <div class="recommend-wrapper">
                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                  xmlns="http://www.w3.org/2000/svg">
                                  <path
                                    d="M10.4525 8.35301C10.3014 8.49942 10.232 8.71117 10.2664 8.91884L10.785 11.7888C10.8288 12.0321 10.7261 12.2783 10.5225 12.4188C10.323 12.5647 10.0576 12.5822 9.84001 12.4655L7.25643 11.118C7.1666 11.0702 7.06685 11.0445 6.96476 11.0416H6.80668C6.75185 11.0498 6.69818 11.0673 6.64918 11.0941L4.06501 12.448C3.93726 12.5122 3.7926 12.5349 3.65085 12.5122C3.30551 12.4468 3.0751 12.1178 3.13168 11.7708L3.65085 8.90076C3.68526 8.69134 3.61585 8.47842 3.46476 8.32967L1.35835 6.28801C1.18218 6.11709 1.12093 5.86042 1.20143 5.62884C1.2796 5.39784 1.4791 5.22926 1.72001 5.19134L4.61918 4.77076C4.83968 4.74801 5.03335 4.61384 5.13251 4.41551L6.41001 1.79634C6.44035 1.73801 6.47943 1.68434 6.52668 1.63884L6.57918 1.59801C6.6066 1.56767 6.6381 1.54259 6.6731 1.52217L6.73668 1.49884L6.83585 1.45801H7.08143C7.30076 1.48076 7.49385 1.61201 7.59476 1.80801L8.88918 4.41551C8.98251 4.60626 9.16393 4.73867 9.37335 4.77076L12.2725 5.19134C12.5175 5.22634 12.7223 5.39551 12.8033 5.62884C12.8798 5.86276 12.8138 6.11942 12.6342 6.28801L10.4525 8.35301Z"
                                    fill="#0F172A"></path>
                                </svg>
                                <span class="recommend-text">Recommended</span>
                              </div>
                              <span class="label-discount">-15%</span>
                            </div>
                          </div>

                          <div class="list-method-type">
                            <div class="method-type-item ">
                              <img class="image-payment-paypal" src="./images/type-payment-6.png" alt="" />
                            </div>
                            <div class="method-type-item ">
                              <img class="image-payment-paypal" src="./images/type-payment-7.png" alt="" />
                            </div>
                            <div class="method-type-item ">
                              <img class="image-payment-paypal" src="./images/type-payment-8.png" alt="" />
                            </div>
                            <div class="method-type-item ">
                              <img class="image-payment-paypal" src="./images/type-payment-9.png" alt="" />
                            </div>
                          </div>
                        </div>
                      </a>
                    </li>
                  </ul>
                  <div id="tabs-1"></div>
                  <div id="tabs-2"></div>
                  <div id="tabs-3">
                    <div class="non-refundable-content-tab">
                      <h5 class="title">
                        <span class="highlight">Select</span> a cryptocurrency to
                        pay:
                      </h5>
                      <div class="list-cryptocurrency-to-pay">
                        <div class="cryptocurrency-to-pay-item">
                          <h6 class="cryptocurrency-title">BNB Chain</h6>
                          <div class="list-cryptocurrency-to-pay-box">
                            <!-- thêm class active để tạo trạng thái active khi click -->
                            <div class="box-cryptocurrency-item active">
                              <img src="./images/type-payment-8.png" class="cryptocurrency-image" alt="" />
                              <label class="cryptocurrency-name">BNB</label>
                            </div>
                            <div class="box-cryptocurrency-item">
                              <img src="./images/type-payment-9.png" class="cryptocurrency-image" alt="" />
                              <label class="cryptocurrency-name">USDT</label>
                            </div>
                          </div>
                        </div>
                        <div class="cryptocurrency-to-pay-item">
                          <h6 class="cryptocurrency-title">ETH Chain</h6>
                          <div class="list-cryptocurrency-to-pay-box">
                            <div class="box-cryptocurrency-item">
                              <img src="./images/type-payment-7.png" class="cryptocurrency-image" alt="" />
                              <label class="cryptocurrency-name">ETH</label>
                            </div>
                            <div class="box-cryptocurrency-item">
                              <img src="./images/type-payment-9.png" class="cryptocurrency-image" alt="" />
                              <label class="cryptocurrency-name">USDT</label>
                            </div>
                          </div>
                        </div>
                        <div class="cryptocurrency-to-pay-item">
                          <h6 class="cryptocurrency-title">BTC Chain</h6>
                          <div class="list-cryptocurrency-to-pay-box">
                            <div class="box-cryptocurrency-item">
                              <img src="./images/type-payment-6.png" class="cryptocurrency-image" alt="" />
                              <label class="cryptocurrency-name">BTC</label>
                            </div>
                          </div>
                        </div>
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
                      <img src="./images/icon-apple.png" class="viva-image" alt="" />
                    </a>
                  </div>
                </div>
                <div class="register-form__footer">
                  <a href="#" class="btn-payment-now">Payment Now</a>
                  <div class="privacy-and-terms-block">
                    <p class="privacy-and-terms-block__text">By proceeding, you agree to our <a href="#"
                        class="privacy-and-terms-block__link">Terms of Service</a> and <a href="#"
                        class="privacy-and-terms-block__link">Privacy Policy.</a></p>
                  </div>

                  <div class="secure-and-encrypted__block">
                    <img src="./images/icon-lock.png" class="icon-lock" alt="">
                    <p class="secure-and-encrypted__text">Secure and encrypted payments</p>
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

    <!-- START: SPORT LEAGUE AND TOURNAMENTS -->
    <section class="pricing-page__tournaments">
      <div class="container">
        <div class="tournament-block__content">
          <div class="tournament-block__header">
            <h2 class="tournament-block__title">Sports league and tournaments available on SportX247</h2>
            <p class="tournament-block__description">Your Premium sucription covers all the league and tournament listed
            </p>
          </div>

          <div class="tournament-block__list common-scroll-bar">
            <div class="tournament-block__list-row">
              <a href="#" class="list-sport__item">
                <img src="./images/sport-league-1.png" class="list-sport__image" alt="">
              </a>
              <a href="#" class="list-sport__item">
                <img src="./images/sport-league-2.png" class="list-sport__image" alt="">
              </a>
              <a href="#" class="list-sport__item">
                <img src="./images/sport-league-3.png" class="list-sport__image" alt="">
              </a>
              <a href="#" class="list-sport__item">
                <img src="./images/sport-league-4.png" class="list-sport__image" alt="">
              </a>
              <a href="#" class="list-sport__item">
                <img src="./images/sport-league-5.png" class="list-sport__image" alt="">
              </a>
              <a href="#" class="list-sport__item">
                <img src="./images/sport-league-6.png" class="list-sport__image" alt="">
              </a>
              <a href="#" class="list-sport__item">
                <img src="./images/sport-league-7.png" class="list-sport__image" alt="">
              </a>
              <a href="#" class="list-sport__item">
                <img src="./images/sport-league-8.png" class="list-sport__image" alt="">
              </a>
              <a href="#" class="list-sport__item">
                <img src="./images/sport-league-9.png" class="list-sport__image" alt="">
              </a>
            </div>
            <div class="tournament-block__list-row">
              <a href="#" class="list-sport__item">
                <img src="./images/sport-league-1.png" class="list-sport__image" alt="">
              </a>
              <a href="#" class="list-sport__item">
                <img src="./images/sport-league-2.png" class="list-sport__image" alt="">
              </a>
              <a href="#" class="list-sport__item">
                <img src="./images/sport-league-3.png" class="list-sport__image" alt="">
              </a>
              <a href="#" class="list-sport__item">
                <img src="./images/sport-league-4.png" class="list-sport__image" alt="">
              </a>
              <a href="#" class="list-sport__item">
                <img src="./images/sport-league-5.png" class="list-sport__image" alt="">
              </a>
              <a href="#" class="list-sport__item">
                <img src="./images/sport-league-6.png" class="list-sport__image" alt="">
              </a>
              <a href="#" class="list-sport__item">
                <img src="./images/sport-league-7.png" class="list-sport__image" alt="">
              </a>
              <a href="#" class="list-sport__item">
                <img src="./images/sport-league-8.png" class="list-sport__image" alt="">
              </a>
              <a href="#" class="list-sport__item">
                <img src="./images/sport-league-9.png" class="list-sport__image" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ENDS: SPORT LEAGUE AND TOURNAMENTS -->

    <!-- START: TOP RATED LIVESTREAMING SERVICE -->
    <div class="pricing-page__livestreaming-service">
      <div class="container">
        <div class="livestreaming-service__money-back">
          <img src="./images/money-back-image.png" class="money-back__image" alt="">
          <h3 class="money-back__title">7-day money-back guarantee</h3>
          <p class="money-back__description">Take your time to enjoy our sports livestreaming service completely
            risk-free.</p>
        </div>
        <!-- 7 day money back for mobile -->
        <!-- 7 day money back for mobile -->
        <div class="livestreaming-service__content">
          <div class="livestreaming-service__left">
            <div class="livestreaming-service__header-content">
              <h2 class="livestreaming-service__title">
                Top-rated sports livestreaming service
              </h2>
              <p class="livestreaming-service__description">Real time sports coverage from all around the world -
                including real time results of the matches in all of the football leagues and competitions</p>
            </div>

            <div class="livestreaming-service__list-number">
              <div class="number-item">
                <h4 class="number-item__title">Countries and territories</h4>
                <span class="number-item__value">200+</span>
              </div>
              <div class="number-item">
                <h4 class="number-item__title">Leagues and tournaments</h4>
                <span class="number-item__value">100+</span>
              </div>
              <div class="number-item">
                <h4 class="number-item__title">Dedicated support</h4>
                <span class="number-item__value">24/7</span>
              </div>
              <div class="number-item">
                <h4 class="number-item__title">Paid users</h4>
                <span class="number-item__value">100,000+</span>
              </div>
            </div>
          </div>
          <div class="livestreaming-service__right">
            <img src="./images/livestreaming-service-image.png" class="livestreaming-service-image" alt="">
          </div>
        </div>

        <a href="#" class="btn-get-plan">Get Plan</a>
      </div>
    </div>
    <!-- START: TOP RATED LIVESTREAMING SERVICE -->
  </div>

  <div class="price-popup">
    <div class="price-popup__body">
      <div class="price-popup__close">
        <img src="./images/icon-close.png" class="icon-close" alt="">
      </div>
      <div class="price-popup-content">
        <h3 class="price-popup-title">Wait! We have a secret deal for you</h3>
        <h4 class="price-popup-sub-title">GRAB THIS SPECIAL OFFER</h4>
        <div class="price-popup-content__detail">
          <h5 class="prefix_label">24 MONTHS</h5>
          <div class="shadow-content-wrapper">
            <span class="success-text">+ 6 MONTHS</span>
            <div class="box-shadow green-shadow"></div>
          </div>
        </div>
        <div class="price-popup-content__detail">
          <h5 class="prefix_label">For just</h5>
          <div class="shadow-content-wrapper">
            <span class="primary-text">$4.8/month</span>
            <div class="box-shadow red-shadow"></div>
          </div>
        </div>
        <a href="#" title="" target="" class="price-popup-content__btn">Grab the deal</a>
        <div class="price-popup-content__countdown">
          <h3 class="countdown__title">Hurry up! Time is running out</h3>
          <ul class="list__countdown">
            <li class="list__countdown-item">
              <span class="time" id="countdown-time-hour"></span>
              <span class="label">Hour</span>
            </li>
            <li class="list__countdown-item">
              <span class="time" id="countdown-time-minute"></span>
              <span class="label">Minute</span>
            </li>
            <li class="list__countdown-item">
              <span class="time" id="countdown-time-second"></span>
              <span class="label">Second</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <?php include "templates/footer2.php"; ?>
  <script src="./js/popup.js"></script>
  <script>
  $(function() {
    $("#payment-method-tabs").tabs({
      active: 1,
    });
  });
  </script>
</body>

</html>