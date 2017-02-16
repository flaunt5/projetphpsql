<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Bank;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
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
     * @Route("/test", name="test")
     */
    public function testAction(Request $request)
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
        return $this->render('OCPlatformBundle:Advert:add.html.twig');
    }

    /**
     * @Route("/test2/{id}", name="test2")
     */
    public function test2Action($id)
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
     * @Route("/nojs", name="nojs")
     */
    public function nojsAction()
    {
        // replace this example code with whatever you need
        return $this->render('default/nojs.html.twig');
    }


}
