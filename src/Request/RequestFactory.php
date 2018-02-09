<?php
namespace AlibabaApi\Request;

use AlibabaApi\Config\ConfigInterface;

class RequestFactory{

    private static $requestObjects = [];

    public static function createRequest(ConfigInterface $config)
    {
        $class = $config->getRequest();
        $factoryCallback = $config->getRequestFactory();

        if (true === is_object($class) && $class instanceof \AlibabaApi\Request\RequestInterface) {
            $class->setConfig($config);

            return self::applyCallback($factoryCallback, $class);
        }

        if (true === is_string($class) && true === array_key_exists($class, self::$requestObjects)) {
            $request = self::$requestObjects[$class];
            $request->setConfig($config);

            return self::applyCallback($factoryCallback, $request);
        }

        try {
            $reflectionClass = new \ReflectionClass($class);
        } catch (\ReflectionException $e) {
            throw new \InvalidArgumentException(sprintf("Requestclass not found: %s", $class));
        }

        if ($reflectionClass->implementsInterface('\\AlibabaApi\\Request\\RequestInterface')) {          
            $request = new $class();
            $request->setConfig($config);

            return self::$requestObjects[$class] = self::applyCallback($factoryCallback, $request);
        }

        throw new \LogicException(sprintf("Requestclass does not implements the RequestInterface: %s", $class));
    }

    protected static function applyCallback($callback, $request)
    {
        if (false === is_null($callback) && is_callable($callback)) {
            $request = call_user_func($callback, $request);
            if ($request instanceof RequestInterface) {
                return $request;
            }

            throw new \LogicException(
                sprintf(
                    "Requestclass does not implements the RequestInterface: %s",
                    get_class($request)
                )
            );
        }

        return $request;
    }
}