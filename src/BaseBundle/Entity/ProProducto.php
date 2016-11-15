<?php

namespace BaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProProducto
 *
 * @ORM\Table(name="pro_producto", indexes={@ORM\Index(name="pro_usuario_fk", columns={"pro_usuario_fk"})})
 * @ORM\Entity
 */
class ProProducto
{
    /**
     * @var integer
     *
     * @ORM\Column(name="pro_id_pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $proIdPk;

    /**
     * @var string
     *
     * @ORM\Column(name="pro_nombre", type="string", length=100, nullable=true)
     */
    private $proNombre;

    /**
     * @var integer
     *
     * @ORM\Column(name="pro_valor", type="integer", nullable=true)
     */
    private $proValor;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pro_fecha_registro", type="datetime", nullable=true)
     */
    private $proFechaRegistro;

    /**
     * @var string
     *
     * @ORM\Column(name="pro_comentario", type="text", length=65535, nullable=true)
     */
    private $proComentario;

    /**
     * @var \AgeUsuario
     *
     * @ORM\ManyToOne(targetEntity="AgeUsuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pro_usuario_fk", referencedColumnName="usu_id_pk")
     * })
     */
    private $proUsuarioFk;



    /**
     * Get proIdPk
     *
     * @return integer 
     */
    public function getProIdPk()
    {
        return $this->proIdPk;
    }

    /**
     * Set proNombre
     *
     * @param string $proNombre
     * @return ProProducto
     */
    public function setProNombre($proNombre)
    {
        $this->proNombre = $proNombre;

        return $this;
    }

    /**
     * Get proNombre
     *
     * @return string 
     */
    public function getProNombre()
    {
        return $this->proNombre;
    }

    /**
     * Set proValor
     *
     * @param integer $proValor
     * @return ProProducto
     */
    public function setProValor($proValor)
    {
        $this->proValor = $proValor;

        return $this;
    }

    /**
     * Get proValor
     *
     * @return integer 
     */
    public function getProValor()
    {
        return $this->proValor;
    }

    /**
     * Set proFechaRegistro
     *
     * @param \DateTime $proFechaRegistro
     * @return ProProducto
     */
    public function setProFechaRegistro($proFechaRegistro)
    {
        $this->proFechaRegistro = $proFechaRegistro;

        return $this;
    }

    /**
     * Get proFechaRegistro
     *
     * @return \DateTime 
     */
    public function getProFechaRegistro()
    {
        return $this->proFechaRegistro;
    }

    /**
     * Set proComentario
     *
     * @param string $proComentario
     * @return ProProducto
     */
    public function setProComentario($proComentario)
    {
        $this->proComentario = $proComentario;

        return $this;
    }

    /**
     * Get proComentario
     *
     * @return string 
     */
    public function getProComentario()
    {
        return $this->proComentario;
    }

    /**
     * Set proUsuarioFk
     *
     * @param \BaseBundle\Entity\AgeUsuario $proUsuarioFk
     * @return ProProducto
     */
    public function setProUsuarioFk(\BaseBundle\Entity\AgeUsuario $proUsuarioFk = null)
    {
        $this->proUsuarioFk = $proUsuarioFk;

        return $this;
    }

    /**
     * Get proUsuarioFk
     *
     * @return \BaseBundle\Entity\AgeUsuario 
     */
    public function getProUsuarioFk()
    {
        return $this->proUsuarioFk;
    }
}
