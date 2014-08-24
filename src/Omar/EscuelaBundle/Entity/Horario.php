<?php

namespace Omar\EscuelaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Horario
 *
 * @ORM\Table(name="Horario", indexes={@ORM\Index(name="idAlumno", columns={"idAlumno"}), @ORM\Index(name="idGrupo", columns={"idGrupo"}), @ORM\Index(name="idMateria", columns={"idMateria"})})
 * @ORM\Entity
 */
class Horario
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
     * @ORM\Column(name="hora", type="string", length=5, nullable=false)
     */
    private $hora;

    /**
     * @var \Materia
     *
     * @ORM\ManyToOne(targetEntity="Materia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idMateria", referencedColumnName="id")
     * })
     */
    private $idmateria;

    /**
     * @var \Alumno
     *
     * @ORM\ManyToOne(targetEntity="Alumno")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idAlumno", referencedColumnName="id")
     * })
     */
    private $idalumno;

    /**
     * @var \Grupo
     *
     * @ORM\ManyToOne(targetEntity="Grupo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idGrupo", referencedColumnName="id")
     * })
     */
    private $idgrupo;



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
     * Set hora
     *
     * @param string $hora
     * @return Horario
     */
    public function setHora($hora)
    {
        $this->hora = $hora;

        return $this;
    }

    /**
     * Get hora
     *
     * @return string 
     */
    public function getHora()
    {
        return $this->hora;
    }

    /**
     * Set idmateria
     *
     * @param \Omar\EscuelaBundle\Entity\Materia $idmateria
     * @return Horario
     */
    public function setIdmateria(\Omar\EscuelaBundle\Entity\Materia $idmateria = null)
    {
        $this->idmateria = $idmateria;

        return $this;
    }

    /**
     * Get idmateria
     *
     * @return \Omar\EscuelaBundle\Entity\Materia 
     */
    public function getIdmateria()
    {
        return $this->idmateria;
    }

    /**
     * Set idalumno
     *
     * @param \Omar\EscuelaBundle\Entity\Alumno $idalumno
     * @return Horario
     */
    public function setIdalumno(\Omar\EscuelaBundle\Entity\Alumno $idalumno = null)
    {
        $this->idalumno = $idalumno;

        return $this;
    }

    /**
     * Get idalumno
     *
     * @return \Omar\EscuelaBundle\Entity\Alumno 
     */
    public function getIdalumno()
    {
        return $this->idalumno;
    }

    /**
     * Set idgrupo
     *
     * @param \Omar\EscuelaBundle\Entity\Grupo $idgrupo
     * @return Horario
     */
    public function setIdgrupo(\Omar\EscuelaBundle\Entity\Grupo $idgrupo = null)
    {
        $this->idgrupo = $idgrupo;

        return $this;
    }

    /**
     * Get idgrupo
     *
     * @return \Omar\EscuelaBundle\Entity\Grupo 
     */
    public function getIdgrupo()
    {
        return $this->idgrupo;
    }
}
