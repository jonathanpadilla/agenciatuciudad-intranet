<?php

namespace BaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrgOrganizacion
 *
 * @ORM\Table(name="org_organizacion", indexes={@ORM\Index(name="org_propietario_fk", columns={"org_propietario_fk"})})
 * @ORM\Entity
 */
class OrgOrganizacion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="org_id_pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $orgIdPk;

    /**
     * @var string
     *
     * @ORM\Column(name="org_nombre", type="string", length=100, nullable=true)
     */
    private $orgNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="org_giro", type="string", length=100, nullable=true)
     */
    private $orgGiro;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="org_fecha_registro", type="datetime", nullable=true)
     */
    private $orgFechaRegistro;

    /**
     * @var string
     *
     * @ORM\Column(name="org_comentario", type="text", length=65535, nullable=true)
     */
    private $orgComentario;

    /**
     * @var \PerPersona
     *
     * @ORM\ManyToOne(targetEntity="PerPersona")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="org_propietario_fk", referencedColumnName="per_id_pk")
     * })
     */
    private $orgPropietarioFk;



    /**
     * Get orgIdPk
     *
     * @return integer 
     */
    public function getOrgIdPk()
    {
        return $this->orgIdPk;
    }

    /**
     * Set orgNombre
     *
     * @param string $orgNombre
     * @return OrgOrganizacion
     */
    public function setOrgNombre($orgNombre)
    {
        $this->orgNombre = $orgNombre;

        return $this;
    }

    /**
     * Get orgNombre
     *
     * @return string 
     */
    public function getOrgNombre()
    {
        return $this->orgNombre;
    }

    /**
     * Set orgGiro
     *
     * @param string $orgGiro
     * @return OrgOrganizacion
     */
    public function setOrgGiro($orgGiro)
    {
        $this->orgGiro = $orgGiro;

        return $this;
    }

    /**
     * Get orgGiro
     *
     * @return string 
     */
    public function getOrgGiro()
    {
        return $this->orgGiro;
    }

    /**
     * Set orgFechaRegistro
     *
     * @param \DateTime $orgFechaRegistro
     * @return OrgOrganizacion
     */
    public function setOrgFechaRegistro($orgFechaRegistro)
    {
        $this->orgFechaRegistro = $orgFechaRegistro;

        return $this;
    }

    /**
     * Get orgFechaRegistro
     *
     * @return \DateTime 
     */
    public function getOrgFechaRegistro()
    {
        return $this->orgFechaRegistro;
    }

    /**
     * Set orgComentario
     *
     * @param string $orgComentario
     * @return OrgOrganizacion
     */
    public function setOrgComentario($orgComentario)
    {
        $this->orgComentario = $orgComentario;

        return $this;
    }

    /**
     * Get orgComentario
     *
     * @return string 
     */
    public function getOrgComentario()
    {
        return $this->orgComentario;
    }

    /**
     * Set orgPropietarioFk
     *
     * @param \BaseBundle\Entity\PerPersona $orgPropietarioFk
     * @return OrgOrganizacion
     */
    public function setOrgPropietarioFk(\BaseBundle\Entity\PerPersona $orgPropietarioFk = null)
    {
        $this->orgPropietarioFk = $orgPropietarioFk;

        return $this;
    }

    /**
     * Get orgPropietarioFk
     *
     * @return \BaseBundle\Entity\PerPersona 
     */
    public function getOrgPropietarioFk()
    {
        return $this->orgPropietarioFk;
    }
}
