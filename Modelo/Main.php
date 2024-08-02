<?php
    namespace PHP\Modelo; //Definir o local do projeto
    require_once('Pessoa.php');
    require_once('Funcionario.php');
    require_once('Cliente.php');
    require_once('Endereco.php');
    require_once('../DAO/conexao.php');
    require_once('../DAO/inserir.php');

    use PHP\Modelo\DAO\conexao;//direcionar o arquivo
    use PHP\Modelo\DAO\Inserir;

    $conexao = new Conexao();
    $inserir = new Inserir();
    /*echo $inserir->cadastrarEndereco($conexao,
                                        1,
                                        'Rua jiparana',
                                         123,
                                        'Berinni',
                                        'São Paulo',
                                        'São Paulo',
                                        'SP',
                                        'Brasil',
                                        '03586921');*/
                                        
    echo $inserir->cadastrarCliente($conexao,
                                '12345678910', 
                                'Davi',
                                '11981230912',
                                '1',
                                '17/04/1989',
                                1000);
/*
    $enderecoCliente1 = new Endereco('Rua jiparana',
                                     123,
                                    'Berinni',
                                    'São Paulo',
                                    'São Paulo',
                                    'SP',
                                    'Brasil',
                                    '03586921');

    $cliente1 = new Cliente('12345678910', 
                           'Davi',
                           '11981230912',
                            $enderecoCliente1,
                            '17/04/1989',
                            1000);

    echo $cliente1->imprimir();
    echo $enderecoCliente1->imprimir();

    echo "<br><br>";

    $enderecoFunc1 = new Endereco("Rua Jeri",
                   123,
                   "Realengo",
                   "Rio de Janeiro",
                   "Rio de Janeiro",
                   "RJ",
                   "Brasil",
                   "01312312");

    $funcionario1 = new Funcionario("12136598565",
                                    123,
                                    "Astolfo",
                                    1256,
                                    "Gerente",
                                    $enderecoFunc1,
                                    "1190909090");
    
    echo $funcionario1->imprimir();
    echo $enderecoFunc1->imprimir();
    */
?>