<?php

namespace Omar\EscuelaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Materia
 *
 * @ORM\Table(name="Materia", indexes={@ORM\Index(name="idMaestro", columns={"idMaestro"})})
 * @ORM\Entity
 */
class Materia
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
     * @ORM\Column(name="nombreMateria", type="string", length=45, nullable=false)
     */
    private $nombremateria;

    /**
     * @var \Maestro
     *
     * @ORM\ManyToOne(targetEntity="Maestro")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idMaestro", referencedColumnName="id")
     * })
     */
    private $idmaestro;



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
     * Set nombremateria
     *
     * @param string $nombremateria
     * @return Materia
     */
    public function setNombremateria($nombremateria)
    {
        $this->nombremateria = $nombremateria;

        return $this;
    }

    /**
     * Get nombremateria
     *
     * @return string 
     */
    public function getNombremateria()
    {
        return $this->nombremateria;
    }

    /**
     * Set idmaestro
     *
     * @param \Omar\EscuelaBundle\Entity\Maestro $idmaestro
     * @return Materia
     */
    public function setIdmaestro(\Omar\EscuelaBundle\Entity\Maestro $idmaestro = null)
    {
        $this->idmaestro = $idmaestro;

        return $this;
    }

    /**
     * Get idmaestro
     *
     * @return \Omar\EscuelaBundle\Entity\Maestro 
     */
    public function getIdmaestro()
    {
        return $this->idmaestro;
    }
    
    public function __toString()
	{
		return $this->nombremateria;
	}
}
