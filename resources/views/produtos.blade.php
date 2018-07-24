<?php 
foreach ($produtos as $key => $value) {

    echo 'Nome do Produto : '.$value["nome"].'<br />';
    echo 'Marca do Produto: '.$value["marca"].'<br />';
    echo 'Nome do Cliente : '.$value["clientes"]["nome"].'<br />';
    echo 'Nome da Empresa : '.$value["clientes"]["empresa"].'<br />';
    echo '<hr>';
   
}


?>