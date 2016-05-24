<?php

namespace SEPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BatchAssignment
 *
 * @ORM\Table(name="batchassignment")
 * @ORM\Entity(repositoryClass="SEPBundle\Repository\BatchAssignmentRepository")
 */
class BatchAssignment
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="batchid", type="string", length=255)
     */
    private $batchid;

    /**
     * @var int
     *
     * @ORM\Column(name="assignmentid", type="integer")
     */
    private $assignmentid;

    /**
     * @var string
     *
     * @ORM\Column(name="assignmentname", type="string")
     */
    private $assignmentname;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set batchid
     *
     * @param string $batchid
     *
     * @return BatchAssignment
     */
    public function setBatchid($batchid)
    {
        $this->batchid = $batchid;

        return $this;
    }

    /**
     * Get batchid
     *
     * @return string
     */
    public function getBatchid()
    {
        return $this->batchid;
    }

    /**
     * Set assignmentid
     *
     * @param integer $assignmentid
     *
     * @return BatchAssignment
     */
    public function setAssignmentid($assignmentid)
    {
        $this->assignmentid = $assignmentid;

        return $this;
    }

    /**
     * Get assignmentid
     *
     * @return int
     */
    public function getAssignmentid()
    {
        return $this->assignmentid;
    }

    /**
     * Set assignmentname
     *
     * @param integer $assignmentname
     *
     * @return BatchAssignment
     */
    public function setAssignmentname($assignmentname)
    {
        $this->assignmentname = $assignmentname;

        return $this;
    }

    /**
     * Get assignmentname
     *
     * @return string
     */
    public function getAssignmentname()
    {
        return $this->assignmentname;
    }
}

