<?php

namespace GenererLeCrudBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use GenererLeCrudBundle\Entity\PlaneModel;

/**
 * PlaneModel controller.
 *
 */
class PlaneModelController extends Controller
{
    /**
     * Lists all PlaneModel entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $planeModels = $em->getRepository('GenererLeCrudBundle:PlaneModel')->findAll();

        return $this->render('GenererLeCrudBundle:planemodel:index.html.twig', array(
            'planeModels' => $planeModels,
        ));
    }

    /**
     * Finds and displays a PlaneModel entity.
     *
     */
    public function showAction(PlaneModel $planeModel)
    {

        return $this->render('GenererLeCrudBundle:planemodel:show.html.twig', array(
            'planeModel' => $planeModel,
        ));
    }
}
