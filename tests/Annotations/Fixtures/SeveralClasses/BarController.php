<?php

declare(strict_types=1);

namespace Tobion\OpenApiSymfonyRouting\Tests\Annotations\Fixtures\SeveralClasses;

use OpenApi\Annotations as OA;

/**
 * @OA\OpenApi(
 *     @OA\Info(title="My API", version="1.0")
 * )
 */
class BarController
{
    /**
     * @OA\Get(
     *     path="/bar",
     *     @OA\Response(response="200", description="Success")
     * )
     */
    public function __invoke(): void
    {
    }
}
