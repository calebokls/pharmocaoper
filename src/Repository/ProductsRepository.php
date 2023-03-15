<?php

namespace App\Repository;

use App\Data\SeachData;
use App\Data\SeacheData;
use App\Entity\Products;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\Query;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Products>
 *
 * @method Products|null find($id, $lockMode = null, $lockVersion = null)
 * @method Products|null findOneBy(array $criteria, array $orderBy = null)
 * @method Products[]    findAll()
 * @method Products[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Products::class);
    }

    public function save(Products $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Products $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
  public function FindPagination():Query
  {
    $query = $this->createQueryBuilder('p');
    return $query->getQuery();
  }

  public function findSeach(SeachData $seach): array
  {
    $query = 
           $this->createQueryBuilder('p')
                 ->select('p')
           ;
      if(!empty($seach->q))
      {
        $query = $query
             ->andwhere('p.name LIKE :q')
             ->setParameter('q',"%{$seach->q}%")
             ;
      }
      return $query->getQuery()->getResult();
  }
}
