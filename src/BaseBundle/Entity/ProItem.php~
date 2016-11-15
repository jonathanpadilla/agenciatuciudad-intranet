<?php

namespace BaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProItem
 *
 * @ORM\Table(name="pro_item", indexes={@ORM\Index(name="ite_producto_fk", columns={"ite_producto_fk"}), @ORM\Index(name="ite_usuario_fk", columns={"ite_usuario_fk"})})
 * @ORM\Entity
 */
class ProItem
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ite_id_pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iteIdPk;

    /**
     * @var string
     *
     * @ORM\Column(name="ite_nombre", type="string", length=50, nullable=true)
     */
    private $iteNombre;

    /**
     * @var integer
     *
     * @ORM\Column(name="ite_valor", type="integer", nullable=true)
     */
    private $iteValor;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ite_fecha_registro", type="datetime", nullable=true)
     */
    private $iteFechaRegistro;

    /**
     * @var string
     *
     * @ORM\Column(name="ite_comentario", type="text", length=65535, nullable=true)
     */
    private $iteComentario;

    /**
     * @var \ProProducto
     *
     * @ORM\ManyToOne(targetEntity="ProProducto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ite_producto_fk", referencedColumnName="pro_id_pk")
     * })
     */
    private $iteProductoFk;

    /**
     * @var \AgeUsuario
     *
     * @ORM\ManyToOne(targetEntity="AgeUsuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ite_usuario_fk", referencedColumnName="usu_id_pk")
     * })
     */
    private $iteUsuarioFk;



    /**
     * Get iteIdPk
     *
     * @return integer 
     */
    public function getIteIdPk()
    {
        return $this->iteIdPk;
    }

    /**
     * Set iteNombre
     *
     * @param string $iteNombre
     * @return ProItem
     */
    public function setIteNombre($iteNombre)
    {
        $this->iteNombre = $iteNombre;

        return $this;
    }

    /**
     * Get iteNombre
     *
     * @return string 
     */
    public function getIteNombre()
    {
        return $this->iteNombre;
    }

    /**
     * Set iteValor
     *
     * @param integer $iteValor
     * @return ProItem
     */
    public function setIteValor($iteValor)
    {
        $this->iteValor = $iteValor;

        return $this;
    }

    /**
     * Get iteValor
     *
     * @return integer 
     */
    public function getIteValor()
    {
        return $this->iteValor;
    }

    /**
     * Set iteFechaRegistro
     *
     * @param \DateTime $iteFechaRegistro
     * @return ProItem
     */
    public function setIteFechaRegistro($iteFechaRegistro)
    {
        $this->iteFechaRegistro = $iteFechaRegistro;

        return $this;
    }

    /**
     * Get iteFechaRegistro
     *
     * @return \DateTime 
     */
    public function getIteFechaRegistro()
    {
        return $this->iteFechaRegistro;
    }

    /**
     * Set iteComentario
     *
     * @param string $iteComentario
     * @return ProItem
     */
    public function setIteComentario($iteComentario)
    {
        $this->iteComentario = $iteComentario;

        return $this;
    }

    /**
     * Get iteComentario
     *
     * @return string 
     */
    public function getIteComentario()
    {
        return $this->iteComentario;
    }

    /**
     * Set iteProductoFk
     *
     * @param \BaseBundle\Entity\ProProducto $iteProductoFk
     * @return ProItem
     */
    public function setIteProductoFk(\BaseBundle\Entity\ProProducto $iteProductoFk = null)
    {
        $this->iteProductoFk = $iteProductoFk;

        return $this;
    }

    /**
     * Get iteProductoFk
     *
     * @return \BaseBundle\Entity\ProProducto 
     */
    public function getIteProductoFk()
    {
        return $this->iteProductoFk;
    }

    /**
     * Set iteUsuarioFk
     *
     * @param \BaseBundle\Entity\AgeUsuario $iteUsuarioFk
     * @return ProItem
     */
    public function setIteUsuarioFk(\BaseBundle\Entity\AgeUsuario $iteUsuarioFk = null)
    {
        $this->iteUsuarioFk = $iteUsuarioFk;

        return $this;
    }

    /**
     * Get iteUsuarioFk
     *
     * @return \BaseBundle\Entity\AgeUsuario 
     */
    public function getIteUsuarioFk()
    {
        return $this->iteUsuarioFk;
    }
}
