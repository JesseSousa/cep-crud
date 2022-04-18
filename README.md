# CEP CRUD

## Como Utilizar

> Certifique-se de ter instalado em sua máquina as ferramentas: docker e docker-compose

1. Na raíz do projeto, crie um arquivo `.env` com o mesmo conteúdo do arquivo `.env.example`:

```bash
cp .env.example .env
```

2. Dentro do diretório do projeto, em um terminal BASH, execute:

```bash
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/var/www/html \
    -w /var/www/html \
    laravelsail/php81-composer:latest \
    composer install --ignore-platform-reqs
```

3. Rode a aplicação em um container Docker, usando o comando:

```bash
./vendor/bin/sail up -d
```

4. Crie uma key para o projeto, com o comando:

```bash
./vendor/bin/sail php artisan key:generate
```

5. Execute as migrações do projeto:

```bash
./vendor/bin/sail php artisan migrate
```

Pronto, agora o app está pronto para ser utilizado. Em seu browser, vá para a url: `http://localhost/`.

Caso queira parar a aplicação, execute o comando:

```bash
./vendor/bin/sail down
```
