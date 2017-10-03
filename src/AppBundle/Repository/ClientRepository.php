<?php

namespace AppBundle\Repository;

use AppBundle\Entity\Client;
use Doctrine\ORM\EntityRepository;

/**
 * Class ClientRepository
 * @package AppBundle\Repository
 */
class ClientRepository extends EntityRepository
{
    /**
     * @param string $key
     * @return Client|null
     */
    public function findByKey($key)
    {
        return $this->createQueryBuilder('client')
            ->andWhere('client.key = :key')
            ->setParameter(':key', $key)
            ->getQuery()
            ->getOneOrNullResult();
    }
}
