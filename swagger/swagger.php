<?php

namespace App;

use OpenApi\Annotations as OA;

/**
 * @OA\Info(
 *     version="1.0",
 *     title="Test API Sawgger",
 *     description="Test de la documentation de l'API Swagger",
 *     @OA\Contact(name="Testing API Team")
 * )
 * @OA\Server(
 *     url="https://api.swagger.fr/V1/",
 *     description="API server"
 * )
 */
class OpenApiSpec
{
}
