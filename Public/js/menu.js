$(document).ready(function () {
  $(window).on("scroll", function () {
    if ($(window).scrollTop() > 50) {
      $("#header").addClass("active-header");
      $(".menu-link").addClass("active-menu-links");
      $("#header-img").attr(
        "src",
        "/media/logo.png"
      );
    } else {
      //remove the background property so it comes transparent again (defined in your css)
      $("#header").removeClass("active-header");
      $(".menu-link").removeClass("active-menu-links");
      $("#header-img").attr(
        "src",
        "/media/logo.png"
      );
    }
  });

  // Responsive menu
  $("#responsive-nav-bar").hide();

  $("#image-button-black").click(function () {
    $("#responsive-nav-bar").slideToggle();
  });

  $(
    "#responsive-home-item , #responsive-features-item , #responsive-products-item , #responsive-media-item , #responsive-pricing-item"
  ).click(function () {
    $("#responsive-nav-bar").slideToggle(200);
  });

  // Default sections visibility
  $(".product-content").hide();
  $("#product-container-one").show();

  // Button variables
  var firstButton = $("#first-product-button");
  var secondButton = $("#second-product-button");
  var thirdButton = $("#third-product-button");
  var fourthButton = $("#fourth-product-button");
  var buttons = $(".product-button");

  // Product variables
  var firstProduct = $("#product-container-one");
  var secondProduct = $("#product-container-two");
  var thirdProduct = $("#product-container-three");
  var fourthProduct = $("#product-container-four");

  // Visibility variables
  var firstVisible = firstProduct.is(":visible");
  var secondVisible = secondProduct.is(":visible");
  var thirdVisible = thirdProduct.is(":visible");
  var fourthVisible = fourthProduct.is(":visible");

  // Visible and Hidden Sections .click function
  $(firstButton).click(function () {
    $(".product-content").hide();
    $(firstProduct).fadeIn(600);
    buttons.removeClass("product-button-active");
    firstButton.addClass("product-button-active");
  });

  $(secondButton).click(function () {
    $(".product-content").hide();
    $(secondProduct).fadeIn(600);
    $(secondProduct).css("visibility", "visible");
    buttons.removeClass("product-button-active");
    secondButton.addClass("product-button-active");
  });

  $(thirdButton).click(function () {
    $(".product-content").hide();
    $(thirdProduct).fadeIn(600);
    buttons.removeClass("product-button-active");
    thirdButton.addClass("product-button-active");
  });

  $(fourthButton).click(function () {
    $(".product-content").hide();
    $(fourthProduct).fadeIn(600);
    buttons.removeClass("product-button-active");
    fourthButton.addClass("product-button-active");
  });

  // First Button Styling hidden/visible
  if (firstVisible === true) {
    firstButton.addClass("product-button-active");
  }
});
