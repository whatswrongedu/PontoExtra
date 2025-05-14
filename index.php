<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Veículo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        
        h2 {
            text-align: center;
            color: #333;
        }
        
        .form-group {
            margin-bottom: 15px;
        }
        
        label {
            display: block;
            color: #333;
            font-weight: bold;
            margin-bottom: 5px;
        }
        
        input[type="text"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        
        .btn {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        
        .btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Média Aluno</h2>
        <form action="mediaAluno.php" method="POST">
            <div class="form-group">
                <label for="nome_aluno">Nome</label>
                <input type="text"   name="nome_aluno" placeholder="Ex: Yasmim"  >
            </div>
            <div class="form-group">
                <label for="nota1">Nota do 1° Semestre:</label>
                <input type="text"  name="nota1" placeholder="Ex: 10.0" >
            </div>
            <div class="form-group">
                <label for="nota2">Nota do 2° Semestre:</label>
                <input type="text"  name="nota2" placeholder="Ex: 10.0" >
            </div>
            <button type="submit" class="btn">Cadastrar</button>
            <center>
		   <a href="excluir.php">Deletar Aluno?</a>
	       </center>
        </form>
    </div>

</body>
</html>
