<?php
//classe cadastro
    class cadastro{
        private int $cpf;
        private string $nome;
        private string $telefone;
        private string $endereco;
        private string $cidade;

        public function __construct($cpf, $nome, $telefone, $endereco, $cidade){
            $this->setCPF($cpf);
            $this->setNome($nome);
            $this->setTelefone($telefone);
            $this->setEndereco($endereco);
            $this->setCidade($cidade);
        }

        //metodo modificadores e de consulta
        public function getCPF(){
            return $this->cpf;
        }//fim do metodo


        public function getNome(){
            return $this->nome;
        }//fim do metodo

        public function getTelefone(){
            return $this->telefone;
        }


        public function getEndereco(){
            return $this->endereco;
        }
        public function getCidade(){
            return $this->cidade;
        }//fim do metodo

            //começando os sets/ na variavel nao poe $


        public function setCPF($cpf){
            $this->cpf = $cpf;
        }//fim do metodo


        public function setNome($nome){
            $this->nome = $nome;
        }//fim do metodo

        public function setTelefone($telefone){
            $this->telefone = $telefone;
        }//fim do metodo


        public function setEndereco($endereco){
            $this->endereco = $endereco;
        }//fim do metodo

        public function setCidade($cidade){
            $this->cidade = $cidade;
        }


        public function imprimir(){
            $msg = "CPF ".$this->getCPF()."\nNome: ".$this->getNome()."\nTelefone: ".$this->getTelefone()."\nEndereco: ".$this->getEndereco().
            "\nCidade: ".$this->getCidade();
            return $msg; 
        }


        public function excluir(){
            $this->setCPF(0);
            $this->setNome("");
            $this->setTelefone("");
            $this->setEndereco("");
            $this->setCidade("");
            return "Dados excluidos!";

        }
        public function menu(){

            $men = "\nEscolha oque deseja atualizar: " . 
                    "\n1. Nome". 
                    "\n2. Telefone". 
                    "\n3. Endereco". 
                    "\n4. Cidade";
            return $men;
        }//fim do metodo




        public function atualizar($opcao, $dado){
        switch($opcao){
            case 1:
                $this->setNome($dado);
                break;
            case 2:
                $this->setTelefone($dado);
                break;
            case 3:
                $this->setEndereco($dado);
                break;
            case 4:
                $this->setCidade($dado);
                break;
                default:
                return "Opção escolhida nao é valida";            
        }//fim da escolha

        }//fim do metodo

    }//fim da classe




?>