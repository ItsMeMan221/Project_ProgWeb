$(window).scroll(function () {
  let scroll = $(this).scrollTop();

  $('.parallax h1').css({
    'transform': 'translate(0px, ' + scroll/3 + '%)',
  });

  $('.parallax h2').css({
    'transform': 'translate(0px, ' + scroll/3.5 + '%)',
  });
  $('.parallax .btn-explr button').css({
    'transform': 'translate(0px, ' + scroll/2  + '%)',
  });
});

