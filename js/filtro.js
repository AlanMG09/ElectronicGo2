(function () {
    $(document).ready(function () {
        $(".categoria").click(function (e) {
            e.preventDefault();
            var filtro = $(this).attr("data-filter");

            if (filtro == "todos") {
                $(".producto").show(500);
            } else {
                $(".producto").not("." + filtro).hide(500);
                $(".producto").filter("." + filtro).show(500);
            }
        });

        $(".producto").click(function () {
            $(this).addClass("active").siblings().removeClass("active");
        });
    });
}())