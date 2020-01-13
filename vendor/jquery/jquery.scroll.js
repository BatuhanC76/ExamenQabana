$(document).ready(function () {
  $('.carousel').carousel({
    pause: "false"
  });
});

$(document).on('click', '.navbar-collapse.in', function (e) {
  if ($(e.target).is('a')) {
    $(this).collapse('hide');
  }
});



