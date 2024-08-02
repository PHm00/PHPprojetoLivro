<?php
    namespace PHP\Modelo;

    require_once('Endereco.php');

    class Cliente extends Pessoa{
        protected string $dataNascimento;
        protected float $totalDeCompras;

        public function __construct(string $cpf,
                                    string $nome,
                                    string $telefone,
                                    Endereco $endereco,
                                    string $dataNascimento,
                                    float $totalDeCompras)
        {
            parent::__construct($cpf,$nome,$telefone,$endereco);
            $this->dataNascimento = $dataNascimento;
            $this->totalDeCompras = $totalDeCompras; 
        }//fim do construtor

        public function __get(string $nome){
            return $this->nome;
        }//fim do getTexto

        public function __set(string $nomeVariavel,string $valor):void
        {
            $this->nomeVariavel = $valor;
        }//fim do setTexto

        public function imprimir():string
        {
            return parent::imprimir().
                   "<br>Data de Nascimento: ".$this->dataNascimento.
                   "<br>Total de Compras: ".$this->totalDeCompras;
        }//fim do imprimir

      



    }//fim da classe
?>