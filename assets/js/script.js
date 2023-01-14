function volumeToggle(button) {

    var muted = $(".previewVideo").prop("muted");
    $(".previewVideo").prop("muted", !muted);

    $(button).find("i").toggleClass("fa-volume-xmark fa-volume-high");

}


function previewEnded() {
    $(".previewVideo").toggle();
    $(".previewImage").toggle();
}