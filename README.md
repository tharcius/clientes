# Tipos de clientes



3.º exercício do curso de POO, nesta etapa temos como objetivo refatorar as classes utilizadas de seu projeto para que as mesmas trabalhem com namespaces.

-- Desafios dessa etapa --
- Refatorar as classes para utilizarem namespace.


-- Regras de Negócio --

No momento da listagem dos clientes, deve-se diferenciar clientes do tipo jurídico e do tipo físico.

Nos dois casos, deve-se implementar uma interface de classificação de importância.

Alguns clientes optarão por um endereço específico de cobrança, deverá ser criada uma interface para que os clientes a possam informar.

Para ficar mais apresentável, no meu caso, ao invés do Bootstrap optei pelo Foundation, devido a um acabamento melhor no tratamendo das media querys.

Acabei trocando o Foundation pelo Materialize para aprender a trabalhar com esse framework CSS.



## Histórico de mudanças
- Correções no projeto
  - Implementada as interfaces para Endereço de Cobrança, Grau de Importância, Pessoa Física e Jurídica.
  - Alterações nas classes Cliente, Fisica e Juridica
  - Alterações necessárias nas telas
  - Pequenas alterações no layout e favicon

- Nova etapa
  - Aceitar também clientes Pessoa Jurídica em sua listagem..
  - No momento da listagem dos clientes, você deve indicar em uma das colunas se o cliente é pessoa física ou jurídica.
  - Ambos os tipos devem implementar uma interface onde seja possível classificar o grau de importância do cliente para a empresa (ex: cliente 1,2,3,5 estrelas).
  - Opção de criar clientes que utilizão endereço específico de cobrança.


- Correções no projeto
  - Utilização do filter_input para filtragem dos dados recebidos pela URL.
  - Correção da busca dos telefones pelo getter getTelefone() (Havia esquecidos os parenteses na chamada da função).
  - Muito obrigado pela dica do filter_input.


- Substituição do Framework CSS
  - Para fins de aprendizado e testes, optei por trocar o Fundation pelo Materialize CSS(http://materializecss.com/).
  

- Criação da págida para exibição dos clientes do array
  - Criação do layout da aplicação utilizando o Zurb Foundation(http://foundation.zurb.com/) como framework CSS.
  

- Criado um array com 10 elementos
  - A partir da classe principal, foi gerado um array com 10 clientes.
  - Estrutura inicial criada.
  - Criada uma classe Cliente com as principais características de cliente.
