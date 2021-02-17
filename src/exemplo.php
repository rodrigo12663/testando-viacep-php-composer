<php

require_once "vendor/autoload.php";
use rodrigo\php_one\Search;

$busca = new Search();
$resultado = $busca->getAddressFromZipcode('01001000');
echo $resultado;