<?php

public function _remap($method, ...$params)
{
    $method = 'process_'.$method;

    if (method_exists($this, $method)) {
        return $this->$method(...$params);
    }

    throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
}
