<?php
use Doctrine\ORM\Mapping as ORM;

/**
 * SubClassType1
 *
 * @Table(name="subclassType1")
 * @Entity
 */
class SubClassType1 extends SubClass
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
