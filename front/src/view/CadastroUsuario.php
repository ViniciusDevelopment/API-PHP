

<html lang = "pt-br">
    <head> 
        <link href="https://cdn.jsdelivr.net/npm/daisyui@3.9.2/dist/full.css" rel="stylesheet" type="text/css" />
        <script src="https://cdn.tailwindcss.com"></script>
    </head>

    <body> 
    <table class="table table-bordered table-hover">
            <thead>
              
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody id="table-body">
  
                </tbody>
            </table>

            <?php 
            $registros = [];

use Controllers\UserController;

// aqui se ocorrer um post criamos um objeto da controller e chamamos a função passando os campos desejados
$user = new UserController ();

if (isset($_POST ["Nome"])) {
    
    $nome =$_POST ["Nome"];
    $email = $_POST ["Email"];
    $senha = $_POST ["Senha"];
    
    $result = $user -> cadastraUser ($nome,$email,$senha);
    echo($result);
    if ($result == 1) {
        $registroAtual = ["nome" => $nome, "email" => $email];
        array_push($registros, $registroAtual);
        echo "<p class='bg-green-500 text-white p-4'>Cadastrado com sucesso</p>";
        // Mova a função JavaScript para dentro do bloco if
        echo "<script>
        var registros = " . json_encode($registros) . ";
        function addDataToTable() {
            const tableBody = document.getElementById('table-body');
            tableBody.innerHTML = ''; // Limpe a tabela

            registros.forEach(function(registro, index) {
                const newRow = tableBody.insertRow(tableBody.rows.length);
                const cell1 = newRow.insertCell(0);
                const cell2 = newRow.insertCell(1);
                const cell3 = newRow.insertCell(2);
                cell1.innerHTML = index + 1;
                cell2.innerHTML = registro.nome;
                cell3.innerHTML = registro.email;
            });
        }
        addDataToTable();
      </script>";
    } else {
        echo "<p class='bg-red-500 text-white p-4'>Erro ao cadastrar</p>";
    }
}
?>
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


<script>
    function addDataToTable(nome, email) {
        if (nome && email) {
            const tableBody = document.getElementById('table-body');
            const newRow = tableBody.insertRow(tableBody.rows.length);

            const cell1 = newRow.insertCell(0);
            const cell2 = newRow.insertCell(1);
            const cell3 = newRow.insertCell(2);

            cell1.innerHTML = tableBody.rows.length;
            cell2.innerHTML = nome;
            cell3.innerHTML = email;

            // Limpa os campos após adicionar à tabela
            document.querySelector('input[name="Nome"]').value = '';
            document.querySelector('input[name="Email"]').value = '';
        }
    }
</script>