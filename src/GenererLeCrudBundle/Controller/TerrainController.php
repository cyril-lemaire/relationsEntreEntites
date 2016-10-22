<?php

namespace GenererLeCrudBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use GenererLeCrudBundle\Entity\Terrain;

/**
 * Terrain controller.
 *
 */
class TerrainController extends Controller
{
    /**
     * Lists all Terrain entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $terrains = $em->getRepository('GenererLeCrudBundle:Terrain')->findAll();

        return $this->render('GenererLeCrudBundle:terrain:index.html.twig', array(
            'terrains' => $terrains,
        ));
    }

    /**
     * Finds and displays a Terrain entity.
     *
     */
    public function showAction(Terrain $terrain)
    {

        return $this->render('GenererLeCrudBundle:terrain:show.html.twig', array(
            'terrain' => $terrain,
        ));
    }
}
