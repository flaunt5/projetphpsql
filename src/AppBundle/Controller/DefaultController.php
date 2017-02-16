<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Bank;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="accueil")
     */
    public function accueilAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('admin/index.html.twig');
    }
    /**
     * @Route("/contact", name="contact")
     */
    public function contactAction()
    {
        // replace this example code with whatever you need
        return $this->render('admin/contact.html.twig');
    }
    /**
     * @Route("/ajaxViewMultipleBank/{id1}/{limit}", name="ajaxViewMultipleBank")
     */
    public function ajaxViewMultipleBankAction($id1, $limit)
    {
        $repository = $this->getDoctrine()
            ->getManager()
            ->getRepository('AppBundle:Bank')
        ;
        $id1 -=1;
        $advert = $repository->findBy(array(), null, $limit, $id1);
        if (null === $advert) {
            throw new NotFoundHttpException("L'id de bank ".$id1." n'existe pas.");
        }
        // replace this example code with whatever you need
        return $this->render('admin/ajaxViewMultipleBank.html.twig', array('test' => $advert));
    }

    /**
     * @Route("viewMultipleBankAjax", name="viewMultipleBankAjax")
     */
    public function viewMultipleBankAjaxAction()
    {
        return $this->render('admin/viewMultipleBankAjax.html.twig');
    }

    /**
     * @Route("/nojs", name="nojs")
     */
    public function nojsAction()
    {
        // replace this example code with whatever you need
        return $this->render('default/nojs.html.twig');
    }









    /*  ROUTES DE TEST  */


    /**
     * @Route("/testAddBank", name="testAddBank")
     */
    public function testAddBankAction(Request $request)
    {
        $bank = new Bank();
        $bank->setMoneycents(156);
        $bank->setMoneyint(55);
        $em = $this->getDoctrine()->getManager();
        $em->persist($bank);
        $em->flush();
        if ($request->isMethod('POST')) {
            $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');
            return $this->redirect($this->generateUrl('AppBundle', array('id' => $bank->getId())));
        }
        // replace this example code with whatever you need
        return $this->render(':admin:index.html.twig');
    }

    /**
     * @Route("/testViewUniqueBankId/{id}", name="testViewUniqueBankId")
     */
    public function testViewUniqueBankIdAction($id)
    {
        $repository = $this->getDoctrine()
            ->getManager()
            ->getRepository('AppBundle:Bank')
        ;
        $advert = $repository->find($id);
        if (null === $advert) {
            throw new NotFoundHttpException("L'id de bank ".$id." n'existe pas.");
        }
        $id = $advert->getIdbank();
        // replace this example code with whatever you need
        return $this->render('default/testView.html.twig', array(
            'advertid' => $advert->getIdbank(),
            'advertcent' => $advert->getMoneycents(),
            'advertint' => $advert->getMoneyint()
        ));
    }

    /**
     * @Route("/testViewMultiple/{id1}/{limit}", name="testViewMultiple")
     */
    public function testViewMultipleAction($id1, $limit)
    {
        $repository = $this->getDoctrine()
            ->getManager()
            ->getRepository('AppBundle:Bank')
        ;
        $advert = $repository->findBy(array(), null, $limit, $id1);
        if (null === $advert) {
            throw new NotFoundHttpException("L'id de bank ".$id1." n'existe pas.");
        }
        // replace this example code with whatever you need
        return $this->render('testViewMultiple.html.twig', array('test' => $advert));
    }


}
