window.addEventListener("scroll", function() {
    var header = document.querySelector("header");
    var img = document.getElementById("image");
    header.classList.toggle("sticky", window.scrollY > 0);

    $(function() {

        $(window).scroll(function() {
            debugger;
            var x = $(window).scrollTop();

            let screenWidth = window.innerWidth;

            if (x >= 0.1 && screenWidth > 762) {
                $("img").hide();
            } else {
                $("img").show();
            }

        });

    });

})