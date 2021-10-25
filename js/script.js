let horario = 0;

setInterval(() => {
    let date = new Date();
    let tempo = `${date.getHours() + 1}:${date.getMinutes()}:${date.getSeconds()}`
    $(".projetos--computer--content--title--watch").html(tempo)
}, 1000);

$(".projetos--buttons--item").each((index, el) => {
    $(el).attr("key", index);

    $(el).click(() => {
        $('.projetos--buttons--item').removeClass('active');
        $(el).addClass('active');
        let key = $(el).attr("key");
        if (content[key].button != undefined) {
            $('.projetos--computer--content--body').html(content[key].content + content[key].button);
        } else {
            $('.projetos--computer--content--body').html(content[key].content);
        };
        let strTeam = '';
        let strName = '';
        let zIndex = content[key].team.length;
        content[key].team.forEach((element, index) => {
            zIndex--;
            strTeam += `<div class="projetos--computer--content--title--menu--area--img" style="margin-left: calc(15px * ${index});z-index: ${zIndex};"><img src="assets/${element}"></div>`;
        });
        content[key].name.forEach((element, index) => {
            console.log(`El = ${element} \n Index = ${index}`);
            strName += `<div class="dropdown-item"><img src="assets/${content[key].team[index]}"><span>${element}</span></div>`;
        });

        $('.dropdown-menu').html(strName);
        $('.projetos--computer--content--title--menu--area').html(strTeam);
    });

});