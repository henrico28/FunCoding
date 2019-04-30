<html>
    <head>
        <title>Fun Coding</title>
        <link rel="stylesheet" href="View/styles/stylehome.css"/>
    </head>
    <body id="bground">
        <div id="container">
            <div id="left">
                <div><img src="View/images/logo.png"></div>
                <div class="slideshow-container">
                    <div class="mySlides fade">
                    <img id="image" src="View/images/description.png">
                    </div>

                    <div class="mySlides fade">
                    <img id="image" src="View/images/vision.png">
                    </div>

                    <div class="mySlides fade">
                    <img id="image" src="View/images/mission.png">
                    </div>
                </div>
            </div>
            <div><hr></div>
            <div id="right">
                <div><a href="login"><input type="button" value="Log-In"></a></div>
                <br>
                <div><a href="signup"><input type="button" value="Sign-Up"></a></div>
            </div>
        </div>
    </body>
    <script>
        var slideIndex = 0;
        showSlides();

        function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}    
            slides[slideIndex-1].style.display = "block";  
            setTimeout(showSlides, 4000);
        }
    </script>
    
</html>