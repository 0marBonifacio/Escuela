<?php

namespace Omar\EscuelaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Alumno
 *
 * @ORM\Table(name="Alumno")
 * @ORM\Entity
 */
class Alumno
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="matricula", type="string", length=8, nullable=false)
     */
    private $matricula;

    /**
     * @var string
     *
     * @ORM\Column(name="nombreAlumno", type="string", length=45, nullable=false)
     */
    private $nombrealumno;

    /**
     * @var integer
     *
     * @ORM\Column(name="semestre", type="integer", nullable=false)
     */
    private $semestre;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set matricula
     *
     * @param string $matricula
     * @return Alumno
     */
    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;

        return $this;
    }

    /**
     * Get matricula
     *
     * @return string 
     */
    public function getMatricula()
    {
        return $this->matricula;
    }

    /**
     * Set nombrealumno
     *
     * @param string $nombrealumno
     * @return Alumno
     */
    public function setNombrealumno($nombrealumno)
    {
        $this->nombrealumno = $nombrealumno;

        return $this;
    }

    /**
     * Get nombrealumno
     *
     * @return string 
     */
    public function getNombrealumno()
    {
        return $this->nombrealumno;
    }

    /**
     * Set semestre
     *
     * @param integer $semestre
     * @return Alumno
     */
    public function setSemestre($semestre)
    {
        $this->semestre = $semestre;

        return $this;
    }

    /**
     * Get semestre
     *
     * @return integer 
     */
    public function getSemestre()
    {
        return $this->semestre;
    }
    
    public function __toString()
	{
		return $this->nombrealumno;
	}
}
