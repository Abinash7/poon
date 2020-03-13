$(document).ready(function () {
  var page_link = window.location.href.substr(window.location.href.lastIndexOf("/") + 1);
  $("nav ul li a").each(function () {
    if ($(this).attr("href") == page_link)
      $(this).css({
        'background-color': 'green'
      });
  });
});

