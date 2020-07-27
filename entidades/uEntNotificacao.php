<?php
class EntNotificacao
{
  private $idnotificacao;
  private $data_inicial;
  private $descricao;
  private $resumo;
  private $data_final;
  private $idinstituicao;
 public function setidnotificacao($v)
   {
      $this->idnotificacao = $v;
   }
  
 public function setdata_inicial($v)
   {
      $this->data_inicial = $v;
   }
  
 public function setdescricao($v)
   {
      $this->descricao = $v;
   }
  
 public function setresumo($v)
   {
      $this->resumo = $v;
   }
  
 public function setdata_final($v)
   {
      $this->data_final = $v;
   }
  
 public function setidinstituicao($v)
   {
      $this->idinstituicao = $v;
   }
  
 public function getidnotificacao()
   {
      return $this->idnotificacao;
   }
 public function getdata_inicial()
   {
      return $this->data_inicial;
   }
 public function getdescricao()
   {
      return $this->descricao;
   }
 public function getresumo()
   {
      return $this->resumo;
   }
 public function getdata_final()
   {
      return $this->data_final;
   }
 public function getidinstituicao()
   {
      return $this->idinstituicao;
   }
}
?>
