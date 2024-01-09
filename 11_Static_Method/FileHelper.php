<?php
class FilesHelper
{
    static function hasData($filename)
    {
        if (!file_exists($filename)) {
            echo "$filename does not exist" . PHP_EOL;
            return false;
        }
        $content = file_get_contents($filename);
        if (empty($content)) {
            return false;
        } else {
            return true;
        }
    }
}

if (FilesHelper::hasData("11_Static_Method\\notes.md")) {
    echo "Data Found ";
} else { 
    echo "No Data Found ";
}
