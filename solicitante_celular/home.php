<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordem de Serviço - Home</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header id="main-header">
        <section class="assets"></section>
        <div class="descricao-pagina"><img src="image/senai.svg" alt="Logo SENAI"></div>
        <section class="assets"></section>
    </header>
    <main>
    <section id="solicitacao">
        <button class="botao-form">Nova Solicitação</button>
     <form id="meuFormulario">
        <select name="area" id="area">
            <option value="" selected disabled hidden>Área</option>
            <option value="sla">Laboratório de Informática</option>
        </select>

        <select name="ativo" id="ativo">
            <option value="" selected disabled  hidden>Ativo</option>
            <option value="Mesa">Mesa - 11</option>
            <option value="Cadeira">Cadeira - 12</option>
        </select>
        
        <select name="unidade" id="unidade">
            <option value="" selected disabled hidden>Unidade / Local</option>
            <option value="senai">SENAI - Presidente Prudente</option>
        </select>
        
        
        <input type="text" name="descricao" id="descricao" placeholder="Descrição do Problema">
        
        <div class="input-imagem-container">
            <input type="file" name="imagem" id="imagem" accept="image/*" style="display: none;">
            <label for="imagem">Adicionar Imagem</label>
        </div>
        <select name="sug-prioridade" id="sug-prioridade">
            <option value="" selected disabled hidden>Sugestão de Prioridade</option>
            <option value="Baixa">Baixa</option>
            <option value="Média">Média</option>
            <option value="Alta">Alta</option>
        </select>
        <button class="botao-form" type="submit">ENVIAR SOLICITAÇÃO</button>
    </form>
    </section>
    <div class="linha"></div>
    <section id="historico">
        <h1>Histórico</h1>
        <div class="cards">
            <div class="descri-card">
                <h2>Braien</h2>
                <p>Solicitação para o ativo: cadeira - 11</p>
            </div>
            <div class="ico-descri">
                <div class="img-ilu"></div>
            </div>
        </div>
    </section>
    </main>   
</body>
<script src="js/script.js"></script>
</html>