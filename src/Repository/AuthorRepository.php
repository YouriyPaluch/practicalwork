<?php

namespace App\Repository;

use App\Entity\Author;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Book;

/**
 * @method Author|null find($id, $lockMode = null, $lockVersion = null)
 * @method Author|null findOneBy(array $criteria, array $orderBy = null)
 * @method Author[]    findAll()
 * @method Author[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AuthorRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Author::class);
    }

//    /**
//     * get authors id by book id
//     * @param int $id
//     * @return array
//     */
//    public function getIdAuthorForBook(int $id)
//    {
//        $entityManager = $this->getEntityManager();
//
//        $query = $entityManager->createQuery(
//            'SELECT p.id
//            FROM App\Entity\Author p
//            INNER JOIN p.books b
//            WHERE b.id = :id'
//        )->setParameter('id', $id);
//        $authorsId = $query->getResult();
//        $authorId = [];
//        foreach ($authorsId as $author){
//            $authorId[] = $author['id'];
//        }
//
//        return $authorId;
//    }
//    {
//        return $this->getEntityManager()
//            ->createQuery(
//                "SELECT author FROM App:Author author INNER JOIN author.book book"
//            )
//            ->setParameter('id', $id)
//            ->getOneOrNullResult();
//    }
    // /**
    //  * @return Author[] Returns an array of Author objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Author
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
