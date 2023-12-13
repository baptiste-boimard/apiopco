<?php

namespace App\Entity;

use OpenApi\Annotations as OA;


/**
 * @OA\Schema()
 */
class Apprenti {

/** 
 * @OA\Property(type="integer")
 * @var int
*/
  public $id;

/** 
 * @OA\Property(type="string")
 * @var string|null
*/
  public $nom;

/**
 * @OA\Property(type="string", nullable=true)
 * @var string|null
 */
  public $nomUsage;

/** 
 * @OA\Property(type="string")
 * @var string
*/
  public $prenom;

/** 
 * @OA\Property(type="string")
 * @var string|null
*/
  public $sexe;

/** 
 * @OA\Property(type="string")
 * @var string
*/
  public $nationalite;

/** 
 * @OA\Property(type="string", format="date-time")
 * @var \DateTimeInterface|null
*/
  public $dateNaissance;

/** 
 * @OA\Property(type="string")
 * @var string
*/
  public $departementNaissance;

/** 
 * @OA\Property(type="string")
 * @var string
*/
  public $communeNaissance;

/** 
 * @OA\Property(type="string")
 * @var string
*/
  public $nir;

/** 
 * @OA\Property(type="integer")
 * @var int
*/
  public $regimeSocial;

/** 
 * @OA\Property(type="boolean")
 * @var boolean
*/
  public $handicap;

/** 
 * @OA\Property(type="string")
 * @var string
*/
  public $email;


}