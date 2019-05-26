<?php
use Doctrine\ORM\Mapping as ORM;

/**
 * SubNewClass
 *
 * @Table(name="subNewClass")
 * @InheritanceType("JOINED")
 * @DiscriminatorColumn(name="discriminator", type="string", length=32)
 * @DiscriminatorMap({"subNewClassType1" = "SubNewClassType1", "subNewClassType2" = "SubNewClassType2"})
 * @Entity @HasLifecycleCallbacks
 */
abstract class SubNewClass
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
    protected $someCommonProperty;


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
        syslog(LOG_INFO, 'SubNewClass - PrePersist');
    }
    /** @PostPersist */
    public function PostPersist()
    {
        syslog(LOG_INFO, 'SubNewClass - PostPersist');
    }
    /** @PreFlush  */
    public function PreFlush ()
    {
        syslog(LOG_INFO, 'SubNewClass - PreFlush');
    }
    /** @OnFlush */
    public function OnFlush()
    {
        syslog(LOG_INFO, 'SubNewClass - OnFlush');
    }
    /** @PostFlush  */
    public function PostFlush ()
    {
        syslog(LOG_INFO, 'SubNewClass - PostFlush');
    }
}

