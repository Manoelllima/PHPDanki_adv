<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erro 404 - Página não encontrada</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            background-color: #f8f9fa;
            color: #495057;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 100vh; 
            margin: 0;
            text-align: center;
            box-sizing: border-box;
        }

        .container {
           
            border-radius: 10px;
            background-color: #ffffff;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 1rem  auto;
            
        }

        h1 {
            font-size: 8rem;
            margin-bottom: 0.5rem;
            color: #e9ecef;
            z-index: 1;
        }

        .text-overlay {
            font-size: 2.5rem;
            font-weight: 700;
            color: #343a40;
            margin-top: -2rem;
            margin-bottom: 1rem;
            z-index: 2;
        }

        p {
            font-size: 1.1rem;
            line-height: 1.6;
            margin-bottom: 2rem;
        }

        .btn {
            display: inline-block;
            padding: 12px 24px;
            font-size: 1rem;
            color: #ffffff;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .btn:hover {
            background-color: #0056b3;
            transform: translateY(-2px);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>404</h1>
        <div class="text-overlay">Página não encontrada</div>
        <p>A página que você está procurando pode ter sido removida, tido seu nome alterado ou está temporariamente indisponível.</p>
        <a href="home" class="btn">Voltar para a página inicial</a>
        
    </div>
</body>
</html>
