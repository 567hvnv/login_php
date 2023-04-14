<?php
session_start();

include('conexion.php');
if(isset($_POST['usuario']) && isset ($_POST ['clave']) ){
    
    function validate($data){

    $data =trim($data);
    $data =stripcslashes($data);
    $data =htmlspecialchars($data);

    return $data;
    }
    $usuario=validate($_POST['usuario']);
    $clave=validate($_POST['clave']);


    if (empty($usuario)) {
        header("Location:index.php?error=El usuario es requerido ");
        exit();

    }elseif (empty($clave)) {
        header("Location:index.php?error=La clave es requerida ");
        exit();
    }else{

       // $clave=md5($clave);

        $Sql="SELECT * FROM persona WHERE usuario='$usuario' AND clave='$clave'  ";
        $result =mysqli_query($conexion,$Sql);


        if (mysqli_num_rows($result) ===1) {
            $row=mysqli_fetch_assoc($result);
            if ($row['usuario'] ===$usuario && $row ['clave']===$clave) {
               $_SESSION['usuario'] =$row ['usuario'];
              header("Location:principal.php");
              exit();
            }else{
                header("Location:Index.php?error=El usuario o la clave son incorrectas");
            }
        }else{
            header("Location:Index.php?error=El usuario o la clave son incorrectas");
            exit();

        }
    }
}else{
    header("Location:Index.php");
    exit();
}

?>