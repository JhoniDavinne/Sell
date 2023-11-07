<!DOCTYPE html>
<html lang="pt-br" style="position: absolute; top: 0px; left: 0px; z-index: 0; width: 100%; height: 100%; transform: matrix(1, 0, 0, 1, 0, 0);">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="https://www.selladm.com.br/wp-content/themes/temaSite">
    <link rel="icon" href="https://www.selladm.com.br/wp-content/uploads/2022/04/Foto-Logo-Favicon-1.png" sizes="32x32">
    <link rel="icon" href="https://www.selladm.com.br/wp-content/uploads/2022/04/Foto-Logo-Favicon-1.png" sizes="192x192">
    <link rel="apple-touch-icon" href="https://www.selladm.com.br/wp-content/uploads/2022/04/Foto-Logo-Favicon-1.png">
    <meta name="msapplication-TileImage" content="https://www.selladm.com.br/wp-content/uploads/2022/04/Foto-Logo-Favicon-1.png">
    <!-- CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="\assets\sell\css\style.css">
        <link rel="stylesheet" type="text/css" href="/assets/sell/css/meus_boletos_srv.css"/>
    <!-- //CSS -->
    <!--JS-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js" integrity="sha512-0XDfGxFliYJPFrideYOoxdgNIvrwGTLnmK20xZbCAvPfLGQMzHUsaqZK8ZoH+luXGRxTrS46+Aq400nCnAT0/w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- //JS -->
        
    <title>Sell Administradora</title>
</head>
<body class="body-sell">
    <div id="header">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light pad-sell-boleto pad-i60" style="justify-content: center;">
                
                    <img src="https://media.giphy.com/media/rB1V9aWgwhBt6XSwm6/giphy.gif" style="width: 55%">
            </nav>
        </div>
    </div>
    <div class="container pad-i60">
        <div class="row">
            <div class="col-12">
                <div class="card-sell-boleto shadow-sell">
                    <div class="card-body-sell">
                        <div class="col-12 align-center pad-40">
                            <h2 class="text-card-sell-h2-sub">Visualização código de barras</h2>
                        </div>                       
                        <form id="form-contato" action="#" method="POST" onsubmit="validarInput(this)">
                            {{ csrf_field() }}
                            <div class="form-group pad-sell-boleto">
                                <input class="form-control-sell" type="text" name="cpfcnpj" id="cpfcnpj" autocomplete="on" placeholder="Digite o CPF/CNPJ" tabindex="1" required
                                onfocus="popoverFocus()" data-container="body" data-toggle="popover" data-placement="bottom" data-content="A quantidade de caracteres deve ser 11 ou 14.">
                            </div>

                            <div class="lead__container__button__container" >
                                <button class="btn-sell-boleto">ACESSAR</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    var cpfMascara = function (val) {
        return val.replace(/\D/g, '').length > 11 ? '00.000.000/0000-00' : '000.000.000-009';
    },
    cpfOptions = {
        onKeyPress: function(val, e, field, options) {
        field.mask(cpfMascara.apply({}, arguments), options);
        }
    };
    $('#cpfcnpj').mask(cpfMascara, cpfOptions);
    function popoverFocus(){
        $('#cpfcnpj').popover('dispose')
    }
    function validarInput(form) {
        var input_length = form.elements["cpfcnpj"].value.replace(/\D/g, '').length;
        console.log(input_length)
        if (input_length < 11 || input_length > 14) {
            $('#cpfcnpj').popover('show')
            event.preventDefault();
            return false; // Interrompe o envio do formulário
        }
        return true; // Permite o envio do formulário
    }
</script>
</html>
