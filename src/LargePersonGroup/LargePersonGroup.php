<?php

namespace SmartDog23\AzureFaceApi\LargePersonGroup;

use SmartDog23\AzureFaceApi\LargePersonGroup\Create\Create;

class LargePersonGroup {

    private $_client;

    public function __construct($client)
    {
        $this->_client = $client;
    }

    public function create($options = null)
    {
        new Create($this->_client, $options);

    }

    public function delete()
    {

    }

    public function get()
    {

    }

    public function getTrainingStatus()
    {

    }

    public function list()
    {

    }

    public function train()
    {

    }

    public function update()
    {

    }

}