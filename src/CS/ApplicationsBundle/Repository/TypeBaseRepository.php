<?php

namespace CS\ApplicationsBundle\Repository;
use  Doctrine\ORM\Tools\Pagination\Paginator ;

/**
 * TypeBaseRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class TypeBaseRepository extends \Doctrine\ORM\EntityRepository
{
    public function getList($page=1, $maxperpage=20)
    {
        $q = $this->_em->createQueryBuilder()
            ->select('types_bases')
            ->from('CSApplicationsBundle:TypeBase','types_bases')
        ;

        $q->setFirstResult(($page-1) * $maxperpage)
            ->setMaxResults($maxperpage);

        return new Paginator($q);
    }
}