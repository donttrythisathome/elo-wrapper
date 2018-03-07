<?php

namespace EloWrapper\Generators;

class ModelGenerator extends Generator
{
    /**
     * Create a new model at the given path.
     *
     * @param  string  $name
     * @param  string  $path
     * @return string
     */
    public function create($name, $path)
    {
        $path = $this->getPath($name, $path);
        $stub = $this->getStub('model');
        $this->files->put($path, $this->parseStub($stub, array(
            'class' => $this->classify($name)
        )));

        return $path;
    }

    /**
     * Get the full path name
     *
     * @param  string  $name
     * @param  string  $path
     * @return string
     */
    protected function getPath($name, $path)
    {
        return $path . '/' . $this->classify($name) . '.php';
    }
}
