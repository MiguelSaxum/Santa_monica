<head>
  <script>
function myFunction() {
    window.print();
    window.history.back();
}
</script>
<script language="javascript">
 
// Función modulo, regresa el residuo de una división
function mod(dividendo , divisor)
{
  resDiv = dividendo / divisor ;  
  parteEnt = Math.floor(resDiv);            // Obtiene la parte Entera de resDiv
  parteFrac = resDiv - parteEnt ;      // Obtiene la parte Fraccionaria de la división
  //modulo = parteFrac * divisor;  // Regresa la parte fraccionaria * la división (modulo)
  modulo = Math.round(parteFrac * divisor)
  return modulo;
} // Fin de función mod
 
// Función ObtenerParteEntDiv, regresa la parte entera de una división
function ObtenerParteEntDiv(dividendo , divisor)
{
  resDiv = dividendo / divisor ;  
  parteEntDiv = Math.floor(resDiv);
  return parteEntDiv;
} // Fin de función ObtenerParteEntDiv
 
// function fraction_part, regresa la parte Fraccionaria de una cantidad
function fraction_part(dividendo , divisor)
{
  resDiv = dividendo / divisor ;  
  f_part = Math.floor(resDiv);
  return f_part;
} // Fin de función fraction_part
 
 
// function string_literal conversion is the core of this program
// converts numbers to spanish strings, handling the general special
// cases in spanish language.
function string_literal_conversion(number)
{  
   // first, divide your number in hundreds, tens and units, cascadig
   // trough subsequent divisions, using the modulus of each division
   // for the next.
 
   centenas = ObtenerParteEntDiv(number, 100);
   
   number = mod(number, 100);
 
   decenas = ObtenerParteEntDiv(number, 10);
   number = mod(number, 10);
 
   unidades = ObtenerParteEntDiv(number, 1);
   number = mod(number, 1);  
   string_hundreds="";
   string_tens="";
   string_units="";
   // cascade trough hundreds. This will convert the hundreds part to
   // their corresponding string in spanish.
   if(centenas == 1){
      string_hundreds = "ciento ";
   }
   
   
   if(centenas == 2){
      string_hundreds = "doscientos ";
   }
   
   if(centenas == 3){
      string_hundreds = "trescientos ";
   }
   
   if(centenas == 4){
      string_hundreds = "cuatrocientos ";
   }
   
   if(centenas == 5){
      string_hundreds = "quinientos ";
   }
   
   if(centenas == 6){
      string_hundreds = "seiscientos ";
   }
   
   if(centenas == 7){
      string_hundreds = "setecientos ";
   }
   
   if(centenas == 8){
      string_hundreds = "ochocientos ";
   }
   
   if(centenas == 9){
      string_hundreds = "novecientos ";
   }
   
 // end switch hundreds
 
   // casgade trough tens. This will convert the tens part to corresponding
   // strings in spanish. Note, however that the strings between 11 and 19
   // are all special cases. Also 21-29 is a special case in spanish.
   if(decenas == 1){
      //Special case, depends on units for each conversion
      if(unidades == 1){
         string_tens = "once";
      }
     
      if(unidades == 2){
         string_tens = "doce";
      }
     
      if(unidades == 3){
         string_tens = "trece";
      }
     
      if(unidades == 4){
         string_tens = "catorce";
      }
     
      if(unidades == 5){
         string_tens = "quince";
      }
     
      if(unidades == 6){
         string_tens = "dieciseis";
      }
     
      if(unidades == 7){
         string_tens = "diecisiete";
      }
     
      if(unidades == 8){
         string_tens = "dieciocho";
      }
     
      if(unidades == 9){
         string_tens = "diecinueve";
      }
   }
   //alert("STRING_TENS ="+string_tens);
   
   if(decenas == 2){
      string_tens = "veinti";
 
   }
   if(decenas == 3){
      string_tens = "treinta";
   }
   if(decenas == 4){
      string_tens = "cuarenta";
   }
   if(decenas == 5){
      string_tens = "cincuenta";
   }
   if(decenas == 6){
      string_tens = "sesenta";
   }
   if(decenas == 7){
      string_tens = "setenta";
   }
   if(decenas == 8){
      string_tens = "ochenta";
   }
   if(decenas == 9){
      string_tens = "noventa";
   }
   
    // Fin de swicth decenas
 
 
   // cascades trough units, This will convert the units part to corresponding
   // strings in spanish. Note however that a check is being made to see wether
   // the special cases 11-19 were used. In that case, the whole conversion of
   // individual units is ignored since it was already made in the tens cascade.
 
   if (decenas == 1)
   {
      string_units="";  // empties the units check, since it has alredy been handled on the tens switch
   }
   else
   {
      if(unidades == 1){
         string_units = "un";
      }
      if(unidades == 2){
         string_units = "dos";
      }
      if(unidades == 3){
         string_units = "tres";
      }
      if(unidades == 4){
         string_units = "cuatro";
      }
      if(unidades == 5){
         string_units = "cinco";
      }
      if(unidades == 6){
         string_units = "seis";
      }
      if(unidades == 7){
         string_units = "siete";
      }
      if(unidades == 8){
         string_units = "ocho";
      }
      if(unidades == 9){
         string_units = "nueve";
      }
       // end switch units
   } // end if-then-else
   
 
//final special cases. This conditions will handle the special cases which
//are not as general as the ones in the cascades. Basically four:
 
// when you've got 100, you dont' say 'ciento' you say 'cien'
// 'ciento' is used only for [101 >= number > 199]
if (centenas == 1 && decenas == 0 && unidades == 0)
{
   string_hundreds = "cien " ;
}  
 
// when you've got 10, you don't say any of the 11-19 special
// cases.. just say 'diez'
if (decenas == 1 && unidades ==0)
{
   string_tens = "diez " ;
}
 
// when you've got 20, you don't say 'veinti', which is used
// only for [21 >= number > 29]
if (decenas == 2 && unidades ==0)
{
  string_tens = "veinte " ;
}
 
// for numbers >= 30, you don't use a single word such as veintiuno
// (twenty one), you must add 'y' (and), and use two words. v.gr 31
// 'treinta y uno' (thirty and one)
if (decenas >=3 && unidades >=1)
{
   string_tens = string_tens+" y ";
}
 
// this line gathers all the hundreds, tens and units into the final string
// and returns it as the function value.
final_string = string_hundreds+string_tens+string_units;
 
 
return final_string ;
 
} //end of function string_literal_conversion()================================
 
// handle some external special cases. Specially the millions, thousands
// and hundreds descriptors. Since the same rules apply to all number triads
// descriptions are handled outside the string conversion function, so it can
// be re used for each triad.
 
 
function covertirNumLetras(number)
{
   
  //number = number_format (number, 2);
   number1=number;
   //settype (number, "integer");
   cent = number1.split(".");  
   centavos = cent[1];
   //Mind Mod
   number=cent[0];
   
   if (centavos == 0 || centavos == undefined)
   {
        centavos = "00";
   }
 
   if (number == 0 || number == "")
   { // if amount = 0, then forget all about conversions,
      centenas_final_string=" cero "; // amount is zero (cero). handle it externally, to
      // function breakdown
  }
   else
   {
   
     millions  = ObtenerParteEntDiv(number, 1000000); // first, send the millions to the string
      number = mod(number, 1000000);           // conversion function
     
     if (millions != 0)
      {                      
      // This condition handles the plural case
         if (millions == 1)
         {              // if only 1, use 'millon' (million). if
            descriptor= " millon ";  // > than 1, use 'millones' (millions) as
            }
         else
         {                           // a descriptor for this triad.
              descriptor = " millones ";
            }
      }
      else
      {    
         descriptor = " ";                 // if 0 million then use no descriptor.
      }
      millions_final_string = string_literal_conversion(millions)+descriptor;
         
     
      thousands = ObtenerParteEntDiv(number, 1000);  // now, send the thousands to the string
        number = mod(number, 1000);            // conversion function.
      //print "Th:".thousands;
     if (thousands != 1)
      {                   // This condition eliminates the descriptor
         thousands_final_string =string_literal_conversion(thousands) + " mil ";
       //  descriptor = " mil ";          // if there are no thousands on the amount
      }
      if (thousands == 1)
      {
         thousands_final_string = " mil ";
     }
      if (thousands < 1)
      {
         thousands_final_string = " ";
      }
 
      // this will handle numbers between 1 and 999 which
      // need no descriptor whatsoever.
 
     centenas  = number;                    
      centenas_final_string = string_literal_conversion(centenas) ;
     
   } //end if (number ==0)
 
   /*if (ereg("un",centenas_final_string))
   {
     centenas_final_string = ereg_replace("","o",centenas_final_string);
   }*/
   //finally, print the output.
 
   /* Concatena los millones, miles y cientos*/
   cad = millions_final_string+thousands_final_string+centenas_final_string;
   
   /* Convierte la cadena a Mayúsculas*/
   cad = cad.toUpperCase();      
 
   if (centavos.length>2)
   {  
       
      if(centavos.substring(2,3)>= 5){
         centavos = centavos.substring(0,1)+(parseInt(centavos.substring(1,2))+1).toString();
      }   else{
         
        centavos = centavos.substring(0,1);
      }
   }
 
   /* Concatena a los centavos la cadena "/100" */
   if (centavos.length==1)
   {
      centavos = centavos+"0";
   }
   centavos = centavos+ "/100";
 
 
   /* Asigna el tipo de moneda, para 1 = PESO, para distinto de 1 = PESOS*/
   if (number == 1)
   {
      moneda = " PESO ";  
   }
   else
   {
      moneda = " PESOS ";  
   }
   /* Regresa el número en cadena entre paréntesis y con tipo de moneda y la fase M.N.*/
   //Mind Mod, si se deja MIL pesos y se utiliza esta función para imprimir documentos
   //de caracter legal, dejar solo MIL es incorrecto, para evitar fraudes se debe de poner UM MIL pesos
   if(cad == '  MIL ')
   {
        cad=' UN MIL ';
   }
   
   var ret=cad+moneda+centavos+" M.N.";
   return cad+moneda+centavos+" M.N.";
}
 
 
</script>
 
<style>
.cuadrado{
padding:5px;
margin:5px;
border: solid 1px black;
color: black;
width: 
height: relative;
text-align: center;
border-radius: 10px 10px 10px 10px;
-moz-border-radius: 10px 10px 10px 10px;
-webkit-border-radius: 10px 10px 10px 10px;

}
table {
    
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}


#contenedor {height: 200px;margin:0;}
#col_der, #col_izq, #col_cen {height: 100%;}
#col_der {float: right; width: 520px;}
#col_izq {float: left; width: 200px;}
#col_cen {background-color: #ccc;}

</style>
<?php $id=$_GET['id'];
include("../conect.php");
$sql = "SELECT * FROM listaventa inner join cliente on idCliente = id_clientes  inner join producto on idProducto = id_producto inner join familia on familia=idFamilia where idListaVenta = $id";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) { ?>

<div>
  
<p class="cuadrado"><img src="../opesa.jpg">
  <br><b><h3 style="text-align: center;">
COMPROBANTE DE INGRESO</h3></b></p>
<div class="cuadrado" style="float: right;margin-top: 20px,20px;margin-right: 20px">
  <table border="0">
  <TR>
    <TD>Fecha</TD> 
  </TR>
  <TR>
    <TD><?php echo $row['fechaSalida'];?></TD> 
  </TR>
</table></div>
</div>
</head>

<body onload="myFunction()">
<div class="cuadrado" style="float: right;margin-top: 20px,20px;margin-right: 20px;width: 100px">
  <table border=".1">
  <tr >
    <TD>Folio</TD> 
  </tr>
  <TR>
    <TD><?php echo $row['idListaVenta'];?></TD> 
  </TR>
</table></div>
<?php $vari=$row["totalCobrar"];?>
<div class="cuadrado" style="height: 80px"> <p style="margin-top: 30px"><b >Importe Letra    SON:</b>&nbsp;&nbsp;&nbsp;&nbsp;  <?php
$valor='<script>document.write(covertirNumLetras("'.$vari.'"))</script>';
echo $valor;
?>
</p><br>
</div>
<table style="margin-bottom: 50px">
  <TR>
    <TD><p ><b >Correspondiente a la Boleta Numero:</b> <?php echo $row['idListaVenta'];?>
</p></TD>
  
    <TD><p ><b >A Nombre de : </b><?php echo $row['nombre'];?></p></TD>
  </TR>
  <TR>
    <TD><p ><b ><?php echo $row["neto"];?> <?php echo $row["unidadMed"];?> DE <?php echo $row["nombre_producto"];?>  </p></TD> <TD><p ><b >Forma De Pago : </b><?php echo $row["metodo"];?></TD>
  </TR>
</TABLE>


<div class="cuadrado" style="float: right;margin-top: 20px,20px;margin-right: 10px;width: 150px">
  <table border=".1">
  <tr >
    <TD>No. de Pesaje</TD> 
  </tr>
  <TR>
    <TD>&nbsp;</TD> 
  </TR>
</table></div>
<div class="cuadrado" style="float: right;margin-top: 20px,20px;margin-right: 10px;width: 150px">
  <table border=".1">
  <tr >
    <TD>Boleta Daimnler</TD> 
  </tr>
  <TR>
    <TD>&nbsp;</TD> 
  </TR>
</table></div>
<div class="cuadrado" style="float: right;margin-top: 20px,20px;margin-right: 10px;width: 150px">
  <table border=".1">
  <tr >
    <TD>Boleta OPESA</TD> 
  </tr>
  <TR>
    <TD><?php echo $row["idListaVenta"];?></TD> 
  </TR>
</table></div>
<div class="cuadrado" style="float: right;margin-top: 20px,20px;margin-right: 10px;width: 150px">
  <table border=".1">
  <tr >
    <TD>No. MANIFIESTO</TD> 
  </tr>
  <TR>
    <TD><?php echo $row["manifiesto"];?></TD> 
  </TR>
</table></div>








<div id="contenedor">
<div id="col_der">
  <div class="cuadrado" style="float: right;margin-top: 20px,20px;margin-right: 20px;width: 220px">
<p style="padding-bottom: 50px"> ENTREGO</p>
<P>___________________________</P>
<P>NOMBRE Y FIRMA</P> 
</div>

<div class="cuadrado" style="float: right;margin-top: 20px,20px;margin-right: 20px;width: 220px">
  <P style="padding-bottom: 50px">RECIBI</P>
<P>____________________________</P>
<P>NOMBRE Y FIRMA</P> 
</div>

</div>
<iv id="col_izq">
<div class="cuadrado" style="float: right;margin-top: 20px,20px;margin-right: 10px;width: 150px">
  <table border=".1">
  <tr >
    <TD>Kilos Planta</TD> 
  </tr>
  <TR>
    <TD><?php echo $row["neto"];?></TD> 
  </TR>
</table></div>
<div class="cuadrado" style="float: right;margin-top: 20px,20px;margin-right: 10px;width: 150px">
  <table border=".1">
  <tr >
    <TD>Kilos OPESA Reciclados</TD> 
  </tr>
  <TR>
    <TD><?php echo $row["neto"];?></TD> 
  </TR>
</table></div>

</div>

</div>

















</body>

<?php
}?>