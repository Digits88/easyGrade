<?php

namespace SEPBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use SEPBundle\Entity\BatchAssignment;
use SEPBundle\Form\BatchAssignmentType;

/**
 * BatchAssignment controller.
 *
 * @Route("/batchassignment")
 */
class BatchAssignmentController extends Controller
{
    /**
     * Lists all BatchAssignment entities.
     *
     * @Route("/", name="batchassignment_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $batchAssignments = $em->getRepository('SEPBundle:BatchAssignment')->findAll();

        return $this->render('batchassignment/index.html.twig', array(
            'batchAssignments' => $batchAssignments,
        ));
    }

    /**
     * Lists all BatchAssignment entities.
     *
     * @Route("/courseassignment", name="batchassignment_assignment")
     * @Method("GET")
     */
    public function courseassignmentAction()
    {
        $em = $this->getDoctrine()->getManager();

        $batchAssignments = $em->getRepository('SEPBundle:BatchAssignment')->findAll();

        return $this->render('batchassignment/courseassignment.html.twig', array(
            'batchAssignments' => $batchAssignments,
        ));
    }


    /**
     * Creates a new BatchAssignment entity.
     *
     * @Route("/new", name="batchassignment_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $batchAssignment = new BatchAssignment();
        $form = $this->createForm('SEPBundle\Form\BatchAssignmentType', $batchAssignment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($batchAssignment);
            $em->flush();

            return $this->redirectToRoute('batchassignment_show', array('id' => $batchAssignment->getId()));
        }

        return $this->render('batchassignment/new.html.twig', array(
            'batchAssignment' => $batchAssignment,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a BatchAssignment entity.
     *
     * @Route("/{id}", name="batchassignment_show")
     * @Method("GET")
     */
    public function showAction(BatchAssignment $batchAssignment)
    {
        $deleteForm = $this->createDeleteForm($batchAssignment);

        return $this->render('batchassignment/show.html.twig', array(
            'batchAssignment' => $batchAssignment,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing BatchAssignment entity.
     *
     * @Route("/{id}/edit", name="batchassignment_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, BatchAssignment $batchAssignment)
    {
        $deleteForm = $this->createDeleteForm($batchAssignment);
        $editForm = $this->createForm('SEPBundle\Form\BatchAssignmentType', $batchAssignment);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($batchAssignment);
            $em->flush();

            return $this->redirectToRoute('batchassignment_edit', array('id' => $batchAssignment->getId()));
        }

        return $this->render('batchassignment/edit.html.twig', array(
            'batchAssignment' => $batchAssignment,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a BatchAssignment entity.
     *
     * @Route("/{id}", name="batchassignment_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, BatchAssignment $batchAssignment)
    {
        $form = $this->createDeleteForm($batchAssignment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($batchAssignment);
            $em->flush();
        }

        return $this->redirectToRoute('batchassignment_index');
    }

    /**
     * Creates a form to delete a BatchAssignment entity.
     *
     * @param BatchAssignment $batchAssignment The BatchAssignment entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(BatchAssignment $batchAssignment)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('batchassignment_delete', array('id' => $batchAssignment->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
