<?php


namespace diagnosticsphp\utils;

use Psr\Log\LogLevel;
use PhpParser\Error;
use PHPUnit\Util\Exception;
use Psr\Log\LoggerInterface;

class deleteFolderContent
{
    /**
     * @param $dir
     * @version 0.2
     * @since 10/02/2021
     */
    public function delete_folder_and_all_its_contents($dir)
    {
        if (is_dir($dir)) {
            $objects = scandir($dir);
            foreach ($objects as $object) {
                if ($object != "." && $object != "..") {
                    if (filetype($dir . "/" . $object) == "dir"){
                        $this->log(LogLevel::MINOR, OBJECT_IS_ELIGIBLE_FOR_DELETION);
                        shell_exec('sudo rm -r '.$dir);
                    } else unlink($dir . "/" . $object);
                }
            }
            reset($objects);
            if (!rmdir($dir)) {
                echo '<div class = "warning">Could not delete existing content, please ensure no other programs or 
 			utilities are accessing the folder or contents - <strong>' . $dir . '</strong></div><br>';
            }
        }
    }
}