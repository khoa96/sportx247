

const openPopup = () => {
  $(".price-popup").addClass("price-popup--show");
}
const closePopup = () => {
  $(".price-popup").removeClass("price-popup--show");
};
// Hide popup on click close button
$(".price-popup__close").on("click", closePopup);

// Hide popup on click outside of popup
$(".price-popup").on("click", function (event) {
  if (event.target.classList.contains("price-popup")) {
    closePopup();
  }
});

const countdown = (timeString) => {
  const countDownDate = new Date(timeString).getTime();

  const x = setInterval(function () {
    const now = new Date().getTime();

    const distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    const hours = Math.floor(
      (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
    );
    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Output the result in an element with id="demo"
    document.getElementById("popup-price-time-hour").innerHTML = String(
      hours
    ).padStart(2, "0");
    document.getElementById("popup-price-time-minute").innerHTML = String(
      minutes
    ).padStart(2, "0");
    document.getElementById("popup-price-time-second").innerHTML = String(
      seconds
    ).padStart(2, "0");
    if (distance <= 0) {
      clearInterval(x);
      document.getElementById("popup-price-time-hour").innerHTML = "00";
      document.getElementById("popup-price-time-minute").innerHTML = "00";
      document.getElementById("popup-price-time-second").innerHTML = "00";
    }
  }, 1000);
}


openPopup()
//đặt thời gian đếm ngược với định dạng: yyyy/mm/dd hh:mm::ss
const timeString = '2023/12/12 00:00:00'
countdown(timeString);
