<?php

namespace BaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PerLog
 *
 * @ORM\Table(name="per_log", indexes={@ORM\Index(name="log_persona_pk", columns={"log_persona_pk"})})
 * @ORM\Entity
 */
class PerLog
{
    /**
     * @var integer
     *
     * @ORM\Column(name="log_id_pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $logIdPk;

    /**
     * @var integer
     *
     * @ORM\Column(name="log_entidad_nfk", type="integer", nullable=true)
     */
    private $logEntidadNfk;

    /**
     * @var integer
     *
     * @ORM\Column(name="log_tipo", type="integer", nullable=true)
     */
    private $logTipo;

    /**
     * @var string
     *
     * @ORM\Column(name="log_detalle", type="text", length=65535, nullable=true)
     */
    private $logDetalle;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="log_fecha_registro", type="datetime", nullable=true)
     */
    private $logFechaRegistro;

    /**
     * @var \PerPersona
     *
     * @ORM\ManyToOne(targetEntity="PerPersona")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="log_persona_pk", referencedColumnName="per_id_pk")
     * })
     */
    private $logPersonaPk;



    /**
     * Get logIdPk
     *
     * @return integer 
     */
    public function getLogIdPk()
    {
        return $this->logIdPk;
    }

    /**
     * Set logEntidadNfk
     *
     * @param integer $logEntidadNfk
     * @return PerLog
     */
    public function setLogEntidadNfk($logEntidadNfk)
    {
        $this->logEntidadNfk = $logEntidadNfk;

        return $this;
    }

    /**
     * Get logEntidadNfk
     *
     * @return integer 
     */
    public function getLogEntidadNfk()
    {
        return $this->logEntidadNfk;
    }

    /**
     * Set logTipo
     *
     * @param integer $logTipo
     * @return PerLog
     */
    public function setLogTipo($logTipo)
    {
        $this->logTipo = $logTipo;

        return $this;
    }

    /**
     * Get logTipo
     *
     * @return integer 
     */
    public function getLogTipo()
    {
        return $this->logTipo;
    }

    /**
     * Set logDetalle
     *
     * @param string $logDetalle
     * @return PerLog
     */
    public function setLogDetalle($logDetalle)
    {
        $this->logDetalle = $logDetalle;

        return $this;
    }

    /**
     * Get logDetalle
     *
     * @return string 
     */
    public function getLogDetalle()
    {
        return $this->logDetalle;
    }

    /**
     * Set logFechaRegistro
     *
     * @param \DateTime $logFechaRegistro
     * @return PerLog
     */
    public function setLogFechaRegistro($logFechaRegistro)
    {
        $this->logFechaRegistro = $logFechaRegistro;

        return $this;
    }

    /**
     * Get logFechaRegistro
     *
     * @return \DateTime 
     */
    public function getLogFechaRegistro()
    {
        return $this->logFechaRegistro;
    }

    /**
     * Set logPersonaPk
     *
     * @param \BaseBundle\Entity\PerPersona $logPersonaPk
     * @return PerLog
     */
    public function setLogPersonaPk(\BaseBundle\Entity\PerPersona $logPersonaPk = null)
    {
        $this->logPersonaPk = $logPersonaPk;

        return $this;
    }

    /**
     * Get logPersonaPk
     *
     * @return \BaseBundle\Entity\PerPersona 
     */
    public function getLogPersonaPk()
    {
        return $this->logPersonaPk;
    }
}
