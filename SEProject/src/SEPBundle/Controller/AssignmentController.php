<?php

namespace SEPBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use SEPBundle\Entity\Assignment;
use SEPBundle\Form\AssignmentType;

/**
 * Assignment controller.
 *
 * @Route("/assignment")
 */
class AssignmentController extends Controller
{
    /**
     * Lists all Assignment entities.
     *
     * @Route("/", name="assignment_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $assignments = $em->getRepository('SEPBundle:Assignment')->findAll();

        return $this->render('assignment/index.html.twig', array(
            'assignments' => $assignments,
        ));
    }

    /**
     * Creates a new Assignment entity.
     *
     * @Route("/new", name="assignment_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $assignment = new Assignment();
        $form = $this->createForm('SEPBundle\Form\AssignmentType', $assignment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($assignment);
            $em->flush();

            return $this->redirectToRoute('assignment_show', array('id' => $assignment->getId()));
        }

        return $this->render('assignment/new.html.twig', array(
            'assignment' => $assignment,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Assignment entity.
     *
     * @Route("/{id}", name="assignment_show")
     * @Method("GET")
     */
    public function showAction(Assignment $assignment)
    {
        $deleteForm = $this->createDeleteForm($assignment);

        return $this->render('assignment/show.html.twig', array(
            'assignment' => $assignment,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Assignment entity.
     *
     * @Route("/{id}/edit", name="assignment_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Assignment $assignment)
    {
        $deleteForm = $this->createDeleteForm($assignment);
        $editForm = $this->createForm('SEPBundle\Form\AssignmentType', $assignment);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($assignment);
            $em->flush();

            return $this->redirectToRoute('assignment_edit', array('id' => $assignment->getId()));
        }

        return $this->render('assignment/edit.html.twig', array(
            'assignment' => $assignment,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Assignment entity.
     *
     * @Route("/{id}", name="assignment_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Assignment $assignment)
    {
        $form = $this->createDeleteForm($assignment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($assignment);
            $em->flush();
        }

        return $this->redirectToRoute('assignment_index');
    }

    /**
     * Creates a form to delete a Assignment entity.
     *
     * @param Assignment $assignment The Assignment entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Assignment $assignment)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('assignment_delete', array('id' => $assignment->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
