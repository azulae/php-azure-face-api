<?php

namespace SmartDog23\AzureFaceApi\Face\Identify;

use SmartDog23\AzureFaceApi\AzureFaceApiHeaders;

class IdentifyHeaders extends AzureFaceApiHeaders {

    public function __construct()
    {
        $this->contentType(parent::CONTENT_TYPE_JSON);
    }
}