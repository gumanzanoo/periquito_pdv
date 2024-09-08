function carregarFornecedores() {
  fetch('../back/carregar_fornecedores.php')
  .then(response => response.json())
  .then(data => {
      let select = document.querySelector('select[name="fornecedor_id"]');
      select.innerHTML = ''; // Limpa as opções
      data.forEach(fornecedor => {
          let option = document.createElement('option');
          option.value = fornecedor.id;
          option.textContent = fornecedor.nome;
          select.appendChild(option);
      });
  })
  .catch(error => console.log('Erro ao carregar fornecedores: ', error));
}

document.addEventListener('DOMContentLoaded', function() {
  carregarFornecedores();
});