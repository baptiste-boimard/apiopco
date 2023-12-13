<?php


namespace App\Controller;

use OpenApi\Annotations as OA;

class ApprentiController
{
    /**
     * Avoir tous les apprentis
     *
     * @OA\Get(
     *      tags={"Apprenti"},
     *      path="/api/V1/apprenti",
     *      description="Obtient tous les apprentis de l'école",
     *      @OA\Response(
     *        response=200,
     *        description="Les apprentis",
     *        @OA\JsonContent(
     *          type="array",
     *          @OA\Items(ref="#/components/schemas/Apprenti"),
     *        )
     *      ),
     *      @OA\Response(
     *        response=400,
     *        description="Bad Request",
     *        ref="#/components/responses/BadRequest"
     *      ),
     *      @OA\Response(
     *        response=401,
     *        description="Unauthoriezd",
     *        ref="#/components/responses/Unauthorized"
     *      )
     * )
     */
    public function getAllApprenti() {
        //
    }


    /**
     * 
     * Avoir un apprenti
     * 
     * @OA\Get(
     *   tags={"Apprenti"},
     *   path="/api/V1/apprenti/{id}",
     *   @OA\Parameter(
     *     name="id",
     *     in="path",
     *     description="Numéros d'id de l'apprenti",
     *     required=true,
     *     @OA\Schema(type="integer")
     *   ),
     *   description="Obtenir un apprenti avec son numéros d'id",
     *   @OA\Response(
     *     response=200,
     *     description="Un Apprenti",
     *     @OA\JsonContent(ref="#/components/schemas/Apprenti")
     *   ),
     *   @OA\Response(
     *     response=401,
     *     description="Unauthorized",
     *     ref="#/components/responses/Unauthorized"
     *   ),
     *   @OA\Response(
     *     response="404",
     *     description="Not Found",
     *     ref="#/components/responses/NotFound"
     *   )
     * )
     */
    public function getOneApprenti() {
        //
    }

    /**
     * 
     * Ajouter un apprenti
     * 
     * @OA\Post(
     *   tags={"Apprenti"},
     *   path="/api/V1/apprenti",
     *   description="Ajouter un nouvel apprenti",
     *   @OA\RequestBody(
     *     required=true,
     *     @OA\JsonContent(
     *       type="array",
     *       @OA\Items(ref="#/components/schemas/Apprenti")
     *     )
     *   ),
     *   @OA\Response(
     *     response=200,
     *     description="Ajout d'un nouvel apprenti",
     *     @OA\JsonContent(
     *       @OA\Property(
     *         property="message",
     *         type="string",
     *         example="L'apprenti a bien été ajouté",
     *       )
     *     )
     *   ),
     *   @OA\Response(
     *     response=401,
     *     description="Vous n'avez pas l'autorisation",
     *     @OA\JsonContent(
     *       @OA\Property(
     *         property="message",
     *         type="string",
     *         example="Vous ne pouvez pas ajouter un nouvel apprenti"
     *       )
     *     )
     *   ),
     *   @OA\Response(
     *     response=400,
     *     description="Bad Request",
     *     ref="#/components/responses/BadRequest")
     * )
     */
    public function postOneApprenti() {

    }

    /**
     * 
     * Supprimer un apprenti
     * 
     * @OA\Delete(
     *   tags={"Apprenti"},
     *   path="/api/V1/apprenti/{id}",
     *   description="Supprime un apprenti",
     *   @OA\Parameter(
     *     name="id",
     *     in="path",
     *     required=true,
     *     @OA\Schema(type="integer"),
     *   ),
     *   @OA\Response(
     *     response=200,
     *     description="OK",
     *     @OA\JsonContent(
     *       @OA\Property(
     *         property="message",
     *         type="string",
     *         example="L'apprenti a été supprimer",
     *       ),
     *     ),
     *   ),
     *   @OA\Response(
     *     response=401,
     *     description="Unauthorized",
     *     @OA\JsonContent(
     *       @OA\Property(
     *         property="name",
     *         type="string",
     *         example="Vous n'êtes pas autorisé à faire cela",
     *       ),
     *     ),
     *   ),
     *   @OA\Response(
     *     response=404,
     *     description="Not Found",
     *     @OA\JsonContent(
     *       @OA\Property(
     *         property="name",
     *         type="string",
     *         example="L'apprenti que vous souhaitez suprrimer n'existe pas",
     *       ),
     *     ),
     *   ),
     * )
     */
    public function deleteOneApprenti() {

    }

    /**
     * 
     * Modifier un apprenti
     * 
     * @OA\Patch(
     *   tags={"Apprenti"},
     *   path="/api/V1/apprenti/{id}",
     *   description="Modifie un apprenti",
     *   @OA\Parameter(
     *     name="id",
     *     in="path",
     *     required=true,
     *     @OA\Schema(type="integer"),
     *   ),
     *   @OA\RequestBody(
     *     required=true,
     *     @OA\JsonContent(
     *       type="array",
     *       @OA\Items(ref="#/components/schemas/Apprenti")
     *     )
     *   ),
     *   @OA\Response(
     *     response=200,
     *     description="OK",
     *     @OA\JsonContent(
     *       @OA\Property(
     *         property="message",
     *         type="string",
     *         example="L'apprenti a été modifié",
     *       ),
     *     ),
     *   ),
     *   @OA\Response(
     *     response=401,
     *     description="Unauthorized",
     *     @OA\JsonContent(
     *       @OA\Property(
     *         property="name",
     *         type="string",
     *         example="Vous n'êtes pas autorisé à faire cela",
     *       ),
     *     ),
     *   ),
     *   @OA\Response(
     *     response=404,
     *     description="Not Found",
     *     @OA\JsonContent(
     *       @OA\Property(
     *         property="name",
     *         type="string",
     *         example="L'apprenti que vous souhaitez modifier n'existe pas",
     *       ),
     *     ),
     *   ),
     * )
     */
    public function updateOneApprenti() {

    }
}
