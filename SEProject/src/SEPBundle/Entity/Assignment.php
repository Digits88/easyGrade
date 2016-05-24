<?php

namespace SEPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Assignment
 *
 * @ORM\Table(name="assignment")
 * @ORM\Entity(repositoryClass="SEPBundle\Repository\AssignmentRepository")
 */
class Assignment
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
     * @ORM\Column(name="courseid", type="string", length=50)
     */
    private $courseid;

    /**
     * @var string
     *
     * @ORM\Column(name="assignmentid", type="string", length=255)
     */
    private $assignmentid;

    /**
     * @var string
     *
     * @ORM\Column(name="assignmentname", type="string", length=255)
     */
    private $assignmentname;

    /**
     * @var string
     *
     * @ORM\Column(name="assignmentdescription", type="string", length=255)
     */
    private $assignmentdescription;

    /**
     * @var string
     *
     * @ORM\Column(name="testcaseinputs", type="string", length=255)
     */
    private $testcaseinputs;

    /**
     * @var string
     *
     * @ORM\Column(name="testcaseoutputs", type="string", length=255)
     */
    private $testcaseoutputs;


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
     * Set courseid
     *
     * @param string $courseid
     *
     * @return Assignment
     */
    public function setCourseid($courseid)
    {
        $this->courseid = $courseid;

        return $this;
    }

    /**
     * Get courseid
     *
     * @return string
     */
    public function getCourseid()
    {
        return $this->courseid;
    }

    /**
     * Set assignmentid
     *
     * @param string $assignmentid
     *
     * @return Assignment
     */
    public function setAssignmentid($assignmentid)
    {
        $this->assignmentid = $assignmentid;

        return $this;
    }

    /**
     * Get assignmentid
     *
     * @return string
     */
    public function getAssignmentid()
    {
        return $this->assignmentid;
    }

    /**
     * Set assignmentname
     *
     * @param string $assignmentname
     *
     * @return Assignment
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

    /**
     * Set assignmentdescription
     *
     * @param string $assignmentdescription
     *
     * @return Assignment
     */
    public function setAssignmentdescription($assignmentdescription)
    {
        $this->assignmentdescription = $assignmentdescription;

        return $this;
    }

    /**
     * Get assignmentdescription
     *
     * @return string
     */
    public function getAssignmentdescription()
    {
        return $this->assignmentdescription;
    }

    /**
     * Set testcaseinputs
     *
     * @param string $testcaseinputs
     *
     * @return Assignment
     */
    public function setTestcaseinputs($testcaseinputs)
    {
        $this->testcaseinputs = $testcaseinputs;

        return $this;
    }

    /**
     * Get testcaseinputs
     *
     * @return string
     */
    public function getTestcaseinputs()
    {
        return $this->testcaseinputs;
    }

    /**
     * Set testcaseoutputs
     *
     * @param string $testcaseoutputs
     *
     * @return Assignment
     */
    public function setTestcaseoutputs($testcaseoutputs)
    {
        $this->testcaseoutputs = $testcaseoutputs;

        return $this;
    }

    /**
     * Get testcaseoutputs
     *
     * @return string
     */
    public function getTestcaseoutputs()
    {
        return $this->testcaseoutputs;
    }
}

