<?php
    namespace PHP\Modelo\DAO;
 
    require_once('conexao.php');
    require_once('../Endereco.php');
 
    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\Enderco;
 
    class Inserir{
        public Conexao $conexao;
        public string $tabela;
        public string $cpf;
        public string $nome;
        public string $telefone;
        public Endereco $endereco;
        public string $dtNascimento;
        public float $totalDeCompras;
        public int $codEndereco;
 
        function cadastrarCliente(
            Conexao $conexao,
            string $cpf,
            string $nome,
            string $telefone,
            string $dtNascimento,
            string $totalDeCompras,
            string $codEndereco
            )
            {
            try{
                $conn = $this->$conexao->conectar();//Abrir a conexao com o banco
                $sql  = "Insert into cliente (cpf, nome, telefone, dtNascimento ,totalDeCompras)
                values ('$cpf','$nome','$telefone','$dtNascimento','$totalCompras','$codEndereco')";

                $result = mysqli_query($conn, $sql);
                //fechar conexap
                mysqli_clonse($conn);

                if($result){
                    return "<br>Inserido com sucesso!";
                }
                    return "<br><br>Não inserido!";

                return $erro;
            }catch(Except $erro){
                return $erro;
            }
        }//Fim do método

        function cadastrarEndereco(
            Conexao $conexao,
            int $codEndereco,
            string $logradouro,
            int $numero,
            string $bairro,
            string $cidade,
            string $estado,
            string $uf,
            string $pais,
            string $cep

        ){
             try{
                $conn = $conexao->conectar();
                $sql = "insert into endereco (codigo, logradouro, numero, bairro, cidade, estado, uf, pais, cep) 
                values ('$codigo','$logradouro','$numero','$bairro','$cidade','$estado','$uf','$pais','$cep')";
                $result = mysqli_query($conn, $sql);

                //fecha conexao
                mysqli_close($conn);
                if($result){
                    "<br>Endereço inserido com sucesso!";
                }   
                "<brImpossível inserir";
             }catch(Exception $erro){
                echo $erro;
             }
        }
 
 
 
 
    }//Fim da classe
 
?>
 
 