<html>

<head>
  <title>Agenda Pessoal</title>
</head>

<?php
ini_set("display_errors", 1);
header('Content-Type: text/html; charset=iso-8859-1');

// echo 'Versao Atual do PHP: ' . phpversion() . '<br>';
// echo phpinfo();

$servername = "db";
$username = "root";
$password = "Desafio123";
$database = "agenda";

// Criar conexão
$link = new mysqli($servername, $username, $password, $database);

printf("<h1>Lista de contados</h1>");
printf("
<table>
  <thead>
    <tr>
      <td>Nome</td>
      <td>email</td>
      <td>Telefone</td>
    </tr>
  </thead>
  <tbody>
");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$query = "SELECT * FROM contato";

if ($result = mysqli_query($link, $query)) {
    while ($row = mysqli_fetch_assoc($result)) {
        printf("<tr><td>%s</td> <td>%s<td/> <td>%s<td/> <tr>", $row["name"], $row["email"], $row["telefone"]);
    }
    mysqli_free_result($result);
} else {
    printf("Não existe contato cadastrado!");
}

printf("
</table>
");

mysqli_close($link);
?>

</html>