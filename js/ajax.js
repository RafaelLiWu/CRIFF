$(".textCep").focusout((el) => {
    if ($(".textCep").val().length == 8) {
        let cep = $(".textCep").val();
        let url = `https://viacep.com.br/ws/${cep}/json/`;
        $.ajax({
            url: url,
            type: 'GET',
            dataType: 'JSONP',
            success: (data) => {
                $("#Cidade").val(data.localidade)
            }
        })
    };
});