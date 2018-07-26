<?php
/**
 * Created by PhpStorm.
 * User: tdels
 * Date: 24-07-18
 * Time: 12:07
 */
namespace App\Service;
use Symfony\Component\HttpFoundation\File\UploadedFile;
class FileUploader
{
    private $targetDirectory;
    public function __construct($targetDirectory)
    {
        $this->targetDirectory = $targetDirectory;
    }
    public function upload(UploadedFile $file)
    {
        $fileName = md5(uniqid()).'-large.jpg';
        $file->move($this->getTargetDirectory(), $fileName);
        return $fileName;
    }
    public function getTargetDirectory()
    {
        return $this->targetDirectory;
    }
}