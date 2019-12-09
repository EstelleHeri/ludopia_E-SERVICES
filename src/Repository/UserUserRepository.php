<?php

namespace App\Repository;

use App\Entity\UserUser;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method UserUser|null find($id, $lockMode = null, $lockVersion = null)
 * @method UserUser|null findOneBy(array $criteria, array $orderBy = null)
 * @method UserUser[]    findAll()
 * @method UserUser[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserUserRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UserUser::class);
    }

    // /**
    //  * @return UserUser[] Returns an array of UserUser objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?UserUser
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
