<?php
require_once 'ClassAlunoDAO.php';
$alunoDAO=new ClassAlunoDAO();
$alunos = $alunoDAO->listarAlunos();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Veículos</title>
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
        <h2>Lista de Alunos</h2>
        <table border=1>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Nota 1</th>
                    <th>Nota 2</th>
                    <th>Média</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($alunos as $aluno): ?>
                <tr>
                    <td><?php echo $aluno['id']?>          </td>
                    <td><?php echo $aluno['nome_aluno']?>          </td>
                    <td><?php echo $aluno['nota1']?>          </td>
                    <td><?php echo $aluno['nota2']?>          </td>
                    <td><?php echo $aluno['media']?>          </td>
                    <td>   
                    <a href="excluir.php?id=<?php echo $aluno['id'];?>">Excluir</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a href="index.php">Cadastrar Novo Aluno</a>
    </div>
</body>
</html>