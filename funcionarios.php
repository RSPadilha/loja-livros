<?php
include "index.php";
include "conectar.php";
print "TABELA DE FUNCIONARIOS";
$ok = conecta_bd() or die ("Erro ao conectar");
$result = mysqli_query($ok, "Select * from funcionarios");
?>
<link rel="stylesheet" type="text/css" href="style.css">

<table border="1">
	<tr>
		<th>Nome</th>
		<th>Data contratação</th>
	</tr>
	<?php
	while ($linha = mysqli_fetch_array($result)) {
		$nome = $linha["nome"];
		$datac = $linha["datacontratacao"];
	print ("<tr>
		<th>$nome</th>
		<th>$datac</th>
	</tr>");
	}
	?>
</table>
<button>Inserir Novo</button>
<button>Deletar</button>