<?php

namespace SEPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Course
 *
 * @ORM\Table(name="course")
 * @ORM\Entity(repositoryClass="SEPBundle\Repository\CourseRepository")
 */
class Course
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
     * @ORM\Column(name="courseid", type="string", length=255)
     */
    private $courseid;

    /**
     * @var string
     *
     * @ORM\Column(name="coursename", type="string", length=255)
     */
    private $coursename;


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
     * @return Course
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
     * Set coursename
     *
     * @param string $coursename
     *
     * @return Course
     */
    public function setCoursename($coursename)
    {
        $this->coursename = $coursename;

        return $this;
    }

    /**
     * Get coursename
     *
     * @return string
     */
    public function getCoursename()
    {
        return $this->coursename;
    }
}

