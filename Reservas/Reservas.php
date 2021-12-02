<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shorcut icon" href="../imagenes/favicon/bandeja.png">
    <title>Reservas</title>
    <link rel="stylesheet" href="estiloreserva.css">
</head>

<body>
  <header>
    <img src="./Imagenes/PuertoCañon.png">
    <nav class="nav-main">
      <ul class="nav-menu">
        <li>
          <a href="../index.html">Inicio</a>
        </li>
        <li>
          <a href="../Menu/menurestaurante.html">Menu</a>
        </li>
        <li>
          <a href="../Reservas/Reservas.php">Reservas</a>
        </li>
        <li>
          <a href="../nosotros/nosotros.html">Quienes somos</a>
        </li>
      </ul>
    </nav>
  </header>
  
<div class="login-form">
        <h1 align="center">RESERVAS</h1>


        <form method="post" >
          <center>
              <hr align="center" width="40%">
      <table border="4">
        <tr>
           <td width="250"> Cuando le gustaria reservar:</td>
           <td width="100"><input type="date" name="dia" size="20"></td>
        </tr>

        <tr>
          <td margin-left="50px" width="250"> Personas:</td>
          <td width="100"><input type="number" name="personas" size="20"></td>
       </tr>
 
         <tr>
          <td width="250">Hora de llegada:</td>
          <td width="100"><input type="time" name="hora" size="20"></td>
          </tr>
 
         <tr>
             <td width="250">Nombre:</td>
                 <td width="100"><input type="text" name="nombre" placeholder="Nombre" size="20"></td>
         </tr>
 
         <tr>
             <td width="250">Email:</td>
             <td width="100"><input type="email" name="email" placeholder="Email" size="20"></td>
         </tr>
 
         <tr>
             <td width="250">Telefono:</td>
             <td width="100"><input type="text" name="telefono" placeholder="Telefono" size="20"></td>
         </tr>
 
         <tr>
             <td width="250">Evento:</td> 
             <td width="100"><input type="text" name="evento" placeholder="Evento" size="20" ></td>
             </tr>
             <tr>
              
         
         </table>
        <input type="submit" name="reservacion" value="RESERVACION">
         
             </div>
         <hr align="center" width="40%"> <br>

         

         
        
      </form>

      <?php include("correo.php")
      ?>

      
      
    </div>
<br><br><br><br><br><br>

      

    <footer>

      <div class="container-footer-all">
    
        <div class="container-body">
    
          <div class="colum1">
            <h6>Mas informacion de la compañia</h6>
    
            <p>Esta compañia se dedica a la venta de comida campestre integrando recetas personalizadas, con su delicioso sazon disfrutandolo al aire libre.</p>
          </div>
    
          <div class="colum2">
            <h6>Redes Sociales</h6>
    
            <div class="fila">
              <img src="./Imagenes/Footer-img/facebook.png">
              <a href="https://www.facebook.com/profile.php?id=100073799962151&viewas=&show_switched_toast=false&show_switched_tooltip=false&show_podcast_settings=false">
                <label>Siguenos en Facebook</label>
              </a>
            </div>
    
    
            <div class="fila">
              <img src="./Imagenes/Footer-img/instagram.png">
              <a href="https://www.instagram.com/puerto_canon/">
                <label>Siguenos en Instagram</label>
              </a>
            </div>
    
    
          </div>
    
          <div class="colum3">
            <h6>Informacion Contactos</h6>
    
            <div class="fila2">
              <img src="./Imagenes/Footer-img/casa.png">
              <label>MZ E CASA 17B MILAGRO DE DIOS</label>
            </div>
    
            <div class="fila2">
              <img src="./Imagenes/Footer-img/smartphone.png">
              <label>+57 3106081064 </label>
            </div>
            <div class="fila2">
              <img src="./Imagenes/Footer-img/correo-electronico.png">
              <label>puertocanon21@gmail.com</label>
            </div>
    
          </div>
    
        </div>
    
        <div class="container-footer">
          <div class="footer2">
            <div class="copyright">
              © 2021 Todos los Derechos Reservados | 
              <a href=""> Magtimus</a>
            </div>
    
            <div class="informacion">
              Informacion Compañia | Privacidad y Politica | Terminos y Condiciones
              <a href=""> Magtimus</a>
            </div>
          </div>
        </div>
    
    
      </div>
    
      </footer>
</body>

</html>