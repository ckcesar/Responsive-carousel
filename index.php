<!doctype html>
<html>
<head>
    <meta charset="utf-8" >
    <meta name="viewport" content="width=device-width, user-scalable=no" >
    <link rel="stylesheet" media="all" type="text/css" href="css/style-demo.css">

    <script src="script/jquery-1.11.1.js"></script>
    <script src="script/jquery.easing-1.3.js"></script>
    <script src="script/jquery.jcarousellite.js"></script>
</head>
<body>
    
    <div class="galeria_rede" >
        <!-- Vou adicionar um comentário aqui com o Nome do Cesar Augusto :) -->
        <h2>Tamanho da imagem a ser cadastrada é 878 x 469....</h2>
        
            <div class="custom-container widget">
                <div class="mid">
                    <img class="imagem_grande" src="image/banner01.png" alt="1">
                </div>
                
                <div class="titulo_galeria"> <p>Descrição de teste</p> </div>
                
                <a href="#" class="prev">&lsaquo;</a>
                <div class="carousel">
                    <ul class="ul_galeria">
                        <li class="li_imagens"><img class="img_galeria" src="image/banner01.png"></li>
                        <li class="li_imagens"><img class="img_galeria" src="image/banner02.png"></li>
                        <li class="li_imagens"><img class="img_galeria" src="image/banner03.png"></li>
                        <li class="li_imagens"><img class="img_galeria" src="image/banner04.png"></li>
                        <li class="li_imagens"><img class="img_galeria" src="image/banner05.png"></li>
                        <li class="li_imagens"><img class="img_galeria" src="image/banner06.png"></li>
                    </ul>
                    <div class="clear" ></div>
                </div>
                <a href="#" class="next">&rsaquo;</a>
                <div class="clear"></div>
            </div>

            <script type="text/javascript">
                $(function() {
                    $(".widget .carousel").jCarouselLite({
                        btnNext: ".widget .next",
                        btnPrev: ".widget .prev",
                        speed: 800,
                        easing: "easeOutBack"
                    });
                    $(".widget .img_galeria").click(function() {
                        $(".widget .mid .imagem_grande").attr("src", $(this).attr("src"));
                    })
                });
            </script>


    </div>
</body>
</html>
