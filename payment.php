<?php include "templates/head.php"; ?>

<body>
  <?php include "templates/header.php"; ?>
  <?php include "templates/subHeader.php"; ?>
  <div class="payment-page-container">
    <div class="container">
      <div class="payment-page__content-detail-wrapper">
        <section class="payment-page__header">
          <div class="payment-page__header-left">
            <h1 class="payment-page__header-title">Send USDC on Ethereum network</h1>
            <p class="payment-page__header-text">Open your crypto wallet and scan the QR code, or copy the USDC address
              below to make a payment</p>
          </div>
          <div class="payment-page__header-right">
            <div id="timer"></div>
          </div>
        </section>
        <section class="payment-page__intro">
          <img src="./images/icon-info.png" class="icon-info" alt="">
          <p class="intro-text">Only send BNB to this address from BNB on Binance Smart Chain Network. Don’t send BNB
            from other networks or it will result in a loss of funds.</p>
        </section>

        <section class="payment-page__middle-block">
          <div class="payment-page__middle-left">
            <img src="./images/image-qr.png" class="qr-image" alt="">
          </div>
          <div class="payment-page__middle-right">
            <div class="block-value-item">
              <div class="left-block">
                <span class="label">USDC Address</span>
                <p class="value">0x48374abc438053408kdjkldfjglkdfjgl584545</p>
              </div>

              <button class="btn-copy">Copy</button>

            </div>
            <div class="block-value-item">
              <div class="left-block">
                <span class="label">Total Amount</span>
                <p class="value">50.0 USDC</p>
              </div>

              <button class="btn-copy">Copy</button>

            </div>
          </div>
        </section>

        <section class="payment-page__footer-block">
          <h3 class="payment-page__footer-block-title">Have you completed your checkout</h3>
          <p class="payment-page__footer-block-description">Please upload your proof of payment (you can upload your
            receipt screenshot or paste your receipt link here)</p>
          <form action="" method="">
            <input type="text" name="" value="" placeholder="Enter receipt link" class="input-text">
            <div class="payment-page__footer-block-input-file">
              <label for="input-file" class="input-file-label">
                Choose file
              </label>
              <input id="input-file" name="" value="" type="file" />
            </div>
          </form>
          <div class="d-flex justify-end">
            <button class="payment-page__footer-block-btn-submit">Submit</button>
          </div>

        </section>
      </div>
    </div>
  </div>

  <?php include "templates/footer.php"; ?>
  <script>
  const FULL_DASH_ARRAY = 283;
  const WARNING_THRESHOLD = 10;
  const ALERT_THRESHOLD = 5;

  const COLOR_CODES = {
    info: {
      color: "green"
    },
    warning: {
      color: "orange",
      threshold: WARNING_THRESHOLD
    },
    alert: {
      color: "red",
      threshold: ALERT_THRESHOLD
    }
  };

  const TIME_LIMIT = 500
  let timePassed = 0;
  let timeLeft = TIME_LIMIT;
  let timerInterval = null;
  let remainingPathColor = COLOR_CODES.info.color;

  document.getElementById("timer").innerHTML = `
<div class="base-timer">
  <svg class="base-timer__svg" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
    <g class="base-timer__circle">
      <circle class="base-timer__path-elapsed" cx="50" cy="50" r="45"></circle>
      <path
        id="base-timer-path-remaining"
        stroke-dasharray="283"
        class="base-timer__path-remaining ${remainingPathColor}"
        d="
          M 50, 50
          m -45, 0
          a 45,45 0 1,0 90,0
          a 45,45 0 1,0 -90,0
        "
      ></path>
    </g>
  </svg>
  <span id="base-timer-label" class="base-timer__label">${formatTime(
    timeLeft
  )}</span>
</div>
`;

  startTimer();

  function onTimesUp() {
    clearInterval(timerInterval);
  }

  function startTimer() {
    timerInterval = setInterval(() => {
      timePassed = timePassed += 1;
      timeLeft = TIME_LIMIT - timePassed;
      document.getElementById("base-timer-label").innerHTML = formatTime(
        timeLeft
      );
      setCircleDasharray();
      setRemainingPathColor(timeLeft);

      if (timeLeft === 0) {
        onTimesUp();
      }
    }, 1000);
  }

  function formatTime(time) {
    const minutes = Math.floor(time / 60);
    let seconds = time % 60;

    if (seconds < 10) {
      seconds = `0${seconds}`;
    }

    return `${minutes}:${seconds}`;
  }

  function setRemainingPathColor(timeLeft) {
    const {
      alert,
      warning,
      info
    } = COLOR_CODES;
    if (timeLeft <= alert.threshold) {
      document
        .getElementById("base-timer-path-remaining")
        .classList.remove(warning.color);
      document
        .getElementById("base-timer-path-remaining")
        .classList.add(alert.color);
    } else if (timeLeft <= warning.threshold) {
      document
        .getElementById("base-timer-path-remaining")
        .classList.remove(info.color);
      document
        .getElementById("base-timer-path-remaining")
        .classList.add(warning.color);
    }
  }

  function calculateTimeFraction() {
    const rawTimeFraction = timeLeft / TIME_LIMIT;
    return rawTimeFraction - (1 / TIME_LIMIT) * (1 - rawTimeFraction);
  }

  function setCircleDasharray() {
    const circleDasharray = `${(
    calculateTimeFraction() * FULL_DASH_ARRAY
  ).toFixed(0)} 283`;
    document
      .getElementById("base-timer-path-remaining")
      .setAttribute("stroke-dasharray", circleDasharray);
  }
  </script>
</body>

</html>