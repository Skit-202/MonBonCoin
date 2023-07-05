<?php


try {
    $it = new DirectoryIterator("../lib");
 foreach ($it as $fileinfo) {
        echo $fileinfo->getFilename() . "<br>";
    }

} catch (Exception $e) {
    echo"<pre>";
    // var_dump($e) ;
    echo"</pre>";
    // echo $e->getMessage();
    throw new Exception($e->getMessage());

}