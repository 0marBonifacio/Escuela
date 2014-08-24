<?php

namespace Omar\EscuelaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Maestro
 *
 * @ORM\Table(name="Maestro")
 * @ORM\Entity
 */
class Maestro
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
     * @ORM\Column(name="nombreMaestro", type="string", length=50, nullable=false)
     */
    private $nombremaestro;



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
     * Set nombremaestro
     *
     * @param string $nombremaestro
     * @return Maestro
     */
    public function setNombremaestro($nombremaestro)
    {
        $this->nombremaestro = $nombremaestro;

        return $this;
    }

    /**
     * Get nombremaestro
     *
     * @return string 
     */
    public function getNombremaestro()
    {
        return $this->nombremaestro;
    }
    
    public function __toString()
	{
		return $this->nombremaestro;
	}
}
