<?php

namespace BaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrgOrganizacionNnPersona
 *
 * @ORM\Table(name="org_organizacion_nn_persona", indexes={@ORM\Index(name="onnp_organizacion_fk", columns={"onnp_organizacion_fk"}), @ORM\Index(name="onnp_persona_fk", columns={"onnp_persona_fk"})})
 * @ORM\Entity
 */
class OrgOrganizacionNnPersona
{
    /**
     * @var integer
     *
     * @ORM\Column(name="onnp_id_pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $onnpIdPk;

    /**
     * @var boolean
     *
     * @ORM\Column(name="onnp_vinculo", type="boolean", nullable=true)
     */
    private $onnpVinculo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="onnp_fecha_registro", type="datetime", nullable=true)
     */
    private $onnpFechaRegistro;

    /**
     * @var \OrgOrganizacion
     *
     * @ORM\ManyToOne(targetEntity="OrgOrganizacion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="onnp_organizacion_fk", referencedColumnName="org_id_pk")
     * })
     */
    private $onnpOrganizacionFk;

    /**
     * @var \PerPersona
     *
     * @ORM\ManyToOne(targetEntity="PerPersona")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="onnp_persona_fk", referencedColumnName="per_id_pk")
     * })
     */
    private $onnpPersonaFk;



    /**
     * Get onnpIdPk
     *
     * @return integer 
     */
    public function getOnnpIdPk()
    {
        return $this->onnpIdPk;
    }

    /**
     * Set onnpVinculo
     *
     * @param boolean $onnpVinculo
     * @return OrgOrganizacionNnPersona
     */
    public function setOnnpVinculo($onnpVinculo)
    {
        $this->onnpVinculo = $onnpVinculo;

        return $this;
    }

    /**
     * Get onnpVinculo
     *
     * @return boolean 
     */
    public function getOnnpVinculo()
    {
        return $this->onnpVinculo;
    }

    /**
     * Set onnpFechaRegistro
     *
     * @param \DateTime $onnpFechaRegistro
     * @return OrgOrganizacionNnPersona
     */
    public function setOnnpFechaRegistro($onnpFechaRegistro)
    {
        $this->onnpFechaRegistro = $onnpFechaRegistro;

        return $this;
    }

    /**
     * Get onnpFechaRegistro
     *
     * @return \DateTime 
     */
    public function getOnnpFechaRegistro()
    {
        return $this->onnpFechaRegistro;
    }

    /**
     * Set onnpOrganizacionFk
     *
     * @param \BaseBundle\Entity\OrgOrganizacion $onnpOrganizacionFk
     * @return OrgOrganizacionNnPersona
     */
    public function setOnnpOrganizacionFk(\BaseBundle\Entity\OrgOrganizacion $onnpOrganizacionFk = null)
    {
        $this->onnpOrganizacionFk = $onnpOrganizacionFk;

        return $this;
    }

    /**
     * Get onnpOrganizacionFk
     *
     * @return \BaseBundle\Entity\OrgOrganizacion 
     */
    public function getOnnpOrganizacionFk()
    {
        return $this->onnpOrganizacionFk;
    }

    /**
     * Set onnpPersonaFk
     *
     * @param \BaseBundle\Entity\PerPersona $onnpPersonaFk
     * @return OrgOrganizacionNnPersona
     */
    public function setOnnpPersonaFk(\BaseBundle\Entity\PerPersona $onnpPersonaFk = null)
    {
        $this->onnpPersonaFk = $onnpPersonaFk;

        return $this;
    }

    /**
     * Get onnpPersonaFk
     *
     * @return \BaseBundle\Entity\PerPersona 
     */
    public function getOnnpPersonaFk()
    {
        return $this->onnpPersonaFk;
    }
}
