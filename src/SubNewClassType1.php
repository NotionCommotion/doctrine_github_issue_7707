<?php
use Doctrine\ORM\Mapping as ORM;

/**
 * SubNewClassType1
 *
 * @Table(name="subNewClassType1")
 * @Entity
 */
class SubNewClassType1 extends SubNewClass
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
