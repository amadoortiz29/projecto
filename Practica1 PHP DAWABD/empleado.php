<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <title>Empleado</title>
    
	<link rel="stylesheet" href="estilos.css">
</head>
<body>
	<header>
		<div class="wrapp">
			<div class="logo">
				<a href="#"><img src="img/logo4.png" alt="FalconMasters"></a>
			</div>
			<nav>
				<ul>
					<li><a href="index.php">Inicio</a></li>
					<li><a href="empleado.php">Empleado</a></li>
					<li><a href="acta_nacimiento.php">acta_nacimiento</a></li>
					
				</ul>
			</nav>
		</div>
	</header>
	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>bienvenido a nuestro equipo de trabajo!</h1><br>
			</div>
            <h1>Registrate ya!</h1><br>
			<div class="articulo">
				<article>
				
					Sexo: Hombre <INPUT TYPE="RADIO" NAME="clase" VALUE="A">
                    Mujer <INPUT TYPE="RADIO" NAME="clase" VALUE="B"> <br>
					
                    
                   
					


<CENTER>
<TABLE BORDER>

<TR>
   <TD>Nombre:</TD>
   <TD> <INPUT TYPE="text" NAME="nombre" SIZE=18 MAXLENGTH=18> F.Nac.:
        <INPUT TYPE="text" NAME="edad" SIZE=8 MAXLENGTH=8> CURP: 
        <INPUT TYPE="text" NAME="dni" SIZE=8 MAXLENGTH=8></TD>

<TR>
   <TD>Apellidos:</TD>
   <TD> <INPUT TYPE="text" NAME="apellidos" SIZE=48 MAXLENGTH=48></TD>

<TR>
   <TD>Calle y número:</TD>
   <TD> <INPUT TYPE="text" NAME="domicilio" SIZE=48 MAXLENGTH=48></TD>

<TR>
  <TD>Código Postal:</TD>
  <TD> <INPUT TYPE="text" NAME="postal" SIZE=5 MAXLENGTH=5>Ciudad:
       <INPUT TYPE="text" NAME="localidad" SIZE=36 MAXLENGTH=36></TD>

<TR>
   <TD>Provincia: </TD>
   <TD> <INPUT TYPE="text" NAME="provincia" SIZE=20 MAXLENGTH=20>                Teléfono: 
         <INPUT TYPE="text" NAME="telefono" SIZE=19 MAXLENGTH=19></TD>

<TR>
   <TD>edad</TD>
   <TD> <SELECT NAME="OPCION">
            <OPTION>18-23
            <OPTION>23-30
            <OPTION>30-35
            

        </SELECT>Escoja una opción</TD>

<TR>
   <TD>Aapiraciones<BR> laborales:</TD>
   <TD> <TEXTAREA NAME="coment" ROWS=2 COLS=48></TEXTAREA></TD>

<TR>
   <TD><B>Pulse aquí:</B></TD>
   <TD ALIGN=CENTER>
   
       <INPUT TYPE="reset" VALUE="Borrar los datos"></TD>

</TABLE>
</CENTER>
</FORM>
				</article>
			</div>

			<aside>
				<div class="widget">
					<h3>Inf que le pueda servir</h3>
					<ul>
					<li><a href="#">Quieres casarte</a></li>
						<li><a href="#">Actas de nacimiento disponibles para ti</a></li>
						<li><a href="#">Citas </a></li>
						<li><a href="#">Informacionde contacto</a></li>
						<li><a href="#">direccion</a></li>
					</ul>
				</div>
			</aside>
		</div>
	</section>
	<footer>
		<div class="wrapp">
            <p> No lista 20 </p>
            <p> // SUBMÓDULO 2
                Desarrolla aplicaciones Web con conexión a bases de datos</p>
            <p>https://github.com/elinava-web </p>
		</div>
	</footer>
</body>
</html>