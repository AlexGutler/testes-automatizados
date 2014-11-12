Design Patterns - Projeto 4 - Populate

Nessa fase você deve criar um formulário de cadastro de produto contendo os seguintes campos:

Nome: Texto
Valor: Texto
Descrição: Texto
Categoria: Select, com as opções vindo dinâmicamente de um banco de dados sqlite.

Você deverá ser capaz de popular esse formulário com dados vindo de um array, no momento da exibição do formulário.

Algo como: $form->popular($dados);

Ao popular o formulário você deve exibir mensagens de erro para as seguintes situações:

- Caso o nome do produto não esteja no array ou esteja vazio;
- Caso o valor do produto não seja numérico
- Caso a descrição contenha +200 caracteres.

No seu formulário também deve ser permitido exibir os erros ao topo do formulário em forma de lista (ul) OU cada erro anexado ao campo que ele se refere OU mostrar os erros em forma de lista ao rodapé do formulário.

Estas mensagens de erro devem ser exibidas assim que o formulário é populado.

Recomendacoes:

- Procure usar todos os patterns que foram ensinados até agora para que seu código fique mais organizado
- Faça métodos e classes pequenos