<?php

/*
 * This file is part of the API Platform project.
 *
 * (c) Kévin Dunglas <dunglas@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace ApiPlatform\Core\Filter\Validator;

interface ValidatorInterface
{
    /**
     * @var string        the parameter name to validate
     * @var array<string, mixed> $filterDescription the filter descriptions as returned by `ApiPlatform\Core\Api\FilterInterface::getDescription()`
     * @var array<string, mixed> $queryParameters the list of query parameter
     */
    public function validate(string $name, array $filterDescription, array $queryParameters): array;
}
