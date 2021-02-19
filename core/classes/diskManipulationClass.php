<?php


namespace diagnosticsphp\core\scriptClass\dmClass;


use diagnosticsphp\core\utilities\{deleteFolderContent};

/**
 * Class diskManipulationClass
 * @package diagnosticsphp\core\scriptClass\dmClass
 */
class diskManipulationClass
{
    /**
     * @param $dir
     * @return string $dir
     * @since 14/02/2021
     */
    public function deleteFolder($dir){
        $d = new deleteFolderContent();
        $dir = __DIR__;
        $d->delete_folder_and_contents($dir);

        return $dir;
    }
}