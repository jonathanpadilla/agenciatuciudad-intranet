<?php

namespace BaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PerContacto
 *
 * @ORM\Table(name="per_contacto", indexes={@ORM\Index(name="con_tipo_fk", columns={"con_tipo_fk"}), @ORM\Index(name="con_persona_fk", columns={"con_persona_fk"})})
 * @ORM\Entity
 */
class PerContacto
{
    /**
     * @var integer
     *
     * @ORM\Column(name="con_id_pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $conIdPk;

    /**
     * @var string
     *
     * @ORM\Column(name="con_contacto", type="string", length=100, nullable=true)
     */
    private $conContacto;

    /**
     * @var string
     *
     * @ORM\Column(name="con_nombre_persona", type="string", length=50, nullable=true)
     */
    private $conNombrePersona;

    /**
     * @var boolean
     *
     * @ORM\Column(name="con_habilitado", type="boolean", nullable=true)
     */
    private $conHabilitado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="con_fecha_registro", type="datetime", nullable=true)
     */
    private $conFechaRegistro;

    /**
     * @var \DefTipoContacto
     *
     * @ORM\ManyToOne(targetEntity="DefTipoContacto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="con_tipo_fk", referencedColumnName="cti_id_pk")
     * })
     */
    private $conTipoFk;

    /**
     * @var \PerPersona
     *
     * @ORM\ManyToOne(targetEntity="PerPersona")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="con_persona_fk", referencedColumnName="per_id_pk")
     * })
     */
    private $conPersonaFk;



    /**
     * Get conIdPk
     *
     * @return integer 
     */
    public function getConIdPk()
    {
        return $this->conIdPk;
    }

    /**
     * Set conContacto
     *
     * @param string $conContacto
     * @return PerContacto
     */
    public function setConContacto($conContacto)
    {
        $this->conContacto = $conContacto;

        return $this;
    }

    /**
     * Get conContacto
     *
     * @return string 
     */
    public function getConContacto()
    {
        return $this->conContacto;
    }

    /**
     * Set conNombrePersona
     *
     * @param string $conNombrePersona
     * @return PerContacto
     */
    public function setConNombrePersona($conNombrePersona)
    {
        $this->conNombrePersona = $conNombrePersona;

        return $this;
    }

    /**
     * Get conNombrePersona
     *
     * @return string 
     */
    public function getConNombrePersona()
    {
        return $this->conNombrePersona;
    }

    /**
     * Set conHabilitado
     *
     * @param boolean $conHabilitado
     * @return PerContacto
     */
    public function setConHabilitado($conHabilitado)
    {
        $this->conHabilitado = $conHabilitado;

        return $this;
    }

    /**
     * Get conHabilitado
     *
     * @return boolean 
     */
    public function getConHabilitado()
    {
        return $this->conHabilitado;
    }

    /**
     * Set conFechaRegistro
     *
     * @param \DateTime $conFechaRegistro
     * @return PerContacto
     */
    public function setConFechaRegistro($conFechaRegistro)
    {
        $this->conFechaRegistro = $conFechaRegistro;

        return $this;
    }

    /**
     * Get conFechaRegistro
     *
     * @return \DateTime 
     */
    public function getConFechaRegistro()
    {
        return $this->conFechaRegistro;
    }

    /**
     * Set conTipoFk
     *
     * @param \BaseBundle\Entity\DefTipoContacto $conTipoFk
     * @return PerContacto
     */
    public function setConTipoFk(\BaseBundle\Entity\DefTipoContacto $conTipoFk = null)
    {
        $this->conTipoFk = $conTipoFk;

        return $this;
    }

    /**
     * Get conTipoFk
     *
     * @return \BaseBundle\Entity\DefTipoContacto 
     */
    public function getConTipoFk()
    {
        return $this->conTipoFk;
    }

    /**
     * Set conPersonaFk
     *
     * @param \BaseBundle\Entity\PerPersona $conPersonaFk
     * @return PerContacto
     */
    public function setConPersonaFk(\BaseBundle\Entity\PerPersona $conPersonaFk = null)
    {
        $this->conPersonaFk = $conPersonaFk;

        return $this;
    }

    /**
     * Get conPersonaFk
     *
     * @return \BaseBundle\Entity\PerPersona 
     */
    public function getConPersonaFk()
    {
        return $this->conPersonaFk;
    }
}
