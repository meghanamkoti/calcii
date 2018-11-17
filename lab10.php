<?php
if(isset($_POST['res'])){
$res=$_POST["display"];
$res=eval("return",.$res.';');
}
?>
<html>
<head>
<title>Simple calu;ator using php</title>
<style>
input{
background-color:#afc7a;
border:none;
width:100%
padding:15px 32px;
text-align:center;
text-decoration:none;
display:inline-block;
font:size:15px;
}
</style>
</head>
<body>
<center>
<h2>calculator using php</h2>
<from name="calculator" method="post">
<table>
<tr>
<td colspan="4">
<input type ="text" name="display" value="<?php if(isset($res)){echo $res)){ echo $res;}?>">
</td>
</tr>
<tr>
<input type="button" value=" 1 " onclick="calculator.answer.value += '1'" />
            <input type="button" value=" 2 " onclick="calculator.answer.value += '2'" />
            <input type="button" value=" 3 " onclick="calculator.answer.value += '3'" />
            <input type="button" value=" + " onclick="calculator.answer.value += '+'" />
            <br/>
            
            <input type="button" value=" 4 " onclick="calculator.answer.value += '4'" />
            <input type="button" value=" 5 " onclick="calculator.answer.value += '5'" />
            <input type="button" value=" 6 " onclick="calculator.answer.value += '6'" />
            <input type="button" value=" - " onclick="calculator.answer.value += '-'" />
            </br>
          
            <input type="button" value=" 7 " onclick="calculator.answer.value += '7'" />
            <input type="button" value=" 8 " onclick="calculator.answer.value += '8'" />
            <input type="button" value=" 9 " onclick="calculator.answer.value += '9'" />
            <input type="button" value=" x " onclick="calculator.answer.value += '*'" />
            </br>
        
            <input type="button" value=" c " onclick="calculator.answer.value = ''" />
            <input type="button" value=" 0 " onclick="calculator.answer.value += '0'" />
            <input type="button" value=" = " onclick="calculator.answer.value = eval(calculator.answer.value)" />
            <input type="button" value=" / " onclick="calculator.answer.value += '/'" />
            </br>
  
    
          </form>
          <div id="agh">
          </div>
        </div>
    </body>
</html>
