<?php


namespace diagnosticsphp\utils;


use diagnosticsphp\Utils\php\deleteFolderContent;
/**
 * Class diskManipulationClass
 * @package diagnosticsphp\utils
 */
class diskManipulationClass
{
    /**
     * @param $dir
     * @return string $dir
     * @since 14/02/2021
     */
    public function deleteFolder($dir): string
    {
        $d = new \diagnosticsphp\utils\deleteFolderContent();
        $dir = __DIR__;
        $d->delete_folder_and_all_its_contents($dir);

        return $dir;
    }
}