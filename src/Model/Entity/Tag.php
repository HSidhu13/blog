<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Tag Entity.
 *
 * @property int $tagID
 * @property string $tagName
 * @property int $articalID
 * @property int $userID
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 */
class Tag extends Entity
{

}
