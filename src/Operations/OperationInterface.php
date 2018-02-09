<?php

namespace AlibabaApi\Operations;

interface OperationInterface
{
    public function getName();

    public function getOperationParameter();
}