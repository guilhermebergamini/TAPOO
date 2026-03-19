

<?php 
/*
157 = codigo fatec
143 = codigo curso 
26 = ano 
1 = semestre 
2000 = periodo tarde 
*/

class Aluno {

    private  $ra;
    private  $nome;


    private static $contador = 1571432612000; 

    public function __construct($nome)
    {
        self::$contador++;
        $this->ra = self::$contador;
        $this->nome = $nome;
    }

    public function getNome ()
    {
        return $this->nome;
    }

    public function getRA ()
    {
        return $this->ra;
    }

    public function setNome ($nome)
        {
            $this->nome = $nome;
        }
    
    public static function getTotalAlunos (){
        return self::$contador - 1571432612000;
    }

    public function MostrarInstancias ()
    {
        echo "Nome: " , $this->getNome() , "<br>";
        echo "RA: " , $this->getRA() , "<br>";
        echo "Quantidade de Alunos: " , $this->getTotalAlunos() , "<br>";
    }


}

$a1 = new Aluno("Guilherme");
$a1->MostrarInstancias();

$a2 = new Aluno("Top");
$a2->MostrarInstancias();

$a3 = new Aluno("Top");
$a3->MostrarInstancias();

?>