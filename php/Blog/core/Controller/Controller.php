<?php

namespace Core\Controller;

abstract class Controller
{
    protected $viewPath;
    protected $template;

    protected function render($view, $variables = [])
    {
        ob_start();
        extract($variables);
        require($this->viewPath . str_replace('.', '/', $view) . '.html.php');
        $content = ob_get_clean();
        require($this->viewPath . 'templates/' . $this->template . '.html.php');
    }

    protected function notFound()
    {
        header('HTTP/1.0 404 Not Found');
        exit('Page introuvable');
    }

    protected function forbidden()
    {
        header('HTTP/1.0 403 forbidden');
        exit('Acces interdit');
    }
}
