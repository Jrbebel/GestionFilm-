<?php

namespace AppBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * UserRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UserRepository extends EntityRepository {

    public function searchFriend($term, $limit = 10) {

        $qb = $this->createQueryBuilder('c');
        $qb->select('c.username, c.path', 'c.id')
                ->where('c.username LIKE :term')
                ->setParameter('term', $term . '%')
                ->setMaxResults($limit);

        $arrayAss = $qb->getQuery()
                ->getArrayResult();

        // Transformer le tableau associatif en un tableau standard
        $array = array();
        foreach ($arrayAss as $data) {
            //$array[] = array("Username"=>$data['username'],"Path"=>"<img src={{asset('uploads/profile/".$data['path']."')}} />");
            $array[] = array("Username" => $data['username'], "Path" => $data['path'], "Id" => $data['id']);
        }

        return $array;
    }

   

}
