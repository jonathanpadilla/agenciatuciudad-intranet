<?php

namespace BaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AgeUsuario
 *
 * @ORM\Table(name="age_usuario", indexes={@ORM\Index(name="usu_tipo_usuario_fk", columns={"usu_tipo_usuario_fk"}), @ORM\Index(name="usu_persona_fk", columns={"usu_persona_fk"})})
 * @ORM\Entity
 */
class AgeUsuario
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
     * @ORM\Column(name="usu_correo", type="string", length=150, nullable=true)
     */
    private $usuCorreo;

    /**
     * @var string
     *
     * @ORM\Column(name="usu_clave", type="string", length=150, nullable=true)
     */
    private $usuClave;

    /**
     * @var boolean
     *
     * @ORM\Column(name="usu_habilitado", type="boolean", nullable=true)
     */
    private $usuHabilitado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="usu_fecha_registro", type="datetime", nullable=true)
     */
    private $usuFechaRegistro;

    /**
     * @var string
     *
     * @ORM\Column(name="usu_comentario", type="text", length=65535, nullable=true)
     */
    private $usuComentario;

    /**
     * @var \AgeUsuarioTipo
     *
     * @ORM\ManyToOne(targetEntity="AgeUsuarioTipo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="usu_tipo_usuario_fk", referencedColumnName="uti_id_pk")
     * })
     */
    private $usuTipoUsuarioFk;

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
     * @return AgeUsuario
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
     * @param string $usuClave
     * @return AgeUsuario
     */
    public function setUsuClave($usuClave)
    {
        $this->usuClave = $usuClave;

        return $this;
    }

    /**
     * Get usuClave
     *
     * @return string 
     */
    public function getUsuClave()
    {
        return $this->usuClave;
    }

    /**
     * Set usuHabilitado
     *
     * @param boolean $usuHabilitado
     * @return AgeUsuario
     */
    public function setUsuHabilitado($usuHabilitado)
    {
        $this->usuHabilitado = $usuHabilitado;

        return $this;
    }

    /**
     * Get usuHabilitado
     *
     * @return boolean 
     */
    public function getUsuHabilitado()
    {
        return $this->usuHabilitado;
    }

    /**
     * Set usuFechaRegistro
     *
     * @param \DateTime $usuFechaRegistro
     * @return AgeUsuario
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
     * Set usuComentario
     *
     * @param string $usuComentario
     * @return AgeUsuario
     */
    public function setUsuComentario($usuComentario)
    {
        $this->usuComentario = $usuComentario;

        return $this;
    }

    /**
     * Get usuComentario
     *
     * @return string 
     */
    public function getUsuComentario()
    {
        return $this->usuComentario;
    }

    /**
     * Set usuTipoUsuarioFk
     *
     * @param \BaseBundle\Entity\AgeUsuarioTipo $usuTipoUsuarioFk
     * @return AgeUsuario
     */
    public function setUsuTipoUsuarioFk(\BaseBundle\Entity\AgeUsuarioTipo $usuTipoUsuarioFk = null)
    {
        $this->usuTipoUsuarioFk = $usuTipoUsuarioFk;

        return $this;
    }

    /**
     * Get usuTipoUsuarioFk
     *
     * @return \BaseBundle\Entity\AgeUsuarioTipo 
     */
    public function getUsuTipoUsuarioFk()
    {
        return $this->usuTipoUsuarioFk;
    }

    /**
     * Set usuPersonaFk
     *
     * @param \BaseBundle\Entity\PerPersona $usuPersonaFk
     * @return AgeUsuario
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
}
