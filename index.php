
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="image/favicon-64x64.png" type="image/png">
    <title>Ordem de Serviço - Login</title>
</head>
<body>
    <main>
        <section class="senai">
            <img src="image/senai.png" alt="Logo-senai">
        </section>
        <section class="login">
            <div class="box">
                <h1>LOGIN</h1>
                <form class="form-login" >
                    <label for="email">E-mail ou NIF</label><br>
                    <input name="email" id="email" type="text" placeholder="Email ou NIF aqui"><br>
                    <label for="senha">Senha</label><br>
                    <input name="senha" id="senha" type="password" placeholder="Digite sua senha"><br>
                    <select name="Cargo" id="cargo-select">
                        <option value="gestor">Gestor</option>
                        <option value="tecnico">Tecnico</option>
                        <option value="solicitante">Solicictante</option>
                    </select>
                    <button type="submit">Entra</button>
                </form>
            </div>
        </section>
    </main>
    <script>
    const form = document.querySelector('.form-login');
    const cargoSelect = document.getElementById("cargo-select");
    form.addEventListener('submit', function(event) {

        event.preventDefault(); 
        
        const cargo = cargoSelect.value;
        let destino = "";
        if (cargo === "gestor") {
            destino = "gestor_computador/index.html";
        } else if (cargo === "solicitante") {
            destino = "solicitante_celular/home.php";
        } else if (cargo === "tecnico") {
            destino = "tecnico_celular/index.html";
        }
        if (destino) {
            window.location.href = destino;
        }
    });
</script>
</body>
</html>