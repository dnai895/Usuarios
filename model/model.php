
<?php
// put your code here

class Usuari {
public $nom;
public $cognom;
public $edad;
public $email;

public function __construct($nom, $cognom, $edad,$email)  
    {  
            $this->nom = $nom;
            $this->cognom = $cognom;
            $this->edad = $edad;
            $this->email = $email;

    } 


}
$diccionario = array(
'table'=>'Tabla Usuarios',
'titulo'=>'Resumen de Usuarios'

);
$template = file_get_contents('/carpeta/template.html');
 foreach ($diccionario as $clave=>$valor) {
    $template = str_replace('{'.$clave.'}', $valor, $template);
}
?>
