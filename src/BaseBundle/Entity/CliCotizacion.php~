<?php

namespace BaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CliCotizacion
 *
 * @ORM\Table(name="cli_cotizacion", indexes={@ORM\Index(name="cot_usuario_fk", columns={"cot_usuario_fk"})})
 * @ORM\Entity
 */
class CliCotizacion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="cot_id_pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cotIdPk;

    /**
     * @var string
     *
     * @ORM\Column(name="cot_detalle", type="text", length=65535, nullable=true)
     */
    private $cotDetalle;

    /**
     * @var string
     *
     * @ORM\Column(name="cot_observacion", type="text", length=65535, nullable=true)
     */
    private $cotObservacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="cot_estado", type="integer", nullable=true)
     */
    private $cotEstado;

    /**
     * @var string
     *
     * @ORM\Column(name="cot_comentario", type="text", length=65535, nullable=true)
     */
    private $cotComentario;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cot_fecha_registro", type="datetime", nullable=true)
     */
    private $cotFechaRegistro;

    /**
     * @var \CliUsuario
     *
     * @ORM\ManyToOne(targetEntity="CliUsuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cot_usuario_fk", referencedColumnName="usu_id_pk")
     * })
     */
    private $cotUsuarioFk;



    /**
     * Get cotIdPk
     *
     * @return integer 
     */
    public function getCotIdPk()
    {
        return $this->cotIdPk;
    }

    /**
     * Set cotDetalle
     *
     * @param string $cotDetalle
     * @return CliCotizacion
     */
    public function setCotDetalle($cotDetalle)
    {
        $this->cotDetalle = $cotDetalle;

        return $this;
    }

    /**
     * Get cotDetalle
     *
     * @return string 
     */
    public function getCotDetalle()
    {
        return $this->cotDetalle;
    }

    /**
     * Set cotObservacion
     *
     * @param string $cotObservacion
     * @return CliCotizacion
     */
    public function setCotObservacion($cotObservacion)
    {
        $this->cotObservacion = $cotObservacion;

        return $this;
    }

    /**
     * Get cotObservacion
     *
     * @return string 
     */
    public function getCotObservacion()
    {
        return $this->cotObservacion;
    }

    /**
     * Set cotEstado
     *
     * @param integer $cotEstado
     * @return CliCotizacion
     */
    public function setCotEstado($cotEstado)
    {
        $this->cotEstado = $cotEstado;

        return $this;
    }

    /**
     * Get cotEstado
     *
     * @return integer 
     */
    public function getCotEstado()
    {
        return $this->cotEstado;
    }

    /**
     * Set cotComentario
     *
     * @param string $cotComentario
     * @return CliCotizacion
     */
    public function setCotComentario($cotComentario)
    {
        $this->cotComentario = $cotComentario;

        return $this;
    }

    /**
     * Get cotComentario
     *
     * @return string 
     */
    public function getCotComentario()
    {
        return $this->cotComentario;
    }

    /**
     * Set cotFechaRegistro
     *
     * @param \DateTime $cotFechaRegistro
     * @return CliCotizacion
     */
    public function setCotFechaRegistro($cotFechaRegistro)
    {
        $this->cotFechaRegistro = $cotFechaRegistro;

        return $this;
    }

    /**
     * Get cotFechaRegistro
     *
     * @return \DateTime 
     */
    public function getCotFechaRegistro()
    {
        return $this->cotFechaRegistro;
    }

    /**
     * Set cotUsuarioFk
     *
     * @param \BaseBundle\Entity\CliUsuario $cotUsuarioFk
     * @return CliCotizacion
     */
    public function setCotUsuarioFk(\BaseBundle\Entity\CliUsuario $cotUsuarioFk = null)
    {
        $this->cotUsuarioFk = $cotUsuarioFk;

        return $this;
    }

    /**
     * Get cotUsuarioFk
     *
     * @return \BaseBundle\Entity\CliUsuario 
     */
    public function getCotUsuarioFk()
    {
        return $this->cotUsuarioFk;
    }
}
