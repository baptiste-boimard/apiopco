<?php

namespace App\Controller;

use OpenApi\Annotations as OA;

/** 
 * @OA\Response(
 *   response="NotFound",
 *   description="La ressource n'existe pas",
 *   @OA\JsonContent(
 *      @OA\Property(
 *        property="message",
 *        type="string",
 *        example="L'apprenti que vous demandé n'existe pas"
 *      )
 *   )
 * )
 * @OA\Response(
 *   response="Unauthorized",
 *   description="Vous n'êtes pas autorisé à consulter cette ressource",
 *   @OA\JsonContent(
 *     @OA\Property(
 *       property="message",
 *       type="string",
 *       example="Vous n'avez pas l'autorisation"
 *     )
 *   )
 * )
 * @OA\Response(
 *   response="BadRequest",
 *   description="Mauvaise requête",
 *   @OA\JsonContent(
 *     @OA\Property(
 *       property="message",
 *       type="string",
 *       example="Mauvaise Requête",
 *     )
 *   )
 * )
*/
class AbstractController {

}