<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Bank;
use AppBundle\Entity\Users;
use AppBundle\Entity\Ads;
use AppBundle\Entity\AdsList;
use AppBundle\Entity\BankOperations;
use AppBundle\Entity\Club;
use AppBundle\Entity\Competition;
use AppBundle\Entity\CompetitionPrices;
use AppBundle\Entity\Horse;
use AppBundle\Entity\HorseModifierList;
use AppBundle\Entity\HorseSpecies;
use AppBundle\Entity\Infrastructure;
use AppBundle\Entity\InfrastructureFamily;
use AppBundle\Entity\InfrastructureList;
use AppBundle\Entity\InfrastructureType;
use AppBundle\Entity\Items;
use AppBundle\Entity\ItemsList;
use AppBundle\Entity\LastAchievements;
use AppBundle\Entity\Modifier;
use AppBundle\Entity\Newspaper;
use AppBundle\Entity\Product;
use AppBundle\Entity\Stables;
use AppBundle\Entity\TaskList;
use AppBundle\Entity\Tasks;
use AppBundle\Entity\User;
use AppBundle\Entity\Weather;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{

    private $emType = "anon";

    public function setEmType($type){
        $this->emType = $type;
    }
    public function getEmTYpe(){
        return $this->emType;
    }
    private function emTypeVerify()
    {
        $userId = $this->getUser();
        if(!is_string($userId) && $userId != null)
        {
            $userId = $userId->getId();
            if($this->userHasRole("AppBundle", $userId, "ROLE_CHEVAL_ADMIN")) {
                $this->setEmType("default");
            } elseif ($this->userHasRole("AppBundle", $userId, "ROLE_JOURNALISTE")) {
                $this->setEmType("journaliste");
            } elseif ($this->userHasRole("AppBundle", $userId, "ROLE_MODERATOR")) {
                $this->setEmType("moderator");
            } elseif ($this->userHasRole("AppBundle", $userId, "ROLE_COMPETITIONADMIN")) {
                $this->setEmType("competitionadmin");
            } elseif ($this->userHasRole("AppBundle", $userId, "ROLE_CLIENT")) {
                $this->setEmType("client");
            } elseif ($this->userHasRole("AppBundle", $userId, "ROLE_SPECIALIST")) {
                $this->setEmType("specialist");
            } else {
                $this->setEmType("anon");
            }
        }
    }

    /**
     * @Route("/", name="accueil")
     */
    public function accueilAction(Request $request)
    {
        $this->emTypeVerify();
        return $this->render('admin/index.html.twig', array('tables' => $this->getTables()));
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contactAction()
    {
        $this->emTypeVerify();
        return $this->render('admin/contact.html.twig', array('tables' => $this->getTables()));
    }

    /**
     * @Route("/ajaxViewMultipleBank/{id1}/{limit}/{table}", name="ajaxViewMultipleBank")
     */
    public function ajaxViewMultipleBankAction($id1, $limit, $table, Request $request)
    {
        $this->emTypeVerify();
        $table = ucfirst($table);
        $repository = $this->getDoctrine()
            ->getManager($this->emType)
            ->getRepository("AppBundle:$table"); //recuperation du repo
        $id1 -= 1; //ajustement de l'id
        $advert = $repository->findBy(array(), null, $limit, $id1); // recherche dans la DB
        $result = array();
        $ids = array();
        foreach ($advert as $key => $value) { //mise dans le tableau les objets de la DB, sous forme de string
            array_push($result, (array)$value);
        }

        /* TEST */
        $temp=array();



        foreach ($result as $key1 => $value) { //gestion de l'exception de l'objet DateTime
            foreach ($value as $key2 => $value2) {
                if ($value2 instanceof \DateTime) {
                    $result[$key1][$key2] = $value2->format('Y-m-d H:i:s'); //mise en string du DateTime
                }
            }
            /* Création du tableau d'ids */
            array_push($ids, array_values($result[$key1])[0]);
        }
        $pkey = $this->getDoctrine()->getManager($this->emType)->getClassMetadata('AppBundle\Entity\\' . $table)->getIdentifierFieldNames();
        foreach ($advert as $value4){
            $pkeys = array();
            $nbpkey = 0;
            foreach ($pkey as $value3) {
                ++$nbpkey;
                array_push($pkeys, $value3);
            }
            //var_show($pkeys);
            $funcname = 'get'.$pkeys[0];
            //var_show($value4->$funcname());
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
        return $this->render('admin/ajaxViewMultipleBank.html.twig', array(
            'table' => $result,
            'column' => $column,
            'ids' => $ids,
            'table2' => $table,
            'nbInput' => count($column),
            'table_name' => $table));
    }


    /**
     * @Route("/ajaxViewAddRow/{table}", name="ajaxViewAddRow")
     */
    public function ajaxViewAddRowAction($id1, $limit, $table, Request $request)
    {
        return $this->render('admin/viewAddRow.html.twig');
    }

    /**
     * @Route("/ajaxEditRow/{table}", name="ajaxEditRow")
     */
    public function ajaxEditRowAction($table, Request $request)
    {
        $this->emTypeVerify();
        $repository = $this->getDoctrine()
            ->getManager($this->emType)
            ->getRepository("AppBundle:$table"); //recuperation du repo
        $post_data = $request->request->all();
        $post_data_lower = array();
        foreach ($post_data as $i => $unique_data){//ajout dans le tableau postdatalower les mêmes valeurs que celles de bases mais avec la clé en minuxcue
            $post_data_lower[strtolower($i)] = $unique_data;
        }
        $pkey = $this->getDoctrine()->getManager()->getClassMetadata('AppBundle\Entity\\' . $table)->getIdentifierFieldNames();
        $pkey_generated = array();
        foreach ($pkey as $value){
            $pkey_generated[$value] = $post_data_lower[$value];
        }
        if(empty($pkey_generated))
            return $this->render('admin/ajaxEditRow.html.twig', array(

            ));
        $elem = $repository->findOneBy($pkey_generated);
        foreach ($post_data as $i => $unique_data){
            if(!array_key_exists(strtolower($i), $pkey_generated)){
                $func_name = 'set'.ucfirst(strtolower($i));
                if(\DateTime::createFromFormat('Y-m-d H:i:s', $unique_data) != false){
                    $date = new \DateTime($unique_data);
                    $elem->$func_name($date);
                }else
                    $elem->$func_name($unique_data);
            }
        }
        $flush = $this->getDoctrine()->getManager($this->emType)->flush();
        return $this->render('admin/ajaxEditRow.html.twig');
    }

    /**
     * @Route("/ajaxRemoveRow/{table}", name="ajaxRemoveRow")
     */
    public function ajaxRemoveRowAction($table, Request $request)
    {
        $this->emTypeVerify();
        $repository = $this->getDoctrine()
            ->getManager($this->emType)
            ->getRepository("AppBundle:$table"); //recuperation du repo
        $post_data = $request->request->all();
        $post_data_lower = array();
        foreach ($post_data as $i => $unique_data){//ajout dans le tableau postdatalower les mêmes valeurs que celles de bases mais avec la clé en minuxcue
            $post_data_lower[strtolower($i)] = $unique_data;
        }
        $pkey = $this->getDoctrine()->getManager()->getClassMetadata('AppBundle\Entity\\' . $table)->getIdentifierFieldNames();
        $pkey_generated = array();
        foreach ($pkey as $value){
            $pkey_generated[$value] = $post_data_lower[$value];
        }
        if(empty($pkey_generated))
            return $this->render('admin/ajaxEditRow.html.twig', array(

            ));
        $elem = $repository->findOneBy($pkey_generated);
        $this->getDoctrine()->getManager()->remove($elem);
        $flush = $this->getDoctrine()->getManager()->flush();
        return $this->render('admin/ajaxEditRow.html.twig');
    }

    /**
     * @Route("/ajaxAddRow/{table}", name="ajaxAddRow")
     */
    public function ajaxAddRowAction($table, Request $request)
    {
        $post_data = $request->request->all();
        $post_data_lower = array();
        foreach ($post_data as $i => $unique_data){//ajout dans le tableau postdatalower les mêmes valeurs que celles de bases mais avec la clé en minuxcue
            $post_data_lower[strtolower($i)] = $unique_data;
        }
        $pkey = $this->getDoctrine()->getManager()->getClassMetadata('AppBundle\Entity\\' . $table)->getIdentifierFieldNames();
        /*$class = "Bank";
        var_show($table);
        $elem = new $class();*/

        $reqTextPrimary = "INSERT INTO $table (";
        $reqTextSecondary = 'VALUES (';
        $keys = array_keys($post_data);
        foreach ($post_data_lower as $i => $value){
            if(!in_array($i, $pkey)){
                $reqTextPrimary .= $i.', ';
                $reqTextSecondary .= '\''.$value.'\', ';
            }
        }
        $reqTextSecondary = substr($reqTextSecondary,0,-2);
        $reqTextPrimary = substr($reqTextPrimary,0,-2);
        $reqText = $reqTextPrimary.') '.$reqTextSecondary.')';

        $conn = $this->get('database_connection')->executeQuery($reqText);
        return $this->render('admin/ajaxEditRow.html.twig');
    }

    /**
     * @Route("/viewMultipleBankAjax/{table}", name="viewMultipleBankAjax")
     */
    public function viewMultipleBankAjaxAction($table)
    {
        $this->emTypeVerify();
        $conn = $this->get('database_connection')->executeQuery("SELECT COUNT(*) as nbTuples FROM $table");
        $nbTuples = $conn->fetch()['nbTuples'];
        return $this->render('admin/viewMultipleBankAjax.html.twig', array('tables' => $this->getTables(), 'table' => $table, 'nbTuples' => $nbTuples));
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
        $this->emTypeVerify();
        $conn = $this->getDoctrine()->getManager($this->emType)->getConnection();
        $db = $conn->getDatabase();
        $tables = $conn->fetchAll("SHOW TABLES FROM $db");
        return $tables;
    }



    /*  ROUTES DE TEST  */


    /**
     * @Route("/testViewUniqueBankId/{id}", name="testViewUniqueBankId")
     */
    public function testViewUniqueBankIdAction($id)
    {
        $repository = $this->getDoctrine()
            ->getManager($this->emType)
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
            ->getManager($this->emType)
            ->getRepository('AppBundle:Bank');
        $advert = $repository->findBy(array(), null, $limit, $id1);
        if (null === $advert) {
            throw new NotFoundHttpException("L'id de bank " . $id1 . " n'existe pas.");
        }
        // replace this example code with whatever you need
        return $this->render('testViewMultiple.html.twig', array('test' => $advert));
    }

    private function userHasRole($bundle, $id ,$role) {
        // Entity manager
        $em= $this->getDoctrine()->getManager("default");
        $qb = $em->createQueryBuilder();

        $qb->select('u')
            ->from($bundle . ':User', 'u') // Change this to the name of your bundle and the name of your mapped user Entity
            ->where('u.id = :user')
            ->andWhere('u.roles LIKE :roles')
            ->setParameter('user', $id)
            ->setParameter('roles', '%"' . $role . '"%');

        $user = $qb->getQuery()->getResult();

        if(count($user) >= 1){
            return true;
        }else{
            return false;
        }
    }

    /**
     * @Route("/testUser", name="testUser")
     */
    public function testUser(Request $request)
    {
        $theUser = $this->get('security.token_storage')->getToken()->getUser();
        if(is_string($theUser))
        {
            return $this->render(':default:session.html.twig', array('test' => $theUser));
        } else {
            $userId= $theUser->getId();

            $stuff = $this->userHasRole("AppBundle", $userId, "ROLE_JOURNALISTE");

            return $this->render(':default:session.html.twig', array('test' => $stuff));
        }
    }

    /**
     * @Route("/testEm", name="testEm")
     */
    public function testEm(Request $request)
    {
        $this->emTypeVerify();
        $result = $this->getEmTYpe();

        return $this->render(':default:session.html.twig', array('test' => $result));
    }


}


/* fonction de test */
function var_show($var)
{
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
}


