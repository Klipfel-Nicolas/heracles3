<?php 

namespace App;

use App\Fighter;

class Arena 
{
    private array $monster;
    private Hero $hero;
    private int $size;

    public function __construct(Hero $hero, array $monster, int $size =10)
    {
        $this->hero = $hero;
        $this->monster = $monster;
        $this->size = $size;
    }

    /** 
     * Get Hero
     */
    public function getHero()
    {
        return $this->hero;
    }

    /**
     * Set Hero
     *
     */
    public function setHero(int $hero)
    {
        $this->hero = $hero;
    }

    /**
     * Get Hero
     */
    public function getMonsters()
    {
        return $this->monster;
    }

    /**
     * Set Hero
     *
     */
    public function setMonsters(int $monster)
    {
        $this->monster = $monster;
    }

    /**
     * Get Hero
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set Hero
     *
     */
    public function setSize(int $size)
    {
        $this->size = $size;
    }
    
    /**
     * METHODES
     */

     public function getDistance(Fighter $figther1, Fighter $figther2)
     {
            $distance = sqrt((($figther1->getX() - $figther2->getX()) ** 2) + (($figther1->getY() - $figther2->getY())** 2));

            return $distance;
     }

     public function touchable(Fighter $assailant,Fighter $attacked): bool
     {
            if($this->getDistance($assailant, $attacked) <= $assailant->getRange()) {
                return true;
            }else{
                return false;
            }
     }
}