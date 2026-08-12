<?php

    $ftpHost = 'ftp.midominioweb.com';
    $ftpUserName = 'usuarioftp';
    $ftpPassword = '1234';

    $connid = ftp_connect($ftpHost) or die("no se pudo conectar a $ftpHost");

    if(@ftp_login($connid,$ftpUserName,$ftpPassword)){
        echo "conectado como $ftpUserName@$ftpHost";
    }else{
        echo "No se ha podido conectar a $ftpUserName";
    }

    $localFilePath = "index.php";
    $remoteFilePath = "public_html/index.php";


    //*subir un archivo con ftp_put()
    if (ftp_put($connid,$remoteFilePath,$localFilePath,FTP_ASCII)) {
        echo "archivo transferido con exito - $localFilePath";
    }else{
        echo "error";
    }

    //*obtener un archivo con ftp_get()

    if (ftp_get($connid,$localFilePath,$remoteFilePath,FTP_BINARY)) {
        echo "transferencia exitosa";
    }else{
        echo "error en la transferencia";
    }

    ftp_close($connid);

?>