<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Bank;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{

    /**
     * @Route("/", name="accueil")
     */
    public function accueilAction(Request $request)
    {
        return $this->render('admin/index.html.twig', array('tables' => $this->getTables()));
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contactAction()
    {
        return $this->render('admin/contact.html.twig', array('tables' => $this->getTables()));
    }

    /**
     * @Route("/ajaxViewMultipleBank/{id1}/{limit}/{table}", name="ajaxViewMultipleBank")
     */
    public function ajaxViewMultipleBankAction($id1, $limit, $table)
    {
        $table = ucfirst($table);
        $repository = $this->getDoctrine()
            ->getManager()
            ->getRepository("AppBundle:$table"); //recuperation du repo
        $id1 -= 1; //ajustement de l'id
        $advert = $repository->findBy(array(), null, $limit, $id1); // recherche dans la DB
        $result = array();
        foreach ($advert as $key => $value) { //mise dans le tableau les objets de la DB, sous forme de string
            array_push($result, (array)$value);
        }
        foreach ($result as $key1 => $value) { //gestion de l'exception de l'objet DateTime
            foreach ($value as $key2 => $value2) {
                if ($value2 instanceof \DateTime) {
                    $result[$key1][$key2] = $value2->format('Y-m-d H:i:s'); //mise en string du DateTime
                }
            }
        }

        /* Création du tableau d'ids */
        $ids = array();
        foreach ($result as $key => $value) {
            array_push($ids, array_values($result[$key])[0]);
        }

        $conn = $this->get('database_connection'); //connection à la DB
        $tables = $conn->fetchAll("SELECT column_name FROM information_schema.COLUMNS WHERE table_name LIKE '$table' ORDER BY ordinal_position"); //recherche des noms de colone
        $column = array();
        foreach ($tables as $value) {//mise dans le tableau des noms de colones
            if ($value['column_name'] != strtoupper($value['column_name'])) { //on ne met pas certains retours MySQL
                if (!in_array($value['column_name'], $column)) { //on ne les inclus qu'une fois
                    array_push($column, $value['column_name']);
                }
            }
        }
        if (null === $advert) {
            throw new NotFoundHttpException("L'id " . $id1 . " n'existe pas dans la table $table");
        }
        return $this->render('admin/ajaxViewMultipleBank.html.twig', array('table' => $result, 'column' => $column, 'ids' => $ids, 'table2' => $table));
    }

    /**
     * @Route("/ajaxViewRow/{id1}/{table}", name="ajaxViewRow")
     */
    public function ajaxViewRowAction($id1,$table)
    {
        $repository = $this->getDoctrine()
            ->getManager()
            ->getRepository("AppBundle:$table"); //recuperation du repo
        $repository->findBy(array('idUser' => $id1));
        var_show($repository);

        return $this->render('admin/ajaxViewRow.html.twig', array('table' => $result, 'column' => $column));
    }

    /**
     * @Route("/viewMultipleBankAjax/{table}", name="viewMultipleBankAjax")
     */
    public function viewMultipleBankAjaxAction($table)
    {
        return $this->render('admin/viewMultipleBankAjax.html.twig', array('tables' => $this->getTables(), 'table' => $table));
    }

    /**
     * @Route("/nojs", name="nojs")
     */
    public function nojsAction()
    {
        // replace this example code with whatever you need
        return $this->render('default/nojs.html.twig');
    }



    /* Fonctions utiles pour le controlleur */


    // fonction permettant de recuperer toutes les tables disponnibles pour l'utilisateur actuel
    private function getTables()
    {
        $conn = $this->get('database_connection');
        $db = $conn->getDatabase();
        $tables = $conn->fetchAll("SHOW TABLES FROM $db");
        return $tables;
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
            ->getRepository('AppBundle:Bank');
        $advert = $repository->find($id);
        if (null === $advert) {
            throw new NotFoundHttpException("L'id de bank " . $id . " n'existe pas.");
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
            ->getRepository('AppBundle:Bank');
        $advert = $repository->findBy(array(), null, $limit, $id1);
        if (null === $advert) {
            throw new NotFoundHttpException("L'id de bank " . $id1 . " n'existe pas.");
        }
        // replace this example code with whatever you need
        return $this->render('testViewMultiple.html.twig', array('test' => $advert));
    }


}


/* fonction de test */
function var_show($var)
{
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
}
