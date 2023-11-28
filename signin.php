<?php include "templates/head.php"; ?>

<body>
  <div class="page-login-and-register__wrapper">
    <?php include "templates/header.php"; ?>
    <div class="container">
      <div class="page-login-and-register__content">
        <aside class="page-login-and-register__left">
          <h1 class="main-title">Become a Sportx247 member and you will get</h1>
          <nav class="page-login-and-register__nav">
            <ul class="page-login-and-register__list">
              <li class="page-login-and-register__item">
                <img src="./images/icon-soccer.png" class="page-login-and-register__item-image" alt="">
                <p class="page-login-and-register__item-description">Early updated Top Football Leagues and Tournament</p>
              </li>
               <li class="page-login-and-register__item">
                <img src="./images/icon-soccer.png" class="page-login-and-register__item-image" alt="">
                <p class="page-login-and-register__item-description"> Full HD 1080p high quality football streaming videos</p>
              </li>
               <li class="page-login-and-register__item">
                <img src="./images/icon-soccer.png" class="page-login-and-register__item-image" alt="">
                <p class="page-login-and-register__item-description">Diverse supported devices - TV, laptops, smartphones, and other electronic devices</p>
              </li>
               <li class="page-login-and-register__item">
                <img src="./images/icon-soccer.png" class="page-login-and-register__item-image" alt="">
                <p class="page-login-and-register__item-description">English commentary</p>
              </li>
            </ul>
          </nav>
        </aside>
        <aside class="page-login-and-register__right">
          <form class="page-login-and-register__form" method="" action="">
            <h2 class="form-control__title">Sign in</h2>
            <div class="form-control__wrapper">
              <label class="form-control__label" for="email">Your Email</label>
               <input type="text" name="" value="" placeholder="Enter your email" class="form-control__input" id="email" autocomplete="off" />
            </div>
            <div class="form-control__wrapper">
              <label class="form-control__label" for="password">Password</label>
               <input type="password" name="" value="" placeholder="Enter your password" class="form-control__input" id="password" autocomplete="off" />
            </div>

            <button class="form-control__btn-submit">Sign in</button>
          </form>
          <div class="page-login-and-register__signin-viva">
            <h6 class="signin-viva__title">Or sign in via</h6>
            <div class="signin-viva__list">
              <a href="#" target="" title="" class="signin-viva__item">
                <img src="./images/icon-facebook.png" class="signin-viva__icon"  alt="" />
              </a>
              <a href="#" target="" title=""  class="signin-viva__item">
                <img src="./images/icon-google.png" class="signin-viva__icon"  alt="" />
              </a>
              <a href="#" target="" title=""  class="signin-viva__item">
                <img src="./images/icon-apple.png" class="signin-viva__icon"  alt="" />
              </a>
            </div>
          </div>

          <div class="page-login-and-register__question">
            <p>Don't have an account? Let's <a href="#" title="" target="">sign up</a></p>
          </div>
        </aside>
      </div>
    </div>
  </div>
</body>

</html>