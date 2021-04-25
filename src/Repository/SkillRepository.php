<?php

namespace App\Repository;

use App\Entity\Skill;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class SkillRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Skill::class);
    }

    public function findBlocks()
    {
        $queryBuilder = $this->createQueryBuilder('s');
        $queryBuilder->select('DISTINCT (s.block) AS block, s.dataAos, s.icon')
                     ->orderBy('s.name', 'DESC');

        return $blocks = $queryBuilder->getQuery()->getResult();
    }
}