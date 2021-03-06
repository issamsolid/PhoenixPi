<?php

namespace ForumBundle\Repository;

/**
 * PostRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 * 
 * METHODS LIST:
 * findLast($limit) Return lastPosts list
 * 
 */
class PostRepository extends \Doctrine\ORM\EntityRepository
{
    /**
     *
     * @param int $limit
     * @return array $lastPosts (List of last posts)
     */
    public function findLast($limit) 
    {
        $lastPosts = $this->findBy(
            array(),
            array('date' => 'desc'),
            $limit,
            0
        );
        
        return $lastPosts;
    }

    /**
     *
     * @param class ForumBundle\Entity\Forum $forum
     * @return array $forumsList
     */
    public function findLastEdited($limit = null)
    {
        
        $qb = $this->createQueryBuilder('p');
   
        $qb->where('p.updated is not null')
           ->addOrderBy("p.updated", 'DESC')
           ->setMaxResults($limit);
        return $qb->getQuery()->getResult();
    }

    public function FindByNom($nom)
    {
        $query=$this->getEntityManager()
            ->createQuery("SELECT a from ForumBundle:Post a where a.content LIKE '$nom%' ");
        return $query->getResult();
    }

}
