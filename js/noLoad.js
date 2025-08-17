
// Seleciona todos os links com a classe 'ajax-link'
$('[realtime]').on('click', function (event) {
    // 1. Impede o comportamento padrão do link
    event.preventDefault();
    // Pega o href do link clicado
    var url = $(this).attr('href');

    // 2. Faz a requisição AJAX
    $.ajax({
        url: url,
        type: 'GET',
        dataType: 'html', // Espera que o servidor retorne um trecho de HTML

        beforeSend: function () {
            // Opcional: Adiciona um efeito de "carregando"
            $('#content').html('<p>Carregando...</p>');
        },
        success: function (res, status, array) {
            // 3. Injeta o HTML recebido no contêiner                      
            let content = $(array.responseText).eq('17').html();            
            $('#content').html(content);
            initMap();
            // 4. (Opcional) Atualiza a URL na barra de endereços
            // Isso permite que o usuário use os botões de voltar/avançar do navegador
            history.pushState(null, null, url);
        },
        error: function (jqXHR, textStatus, errorThrown) {
            // Lidar com erros de carregamento
            $('#content').html('<p>Não foi possível carregar o conteúdo. Por favor, tente novamente mais tarde.</p>');
            console.error("Erro ao carregar a página: " + textStatus, errorThrown);
        }
    })
});

// Código para lidar com os botões de voltar/avançar do navegador

$(window).on('popstate', function(event) {
    var url = window.location.pathname;
    if (url === '/') {
        // Se estiver na página inicial, carrega o conteúdo padrão
        $('#content').html('<h2>Página Inicial</h2><p>Bem-vindo ao nosso site!</p>');
    } else {
        // Caso contrário, faz a requisição AJAX para a URL atual
        $.get(url, function(data) {
           $('#content').html(content);
        });
    }
});

