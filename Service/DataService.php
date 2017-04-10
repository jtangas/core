<?php
/**
 * Created by PhpStorm.
 * User: jtang
 * Date: 4/9/2017
 * Time: 12:12 PM
 */

namespace Jt\Core\Service;


use Jt\Api\Request\Event\ApiEvent;
use Jt\Api\Request\Service\RequestServiceInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

class DataService implements RequestServiceInterface
{
    public function executeRequest(ApiEvent $event)
    {
        $event->setResponse(new JsonResponse([
            'stuff' => 'stuff'
        ]));
    }
}