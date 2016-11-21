<?php

namespace BaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CliUsuario
 *
 * @ORM\Table(name="cli_usuario", indexes={@ORM\Index(name="usu_persona_fk", columns={"usu_persona_fk"}), @ORM\Index(name="usu_tipo_fk", columns={"usu_tipo_fk"})})
 * @ORM\Entity
 */
class CliUsuario
{
    /**
     * @var integer
     *
     * @ORM\Column(name="usu_id_pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $usuIdPk;

    /**
     * @var string
     *
     * @ORM\Column(name="usu_correo", type="string", length=100, nullable=true)
     */
    private $usuCorreo;

    /**
     * @var integer
     *
     * @ORM\Column(name="usu_clave", type="integer", nullable=true)
     */
    private $usuClave;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="usu_fecha_registro", type="datetime", nullable=true)
     */
    private $usuFechaRegistro;

    /**
     * @var \PerPersona
     *
     * @ORM\ManyToOne(targetEntity="PerPersona")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="usu_persona_fk", referencedColumnName="per_id_pk")
     * })
     */
    private $usuPersonaFk;

    /**
     * @var \CliUsuarioTipo
     *
     * @ORM\ManyToOne(targetEntity="CliUsuarioTipo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="usu_tipo_fk", referencedColumnName="uti_id_pk")
     * })
     */
    private $usuTipoFk;



    /**
     * Get usuIdPk
     *
     * @return integer 
     */
    public function getUsuIdPk()
    {
        return $this->usuIdPk;
    }

    /**
     * Set usuCorreo
     *
     * @param string $usuCorreo
     * @return CliUsuario
     */
    public function setUsuCorreo($usuCorreo)
    {
        $this->usuCorreo = $usuCorreo;

        return $this;
    }

    /**
     * Get usuCorreo
     *
     * @return string 
     */
    public function getUsuCorreo()
    {
        return $this->usuCorreo;
    }

    /**
     * Set usuClave
     *
     * @param integer $usuClave
     * @return CliUsuario
     */
    public function setUsuClave($usuClave)
    {
        $this->usuClave = $usuClave;

        return $this;
    }

    /**
     * Get usuClave
     *
     * @return integer 
     */
    public function getUsuClave()
    {
        return $this->usuClave;
    }

    /**
     * Set usuFechaRegistro
     *
     * @param \DateTime $usuFechaRegistro
     * @return CliUsuario
     */
    public function setUsuFechaRegistro($usuFechaRegistro)
    {
        $this->usuFechaRegistro = $usuFechaRegistro;

        return $this;
    }

    /**
     * Get usuFechaRegistro
     *
     * @return \DateTime 
     */
    public function getUsuFechaRegistro()
    {
        return $this->usuFechaRegistro;
    }

    /**
     * Set usuPersonaFk
     *
     * @param \BaseBundle\Entity\PerPersona $usuPersonaFk
     * @return CliUsuario
     */
    public function setUsuPersonaFk(\BaseBundle\Entity\PerPersona $usuPersonaFk = null)
    {
        $this->usuPersonaFk = $usuPersonaFk;

        return $this;
    }

    /**
     * Get usuPersonaFk
     *
     * @return \BaseBundle\Entity\PerPersona 
     */
    public function getUsuPersonaFk()
    {
        return $this->usuPersonaFk;
    }

    /**
     * Set usuTipoFk
     *
     * @param \BaseBundle\Entity\CliUsuarioTipo $usuTipoFk
     * @return CliUsuario
     */
    public function setUsuTipoFk(\BaseBundle\Entity\CliUsuarioTipo $usuTipoFk = null)
    {
        $this->usuTipoFk = $usuTipoFk;

        return $this;
    }

    /**
     * Get usuTipoFk
     *
     * @return \BaseBundle\Entity\CliUsuarioTipo 
     */
    public function getUsuTipoFk()
    {
        return $this->usuTipoFk;
    }
}
