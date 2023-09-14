<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- Linka os css da API e do form -->
        <link rel="stylesheet" href="../CSS/adicionar.css">
        <link rel="stylesheet" href="../CSS/styleAPI.css">

        <!-- Linka a API e codigos de JS -->        
        <script src="../API/tinymce/tinymce.min.js"></script>
        <script src="../JAVASCRIPT/tinyAPI.js" defer></script>
        <script src="../JAVASCRIPT/config.js" defer></script>
    </head>

    <body>
        <form action="Adicionando.php" method="post">
            <div id="container-box">            
                <div class="contents-buttons">
                        <!--
                            Esse div cria a primeira parte do formulario, onde pega a data, bimestre e materia
                            a tag "a" dentro do div é para quando utilizar o botal avancar a div sumir e apare-
                            cer a API
                        -->
                        <div class="buttons-top a">
                            <!--Selecionar a Data-->
                            <input type="date" name="data" value="04/23/2023" class="selects">
        
                            <!--Selecionar o Bimestre-->
                            <select class="selects" name="bimestre">
                                <option value="0" selected disabled> Bimestres </option>
                                <option value="1"> 1° Bimestre </option>
                                <option value="2"> 2° Bimestre </option>
                                <option value="3"> 3° Bimestre </option>
                                <option value="4"> 4° Bimestre </option>
                            </select>
        
                            <!--Selecionar a Materia-->
                            <select name="materia" class="selects">
                                <option value="0" selected disabled> Matérias </option>
        
                                <optgroup label="Materias Ensino Médio">
                                    <!--Materias do Ensino Médio-->
        
                                    <option value="Portugues"> Portugues </option>
                                    <option value="Matematica"> Matemática </option>
                                    <option value="Historia"> História </option>
                                    <option value="Geografia"> Geografia </option>
                                    <option value="Ingles"> Ingles </option>
                                    <option value="Biologia"> Biologia </option>
                                    <option value="Quimica"> Quimica </option>
                                    <option value="Fisica"> Fisica </option>
                                </optgroup>
        
                                <optgroup label="Materias Curso">
                                    <!--Materias do Curso-->
        
                                    <option value="GCW"> Gestão de Conteudo Web II </option>
                                    <option value="IW"> Interface Web II </option>
                                    <option value="UDI"> Usabilidade e Design de Interação </option>
                                    <option value="SW"> Sistema Web I </option>
                                    <option value="DDM"> Desenvolvimento para Dispositivos Móveis I </option>
                                </optgroup>
                            </select>
                        </div>

                    <!-- 
                        Aqui é os botoes do primeiro formulario, quando clicar em avancar ira ir para a proxima
                        etapa do formulario (a API), quando clicar em voltar ira para a pagina inicial
                    -->
                    <div class="class-button a">
                        <a href="#" class="selects"> <button id="back"> Voltar </button> </a>

                        <div class="class-p">
                            <p> 1/2 </p>
                        </div>

                        <button value="Avançar" class="selects" form="form" onclick="API()"> Avançar </button>
                    </div>
                </div>
            </div>
            
            <!-- 
                Aqui estou chamando a API, ela ira ficar invisivel ate o botao "avancar" ser clicado,
                quando clicar no botao voltar a API ira sumir e voltar para a primeira parte do form.
            -->
            <div id="container-api">
                <div class="container2">
                    <textarea name="conteudo" id="mytextarea"></textarea>

                    <div class="class-button a">
                        <input type="button" value="Voltar" class="selects" onclick="Voltar()">

                        <div class="class-p">
                            <p> 2/2 </p>
                        </div>
                        
                        <input type="submit" class="selects" value="Enviar">
                    </div>
                </div>
            </div>
        </form>
    </body>
</html>
