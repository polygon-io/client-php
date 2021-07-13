<?php


namespace PolygonIO\Tests\Concerns;

trait LoadsStub
{
    /**
     * Loads stub files, from stubs folder.
     *
     * @param  string  $filePath
     *
     * @return mixed
     */
    public function loadStubFile(string $filePath)
    {
        return file_get_contents(__DIR__ . '/../stubs/' . $filePath);
    }

    /*
     * Loads json stub files from stubs folder and parses into an array.
     */
    public function loadJsonStubFile(string $filePath)
    {
        return json_decode($this->loadStubFile($filePath), true);
    }
}
