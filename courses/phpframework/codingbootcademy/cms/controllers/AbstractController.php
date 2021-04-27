<?php
/**
 * @project: git-playground
 * @author: alexjorj
 * Date: 4/26/21
 * Time: 5:47 PM
 */

namespace codingbootcademy\cms\controllers;


class AbstractController
{
    private $templateName;
    private $parameters;
    /** @var \DBService */
    protected $dbservice;

    /**
     * AbstractController constructor.
     */
    public function __construct($dbservice)
    {
        $this->dbservice = $dbservice;
    }

    public function render($template, $parameters) {
        $this->parameters = $parameters;
        $this->templateName = dirname(__FILE__) . '/../templates/' . $template;
    }

    public function __destruct()
    {
        foreach ( $this->parameters as $key => $value ) {
            $$key = $value;
        }

        include $this->templateName;
    }
}
