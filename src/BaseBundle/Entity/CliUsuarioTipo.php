<?php

namespace BaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CliUsuarioTipo
 *
 * @ORM\Table(name="cli_usuario_tipo")
 * @ORM\Entity
 */
class CliUsuarioTipo
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
     * @var integer
     *
     * @ORM\Column(name="uti_activo", type="integer", nullable=true)
     */
    private $utiActivo;



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
     * @return CliUsuarioTipo
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
     * Set utiActivo
     *
     * @param integer $utiActivo
     * @return CliUsuarioTipo
     */
    public function setUtiActivo($utiActivo)
    {
        $this->utiActivo = $utiActivo;

        return $this;
    }

    /**
     * Get utiActivo
     *
     * @return integer 
     */
    public function getUtiActivo()
    {
        return $this->utiActivo;
    }
}
