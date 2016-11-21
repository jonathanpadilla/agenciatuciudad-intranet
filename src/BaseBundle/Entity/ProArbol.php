<?php

namespace BaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProArbol
 *
 * @ORM\Table(name="pro_arbol", indexes={@ORM\Index(name="arb_producto_fk", columns={"arb_producto_fk"}), @ORM\Index(name="arb_item_fk", columns={"arb_item_fk"}), @ORM\Index(name="arb_padre_fk", columns={"arb_padre_fk"})})
 * @ORM\Entity
 */
class ProArbol
{
    /**
     * @var integer
     *
     * @ORM\Column(name="arb_id_pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $arbIdPk;

    /**
     * @var integer
     *
     * @ORM\Column(name="arb_visible", type="integer", nullable=true)
     */
    private $arbVisible;

    /**
     * @var \ProProducto
     *
     * @ORM\ManyToOne(targetEntity="ProProducto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="arb_producto_fk", referencedColumnName="pro_id_pk")
     * })
     */
    private $arbProductoFk;

    /**
     * @var \ProItem
     *
     * @ORM\ManyToOne(targetEntity="ProItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="arb_item_fk", referencedColumnName="ite_id_pk")
     * })
     */
    private $arbItemFk;

    /**
     * @var \ProArbol
     *
     * @ORM\ManyToOne(targetEntity="ProArbol")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="arb_padre_fk", referencedColumnName="arb_id_pk")
     * })
     */
    private $arbPadreFk;



    /**
     * Get arbIdPk
     *
     * @return integer 
     */
    public function getArbIdPk()
    {
        return $this->arbIdPk;
    }

    /**
     * Set arbVisible
     *
     * @param integer $arbVisible
     * @return ProArbol
     */
    public function setArbVisible($arbVisible)
    {
        $this->arbVisible = $arbVisible;

        return $this;
    }

    /**
     * Get arbVisible
     *
     * @return integer 
     */
    public function getArbVisible()
    {
        return $this->arbVisible;
    }

    /**
     * Set arbProductoFk
     *
     * @param \BaseBundle\Entity\ProProducto $arbProductoFk
     * @return ProArbol
     */
    public function setArbProductoFk(\BaseBundle\Entity\ProProducto $arbProductoFk = null)
    {
        $this->arbProductoFk = $arbProductoFk;

        return $this;
    }

    /**
     * Get arbProductoFk
     *
     * @return \BaseBundle\Entity\ProProducto 
     */
    public function getArbProductoFk()
    {
        return $this->arbProductoFk;
    }

    /**
     * Set arbItemFk
     *
     * @param \BaseBundle\Entity\ProItem $arbItemFk
     * @return ProArbol
     */
    public function setArbItemFk(\BaseBundle\Entity\ProItem $arbItemFk = null)
    {
        $this->arbItemFk = $arbItemFk;

        return $this;
    }

    /**
     * Get arbItemFk
     *
     * @return \BaseBundle\Entity\ProItem 
     */
    public function getArbItemFk()
    {
        return $this->arbItemFk;
    }

    /**
     * Set arbPadreFk
     *
     * @param \BaseBundle\Entity\ProArbol $arbPadreFk
     * @return ProArbol
     */
    public function setArbPadreFk(\BaseBundle\Entity\ProArbol $arbPadreFk = null)
    {
        $this->arbPadreFk = $arbPadreFk;

        return $this;
    }

    /**
     * Get arbPadreFk
     *
     * @return \BaseBundle\Entity\ProArbol 
     */
    public function getArbPadreFk()
    {
        return $this->arbPadreFk;
    }
}
