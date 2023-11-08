$(function () {
  $(document).on("click", ".navButton", function (event) {
    $("html, body").animate(
      {
        scrollTop: $($(this).attr("href")).offset().top,
      },
      800
    );
    event.preventDefault();
  });

  $(document).on("click", ".navLi", function (event) {
    $(".navLi").removeClass("active");
    $(this).addClass("active");
  });
});
