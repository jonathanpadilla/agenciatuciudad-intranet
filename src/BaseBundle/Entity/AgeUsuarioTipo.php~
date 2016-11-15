<?php

namespace BaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AgeUsuarioTipo
 *
 * @ORM\Table(name="age_usuario_tipo")
 * @ORM\Entity
 */
class AgeUsuarioTipo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="uti_id_pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $utiIdPk;

    /**
     * @var string
     *
     * @ORM\Column(name="uti_nombre", type="string", length=50, nullable=true)
     */
    private $utiNombre;

    /**
     * @var boolean
     *
     * @ORM\Column(name="uti_habilitado", type="boolean", nullable=true)
     */
    private $utiHabilitado;



    /**
     * Get utiIdPk
     *
     * @return integer 
     */
    public function getUtiIdPk()
    {
        return $this->utiIdPk;
    }

    /**
     * Set utiNombre
     *
     * @param string $utiNombre
     * @return AgeUsuarioTipo
     */
    public function setUtiNombre($utiNombre)
    {
        $this->utiNombre = $utiNombre;

        return $this;
    }

    /**
     * Get utiNombre
     *
     * @return string 
     */
    public function getUtiNombre()
    {
        return $this->utiNombre;
    }

    /**
     * Set utiHabilitado
     *
     * @param boolean $utiHabilitado
     * @return AgeUsuarioTipo
     */
    public function setUtiHabilitado($utiHabilitado)
    {
        $this->utiHabilitado = $utiHabilitado;

        return $this;
    }

    /**
     * Get utiHabilitado
     *
     * @return boolean 
     */
    public function getUtiHabilitado()
    {
        return $this->utiHabilitado;
    }
}
