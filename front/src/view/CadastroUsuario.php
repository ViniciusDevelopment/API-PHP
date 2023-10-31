<?php 

use Controllers\UserController;

// aqui se ocorrer um post criamos um objeto da controller e chamamos a função passando os campos desejados

if ($_POST) {
    $user = new UserController ();
    $nome =$_POST ["Nome"];
    $email = $_POST ["Email"];
    $senha = $_POST ["Senha"];
    // echo($nome . "<br>");
    // echo($email . "<br>");
    // echo($senha . "<br>");
    

    $result = $user -> cadastraUser ($nome,$email,$senha);
    // echo($result);
    if ($result == 1) {
        echo "<p class='bg-green-500 text-white p-4'>Cadastrado com sucesso</p>";
    } else {
        echo "<p class='bg-red-500 text-white p-4'>Erro ao cadastrar</p>";
    }
}
?>

<html lang = "pt-br">
    <head> 
        <link href="https://cdn.jsdelivr.net/npm/daisyui@3.9.2/dist/full.css" rel="stylesheet" type="text/css" />
        <script src="https://cdn.tailwindcss.com"></script>
    </head>

    <body> 
        <div class="hero min-h-screen bg-base-200">
            <div class="hero-content flex-col lg:flex-row-reverse">
            
                <div class="card flex-shrink-0 w-full max-w-sm shadow-2xl bg-base-100">
                <form class="card-body" method = "POST">
                <div class="form-control">
                    <label class="label">
                        <span class="label-text"> Nome </span>
                    </label>
                    <input type="text" placeholder = "Nome" class="input input-bordered" name = "Nome" required />
                    </div>
                    <div class="form-control">
                    <label class="label">
                        <span class="label-text"> Email </span>
                    </label>
                    <input type="email" placeholder = "Email" class="input input-bordered" name = "Email" required />
                    </div>
                    <div class="form-control">
                    <label class="label">
                        <span class="label-text"> Senha </span>
                    </label>
                    <input type="password" placeholder = "Senha" class="input input-bordered" name = "Senha" required />
                    <label class="label">
                        <span class="label-text"> Confirmar Senha </span>
                    </label>
                    <input type="password" placeholder = "confirmarsenha" class="input input-bordered" name = "confirmarsenha" required />
     
                    </div>
                    <div class="form-control mt-6">
                    <button class="btn btn-primary">Cadastrar</button>
                    </div>
                    <div class="text-center mt-4">
    <a href="/login" class="text-blue-500">Efetue Login!</a>
</div>
                </form>
                </div>
            </div>
        </div>
    </body>
</html>