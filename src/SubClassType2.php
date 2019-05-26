<?php
use Doctrine\ORM\Mapping as ORM;

/**
 * SubClassType2
 *
 * @Table(name="subClassType2")
 * @Entity
 */
class SubClassType2 extends SubClass
{

    /** @Column(type="string") */
    protected $someOtherIndividualProperty;

    public function getSomeOtherIndividualProperty()
    {
        return $this->someOtherIndividualProperty;
    }
    public function setSomeOtherIndividualProperty($someOtherIndividualProperty)
    {
        $this->someOtherIndividualProperty = $someOtherIndividualProperty;
    }
}
