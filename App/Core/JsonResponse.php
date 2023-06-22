<?php

namespace App\Core;

class JsonResponse extends Response
{
    private array $data;

    public function __construct(array $data = null)
    {
        $this->setStatusCode(200);
        $this->setContentType('application/json');
        if ($data != null) {
            $this->setData($data);
        }
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param array $data
     */
    public function setData(array $data): void
    {
        $this->data = $data;
    }

    /**
     * @return JsonResponse
     */
    public static function make() : JsonResponse
    {
        return new JsonResponse();
    }

    /**
     * @return false|mixed|string
     */
    public function build()
    {
        http_response_code($this->getStatusCode());
        header('Content-Type: '. $this->getContentType());
        echo json_encode($this->getData());
    }
}