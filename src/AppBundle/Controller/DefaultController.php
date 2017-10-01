<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Client;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $client = new Client();
        $client->setName('test');
        $client->setKey(strtoupper(substr(uniqid(), 0, 12)));
        $client->setApiVersion('1.0');

        $em = $this->getDoctrine()->getManager();
        $em->persist($client);
        $em->flush();

        $client = $em->getRepository('AppBundle:Client')
            ->find($client->getId());
        $client->setApiVersion('1.1');

        $em->persist($client);
        $em->flush();

        return new Response("Ok !!!");
    }
}
