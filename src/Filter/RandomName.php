<?php


namespace App\Filter;


use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\AbstractFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Util\QueryNameGeneratorInterface;
use Doctrine\ORM\QueryBuilder;

class RandomName extends AbstractFilter {

  /**
   * @inheritDoc
   */
  protected function filterProperty(string $property, $value, QueryBuilder $queryBuilder, QueryNameGeneratorInterface $queryNameGenerator, string $resourceClass, string $operationName = NULL) {
    // TODO: Implement filterProperty() method.
  }

  /**
   * @inheritDoc
   */
  public function getDescription(string $resourceClass): array {
    // TODO: Implement getDescription() method.
  }
}