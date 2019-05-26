<?php
use Doctrine\ORM\Mapping as ORM;

/**
 * SubNewClassType2
 *
 * @Table(name="subNewClassType2")
 * @Entity
 */
class SubNewClassType2 extends SubNewClass
{

    /** @Column(type="string") */
    protected $someIndividualProperty;

    public function getSomeIndividualProperty()
    {
        return $this->someIndividualProperty;
    }
    public function setSomeIndividualProperty($someIndividualProperty)
    {
        $this->someIndividualProperty = $someIndividualProperty;
    }
}
