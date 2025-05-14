<!-- excluirAluno.php -->
<?php require_once("conexao.php"); ?>
<?php

$conexao = Conexao::getInstance(); 

if (isset($_POST['id'])) {
    $id = $_POST['id'];
}
function deletar($conexao, $id){
   try{ 
   $sql="delete from notas where id=:id";
   $stmt = $conexao->prepare($sql);
   $stmt->bindParam(':id', $id);
   return $stmt->execute();
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
    return false;
}
}

if(deletar($conexao, $id)){
    echo "<h3>Deletado!</h3>";
} else{
    echo "<h3>Erro.<h3>";
}

?>