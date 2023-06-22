<?php

namespace App\Core;

class View extends Response
{
    private string $content;

    public function __construct(string $content = null)
    {
        $this->setStatusCode(200);
        $this->setContentType('text/html');
        if ($content != null) {
            $this->setContent($content);
        }
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    /**
     * @return View
     */
    public static function make() : View
    {
        return new View();
    }

    /**
     * @return void
     */
    public function build() : void
    {
        http_response_code($this->getStatusCode());
        header('Content-Type: '. $this->getContentType());
        echo $this->getContent();
    }
}