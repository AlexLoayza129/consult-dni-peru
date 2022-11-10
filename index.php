<?php
// Datos
$token = 'apis-token-1.aTSI1U7KEuT-6bbbCguH-4Y8TI6KS73N';
$dni = '00000000';

// Iniciar llamada a API
$curl = curl_init();

// Buscar dni
curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.apis.net.pe/v1/dni?numero=' . $dni,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 2,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'Referer: https://apis.net.pe/consulta-dni-api',
    'Authorization: Bearer ' . $token
  ),
));

$response = curl_exec($curl);

curl_close($curl);
// Datos listos para usar
$persona = json_decode($response);
// var_dump($persona);
?>

<table border="1">
    <thead>
        <th>Nombre</th>
        <th>tipoDocumento</th>
        <th>numeroDocumento</th>
        <th>estado</th>
        <th>condicion</th>
        <th>direccion</th>
        <th>ubigeo</th>
        <th>viaTipo</th>
        <th>viaNombre</th>
        <th>zonaCodigo</th>
        <th>zonaTipo</th>
        <th>numero</th>
        <th>interior</th>
        <th>lote</th>
        <th>dpto</th>
        <th>manzana</th>
        <th>kilometro</th>
        <th>distrito</th>
        <th>provincia</th>
        <th>departamento</th>
        <th>apellido paterno</th>
        <th>apellido paterno</th>
        <th>nombres</th>
    </thead>
    <tbody>
        <tr>
            <?php
                foreach($persona as $item){
                    if($item != null){
                        echo "<td>$item</td>";
                    }else{
                        echo "<td>Nulo</td>";
                    }
                }
            ?>
        </tr>
    </tbody>
</table>
