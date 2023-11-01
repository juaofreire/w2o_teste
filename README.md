# W2O

# Resumo do Projeto

## Descrição
Este projeto consiste no desenvolvimento de um sistema de gerenciamento de produtos e suas categorias, usando a linguagem PHP. O sistema permite a inclusão, alteração, consulta e exclusão de produtos e categorias, bem como o controle de entrada e saída de produtos, a visualização de históricos de entrada e saída, a geração de relatórios de estoque e a criação de um gráfico de ranking dos 10 produtos com mais saídas no sistema.

## Funcionalidades Principais
### Gerenciamento de Produtos e Categorias
- Inclusão, alteração, consulta e exclusão de produtos e categorias.
- Atributos dos produtos como solicitado.

### Controle de Estoque
- Registro de entrada e saída de produtos.
- Histórico de entradas e saídas dos produtos.

### Relatórios
- Geração de um relatório com a quantidade atual em estoque dos produtos (excel).
- Criação de um gráfico de ranking dos 10 produtos com mais saídas no sistema.

### Usabilidade e Validação
- Estruturação de código para facilitar a manutenção.
- Tratamento de erros para proporcionar uma experiência de uso confiável.
- Validação dos campos de cadastro de produtos.
- Ordenação e filtragem de produtos na listagem.

### Banco de Dados
- Conexão e modelagem do banco de dados para armazenar informações de produtos, categorias e registros de entrada/saída.
- Garantia de que campos de data não contenham datas retroativas.

### Gerenciamento de Imagens
- Restrição para salvar imagens com mais de 5MB nos formatos JPG ou PNG.

### Multiusuário
- Capacidade de tratamento de 2 usuários lançando entrada ou saída ao mesmo tempo.

## Conclusão
Este projeto apresenta um sistema robusto de gerenciamento de produtos e categorias, com ênfase na usabilidade, validação de dados, segurança e funcionalidades avançadas. É destinado a proporcionar uma experiência eficiente e amigável aos usuários, além de fornecer informações detalhadas sobre o estoque de produtos e sua movimentação no sistema.

## Passo a Passo para Começar:

<strong>1. Clone o Repositório:</strong>

```bash
git clone https://github.com/juaofreire/w2o_teste.git
```

<strong>2. Acesse o Diretório do Projeto:</strong>

```bash
cd w2o_teste
```

<strong>3. Instale as Dependências:</strong>

```bash
composer install
```

<strong>4. Copie o Arquivo .env:</strong>

```bash
cp .env.example .env
```

<strong>5. Gere uma Nova Chave do Laravel:<br></strong>

```bash
php artisan key:generate
```

<strong>6. Linkar Pasta Storage com Public:<br></strong>

```bash
php artisan storage:link
```

<strong>7. Configure o Banco de Dados em .env (caso seja necessário):</strong>

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=White
DB_USERNAME=root
DB_PASSWORD=
```

<strong>8. Rode as Migrations para Criar o Banco de Dados (responda com 'yes' quando solicitado):</strong>

```bash
php artisan migrate
```

<strong>9. Alimente o Banco de Dados com o Usuários Padrão e Dados:</strong>

```bash
php artisan db:seed
```

<strong>10. Inicie o Servidor de Desenvolvimento:</strong>

```bash
php artisan serve
```

<strong>11. URL para Acesso ao Servidor de Desenvolvimento:</strong>

```bash
http://127.0.0.1:8000/
```

## Modelagem de Dados:

<strong>Para este projeto, foi necessario a criação das tabelas, categorias, produtos, registros, empregados, usuarios</strong>

<strong>1. Criação da tabela "users" conforme solicitado no teste:</strong>

- A tabela "users" possui os seguintes atributos: id, name, email, email_verifies_at, password, remember_token, created_at e updated_at.
- Cada usuário está associado a vários registros, enquanto um registro está associado a apenas um usuário.

<strong>2. Criação da tabela "employees" para os empregados que solicitaram produtos:</strong>

- A tabela "employees" possui os seguintes atributos: id, name, email, created_at e updated_at.
- Cada empregado está associado a vários registros, enquanto um registro está associado a apenas um empregado.

<strong>3. Criação da tabela "categories" conforme solicitado no teste:</strong>

- A tabela "categories" possui os seguintes atributos: id, name, created_at e updated_at.
- Cada categoria está associada a vários produtos, enquanto um produto está associado a apenas uma categoria.

<strong>4. Criação da tabela "products" conforme solicitado no teste:</strong>

- A tabela "products" possui os seguintes atributos: id, name, description, price, products_quantity, avatar_url, expiration_date, category_id, created_at e updated_at.
- O atributo "category_id" é uma chave estrangeira referenciando o "id" da tabela "categories", sendo usado para identificar a categoria do produto.
- Cada produto é associado a apenas uma categoria, enquanto uma categoria pode ser associada a vários produtos.
- Cada produto está associado a vários registros, enquanto um registro pode estar associado a vários produtos.

<strong>5. Criação da tabela "registries" para o cadastro das entradas e saídas dos produtos:</strong>

- A tabela "registries" possui os seguintes atributos: id, type, initial_quantity, alteration, product_id, user_id, employee_id, created_at e updated_at.
- O atributo "user_id" é uma chave estrangeira referenciando o "id" da tabela "users", sendo usado para identificar o criador do registro.
- O atributo "employee_id" é uma chave estrangeira referenciando o "id" da tabela "employee", sendo usado para identificar quem pediu o registro.
- O atributo "product_id" é uma chave estrangeira referenciando o "id" da tabela "product", sendo usado para identificar o produto do registro.
- Cada registro é associado a apenas um criador (usuário), enquanto um usuário pode criar vários registros.
- Cada registro é associado a apenas um empregado, enquanto um empregado pode ser associado a vários registros.
- Cada registro é associado a apenas um produto, enquanto um produto ser associado a vários registros.

![image](https://github.com/juaofreire/w2o_teste/assets/112773932/cfb8029f-622d-4c1c-9dd5-24cf329390d7)

## Novas Telas do Sistema:

| Dashboard | Gerenciamento de Usuários | Gerenciamento de Empregados |
| -------- | -------- | -------- |
| ![image](https://github.com/juaofreire/w2o_teste/assets/112773932/0fdad2bc-5d58-46d5-b97a-fda2e107923b) | ![image](https://github.com/juaofreire/w2o_teste/assets/112773932/c5b6c8db-048e-4732-8842-56dd14f35d59) | ![image](https://github.com/juaofreire/w2o_teste/assets/112773932/8eda7bcc-7d31-4fb8-b680-fdfe95e7816f) |
| Gerenciamento de Categorias | Gerenciamento de Produtos | Histórico de Entrada e Saída de Produtos |
| ![image](https://github.com/juaofreire/w2o_teste/assets/112773932/e99a4f7b-8cde-4bb0-b0b4-e6edcffcc3dc) | ![image](https://github.com/juaofreire/w2o_teste/assets/112773932/b3af2564-9ab2-4b63-b8e0-2c7056909075) | ![image](https://github.com/juaofreire/w2o_teste/assets/112773932/567e1bc2-0f78-43ee-bc9d-83ba33c9fa8e) |


