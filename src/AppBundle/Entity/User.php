<?php
/**
 * Created by PhpStorm.
 * User: ccdu3
 * Date: 17/02/2017
 * Time: 15:46
 */

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
        $_SESSION['roles'] = $this->getRoles();
        $_COOKIE['roles'] = $this->getRoles();
    }
}