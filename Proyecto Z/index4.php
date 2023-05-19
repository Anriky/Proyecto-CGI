<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <link href="https://kit-pro.fontawesome.com/releases/v5.15.1/css/pro.min.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="estilos_carrusel.css" />
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&family=Macondo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Amatic+SC:wght@700&family=Macondo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilo4.css">
    <title>Mas...</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script> //Script Menu
        posicionarMenu();

        $(window).scroll(function () {
            posicionarMenu();
        });
        function posicionarMenu() {
            var altura_del_header = $('.header').outerHeight(true);
            var altura_del_menu = $('.menu').outerHeight(true);

            if ($(window).scrollTop() >= altura_del_header) {
                $('.menu').addClass('fixed');
                $('.wrapper').css('margin-top', (altura_del_menu) + 'px');
            } else {
                $('.menu').removeClass('fixed');
                $('.wrapper').css('margin-top', '0');
            }
        }
    </script>
    <div class="header">
        <h1>Formulario</h1>
    </div>
    <div class="menu"><!--Menu-->
        <a href="https://al211196.000webhostapp.com/Proyectos/Proyecto%20Z/index.html">CGI</a>
        <a href="https://al211196.000webhostapp.com/Proyectos/Proyecto%20Z/index2.html">Historia</a>
        <a href="https://al211196.000webhostapp.com/Proyectos/Proyecto%20Z/index3.html">Galeria</a>
        <a href="#">Mas...</a>
    </div>
    </head>
<body>
    <form class="encuesta" action="guardar.php" method="POST" id="contact_form" runat="server" enctype="multipart/form-data">
                
        <label for="sexo">Favor de identificar su sexo:</label><br>
        <div><input type="radio" name="sexo" value="Femenino"/>Femenino
            <input type="radio" name="sexo" value="Masculino"/>Masculino</div>
            <br>

      
        <label for="edad">Edad:</label> <input type="number" id="edad" name="edad"  min="5" max="150"required ><br><br> 



        <label for="pais">Pais:</label><br>
        <input type="text" id="pais" name="pais"  maxlength="40"required ><br><br>
        



      <label for="idioma">Hasta cuantos idiomas maneja:</label><br>
      <select name="idioma"required>
        <option value="" >--------</option>
          <option value="Espa&ntilde;ol">Solo espa&ntilde;ol</option>
          <option value="English">English</option>
          <option value="Espa&ntilde;ol e ingles">espa&ntilde;ol e ingles</option>
          <option value="2 idiomas">Espa&ntilde;ol y otro</option>
          <option value="Triada de lenguas">3 idiomas (Espa&ntilde;ol, ingles y japones)</option>
          <option value="3 idiomas">3 idiomas</option>
          <option value="4 idiomas o mas">4 idiomas o mas (wow!)</option>   
             </select><br><br>
    
        
               <label for="apartado">Cual de los apártados a sido de su mayor agrado?</label><br>
               <div><input type="radio" name="apartado" value="CGI"required/>CGI
               <input type="radio" name="apartado" value="Historia"/>Historia
               <input type="radio" name="apartado" value="Galeria"/>Galeria</div>
               <br>

               <label for="experiencia">Que tan buena considera que fue experiencia al navegar por la pagina?</label><br>
               <select name="experiencia">
              <option value="" >--------</option>
          <option value="No le intereso">No me fije/No le tome importancia</option>
          <option value="Mala">Mala</option>
          <option value="Regular">Regular</option>
          <option value="Buena">Buena</option>
          <option value="Muy buena">Muy buena</option>
          <option value="Excelente">Excelente</option>
             </select><br><br>
               

        
          <label for="saga">Es usted conocedor de la animacion CGI</label><br>
      <div><input type="radio" name="saga" value="si conoce"/>Si
      <input type="radio" name="saga" value="no conoce"/>No</div><br>
       
      
      <button class="submit" types="submit">Enviar Registro</button>
      <br>
      <br>
      <br>
        
         </form>
         <footer>
            <div id="cuadro2">
                <h3>Contactanos</h3>
                <div class="azul">
                    <div><a href="#" class="socialButton twitter">twitter</a></div>
                    <div><a href="#" class="socialButton facebook">facebook</a></div>
                </div>
                <h3>Paleta de colores</h3>
                <img src="img/Pal.png" width="50%">
    
                <nav id="cuatro">
                    <img src="img/QR.png" width="15%">
                </nav>
            </div>
        </footer>
</body>
</html>