# Ambiente dev PHP/MySql em containers

Veja como criar de forma rápida e eficiente um ambiente de desenvolvimento PHP. Para tal, utilizaremos docker-compose, containers, PHP, Apache e MySQL.

## Pré-Requisitos

- Linux (Ubuntu/Debian) / Windowns (Wsl)
- Docker
- Docker-compose

## Clonar o repositório

Para aproveitar este exeplo basta clonar o realizar um fork do projeto. 

``git clone https://github.com/dio-desafio-docker``

## Criando e subindo os containers
Para executar o projeto basta rodar o comando abaixo

``docker-compose up -d``

## Acessando

### PHPAdmin
No navegador de sua preferência digite o endereço:

``localhost:8080``

Entre acesse o PHPAdmin, crie a table `contato` e inclua alguns registros. É possível criar o banco de dados, a tabela e incluir alguns registros com o script no fim do documento.

### Site
No navegador de sua preferência digite o endereço:
``localhost:4500``

## Script do Banco de Dados

### Banco de dados: `agenda`

- Estrutura para tabela `contato`

```
CREATE TABLE `contato` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
```

- Despejando dados para a tabela `contato`

``` 
INSERT INTO `contato` (`id`, `name`, `email`, `telefone`) VALUES
(1, 'Jhon Smith', 'js@gmail.com', '7198863084'),
(2, 'Billy Orson', 'bo@gmail.com', '7199863542'),
(3, 'Stefany Larsen', 'sl@gmail.com', '7192324567')
```

- Índices de tabela `contato`
```
ALTER TABLE `contato`
  ADD PRIMARY KEY (`id`);
```

- AUTO_INCREMENT de tabela `contato`
```
ALTER TABLE `contato`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;
```