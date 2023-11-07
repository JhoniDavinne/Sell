<!DOCTYPE html>
<html lang="pt-br">


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
        <link rel="stylesheet" href="\assets\sell\css\style_confirm.css">
        <link rel="stylesheet" type="text/css" href="/assets/sell/css/meus_boletos_srv_confirm.css"/>
    <!-- //CSS -->
        
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



    <div class="container-md">
        <div class="row">
            <div class="col-12">
                <div class="card-sell shadown-sell card-body-confirm-sell">
                    <div  width="600px" height="50px" align="center">
                            <div align="center">
                                {{$result->humanbar}}
                            </div>
                            <div>
                                <img src="{{$str_barcode}}" width="550px" height="75px" style="padding: 0.2rem 1rem 1rem 1rem">
                            </div>
                        </tr>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>

</html>
