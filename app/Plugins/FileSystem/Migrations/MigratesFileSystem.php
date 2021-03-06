<?php 

use App\Plugins\Interfaces\Migratable;
use Artisan;

class MigratesFileSystem implements Migratable 
{

    private $path = "app\Plugins\FileSystem\Migrations";

    public function __construct() 
    {

    }

    private static function migrate() 
    {
        Artisan::call("migrate", ["--path" + $this->path]);
    }

}