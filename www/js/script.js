  let entrance = document.getElementById("entrance");
  let open_entrance = document.getElementById("open_entrance");
  let open_entrance_mobi = document.getElementById("open_entrance_mobi");
  let show_entrance = document.getElementById("show_entrance");

  let $entrance_style = function () {
    if (entrance.style.display === "block") {
      entrance.style.display = "none"
    } else {
      entrance.style.display = "block"
    } 
  }

if (open_entrance != null) {
  open_entrance.addEventListener("click", $entrance_style, false);
  open_entrance_mobi.addEventListener("click",  $entrance_style, false);
  show_entrance.addEventListener("click",  $entrance_style, false);
}

let registration = document.getElementById("registration");
  let open_registration = document.getElementById("open_registration");
  let open_registration_mobi = document.getElementById("open_registration_mobi");
  let show_registration = document.getElementById("show_registration");

let registration_style = function () {
    if (registration.style.display === "block") {
      registration.style.display = "none"
    } else {
      registration.style.display = "block"
    } 
}
 if (open_registration != null) {
  open_registration.addEventListener("click", registration_style, false);
  open_registration_mobi.addEventListener("click",  registration_style, false);
  show_registration.addEventListener("click",  registration_style, false);
}

$(document).ready(function() {
   let margin = 10; // переменная для контроля докрутки
   $("a.nav__link, a.scroll_tops, a.intro__a, a.scroll").click(function() {
    // тут пишите условия, для всех ссылок или для конкретных
      $("html, body").animate({
         scrollTop: $($(this).attr("href")).offset().top-margin+ "px" 
         // .top+margin - ставьте минус, если хотите увеличить отступ
      }, {
         duration: 1700, // тут можно контролировать скорость
         easing: "swing"
      });
      return false;
   });
});

document.getElementById('download').addEventListener('click', function () {
  alert("Приложения в Google Play еще нету, так как самого приложения нету... :(");
});
document.getElementById('downloads').addEventListener('click', function () {
  alert("В данный момент приложение еще разрабатываеться. Следите за новостями");
});
document.getElementById('downloadse').addEventListener('click', function () {
  alert("Ищем разработчика на iOS...");
});
                