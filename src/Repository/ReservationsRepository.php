<?php

namespace App\Repository;

use App\Entity\Reservations;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Reservations>
 *
 * @method Reservations|null find($id, $lockMode = null, $lockVersion = null)
 * @method Reservations|null findOneBy(array $criteria, array $orderBy = null)
 * @method Reservations[]    findAll()
 * @method Reservations[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReservationsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reservations::class);
    }

    public function save(Reservations $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Reservations $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function findAllByDateAndHour(\DateTimeInterface $date, \DateTimeInterface $hour): array
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.date = :date')
            ->andWhere('r.hour = :hour')
            ->setParameter('date', $date)
            ->setParameter('hour', $hour)
            ->getQuery()
            ->getResult()
        ;
    }

    public function getTotalPersonsByDateAndBetweenHours(\DateTimeInterface $date, \DateTimeInterface $startHour, \DateTimeInterface $endHour): int
    {
        return $this->createQueryBuilder('r')
            ->select('SUM(r.persons)')
            ->andWhere('r.date = :date')
            ->andWhere('r.hour BETWEEN :startHour AND :endHour')
            ->setParameter('date', $date)
            ->setParameter('startHour', $startHour)
            ->setParameter('endHour', $endHour)
            ->getQuery()
            ->getSingleScalarResult()
        ;
    }
}
