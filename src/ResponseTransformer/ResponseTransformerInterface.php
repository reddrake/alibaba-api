<?php

namespace AlibabaApi\ResponseTransformer;

interface ResponseTransformerInterface
{
    public function transform($response);
}