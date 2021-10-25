let s = e => document.querySelector(e);

usersJson.map((e) => {
  let carousel_item = document.querySelector('.carousel-item').cloneNode(true);
  let s_item = e => carousel_item.querySelector(e)
  document.querySelector('.carousel-inner').append(carousel_item);
  let carousel_item_all = document.querySelectorAll('.carousel-item');
  if (carousel_item_all.length == 7) {
    carousel_item_all[0].style.display = 'none';
    carousel_item_all[1].classList.add('active');
  }
  s_item('.foto-img img').src = `assets/${e.img}`;
  s_item('.guy-name h6').innerHTML = e.nome;
  s_item('.guy-name small').innerHTML = e.turma;
  s_item('.content p').innerHTML = e.texto;
  s_item('#github').href = e.github;
  s_item('#instagram').href = e.instagram;
  s_item('#facebook').href = e.facebook;
});



/*
*   $(function () {
*     $('[data-toggle="popover"]').popover()
*   })
**/
