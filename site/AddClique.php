<?php
class AddClique{
    private $mes;
    private $ano;
    private $dia;
    private $tipo;

    public function __construct(){
        date_default_timezone_set('America/Sao_Paulo');
        $this->setMes(intval(date("m")));
        $this->setAno(date("Y"));
        $this->setDia(date('d'));
        $this->setTipo($this->getTipo());
    }

    public function insertClique(){
        include"conexao.php";
        $acesso_today = ["acesso", "today"];
        for ($i = 0; $i < count($acesso_today) ; $i++) {
            if($acesso_today[$i] === "today")
                $select = "SELECT cliques FROM today WHERE fktipo=:tipo AND fkmes=:mes AND fkano=:ano AND dia=:dia";
            else
                $select = "SELECT cliques FROM $acesso_today[$i] WHERE tipo=:tipo AND mes=:mes AND ano=:ano";
            $cmdSelect = $conexao->prepare($select);
            $cmdSelect->bindValue(":tipo", $this->getTipo());
            $cmdSelect->bindValue(":mes", $this->getMes());
            $cmdSelect->bindValue(":ano", $this->getAno());
            if($acesso_today[$i] === "today") $cmdSelect->bindValue(":dia", $this->getDia());
            $cmdSelect->execute();
            $registro = $cmdSelect->fetch();
            $cliques = $registro['cliques'];

            if($acesso_today[$i] === "today")
                $update = "UPDATE $acesso_today[$i] SET cliques=:newclique WHERE fktipo=:tipo AND fkmes=:mes AND fkano=:ano AND dia=:dia";
            else
                $update = "UPDATE $acesso_today[$i] SET cliques=:newclique WHERE tipo=:tipo AND mes=:mes AND ano=:ano";
            $cmdInsert = $conexao->prepare($update);
            $cmdInsert->bindValue(":newclique", $cliques + 1);
            $cmdInsert->bindValue(":tipo", $this->getTipo());
            $cmdInsert->bindValue(":mes", $this->getMes());
            $cmdInsert->bindValue(":ano", $this->getAno());
            if($acesso_today[$i] === "today") $cmdInsert->bindValue(":dia", $this->getDia());
            $cmdInsert->execute(); 
        }

    }

    public function getMes(){
        return $this->mes;
    }
    public function getAno(){
        return $this->ano;
    }
    public function getDia(){
        return $this->dia;
    }
    public function getTipo(){
        return $this->tipo;
    }

    public function setMes($mes){
        $this->mes = $mes;
    }
    public function setAno($ano){
        $this->ano = $ano;
    }
    public function setDia($dia){
        $this->dia = $dia;
    }
    public function setTipo($tipo){
        $this->tipo = $tipo;
    }
}
?>