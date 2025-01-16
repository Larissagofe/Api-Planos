# Api Rest de Planos

O projeto tem o intuíto de criar produtos, novos planos e atualizá-los.

[Funcionalidades](#funcionalidades)

- Adicionar um novo produto
- Adicionar um novo plano
- Editar um novo plano
- Exibir produtos disponíveis
- Exibir planos disponíveis

## Instalação

Explique como configurar o ambiente ou instalar o projeto. Pode incluir os seguintes passos:

1. Clone o repositório:
 
2. Digitar comando: compose intall

3. Configurar variáveis do arquivo env:
cp .env.example .env

4. Gerar chave de aplicação:
php artisan key:generate

5. Configurar o banco dentro do arquivo .env

6. Executar comando
php artisan migrate

7. Iniciar o servidor e acessar a url
php artisan serve

## Curls api

1. Para criar novo produto:
curl --request POST \
  --url http://127.0.0.1:8000/api/produtos \
  --header 'Content-Type: application/json' \
  --data '{
	"name": "teste",
	"description" : "Chamadas ilimitas."
}'

2. Visualizar produtos:

curl --request GET \
  --url http://127.0.0.1:8000/api/produtos \
  --header 'User-Agent: insomnia/10.3.0'

3. Criar plano

curl --request POST \
  --url http://127.0.0.1:8000/api/planos \
  --header 'Content-Type: application/json' \
  --header 'User-Agent: insomnia/10.3.0' \
  --data '{
	"name" : "Completo",
	"description": "Plano com direito a todos os serviços",
	"products": '\''2'\''
}'

4. Listar planos:
curl --request GET \
  --url http://127.0.0.1:8000/api/planos \
  --header 'User-Agent: insomnia/10.3.0'

5. Atualizar plano

curl --request PUT \
  --url http://127.0.0.1:8000/api/planos/1 \
  --header 'Content-Type: application/json' \
  --header 'User-Agent: insomnia/10.3.0' \
  --data '{
	"products": 3
}'


