<?php

// O require_once serve para conectarmos os arquivos do projeto entre eles, está sendo conectada com conexao.php
require_once $_SERVER['DOCUMENT_ROOT'] . '/projeto_web_banco_de_dados/controller/conexao.php';

// cria a classe Pessoa para estruturar as funções
class Pessoa{
    // declaração das variáveis que recebem o que o usuário digitar
    private $id;
    private $nome;
    private $endereco;
    private $bairro;
    private $cep;
    private $cidade;
    private $estado;
    private $telefone;
    private $celular;
    private $conexao;

    // pega a id do usuário
    public function getId() {
        return $this->id;
    }

    // define a id
    public function setId($id) {
        $this->id = $id;
    }

    // pega o nome do usuário
    public function getNome() {
        return $this->nome;
    }

    // define o nome
    public function setNome($nome) {
        $this->nome = $nome;
    }

    // pega o endereço do usuário
    public function getEndereco() {
        return $this->endereco;
    }

    // define o endereço
    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    // pega o bairro do usuário
    public function getBairro() {
        return $this->bairro;
    }

    // define o bairro
    public function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    // pega o CEP do usuário
    public function getCep() {
        return $this->cep;
    }

    // define o bairro
    public function setCep($cep) {
        $this->cep = $cep;
    }

    // pega a cidade do usuário
    public function getCidade() {
        return $this->cidade;
    }

    // define a cidade
    public function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    // pega o estado do usuário
    public function getEstado() {
        return $this->estado;
    }

    // define o estado
    public function setEstado($estado) {
        $this->estado = $estado;
    }

    // pega o telefone do usuário
    public function getTelefone() {
        return $this->telefone;
    }

    // define o telefone
    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    // pega o celular do usuário
    public function getCelular() {
        return $this->celular;
    }

    // define o celular
    public function setCelular($celular) {
        $this->celular = $celular;
    }

    // método construtor
    public function __construct() {
        // a variável conexão se torna um objeto que recebe a classe conexão
        $this->conexao = new Conexao();
    }

    // função para inserir os dados digitados pelo usuário
    public function inserir() {
        // aqui ocorre a inserção de dados para o banco de dados
        $sql = "INSERT INTO pessoa (`nome`, `endereco`, `bairro`, `cep`, `cidade`, `estado`, `telefone`, `celular`) VALUES (?,?,?,?,?,?,?,?)";
        // Aqui prepara a conexão com o banco de dados para executar a linha de código acima
        $stmt = $this->conexao->getConexao()->prepare($sql);
        // aqui prepara os tipos de dados que o banco irá receber
        $stmt->bind_param('ssssssss', $this->nome, $this->endereco, $this->bairro, $this->cep, $this->cidade, $this->estado, $this->telefone, $this->celular);
        // serve para executar a linha acima
        return $stmt->execute();
    }

    // função que serve para listar os dados da pessoa que estão guardados no banco de dados
    public function listar(){
        // chama a tabela com os dados
        $sql = "SELECT * FROM pessoa";
        // aqui prepara a conexão com o banco de dados para executar a linha de código acima
        $stmt = $this->conexao->getConexao()->prepare($sql);
        // executa a linha de código acima
        $stmt->execute();
        // o result receberá o resultado da consulta do stmt
        $result = $stmt->get_result();
        // cria a array pessoas
        $pessoas = [];
            // o while servirá para buscar os dados do result
            while($pessoa = $result->fetch_assoc()){
                // a array pessoas recebe o que está em pessoa
                $pessoas[] = $pessoa;
            }
        // retorna a array pessoas
        return $pessoas;
    }

    public function buscarPorId($id) {
        // chama a tabela com os dados
        $sql = "SELECT * FROM pessoa WHERE id = ?";
        // aqui prepara a conexão com o banco de dados para executar o comando acima
        $stmt = $this->conexao->getConexao()->prepare($sql);
        $stmt->bind_param('i', $id);
        // executa a linha de código acima
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }

    // função que atualiza as informações do cadastro
    public function atualizar($id) {
        // comando SQL para atualizar as informações
        $sql = "UPDATE pessoa SET nome = ?, endereco = ?, bairro = ?, cep = ?, cidade = ?, estado = ?, telefone = ?, celular = ? WHERE id = ?";
        // prepara a conexão com o banco de dados para executar o código acima
        $stmt = $this->conexao->getConexao()->prepare($sql);
        // faz o preparo dos tipos de dados q o banco receberá
        $stmt->bind_param('sssssssss', $this->nome, $this->endereco, $this->bairro, $this->cep, $this->cidade, $this->estado, $this->telefone, $this->celular, $id);
        // executa a linha de codigo acima
        return $stmt->execute();
    }
    public function excluir($id){
        $sql = "DELETE FROM pessoa WHERE id = ?";
        $stmt = $this->conexao->getConexao()->prepare($sql);
        $stmt->bind_param('i', $id);
        return $stmt->execute();
    }
}

?>