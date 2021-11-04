<div class="titulo">Include vs Required</div>

<?php
echo "Usando include com arquivo inexistente... <br>";
// Include não interrompe o código
include('arquivo_inexistente');

// require interrompe o código 
echo "Usando require com os arquivos inexistente...<br>";
require('arquivo_inexistente.php');

echo "imprima qualquer coisa";

