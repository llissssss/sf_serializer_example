<?php

namespace AcmeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

abstract class BaseController extends Controller
{
    /**
     * @return StatisticsEntityHandler
     */
    abstract protected function getSerializer(): Serializer;

    /**
     * @return string
     */
    abstract protected function getEntityName(): string;

    /**
     * @param Request $request
     * @return Response
     */
    public function createAction(Request $request)
    {
        $handler = $this->getEntityHandler();
        $entity = $handler->deserializeAndSave($request->getContent());

        return $this->handleView(View::create($entity));

    }

    /**
     * @return Response
     */
    public function allAction()
    {
        $className = $this->getEntityName();
        $all = $this->get('doctrine.orm.entity_manager')->getRepository($className)->findAll();

        return $this->handleView(View::create($all));
    }
}
