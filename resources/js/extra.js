// data-aos
Aos.init({
    duration: 2000
});


// custom file
$(".custom-file-input").on("change", function () {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});

$(function () {
    $('[data-toggle="tooltip"]').tooltip()
});

$(document).ready(function () {
    $("fa-times").click(function () {
        $("carousel-caption").hide();
    });
});
