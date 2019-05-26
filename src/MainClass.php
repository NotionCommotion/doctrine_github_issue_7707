<?php
use Doctrine\ORM\Mapping as ORM;

/**
 * MainClass
 *
 * @Table(name="mainClass")
 * @Entity @HasLifecycleCallbacks
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
     * @OneToOne(targetEntity="SubClass", mappedBy="mainClass")
     */
    protected $subClass;

    /**
     * @var \SubClassNotInheritated
     *
     * @OneToOne(targetEntity="SubClassNotInheritated", mappedBy="mainClass")
     */
    protected $subClassNotInheritated;

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

    public function setSubClassNotInheritated(\SubClassNotInheritated $subClassNotInheritated)
    {
        $this->subClassNotInheritated = $subClassNotInheritated;

        return $this;
    }

    public function getSubClassNotInheritated()
    {
        return $this->subClassNotInheritated;
    }

    /** @PrePersist */
    public function PrePersist()
    {
        syslog(LOG_INFO, 'MainClass - PrePersist');
    }
    /** @PostPersist */
    public function PostPersist()
    {
        syslog(LOG_INFO, 'MainClass - PostPersist');
    }
    /** @PreFlush  */
    public function PreFlush ()
    {
        syslog(LOG_INFO, 'MainClass - PreFlush');
    }
    /** @OnFlush */
    public function OnFlush()
    {
        syslog(LOG_INFO, 'MainClass - OnFlush');
    }
    /** @PostFlush  */
    public function PostFlush ()
    {
        syslog(LOG_INFO, 'MainClass - PostFlush');
    }
}
