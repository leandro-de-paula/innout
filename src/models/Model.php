<?php
namespace Src\Models;

class Model
{
    protected static $tableName = "";
    protected static $columns = [];
    protected $values = [];

    function __construct($arr)
    {
        $this->loadFromArrar($arr);
    }

    public function loadFromArrar($arr)
    {
        if ($arr) {
            foreach ($arr as $key => $value) {
                $this->set($key, $value);
            }
        }
    }

    public function get($key)
    {
        return $this->values[$key];
    }

    public function set($key, $value)
    {
        $this->values[$key] = $value;
    }
    
}
echo " -- model -- ";