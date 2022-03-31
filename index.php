<?php
require_once("pessoa.class.php");

$pessoa = new Pessoa();
$pessoa->setNome("Marcela");
$pessoa->setEndereco("Av Travessa Bernardo Strozzi");
$pessoa->setBairro("Jd Lageado");
$pessoa->setCep("08041-715");
$pessoa->setCidade("São Paulo");
$pessoa->setEstado("SP");

?>
<html>
    <head>
        <title>PHP</title>
</head>
  <body>
      <table style="border: 1px solid;">
          <tr>
              <td style="border: 1px solid; background-color: #e2aaef"><?php echo $pessoa->getNome(); ?></td>
         </tr>
         <tr>
              <td style="border: 1px solid; background-color: #e2aaef"><?php echo $pessoa->getEndereco(); ?></td>
         </tr>
         <tr>
              <td style="border: 1px solid; background-color: #e2aaef"><?php echo $pessoa->getBairro(); ?></td>
         </tr>
         <tr>
              <td style="border: 1px solid; background-color: #e2aaef"><?php echo $pessoa->getCep(); ?></td>
         </tr>
         <tr>
              <td style="border: 1px solid; background-color: #e2aaef"><?php echo $pessoa->getCidade(); ?></td>
         </tr>
         <tr>
              <td style="border: 1px solid; background-color: #e2aaef"><?php echo $pessoa->getEstado(); ?></td>
         </tr>
         
     </table>
</body>
</html>

