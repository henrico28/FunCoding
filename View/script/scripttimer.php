<script>
var now = new Date();
var countDownDate = now.getMinutes()+20;
var x = setInterval(function() {
  var now = new Date().getMinutes();
  var distance = countDownDate - now;
  var minutes = Math.floor((distance));
  document.getElementById("time").innerHTML = minutes + "m ";
  if (distance < 0) {
    clearInterval(x);
    location.assign("result");
  }
}, 1000);
</script>