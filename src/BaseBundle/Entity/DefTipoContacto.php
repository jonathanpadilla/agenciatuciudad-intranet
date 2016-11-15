<?php

namespace BaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DefTipoContacto
 *
 * @ORM\Table(name="def_tipo_contacto")
 * @ORM\Entity
 */
class DefTipoContacto
{
    /**
     * @var integer
     *
     * @ORM\Column(name="cti_id_pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ctiIdPk;

    /**
     * @var string
     *
     * @ORM\Column(name="cti_nombre", type="string", length=30, nullable=true)
     */
    private $ctiNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="cti_texto_defecto", type="string", length=100, nullable=true)
     */
    private $ctiTextoDefecto;

    /**
     * @var string
     *
     * @ORM\Column(name="cti_url", type="string", length=100, nullable=true)
     */
    private $ctiUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="cti_class", type="string", length=20, nullable=true)
     */
    private $ctiClass;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cti_fecha_registro", type="datetime", nullable=true)
     */
    private $ctiFechaRegistro;



    /**
     * Get ctiIdPk
     *
     * @return integer 
     */
    public function getCtiIdPk()
    {
        return $this->ctiIdPk;
    }

    /**
     * Set ctiNombre
     *
     * @param string $ctiNombre
     * @return DefTipoContacto
     */
    public function setCtiNombre($ctiNombre)
    {
        $this->ctiNombre = $ctiNombre;

        return $this;
    }

    /**
     * Get ctiNombre
     *
     * @return string 
     */
    public function getCtiNombre()
    {
        return $this->ctiNombre;
    }

    /**
     * Set ctiTextoDefecto
     *
     * @param string $ctiTextoDefecto
     * @return DefTipoContacto
     */
    public function setCtiTextoDefecto($ctiTextoDefecto)
    {
        $this->ctiTextoDefecto = $ctiTextoDefecto;

        return $this;
    }

    /**
     * Get ctiTextoDefecto
     *
     * @return string 
     */
    public function getCtiTextoDefecto()
    {
        return $this->ctiTextoDefecto;
    }

    /**
     * Set ctiUrl
     *
     * @param string $ctiUrl
     * @return DefTipoContacto
     */
    public function setCtiUrl($ctiUrl)
    {
        $this->ctiUrl = $ctiUrl;

        return $this;
    }

    /**
     * Get ctiUrl
     *
     * @return string 
     */
    public function getCtiUrl()
    {
        return $this->ctiUrl;
    }

    /**
     * Set ctiClass
     *
     * @param string $ctiClass
     * @return DefTipoContacto
     */
    public function setCtiClass($ctiClass)
    {
        $this->ctiClass = $ctiClass;

        return $this;
    }

    /**
     * Get ctiClass
     *
     * @return string 
     */
    public function getCtiClass()
    {
        return $this->ctiClass;
    }

    /**
     * Set ctiFechaRegistro
     *
     * @param \DateTime $ctiFechaRegistro
     * @return DefTipoContacto
     */
    public function setCtiFechaRegistro($ctiFechaRegistro)
    {
        $this->ctiFechaRegistro = $ctiFechaRegistro;

        return $this;
    }

    /**
     * Get ctiFechaRegistro
     *
     * @return \DateTime 
     */
    public function getCtiFechaRegistro()
    {
        return $this->ctiFechaRegistro;
    }
}
