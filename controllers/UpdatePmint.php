<?php

namespace Controllers;

use QB;
use Laminas\Diactoros\ServerRequest AS Request;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use ZipArchive;

class UpdatePmint
{

    public function download_pmint()
    {
        // echo "hai";

        $filePath = dir_asset("uploads/pmint-update/pmint.zip");
        // Get real path for our folder
        $rootPath = realpath('app');

        // Initialize archive object
        $zip = new ZipArchive();
        $zip->open($filePath, ZipArchive::CREATE | ZipArchive::OVERWRITE);

        // Create recursive directory iterator
        /** @var SplFileInfo[] $files */
        $files = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($rootPath),
            RecursiveIteratorIterator::LEAVES_ONLY
        );

        foreach ($files as $name => $file)
        {
            // Skip directories (they would be added automatically)
            if (!$file->isDir())
            {
                // Get real and relative path for current file
                $filePath = $file->getRealPath();
                $relativePath = substr($filePath, strlen($rootPath) + 1);

                // Add current file to archive
                $zip->addFile($filePath, $relativePath);
            }
        }

        // Zip archive will be created only after closing object
        $zip->close();

        // download


        // header("Pragma: ");
        // header("Cache-Control: ");
        // header('Content-disposition: attachment; filename=files.zip');
        // header('Content-type: application/zip');
        // readfile("resources/assets/uploads/pmint-update/pmint.zip");

        $path = 'resources/assets/uploads/pmint-update/pmint.zip';
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base64 = 'data:zip/' . $type . ';base64,' . base64_encode($data);
        echo base64_decode($base64);

        $file = tempnam("tmp", "zip");
        $zip = new ZipArchive();
        $zip->open($file, ZipArchive::OVERWRITE);

        // Add contents
        $zip->addFromString('your_file_name', base64_decode($base64));

        // Close and send to users
        $zip->close();
        header('Content-Type: application/zip');
        header('Content-Length: ' . filesize($file));
        header('Content-Disposition: attachment; filename="file.zip"');
        readfile($file);
        unlink($file);
        // return $base64;
    }

}