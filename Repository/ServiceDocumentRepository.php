<?php

declare(strict_types=1);

namespace Doctrine\Bundle\MongoDBBundle\Repository;

use Doctrine\ODM\MongoDB\Repository\DocumentRepository;

/**
 * Optional DocumentRepository base class with a simplified constructor (for autowiring).
 *
 * To use in your class, inject the "registry" service and call
 * the parent constructor. For example:
 *
 * class YourDocumentRepository extends ServiceDocumentRepository
 * {
 *     public function __construct(RegistryInterface $registry)
 *     {
 *         parent::__construct($registry, YourDocument::class);
 *     }
 * }
 */
class ServiceDocumentRepository extends DocumentRepository implements ServiceDocumentRepositoryInterface
{
    use ServiceRepositoryTrait;
}
