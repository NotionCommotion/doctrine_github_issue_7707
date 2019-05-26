<?php
use Doctrine\ORM\Mapping as ORM;

/**
 * MainClass
 *
 * @Table(name="mainClass")
 * @Entity
 */
class MainClass
{
    /**
     * @var int
     *
     * @Column(name="id", type="integer")
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /** @Column(type="string") */
    protected $name;

    /**
     * @var \SubClass
     *
     * @OneToOne(targetEntity="SubClass", mappedBy="mainClass", cascade={"persist","remove"}, orphanRemoval=true)
     */
    protected $subClass;

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }

    public function setSubClass(\SubClass $subClass)
    {
        $this->subClass = $subClass;

        return $this;
    }

    public function getSubClass()
    {
        return $this->subClass;
    }
}
