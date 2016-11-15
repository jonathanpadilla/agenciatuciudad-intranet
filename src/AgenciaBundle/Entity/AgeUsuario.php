<?php

namespace AgenciaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AgeUsuario
 *
 * @ORM\Table(name="age_usuario", indexes={@ORM\Index(name="usu_tipo_usuario_fk", columns={"usu_tipo_usuario_fk"})})
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
     * @var integer
     *
     * @ORM\Column(name="usu_persona_fk", type="integer", nullable=true)
     */
    private $usuPersonaFk;

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
     * Get usuIdPk
     *
     * @return integer 
     */
    public function getUsuIdPk()
    {
        return $this->usuIdPk;
    }

    /**
     * Set usuPersonaFk
     *
     * @param integer $usuPersonaFk
     * @return AgeUsuario
     */
    public function setUsuPersonaFk($usuPersonaFk)
    {
        $this->usuPersonaFk = $usuPersonaFk;

        return $this;
    }

    /**
     * Get usuPersonaFk
     *
     * @return integer 
     */
    public function getUsuPersonaFk()
    {
        return $this->usuPersonaFk;
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
     * @param \AgenciaBundle\Entity\AgeUsuarioTipo $usuTipoUsuarioFk
     * @return AgeUsuario
     */
    public function setUsuTipoUsuarioFk(\AgenciaBundle\Entity\AgeUsuarioTipo $usuTipoUsuarioFk = null)
    {
        $this->usuTipoUsuarioFk = $usuTipoUsuarioFk;

        return $this;
    }

    /**
     * Get usuTipoUsuarioFk
     *
     * @return \AgenciaBundle\Entity\AgeUsuarioTipo 
     */
    public function getUsuTipoUsuarioFk()
    {
        return $this->usuTipoUsuarioFk;
    }
}
