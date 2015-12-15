<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Tag Entity.
 *
 * @property int $tagID
 * @property string $tagName
 * @property int $articleID
 * @property int $userID
 * @property \Cake\I18n\Time $created
 */
class Tag extends Entity
{

}
