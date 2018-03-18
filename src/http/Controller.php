<?php

namespace Letitrun\F3Support\Http;

use Base;

/**
 * Http Controller.
 */
abstract class Controller
{
    /**
     * Application instance
     * @var Base
     */
    protected $f3;

    /**
     * Controller's name
     * @var string
     */
    protected $controller;

    /**
     * Controller's action name
     * @var string
     */
    protected $action;

    /**
     * Query parameters
     * @var array
     */
    protected $query;

    /**
     * Request form data/JSON content
     * @var array
     */
    protected $input;

    /**
     * @param Base $f3
     */
    public function __construct(Base $f3)
    {
        $this->f3         = $f3;
        $this->controller = $this->f3->get('PARAMS.controller');
        $this->action     = $this->f3->get('PARAMS.action');

        parse_str($this->f3->get('QUERY'), $this->query);
        $this->input      = [];
    }
}
