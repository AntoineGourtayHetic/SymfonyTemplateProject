<?php
namespace AppBundle\Services;



class TimeIsOnMySide
{
    /**
     * @param \DateTime $datetime
     */
    public function getAge(\DateTime $datetime)
    {
        $interval = $datetime->diff(new \DateTime('now'));
        return $interval->y;
    }
}