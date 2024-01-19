<!DOCTYPE html>
<html lang="pt-br" id="corpo">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BresoDEV</title>
</head>
<style>
    * {
        word-wrap: break-word;
        border-radius: 4px;
        margin: 0;
        padding: 0;
        border: none;
        font-family: "Lucida Sans", Geneva, Verdana, sans-serif;
        color: aliceblue;
    }

    html {
        background-color: #333;
    }

    .ct {
        margin-top: 10px;
        margin-bottom: 100px;
        margin-left: 3%;
        width: 75%;
        padding: 10px;
        align-items: center;
        text-align: center;
        align-content: center;
    }

    .sucesso {
        padding: 5px;
        width: 80%;
        background-color: rgb(100, 200, 100);
        color: aliceblue;
        margin-top: 5px;
        margin-bottom: 5px;
    }

    .erro {
        padding: 5px;
        width: 80%;
        background-color: rgb(200, 100, 100);
        color: aliceblue;
        margin-top: 5px;
        margin-bottom: 5px;
    }

    .alerta {
        padding: 5px;
        width: 80%;
        background-color: orange;
        color: black;
        margin-top: 5px;
        margin-bottom: 5px;
    }



    input,
    button {
        width: 78%;
        resize: none;
        background-color: #666;
    }

    #escravo {
        position: fixed;
        top: 30px;
        right: 30px;
        height: 40px;
    }



    table {
        width: 70%;
        border: 1px solid red;
        margin-bottom: 20px;
    }

    td {
        width: 40%;
        text-align: left;
        padding: 3px;
    }

    .code {
        background-color: #666;
        width: 90%;
        color: aliceblue;
        padding: 5%;
        height: 200px;
        font-size: 10px;
    }
</style>

<body>
    <button id="escravo">Botaozinho</button>
    <br>
    <div class="ct">
        <table border="1">
            <tr>
                <th colspan="3">Elemento</th>
            </tr>
            <tr>
                <td>Tag:</td>
                <td><input type="text" id="Tag" value="button"></td>
                <td><button id="aplicar">Mudar</button></td>
            </tr>
            <tr>
                <td colspan="3"><button style='width:100%'id="restart">Reiniciar</button></td>

            </tr>

        </table>

        <!----------->

        <table border="1">
            <tr>
                <th colspan="3">Cores de Fundo</th>
            </tr>
            <tr>
                <td>R:</td>
                <td><input type="range" id="r1" min="0" max="255"></td>
            </tr>
            <tr>
                <td>G:</td>
                <td><input type="range" id="r2" min="0" max="255"></td>
            </tr>
            <tr>
                <td>B:</td>
                <td><input type="range" id="r3" min="0" max="255"></td>
            </tr>
        </table>

        <!----------->
        <table border="1">
            <tr>
                <th colspan="2">Tamanho</th>
            </tr>
            <tr>
                <td>Largura:</td>
                <td><input type="range" value="250" id="r4" min="1" max="1000"></td>
            </tr>
            <tr>
                <td>Altura: </td>
                <td><input type="range" value="50" id="r5" min="1" max="1000"></td>
            </tr>
        </table>


        <!----------->
        <table border="1">
            <tr>
                <th colspan="2">Margin</th>
            </tr>
            <tr>
                <td>Cima:</td>
                <td><input type="range" value="0" id="r6" min="0" max="200"></td>
            </tr>
            <tr>
                <td>Direita:</td>
                <td><input type="range" value="0" id="r7" min="0" max="200"></td>
            </tr>
            <tr>
                <td>Baixo:</td>
                <td><input type="range" value="0" id="r8" min="0" max="200"></td>
            </tr>
            <tr>
                <td>Esquerda:</td>
                <td><input type="range" value="0" id="r9" min="0" max="200"></td>
            </tr>
        </table>

        <!----------->
        <table border="1">
            <tr>
                <th colspan="2">Borda</th>
            </tr>
            <tr>
                <td>Solida</td>
                <td><input type="checkbox" name="" id="borda1" checked></td>
            </tr>
            <tr>
                <td>Pontilhada</td>
                <td><input type="checkbox" name="" id="borda2"></td>
            </tr>
            <tr>
                <td>Cima:</td>
                <td><input type="range" value="0" id="r10" min="0" max="255"></td>
            </tr>
            <tr>
                <td>Direita:</td>
                <td><input type="range" value="0" id="r11" min="0" max="255"></td>
            </tr>
            <tr>
                <td>Baixo:</td>
                <td><input type="range" value="0" id="r12" min="0" max="255"></td>
            </tr>
            <tr>
                <td>Esquerda:</td>
                <td><input type="range" value="0" id="r13" min="0" max="255"></td>
            </tr>
            <tr>
                <th colspan="2">Cor da Borda</th>
            </tr>
            <tr>
                <td>R:</td>
                <td><input type="range" value="0" id="r14" min="0" max="255"></td>
            </tr>
            <tr>
                <td>G:</td>
                <td><input type="range" value="0" id="r15" min="0" max="255"></td>
            </tr>
            <tr>
                <td>B:</td>
                <td><input type="range" value="0" id="r16" min="0" max="255"></td>
            </tr>
        </table>


        <!----------->
        <table border="1">
            <tr>
                <th colspan="2">Border Radius</th>
            </tr>
            <tr>
                <td>Cima:</td>
                <td><input type="range" value="0" id="r17" min="0" max="150"></td>
            </tr>
            <tr>
                <td>Direita:</td>
                <td><input type="range" value="0" id="r18" min="0" max="150"></td>
            </tr>
            <tr>
                <td>Baixo:</td>
                <td><input type="range" value="0" id="r19" min="0" max="150"></td>
            </tr>
            <tr>
                <td>Esquerda:</td>
                <td><input type="range" value="0" id="r20" min="0" max="150"></td>
            </tr>
        </table>


        <!----------->
        <table border="1">
            <tr>
                <th colspan="2">Fonte</th>
            </tr>
            <tr>
                <td>Tamanho:</td>
                <td><input type="range" value="20" id="r21" min="0" max="150"></td>
            </tr>
            <tr>
                <td>R:</td>
                <td><input type="range" value="0" id="r22" min="0" max="255"></td>
            </tr>
            <tr>
                <td>G:</td>
                <td><input type="range" value="0" id="r23" min="0" max="255"></td>
            </tr>
            <tr>
                <td>B:</td>
                <td><input type="range" value="0" id="r24" min="0" max="255"></td>
            </tr>
        </table>




        <!----------->
        <table border="1">
            <tr>
                <th colspan="2">Shadow</th>
            </tr>
            <tr>
                <td>X:</td>
                <td><input type="range" value="0" id="r25" min="0" max="255"></td>
            </tr>
            <tr>
                <td>Y:</td>
                <td><input type="range" value="0" id="r26" min="0" max="255"></td>
            </tr>
            <tr>
                <td>Suavidade:</td>
                <td><input type="range" value="0" id="r27" min="0" max="255"></td>
            </tr>
            <!----------->
            <tr>
                <td>Cor R:</td>
                <td><input type="range" value="0" id="r28" min="0" max="255"></td>
            </tr>
            <tr>
                <td>Cor G:</td>
                <td><input type="range" value="0" id="r29" min="0" max="255"></td>
            </tr>
            <tr>
                <td>Cor B:</td>
                <td><input type="range" value="0" id="r30" min="0" max="255"></td>
            </tr>
            <tr>
                <td>Opacidade:</td>
                <td><input type="range" value="10" id="r31" min="0" max="10"></td>
            </tr>
        </table>


        <!----------->
        <table border="1">
            <tr>
                <th colspan="2">Opacidade</th>
            </tr>
            <tr>
                <td>Valor:</td>
                <td><input type="range" value="10" id="r32" min="0" max="10"></td>
            </tr>
        </table>


        <!----------->
    <table border="1">
            <tr>
                <th colspan="2">Padding</th>
            </tr>
            <tr>
                <td>Cima:</td>
                <td><input type="range" value="0" id="r33" min="0" max="200"></td>
            </tr>
            <tr>
                <td>Direita:</td>
                <td><input type="range" value="0" id="r34" min="0" max="200"></td>
            </tr>
            <tr>
                <td>Baixo:</td>
                <td><input type="range" value="0" id="r35" min="0" max="200"></td>
            </tr>
            <tr>
                <td>Esquerda:</td>
                <td><input type="range" value="0" id="r36" min="0" max="200"></td>
            </tr>
        </table>



        <!--Codigo-->
        <table border="1">
            <tr>
                <th colspan="1">Codigo CSS</th>
            </tr>
            <tr>
                <td><textarea class="code" id="codeFinal"></textarea></td>
            </tr>

        </table>











        <script>









            document.getElementById('aplicar').addEventListener('click', () => {
                //Tag
                var el = document.createElement(document.getElementById('Tag').value)
                document.getElementById('escravo').replaceWith(el);
                el.id = 'escravo';
                el.innerHTML = 'Meu elemento';
                el.value = 'Meu elemento';
            });

            document.getElementById('restart').addEventListener('click', () => {
                //Tag
                window.location.reload();
            });




            //const cr5 = document.getElementById('cr5');

            const corpo = document.getElementById('corpo');
            const r1 = document.getElementById('r1');
            const r2 = document.getElementById('r2');
            const r3 = document.getElementById('r3');

            const r4 = document.getElementById('r4');
            const r5 = document.getElementById('r5');

            const r6 = document.getElementById('r6');
            const r7 = document.getElementById('r7');
            const r8 = document.getElementById('r8');
            const r9 = document.getElementById('r9');

            const r10 = document.getElementById('r10');
            const r11 = document.getElementById('r11');
            const r12 = document.getElementById('r12');
            const r13 = document.getElementById('r13');
            const borda0 = document.getElementById('borda0');
            const borda1 = document.getElementById('borda1');
            const borda2 = document.getElementById('borda2');
            const r14 = document.getElementById('r14');
            const r15 = document.getElementById('r15');
            const r16 = document.getElementById('r16');

            const r17 = document.getElementById('r17');
            const r18 = document.getElementById('r18');
            const r19 = document.getElementById('r19');
            const r20 = document.getElementById('r20');

            const r21 = document.getElementById('r21');
            const r22 = document.getElementById('r22');
            const r23 = document.getElementById('r23');
            const r24 = document.getElementById('r24');

            const r25 = document.getElementById('r25');
            const r26 = document.getElementById('r26');
            const r27 = document.getElementById('r27');
            const r28 = document.getElementById('r28');
            const r29 = document.getElementById('r29');
            const r30 = document.getElementById('r30');
            const r31 = document.getElementById('r31');


            const r32 = document.getElementById('r32');

            const r33 = document.getElementById('r33');
            const r34 = document.getElementById('r34');
            const r35 = document.getElementById('r35');
            const r36 = document.getElementById('r36');

            setInterval(() => {
                var escravo = document.getElementById('escravo');

                escravo.style.backgroundColor = 'rgb(' + r1.value + ' ' + r2.value + ' ' + r3.value + ')';

                escravo.style.width = r4.value + 'px';

                // if (cr5.checked)
                escravo.style.height = r5.value + 'px';

                escravo.style.marginTop = r6.value + 'px';
                escravo.style.marginRight = r7.value + 'px';
                escravo.style.marginBottom = r8.value + 'px';
                escravo.style.marginLeft = r9.value + 'px';

                escravo.style.borderTop = r10.value + 'px';
                escravo.style.borderRight = r11.value + 'px';
                escravo.style.borderBottom = r12.value + 'px';
                escravo.style.borderLeft = r13.value + 'px';

                if (borda1.checked)
                    escravo.style.borderStyle = 'solid';
                if (borda2.checked)
                    escravo.style.borderStyle = 'dotted';

                escravo.style.borderColor = 'rgb(' + r14.value + ' ' + r15.value + ' ' + r16.value + ')';
                escravo.style.borderRadius = r17.value + 'px ' + r18.value + 'px ' + r19.value + 'px ' + r20.value + 'px';

                escravo.style.fontSize = r21.value + 'px';
                escravo.style.color = 'rgb(' + r22.value + ' ' + r23.value + ' ' + r24.value + ')';


                escravo.style.boxShadow = r25.value + 'px ' + r26.value + 'px ' + r27.value + 'px ' + 'rgba(' + r28.value + ',' + r29.value + ',' + r30.value + ','+(r31.value *0.1)+')';
               
                escravo.style.opacity = (r32.value *0.1);


                escravo.style.paddingTop = r33.value + 'px';
                escravo.style.paddingRight = r34.value + 'px';
                escravo.style.paddingBottom = r35.value + 'px';
                escravo.style.paddingLeft = r36.value + 'px';


                //-------------------------------------------
                var tipoborda = '';

                if (borda1.checked)
                    tipoborda = 'solid';
                if (borda2.checked)
                    tipoborda = 'dotted';


                document.getElementById('codeFinal').value = '' +
                    '.my_' + document.getElementById('Tag').value + '{\n' +
                    '   background-color: rgb(' + r1.value + ' ' + r2.value + ' ' + r3.value + ');' + '\n' +
                    '   width: ' + r4.value + 'px;' + '\n' +
                    '   height: ' + r5.value + 'px;' + '\n' +
                    '   margin-top: ' + r6.value + 'px;' + '\n' +
                    '   margin-bottom: ' + r8.value + 'px;' + '\n' +
                    '   margin-left: ' + r9.value + 'px;' + '\n' +
                    '   margin-right: ' + r7.value + 'px;' + '\n' +
                    '   border-top: ' + r10.value + 'px;' + '\n' +
                    '   border-bottom: ' + r12.value + 'px;' + '\n' +
                    '   border-left: ' + r13.value + 'px;' + '\n' +
                    '   border-right: ' + r11.value + 'px;' + '\n' +
                    '   border-style: ' + tipoborda + ';' + '\n' +
                    '   border-color: ' + 'rgb(' + r14.value + ' ' + r15.value + ' ' + r16.value + ');' + '\n' +
                    '   border-radius: ' + r17.value + '% ' + r18.value + '% ' + r19.value + '% ' + r20.value + '%;' + '\n' +
                    '   font-size: ' + r21.value + 'px;' + '\n' +
                    '   color: ' + 'rgb(' + r22.value + ' ' + r23.value + ' ' + r24.value + ');' + '\n' +
                    '   box-shadow: ' + r25.value + 'px ' + r26.value + 'px ' + r27.value + 'px ' + 'rgba(' + r28.value + ',' + r29.value + ',' + r30.value + ','+(r31.value *0.1)+');'+'\n' +
                    '   opacity: ' + r32.value *0.1 +';'+'\n' +
                    '   padding-top: ' + r33.value + 'px;' + '\n' +
                    '   padding-bottom: ' + r34.value + 'px;' + '\n' +
                    '   padding-left: ' + r35.value + 'px;' + '\n' +
                    '   padding-right: ' + r36.value + 'px;' + '\n' +
                    //'' + +'\n' +
                    '}';
            }, 1);
/*
             
            
            
            
                           linear-gradient(to right, rgb(255,255,255), rgb(255,255,255));
                           
                          */
                          
                          
        </script>



    </div>
</body>

</html>