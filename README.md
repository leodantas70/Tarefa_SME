## Tarefa_SME 

Projeto desenvolvido para teste de conhecimento. Este repositório foi criado com a intenção de registrar a tarefa passada para um teste. Itens necessários até o momento para rodar: PHP, Apache, MySQL.

## Funcionalidades essenciais
- Criar chamado. (ok)
- Visualizar chamado. (ok)
- Adicionar mensagem a chamado. (ok)

## Melhorias 

### Área administrativa
- Instalação do Node.js.
- Instalação do Breeze para autenticação de usuário e recuperação de email.

### Gestão de ordem de serviços
- Visível e acessível apenas para quem tem permissão de administrador. Aqui, eu usaria uma coluna na tabela de usuário para identificar a permissão do mesmo.
- CRUD de usuários com permissões. Na instalação do Breeze, conseguiria criar os usuários facilmente e suas permissões.
- Configurar permissões de usuários (visualizar, responder, fechar, cancelar, excluir). Tentaria fazer uma verificação na tabela para verificar se o usuário tem aquela permissão e usaria um if caso tenha.
- Configurar permissões de acesso à ordem de serviço de acordo com categorias. Acredito que faria tudo com IF. Um usuário pode ter de 0 a n categorias.
- Configurar permissão nível técnico ou administrador. Criaria uma página para mostrar os usuários e um filtro para pesquisa, onde alteraria suas funções.

### Menu de parametrização do sistema
- Visível e acessível apenas para quem tem permissão de administrador.
- CRUD de opções de status de ordem de serviço.
- CRUD de Categoria de ordem de serviços. Com as melhorias feitas em **Gestão de ordem de serviços**, eu conseguiria facilmente resolver essa parte da tarefa 'Cada ordem de serviço tem sua coluna de status'.

### Relatórios
- Todos os relatórios deverão possuir filtro de data de abertura e de fechamento de ordem de serviço.
- Relatório quantitativo por categoria, listando cada status disponível.
- Relatório quantitativo por técnico.
- Relatório quantitativo por solicitante.
- Relatório de interações de técnico e solicitante contendo:
  - Quantidade de chamados do solicitante.
  - Quantidade de respostas do solicitante.
  - Quantidade de respostas do técnico.
- Relatório de tempo médio de atendimento por categoria, compreendendo abertura e encerramento da ordem de serviço.

## Problemas
- ATEÇÃO: Validar se a estrutura atual será compativel com os relatórios.


