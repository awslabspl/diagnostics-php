<?php


use diagnosticsphp\core\utilities\deleteFolderContent;
use PHPUnit\Framework\TestCase;

/**
 * Class deleteFolderContentTest
 */
class deleteFolderContentTest extends TestCase
{
    /**
     * @throws Exception
     * @since 10/02/2021
     * @note THIS IS DANGEROUS
     * @param deleteFolderContent
     */
    public function testDelete_folder_and_contents_classes()
    {
        if ((!file_exists(CLASS_FOLDER)) && (!is_readable(CLASS_FOLDER))){
            throw new Exception(NON_EXISTENT_OR_NOT_READABLE);
        } else {
            $this->doDelete();
        }
    }

    private function doDelete(){
        $files = glob(CLASS_FOLDER . '*');
        foreach ($files as $file) {
            if (is_dir($file)) {
                self::deleteDir($file);
            } else {
                unlink($file);
            }
        }
        shell_exec('sudo rm -R '.CLASS_FOLDER);
    }
}
