<?php
class Files
{
    function displayContent($filename)
    {
        $result = true;
        try {
            echo "Reading the Content of the file: $filename" . PHP_EOL;
            $content = file_get_contents($filename);
            echo "Displaying the Content of the Fie: $filename";
        } catch (Exception $e) {
            $result = false;
        }
        return $result;
    }
}
$scriptFile = new Files();
$scriptFile->displayContent("script1.js");
