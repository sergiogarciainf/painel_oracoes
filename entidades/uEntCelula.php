<?php
class EntCelula {

    private $idcelula;
    private $idinstituicao;
    private $nome;
    private $endereco;
    private $num;
    private $complemento;
    private $bairro;
    private $cidade;
    private $uf;
    private $cep;

    public function setidcelula($v) {
        $this->idcelula = $v;
    }

    public function setidinstituicao($v) {
        $this->idinstituicao = $v;
    }

    public function setnome($v) {
        $this->nome = $v;
    }

    public function setendereco($v) {
        $this->endereco = $v;
    }

    public function setnum($v) {
        $this->num = $v;
    }

    public function setcomplemento($v) {
        $this->complemento = $v;
    }

    public function setbairro($v) {
        $this->bairro = $v;
    }

    public function setcidade($v) {
        $this->cidade = $v;
    }

    public function setuf($v) {
        $this->uf = $v;
    }

    public function setcep($v) {
        $this->cep = $v;
    }

    public function getidcelula() {
        return $this->idcelula;
    }

    public function getidinstituicao() {
        return $this->idinstituicao;
    }

    public function getnome() {
        return $this->nome;
    }

    public function getendereco() {
        return $this->endereco;
    }

    public function getnum() {
        return $this->num;
    }

    public function getcomplemento() {
        return $this->complemento;
    }

    public function getbairro() {
        return $this->bairro;
    }

    public function getcidade() {
        return $this->cidade;
    }

    public function getuf() {
        return $this->uf;
    }

    public function getcep() {
        return $this->cep;
    }
}
?>
