<?php

class ZipCommand extends CConsoleCommand {

    public function actionIndex(){

        $zip = new ZipArchive;

        if ($zip->open('archive'.time().'.zip', ZipArchive::CREATE) === true){
            $dest =__DIR__.'/data/index.txt';
            $zip->addFile($dest,'index.txt');
            $zip->close();
        }else{
            echo 'Не могу создать архив!';
        }

    }
}