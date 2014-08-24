<?php

namespace Omar\EscuelaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Grupo
 *
 * @ORM\Table(name="Grupo")
 * @ORM\Entity
 */
class Grupo
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
     * @ORM\Column(name="nombreGrupo", type="string", length=2, nullable=false)
     */
    private $nombregrupo;



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
     * Set nombregrupo
     *
     * @param string $nombregrupo
     * @return Grupo
     */
    public function setNombregrupo($nombregrupo)
    {
        $this->nombregrupo = $nombregrupo;

        return $this;
    }

    /**
     * Get nombregrupo
     *
     * @return string 
     */
    public function getNombregrupo()
    {
        return $this->nombregrupo;
    }
    
    public function __toString()
	{
		return $this->nombregrupo;
	}
}
