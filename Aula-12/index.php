<?php

/**
 * [Aula - 12 - Interface]
 * 
 */

interface Crud {
    public function create($data);
    public function read();
    public function updaTE();
    public function delete();
}

class Noticias implements Crud {

    public function create($data)
    {
        // logic
        echo "create";
    }
    public function read()
    {
        // logic
        echo "read";
    }
    public function updaTE()
    {
        // logic
        echo "updaTE";
    }
    public function delete()
    {
        // logic
        echo "delete";
    }

}