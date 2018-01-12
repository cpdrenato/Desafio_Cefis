//ajax  - Renato Lucena
$(function () {
    $.ajax({
        type: 'GET',
        url: 'https://cefis.com.br/api/v1/event',
        dataType: "json",
        success: montarCarousel
    });
});

//Monta o Carrocel
function montarCarousel(result) {
    //Adiciona 
    $.each(result.data, function (key, value) {
        var link = 'https://cefis.com.br/curso/'+value.title.toLocaleLowerCase().replace(' ', '-')+'/'+value.id;

        $('.cursos').append(
            $(document.createElement('div')).addClass('curso').append(
                $(document.createElement('a')).addClass('curso-link').attr('href', link).attr('target', '_blank').append(
                    $(document.createElement('div')).addClass('curso-image').css('background-image', 'url("'+value.banner+'")'),
                    $(document.createElement('div')).addClass('curso-title').append(
                        $(document.createElement('p')).text(value.title)
                    ),
                    $(document.createElement('div')).addClass('curso-resume').append(
                        $(document.createElement('p')).html(value.resume)
                    ).hide()
                )
            )
        );
    });

    //plugin Slick
    $('.cursos').slick({
        autoplay: true,
        autoplaySpeed: 2000,
        slidesToShow: 3,
        slidesToScroll: 1,
        prevArrow: $("#cursos-prev"),
        nextArrow: $("#cursos-next"),
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            }
        ]
    });

    //Eventos para exibir e esconder a descrição do curso
    $('.curso').hover(function () {
        $(this).find('.curso-title').hide();
        $(this).find('.curso-resume').show();
    }, function () {
        $(this).find('.curso-title').show();
        $(this).find('.curso-resume').hide();
    });
}