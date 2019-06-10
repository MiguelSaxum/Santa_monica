<script>
var paises = new Array
paises[1] = ["elige país...","España","Francia","Alemania"]
paises[2] = ["elige país...","China","Japón","India"]
paises[3] = ["elige país...","Argentina","Chile","Colombia"]

function ponPaises(formu)
{ var elConti = formu.conti.selectedIndex
  formu.pais.length = paises[elConti].length
  for (i=0; i<formu.pais.length; i++)
  { formu.pais.options[i].text = paises[elConti][i]
  }
  

}
</script>
<form>
<select name="conti" onChange="ponPaises(this.form)">
<option selected>elige continente...</option>
<option>Europa</option>
<option>Asia</option>
<option>América</option>
</select>
<select name="pais" onChange="ponProvincias(this.form)">
<option></option>
</select>
</form> 