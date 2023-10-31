

# API PHP Cadastro e Listagem de Usuários

## Objetivo
Desenvolver um projeto php em que se implemente uma API Rest com 2 serviços: cadastro e listagem dos itens cadastrados.


## Funcionalidades
- Cadastro de Usuários.
- Listagem de usuários.


### Camada de Apresentação (Frontend)
1. Execute o servidor de desenvolvimento embutido do PHP na porta 8001 para a camada de apresentação:
   ```bash
   php -S localhost:8001
   ```
2. Acesse a pasta front em `http://localhost:8001` para cadastrar e listar usuários.

### Camada da API (Backend)
1. Execute o servidor de desenvolvimento embutido do PHP na porta 8000 para a camada da API:
   ```bash
   php -S localhost:8000
   ```
2. Use a API em `http://localhost:8000` para realizar requisições de cadastro e listagem de usuários.

## Exemplos de Requisições para a API
Você pode usar o Postman para testar a API. Aqui estão exemplos de requisições:
- Cadastrar um remédio (POST):
  ```http
  POST http://localhost:8000/CadastroUsuario


  {
      "Nome": "teste",
      "Email": "teste@gmail666.com"
      "Senha": "reggrer"
  }
  ```

- Listar todos os usuarios (GET):
  ```http
  GET http://localhost:8000/ListarUsuario
  ```
---


