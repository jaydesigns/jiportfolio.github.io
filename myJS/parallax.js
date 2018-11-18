        window.addEventListener("DOMContentLoaded", parallaxScroll, false);

        var projectPic = document.getElementById("projectImage");
        var gridBox = document.getElementById("box-6");


        var xScrollPosition;
        var yScrollPosition;

        function parallaxScroll(e){
            xScrollPosition = window.scrollX;
            yScrollPosition = window.scrollY;

            setTranslate(0, yScrollPosition * -0.2, projectPic);
            setTranslate(0, yScrollPosition * -0.5, gridBox);


            requestAnimationFrame(parallaxScroll);
        }

        function setTranslate(xPos, yPos, el) {
            el.style.transform = "translate3d(" + xPos + ", " + yPos + "px, 0";
        }