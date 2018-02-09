<?php
namespace AlibabaApi\Request;

use AlibabaApi\Config\ConfigInterface;
use AlibabaApi\Operations\OperationInterface;

interface RequestInterface
{
    public function setConfig(ConfigInterface $config);

    public function perform(OperationInterface $operation);
}