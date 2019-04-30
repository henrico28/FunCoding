var usernameExist = document.getElementById('username');
var auth = document.getElementById('userauth');

usernameExist.addEventListener('keyup', function () {
    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            auth.innerHTML = xhr.responseText;
            if (auth.innerHTML == "Username bisa digunakan") {
                auth.style.color = 'green';
            } else {
                auth.style.color = 'red';
            }
        }
    }

    xhr.open('GET', 'Controller/usernameController.php?usr=' + usernameExist.value, true);
    xhr.send();
})