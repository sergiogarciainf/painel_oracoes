<?php
class EntInstituicao
{
   private $idinstituicao;
   private $denomicacao;
   private $nome;
   private $nome_contato;
   private $email;
   private $senha;
   private $telefone;
   private $nivel_seguranca;
   private $nome_pdf;
   public function setidinstituicao($v)
   {
      $this->idinstituicao = $v;
   }

   public function setdenomicacao($v)
   {
      $this->denomicacao = $v;
   }

   public function setnome($v)
   {
      $this->nome = $v;
   }

   public function setnome_contato($v)
   {
      $this->nome_contato = $v;
   }

   public function setemail($v)
   {
      $this->email = $v;
   }

   public function setsenha($v)
   {
      $this->senha = $v;
   }

   public function settelefone($v)
   {
      $this->telefone = $v;
   }

   public function setnivel_seguranca($v)
   {
      $this->nivel_seguranca = $v;
   }

   public function setnome_pdf($v)
   {
      $this->nome_pdf = $v;
   }

   public function getidinstituicao()
   {
      return $this->idinstituicao;
   }
   public function getdenomicacao()
   {
      return $this->denomicacao;
   }
   public function getnome()
   {
      return $this->nome;
   }
   public function getnome_contato()
   {
      return $this->nome_contato;
   }
   public function getemail()
   {
      return $this->email;
   }
   public function getsenha()
   {
      return $this->senha;
   }
   public function gettelefone()
   {
      return $this->telefone;
   }
   public function getnivel_seguranca()
   {
      return $this->nivel_seguranca;
   }
   public function getnome_pdf()
   {
      return $this->nome_pdf;
   }
}
?>