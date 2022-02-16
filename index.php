<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        function mostrarForm(val){
            if (val==""){
                document.getElementById("divForm").innerHTML="";
                return;
            }
            var xmlhttp=new XMLHttpRequest();
            xmlhttp.onreadystatechange=function() {
                if (this.readyState==4 && this.status==200) {
                document.getElementById("divForm").innerHTML=this.responseText;
                }
            }
            xmlhttp.open("GET","forms.php?q="+val,true);
            xmlhttp.send();
        }
		</script>
</head>
<body>
    <div class="content p-4">
        <select name="tipo" id="tipo" onchange="mostrarForm(this.value)";>
            <option value="" selected disabled hidden>Seleccionar FIGURA</option>
            <option value="1">ROMBO</option>
            <option value="2">TRAPECIO</option>
            <option value="3">ROMBOIDE</option>
        </select>
        <div id="divForm"></div>
    </div>
</body>
</html>