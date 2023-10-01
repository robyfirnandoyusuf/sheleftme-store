(function ($) {
  "use strict";

  jQuery(document).ready(function ($) {
    // Set the date we're counting down to
    var countDownDate = new Date("Oct 31, 2025 00:10:00").getTime();

    // Update the count down every 1 second
    var x = setInterval(function () {

      // Get today's date and time
      var now = new Date().getTime();

      // Find the distance between now and the count down date
      var distance = countDownDate - now;

      document.getElementById('days').innerText = Math.floor(distance / (1000 * 60 * 60 * 24)),
        document.getElementById('hours').innerText = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)),
        document.getElementById('minutes').innerText = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60)),
        document.getElementById('seconds').innerText = Math.floor((distance % (1000 * 60)) / 1000);

      // If the count down is finished, write some text
      if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
      }
    }, 1000);

  });


}(jQuery));

