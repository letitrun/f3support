<?php

namespace Letitrun\F3Support\Http;

use Base; // Application instance.

abstract class Controller
{
    /**
     * @var Base
     */
    protected $f3;

    /**
     * @var array
     */
    protected $query;

    /**
     * @var array
     */
    protected $input;

    public function __construct(Base $f3)
    {
        $this->f3    = $f3;
        $this->input = [];
        parse_str($this->f3->get('QUERY'), $this->query);
    }
}
