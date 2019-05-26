<?php
use Doctrine\ORM\Mapping as ORM;

/**
 * SubClass
 *
 * @Table(name="subClassNotInheritated")
 * @Entity @HasLifecycleCallbacks
 */
class SubClassNotInheritated
{
    /**
     * @var \MainClass
     *
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     * @OneToOne(targetEntity="MainClass", inversedBy="subClassNotInheritated")
     * @JoinColumns({
     *   @JoinColumn(name="id", referencedColumnName="id", onDelete="CASCADE")
     * })
     */
    protected $mainClass;

    /** @Column(type="string") */
    protected $someCommonProperty;


    public function setMainClass(\MainClass $mainClass)
    {
        $mainClass->setSubClassNotInheritated($this);
        $this->mainClass = $mainClass;

        return $this;
    }

    public function getMainClass()
    {
        return $this->mainClass;
    }

    public function getSomeCommonProperty()
    {
        return $this->someCommonProperty;
    }
    public function setSomeCommonProperty($someCommonProperty)
    {
        $this->someCommonProperty = $someCommonProperty;
    }

    /** @PrePersist */
    public function PrePersist()
    {
        syslog(LOG_INFO, 'SubClass - PrePersist');
    }
    /** @PostPersist */
    public function PostPersist()
    {
        syslog(LOG_INFO, 'SubClass - PostPersist');
    }
    /** @PreFlush  */
    public function PreFlush ()
    {
        syslog(LOG_INFO, 'SubClass - PreFlush');
    }
    /** @OnFlush */
    public function OnFlush()
    {
        syslog(LOG_INFO, 'SubClass - OnFlush');
    }
    /** @PostFlush  */
    public function PostFlush ()
    {
        syslog(LOG_INFO, 'SubClass - PostFlush');
    }
}

