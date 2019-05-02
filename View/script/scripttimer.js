// Set the date we're counting down to
var now = new Date();
var countDownDate = now.getMinutes()+20;

// Update the count down every 1 second
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getMinutes();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var minutes = Math.floor((distance));
    
  // Output the result in an element with id="demo"
  document.getElementById("time").innerHTML = minutes + "m ";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("time").innerHTML = "EXPIRED";
  }
}, 1000);