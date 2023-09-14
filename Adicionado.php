<?php 
    $host = "localhost";
    $user = "root";
    $password = "";
    $bd = "bdescola";
    
    $conn = mysqli_connect($host, $user, $password, $bd);

    if(!$conn) {
        echo "deu erro";
    } else {
        $bimestre = $_POST['bimestre'];
        $data = $_POST['data'];
        $materia = $_POST['materia'];
        $conteudo = $_POST['conteudo'];

        $Insert = "INSERT INTO tbconteudo (bimestre, data, materia, conteudo) VALUES ('$bimestre', '$data', '$materia', '$conteudo')";

        if(mysqli_query($conn, $Insert)) {
            echo "inserido com sucesso";
            print "
                <html>
                    <head>
                        <style>
                            .teste {
                                display: flex;
                                align-items: center;
                                justify-content: center;
                                width: 100%;
                                height: 100vh;
                            }
                            
                            .tst {
                                display: flex;
                                flex-direction: column;
                                gap: 30px;
                                width: 50%;
                                height: 70%;
                                padding: 10px;
                            }
                            
                            .button {
                                display: flex;
                                gap: 5px;
                            }
                            
                            .button > button {
                                width: 70px;
                                padding: 2px;
                                border: 2px solid blue;
                            }
                            
                            .btn {
                                background: blue;
                                color: white;
                            }
                            
                            button:hover {
                                background: blue;
                                color: white;
                            }
                        </style>
                    <head>

                    <body>
                        <div class='teste'>
                            <div class='tst'>
                                <h1>SUCESSO!</h1>
                    
                                <p class='p'>
                                    Conteudo do dia $data e $bimestre ° bimestre adicionado com sucesso.
                                </p>
                    
                                <div class='button'>
                                    <button type='button' > <a href='index.php'> Voltar </a></button>
                                    <button type='button' class='btn'>Concluir</button>
                                </div>
                    
                            </div>
                        </div>
                    </body>
                <html>
            ";
        } else {
            echo "deu erro em algum lugar";

            
        }
    }
?>