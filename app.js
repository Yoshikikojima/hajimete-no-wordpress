$(function () {
  $("#openMenu").on("click", function () {
    $("#menu").slideToggle();
    $(this).toggleClass('open')
  })
})