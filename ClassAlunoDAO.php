<?php
require_once 'Conexao.php';

class ClassAlunoDAO
{
    public function cadastrarAluno($novoAluno)
    {
        try {
            $pdo = Conexao::getInstance(); 
            $sql = 'insert into notas(nome_aluno, nota1, nota2) values(?, ?, ?)';
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(1, $novoAluno->getNome_aluno());
            $stmt->bindValue(2, $novoAluno->getNota1());
            $stmt->bindValue(3, $novoAluno->getNota2());
            $stmt->execute();
            echo "<center><h1>Cadastro realizado com sucesso!</h1></center><br>";
            echo '<a href="listar.php">Listar</a>';
            return true;
        } catch (PDOException $erro) {
            echo $erro->getMessage();
            return false;
        }
    } 

    public function listarAlunos()
    {
        try {
            $pdo = Conexao::getInstance();
            $sql = "select * from semestre";
            $stmt = $pdo->query($sql);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $erro) {
            echo $erro->getMessage();
            return [];
        }
    }
} 
?>
