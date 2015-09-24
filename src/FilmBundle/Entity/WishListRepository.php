<?php

namespace FilmBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * WishListRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class WishListRepository extends EntityRepository
{
    
        public function FindAllmovies($id) {


        $qb = $this->createQueryBuilder('a');
        $sort = 'a.dateVu';
        $tri = 'DESC';
        $qb
                ->where('a.iduser = :id')
                ->setParameter('id', $id)
                ->orderBy($sort, $tri);
        ;

        return $qb
                        ->getQuery()
                        ->getResult()
        ;
    }
}
