const form = document.getElementById('meuFormulario');
const section = document.getElementById('solicitacao');

// Adiciona um listener de clique na seção para alternar o formulário
if (form && section) {
    section.addEventListener('click', function(event) {
        // Verifica se o clique não foi dentro do formulário (para evitar fechar ao clicar nos campos)
        if (!form.contains(event.target) || event.target === section) {
             form.classList.toggle('expanded');
        }
    });
}