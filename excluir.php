<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Alunos</title>
    <link rel="stylesheet" href="./styles/excluir.css">

</head>
<body>

<div class="form-container">
    <h2>Deletar</h2>
    <form action="excluirAluno.php" method="POST">     
        <div class="form-group">
            <label for="ano">Qual ID quer deletar?</label>
            <input type="number" name="id" min="1" max="100" required>
        </div>
        <button type="submit" class="btn-submit">Deletar Aluno</button>
        
	</form>
</div>

</body>
</html>
