<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    #ttt {
        width: 50%;
        height: 200px;
        background-color: aqua;
        position: fixed;
        right: 100px;
        top: 100px;
    }

    html {
        color: aliceblue;
        background-color: #333;
    }

    table {
        width: 50%;
    }

    input {
        width: 100%;
        
    }
    textarea{
        border-radius: 5px;
        border: none;
        padding: 5px;
        background-color: #666;
        color: aliceblue;
        font-size: medium;
        width: 50%;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }
</style>

<body>

    <button id="ttt">Meu Botao CSS</button>


    <table>

        <tr>
            <th>Bordas</th>
        </tr>
        <tr>
            <td><input type="range" name="" id="track" min="0" max="100" value="10"></td>
            <td><input type="range" name="" id="track2" min="0" max="100" value="10"></td>
            <td><input type="range" name="" id="track3" min="0" max="100" value="10"></td>
            <td><input type="range" name="" id="track4" min="0" max="100" value="10"></td>
        </tr>
        <!----------------------------------------->

        <tr>
            <th>Cor 1</th>
        </tr>
        <tr>
            <td><input type="range" name="" id="corr" min="0" max="255" value="255"></td>
            <td><input type="range" name="" id="corg" min="0" max="255" value="255"></td>
            <td><input type="range" name="" id="corb" min="0" max="255" value="255"></td>
            <td>
            Usar Gradient<br><input type="checkbox" name="" id="grad">
            </td>
        </tr>
         <!----------------------------------------->

         <tr>
            <th>Cor 2</th>
        </tr>
        <tr>
            <td><input type="range" name="" id="corgradr" min="0" max="255" value="255"></td>
            <td><input type="range" name="" id="corgradg" min="0" max="255" value="255"></td>
            <td><input type="range" name="" id="corgradb" min="0" max="255" value="255"></td>
            
        </tr>
        <!----------------------------------------->
        
        <tr>
            <th>Tamanho</th>
        </tr>
        <tr>
            <td><input type="range" name="" id="x" min="0" max="1000" value="200"></td>
            <td><input type="range" name="" id="y" min="0" max="1000" value="200"></td>
        </tr>
        <!----------------------------------------->
        
        <tr>
            <th>Tamanho da Fonte</th>
        </tr>
        <tr>
            <td><input type="range" name="" id="fontetam" min="0" max="100" value="20"></td>
        </tr>


        <!----------------------------------------->
        
        <tr>
            <th>Cor da Fonte</th>
        </tr>
        <tr>
            <td><input type="range" name="" id="corfonter" min="0" max="255" value="0"></td>
            <td><input type="range" name="" id="corfonteg" min="0" max="255" value="0"></td>
            <td><input type="range" name="" id="corfonteb" min="0" max="255" value="0"></td>
        </tr>
        <!----------------------------------------->
       
        
        <tr>
            <th>Borda</th>
        </tr>
        <tr>
            <td><input type="range" name="" id="bordatam" min="0" max="100" value="0"></td>
        </tr>
        <!----------------------------------------->
        
        <tr>
            <th>Sombra</th>
        </tr>
        <tr>
            <td><input type="range" name="" id="dh" min="0" max="100" value="0"></td>
            <td><input type="range" name="" id="dv" min="0" max="100" value="0"></td>
            <td><input type="range" name="" id="raio" min="0" max="100" value="0"></td>
        </tr>
        <!----------------------------------------->
        <tr>
            <th>Cor Sombra</th>
        </tr>
        <tr>
            <td><input type="range" id="corsombrar"  min="0" max="255" value="10"></td>
            <td><input type="range" id="corsombrag"  min="0" max="255" value="10"></td>
            <td><input type="range" id="corsombrab"  min="0" max="255" value="10"></td>
            <td><input type="range" id="corsombraa"  min="1" max="99" value="5"></td>
        </tr>
        <!----------------------------------------->
       
        
        <tr>
            <th>Opacidade</th>
        </tr>
        <tr>
            <td><input type="range" name="" id="Opacidade" min="0" max="9" value="9"></td>
        </tr>
        <!----------------------------------------->
    </table>
    
    <br>
    <br>
    <br>
    <br>
    <center>
        <h2>Codigo CSS</h2> <br>
        <textarea name="" id="code" cols="30" rows="12"></textarea>
    </center>


    <br>
    <br>
    <br>
    <br>




</body>
<script>
    setInterval(() => {
        document.getElementById('ttt').style.borderRadius =
            document.getElementById('track').value + 'px  ' +
            document.getElementById('track2').value + 'px  ' +
            document.getElementById('track3').value + 'px  ' +
            document.getElementById('track4').value + 'px';
        //-------------------------------------

       
        //-------------------------------------

        document.getElementById('ttt').style.width = document.getElementById('x').value + 'px';
        document.getElementById('ttt').style.height = document.getElementById('y').value + 'px';
        
        //--------------------------
        document.getElementById('ttt').style.fontSize = document.getElementById('fontetam').value + 'px';
 
 
        //--------------------------
        document.getElementById('ttt').style.border = document.getElementById('bordatam').value + 'px solid';

        //--------------------------
        document.getElementById('ttt').style.opacity = '0.'+document.getElementById('Opacidade').value + '';


        //--------------------------
        if(document.getElementById('grad').checked)
        {
            document.getElementById('ttt').style.background = 'linear-gradient(to right, '+
            'rgb(' +
            document.getElementById('corr').value + ',' +
            document.getElementById('corg').value + ',' +
            document.getElementById('corb').value + '), rgb(' +
            document.getElementById('corgradr').value + ',' +
            document.getElementById('corgradg').value + ',' +
            document.getElementById('corgradb').value + '))';
        }
        else
        {
            document.getElementById('ttt').style.background = 'none';
            document.getElementById('ttt').style.backgroundColor = 'rgb(' +
            document.getElementById('corr').value + ' ' +
            document.getElementById('corg').value + ' ' +
            document.getElementById('corb').value + ')';
        }



        //-------------------------------------

            document.getElementById('ttt').style.color = 'rgb(' +
            document.getElementById('corfonter').value + ' ' +
            document.getElementById('corfonteg').value + ' ' +
            document.getElementById('corfonteb').value + ')';

        //-------------------------------------

            document.getElementById('ttt').style.boxShadow = 
            document.getElementById('dh').value + 'px ' +
            document.getElementById('dv').value + 'px ' +
            document.getElementById('raio').value + 'px rgba('+
            document.getElementById('corsombrar').value + ',' +
            document.getElementById('corsombrag').value + ',' +
            document.getElementById('corsombrab').value + ',0.'+
            document.getElementById('corsombraa').value + ')';

            











        


       if(document.getElementById('grad').checked)
        {
            document.getElementById('code').textContent = '.Breso{\n' +
            '   linear-gradient(to right, '+'rgb(' + document.getElementById('corr').value + ',' +document.getElementById('corg').value + ',' +document.getElementById('corb').value + '), rgb(' +document.getElementById('corgradr').value + ',' +document.getElementById('corgradg').value + ',' +document.getElementById('corgradb').value + '));\n'+
            '   background-color: rgb(' + document.getElementById('corr').value + ' ' + document.getElementById('corg').value + ' ' + document.getElementById('corb').value + ');\n' +
            '   border-radius: ' + document.getElementById('track').value + 'px  ' + document.getElementById('track2').value + 'px  ' + document.getElementById('track3').value + 'px  ' + document.getElementById('track4').value + 'px;\n' +
            '   width: ' + document.getElementById('x').value + 'px;\n'+
            '   height: ' + document.getElementById('y').value + 'px;\n'+
            '   font-size: : ' + document.getElementById('fontetam').value + 'px;\n' +
            '   color: rgb(' + document.getElementById('corfonter').value + ' ' + document.getElementById('corfonteg').value + ' ' + document.getElementById('corfonteb').value + ');\n' +
            '   border: ' + document.getElementById('bordatam').value + 'px solid;\n' +
            '   box-shadow: '+ 
            document.getElementById('dh').value + 'px ' +
            document.getElementById('dv').value + 'px ' +
            document.getElementById('raio').value + 'px rgba('+
            document.getElementById('corsombrar').value + ',' +
            document.getElementById('corsombrag').value + ',' +
            document.getElementById('corsombrab').value + ',0.'+
            document.getElementById('corsombraa').value + ');\n'+
            '   opacity: 0.'+document.getElementById('Opacidade').value + ';\n'+
            '}';
        }
        else
        {
            document.getElementById('code').textContent = '.Breso{\n' +
        '   background-color: rgb(' + document.getElementById('corr').value + ' ' + document.getElementById('corg').value + ' ' + document.getElementById('corb').value + ');\n' +
        '   border-radius: ' + document.getElementById('track').value + 'px  ' + document.getElementById('track2').value + 'px  ' + document.getElementById('track3').value + 'px  ' + document.getElementById('track4').value + 'px;\n' +
        '   width: ' + document.getElementById('x').value + 'px;\n'+
        '   height: ' + document.getElementById('y').value + 'px;\n'+
        '   font-size: : ' + document.getElementById('fontetam').value + 'px;\n' +
        '   color: rgb(' + document.getElementById('corfonter').value + ' ' + document.getElementById('corfonteg').value + ' ' + document.getElementById('corfonteb').value + ');\n' +
        '   border: ' + document.getElementById('bordatam').value + 'px solid;\n' +
        '   box-shadow: '+ 
            document.getElementById('dh').value + 'px ' +
            document.getElementById('dv').value + 'px ' +
            document.getElementById('raio').value + 'px rgba('+
            document.getElementById('corsombrar').value + ',' +
            document.getElementById('corsombrag').value + ',' +
            document.getElementById('corsombrab').value + ',0.'+
            document.getElementById('corsombraa').value + ');\n'+
        '   opacity: 0.'+document.getElementById('Opacidade').value + ';\n'+
       '}';
        }




    }, 1);
</script>

</html>