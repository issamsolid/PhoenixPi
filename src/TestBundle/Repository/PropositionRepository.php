<?php

namespace TestBundle\Repository;

/**
 * PropositionRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PropositionRepository extends \Doctrine\ORM\EntityRepository
{
    public function FindByNom($nom)
    {
        $query=$this->getEntityManager()
            ->createQuery("SELECT a from TestBundle:Proposition a where a.cat LIKE '$nom%' ");
        return $query->getResult();
    }
}
