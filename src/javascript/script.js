
var eButtons = document.querySelectorAll('.editar_button');

eButtons.forEach(function(button) {
    button.addEventListener('click', function() {
        var tarefa = this.closest('.tarefa');
        var progresso = tarefa.querySelector('.progresso');
        var descricaoTarefa = tarefa.querySelector('.descricao_tarefa');
       
        if (progresso) progresso.classList.add('hidden');
        if (descricaoTarefa) descricaoTarefa.classList.add('hidden');
       
        var editarTarefa = tarefa.querySelector('.editar_tarefa');
        if (editarTarefa) editarTarefa.classList.remove('hidden');
    });
});
