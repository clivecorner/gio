<?php
declare (strict_types = 1);

namespace App;

use App\Exceptions\ViewNotFoundException;

class View
{

    public function __construct(
        protected string $view,
        protected array $params = []) {

    }

    public function render(): string
    {
        $viewPath = VIEW_PATH . '/' . $this->view . '.php';

        if (!file_exists($viewPath)) { //Check if view file exists
            throw new ViewNotFoundException();
        }

        foreach ($this->params as $key => $value) {
            $$key = $value;
        }
        ob_start(); //output buffering to render a string

        include $viewPath;

        return (string) ob_get_clean(); //Ensure we are returning a string

    }
// Creates a new View object and because the calling function is anticipating a string
// it runs the __to string  which calls the render method
// to string allows a class to decide how it will react when it is treated like a string
    public static function make(string $view, array $params = []): static
    {
        return new static($view, $params);
    }

    public function __toString(): string
    {
        return $this->render();
    }

    public function __get($name)
    {
        return $this->params[$name] ?? null;
    }
}
