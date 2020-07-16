<?php
class EntMembro
{
   private $idmembro;
   private $idcelula;
   private $idfuncao_celula;
   private $idstatus_membro;
   private $nome;
   private $celular;
   private $e_mail;
   private $senha;
   private $isalterar_senha;
   public function setidmembro($v)
   {
      $this->idmembro = $v;
   }

   public function setidcelula($v)
   {
      $this->idcelula = $v;
   }

   public function setidfuncao_celula($v)
   {
      $this->idfuncao_celula = $v;
   }

   public function setidstatus_membro($v)
   {
      $this->idstatus_membro = $v;
   }

   public function setnome($v)
   {
      $this->nome = $v;
   }

   public function setcelular($v)
   {
      $this->celular = $v;
   }

   public function sete_mail($v)
   {
      $this->e_mail = $v;
   }

   public function setsenha($v)
   {
      $this->senha = $v;
   }

   public function setisalterar_senha($v)
   {
      $this->isalterar_senha = $v;
   }

   public function getidmembro()
   {
      return $this->idmembro;
   }
   public function getidcelula()
   {
      return $this->idcelula;
   }
   public function getidfuncao_celula()
   {
      return $this->idfuncao_celula;
   }
   public function getidstatus_membro()
   {
      return $this->idstatus_membro;
   }
   public function getnome()
   {
      return $this->nome;
   }
   public function getcelular()
   {
      return $this->celular;
   }
   public function gete_mail()
   {
      return $this->e_mail;
   }
   public function getsenha()
   {
      return $this->senha;
   }
   public function getisalterar_senha()
   {
      return $this->isalterar_senha;
   }
}
?>