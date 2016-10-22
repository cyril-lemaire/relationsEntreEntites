<?php

namespace GenererLeCrudBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use GenererLeCrudBundle\Entity\Flight;
use GenererLeCrudBundle\Form\FlightType;

/**
 * Flight controller.
 *
 */
class FlightController extends Controller
{
    /**
     * Lists all Flight entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $flights = $em->getRepository('GenererLeCrudBundle:Flight')->findAll();

        return $this->render('GenererLeCrudBundle:flight:index.html.twig', array(
            'flights' => $flights,
        ));
    }

    /**
     * Creates a new Flight entity.
     *
     */
    public function newAction(Request $request)
    {
        $flight = new Flight();
        $form = $this->createForm('GenererLeCrudBundle\Form\FlightType', $flight);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($flight);
            $em->flush();

            return $this->redirectToRoute('flight_show', array('id' => $flight->getId()));
        }

        return $this->render('GenererLeCrudBundle:flight:new.html.twig', array(
            'flight' => $flight,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Flight entity.
     *
     */
    public function showAction(Flight $flight)
    {
        $deleteForm = $this->createDeleteForm($flight);

        return $this->render('GenererLeCrudBundle:flight:show.html.twig', array(
            'flight' => $flight,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Flight entity.
     *
     */
    public function editAction(Request $request, Flight $flight)
    {
        $deleteForm = $this->createDeleteForm($flight);
        $editForm = $this->createForm('GenererLeCrudBundle\Form\FlightType', $flight);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($flight);
            $em->flush();

            return $this->redirectToRoute('flight_edit', array('id' => $flight->getId()));
        }

        return $this->render('GenererLeCrudBundle:flight:edit.html.twig', array(
            'flight' => $flight,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Flight entity.
     *
     */
    public function deleteAction(Request $request, Flight $flight)
    {
        $form = $this->createDeleteForm($flight);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($flight);
            $em->flush();
        }

        return $this->redirectToRoute('flight_index');
    }

    /**
     * Creates a form to delete a Flight entity.
     *
     * @param Flight $flight The Flight entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Flight $flight)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('flight_delete', array('id' => $flight->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
