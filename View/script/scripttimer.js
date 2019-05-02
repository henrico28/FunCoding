function startTimer(duration, display) {

    var minTimer = duration, minutes, seconds;
    
    setInterval(function () {
        minutes = parseInt(minTimer / 60)
        seconds = parseInt(minTimer % 60);

        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds;

        if (--minTimer < 0) {
            minTimer = duration
        }

    }, 1000);
}

window.onload = function () {
    var oneMin = 1200 * 1,
        display = document.querySelector('#time');
    startTimer(oneMin, display);
};