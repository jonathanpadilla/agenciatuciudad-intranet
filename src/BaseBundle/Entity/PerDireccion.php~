<?php

namespace BaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PerDireccion
 *
 * @ORM\Table(name="per_direccion", indexes={@ORM\Index(name="dir_persona_fk", columns={"dir_persona_fk"}), @ORM\Index(name="dir_comuna_fk", columns={"dir_comuna_fk"})})
 * @ORM\Entity
 */
class PerDireccion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="dir_id_pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $dirIdPk;

    /**
     * @var string
     *
     * @ORM\Column(name="dir_villa", type="string", length=50, nullable=true)
     */
    private $dirVilla;

    /**
     * @var string
     *
     * @ORM\Column(name="dir_poblacion", type="string", length=50, nullable=true)
     */
    private $dirPoblacion;

    /**
     * @var string
     *
     * @ORM\Column(name="dir_calle", type="string", length=50, nullable=true)
     */
    private $dirCalle;

    /**
     * @var string
     *
     * @ORM\Column(name="dir_numero_casa", type="string", length=20, nullable=true)
     */
    private $dirNumeroCasa;

    /**
     * @var string
     *
     * @ORM\Column(name="dir_departamento", type="string", length=50, nullable=true)
     */
    private $dirDepartamento;

    /**
     * @var string
     *
     * @ORM\Column(name="dir_piso", type="string", length=20, nullable=true)
     */
    private $dirPiso;

    /**
     * @var string
     *
     * @ORM\Column(name="dir_numero_dep", type="string", length=20, nullable=true)
     */
    private $dirNumeroDep;

    /**
     * @var boolean
     *
     * @ORM\Column(name="dir_habilitado", type="boolean", nullable=true)
     */
    private $dirHabilitado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dir_fecha_registro", type="datetime", nullable=true)
     */
    private $dirFechaRegistro;

    /**
     * @var string
     *
     * @ORM\Column(name="dir_comentario", type="text", length=65535, nullable=true)
     */
    private $dirComentario;

    /**
     * @var \PerPersona
     *
     * @ORM\ManyToOne(targetEntity="PerPersona")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="dir_persona_fk", referencedColumnName="per_id_pk")
     * })
     */
    private $dirPersonaFk;

    /**
     * @var \DefComuna
     *
     * @ORM\ManyToOne(targetEntity="DefComuna")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="dir_comuna_fk", referencedColumnName="com_id_pk")
     * })
     */
    private $dirComunaFk;



    /**
     * Get dirIdPk
     *
     * @return integer 
     */
    public function getDirIdPk()
    {
        return $this->dirIdPk;
    }

    /**
     * Set dirVilla
     *
     * @param string $dirVilla
     * @return PerDireccion
     */
    public function setDirVilla($dirVilla)
    {
        $this->dirVilla = $dirVilla;

        return $this;
    }

    /**
     * Get dirVilla
     *
     * @return string 
     */
    public function getDirVilla()
    {
        return $this->dirVilla;
    }

    /**
     * Set dirPoblacion
     *
     * @param string $dirPoblacion
     * @return PerDireccion
     */
    public function setDirPoblacion($dirPoblacion)
    {
        $this->dirPoblacion = $dirPoblacion;

        return $this;
    }

    /**
     * Get dirPoblacion
     *
     * @return string 
     */
    public function getDirPoblacion()
    {
        return $this->dirPoblacion;
    }

    /**
     * Set dirCalle
     *
     * @param string $dirCalle
     * @return PerDireccion
     */
    public function setDirCalle($dirCalle)
    {
        $this->dirCalle = $dirCalle;

        return $this;
    }

    /**
     * Get dirCalle
     *
     * @return string 
     */
    public function getDirCalle()
    {
        return $this->dirCalle;
    }

    /**
     * Set dirNumeroCasa
     *
     * @param string $dirNumeroCasa
     * @return PerDireccion
     */
    public function setDirNumeroCasa($dirNumeroCasa)
    {
        $this->dirNumeroCasa = $dirNumeroCasa;

        return $this;
    }

    /**
     * Get dirNumeroCasa
     *
     * @return string 
     */
    public function getDirNumeroCasa()
    {
        return $this->dirNumeroCasa;
    }

    /**
     * Set dirDepartamento
     *
     * @param string $dirDepartamento
     * @return PerDireccion
     */
    public function setDirDepartamento($dirDepartamento)
    {
        $this->dirDepartamento = $dirDepartamento;

        return $this;
    }

    /**
     * Get dirDepartamento
     *
     * @return string 
     */
    public function getDirDepartamento()
    {
        return $this->dirDepartamento;
    }

    /**
     * Set dirPiso
     *
     * @param string $dirPiso
     * @return PerDireccion
     */
    public function setDirPiso($dirPiso)
    {
        $this->dirPiso = $dirPiso;

        return $this;
    }

    /**
     * Get dirPiso
     *
     * @return string 
     */
    public function getDirPiso()
    {
        return $this->dirPiso;
    }

    /**
     * Set dirNumeroDep
     *
     * @param string $dirNumeroDep
     * @return PerDireccion
     */
    public function setDirNumeroDep($dirNumeroDep)
    {
        $this->dirNumeroDep = $dirNumeroDep;

        return $this;
    }

    /**
     * Get dirNumeroDep
     *
     * @return string 
     */
    public function getDirNumeroDep()
    {
        return $this->dirNumeroDep;
    }

    /**
     * Set dirHabilitado
     *
     * @param boolean $dirHabilitado
     * @return PerDireccion
     */
    public function setDirHabilitado($dirHabilitado)
    {
        $this->dirHabilitado = $dirHabilitado;

        return $this;
    }

    /**
     * Get dirHabilitado
     *
     * @return boolean 
     */
    public function getDirHabilitado()
    {
        return $this->dirHabilitado;
    }

    /**
     * Set dirFechaRegistro
     *
     * @param \DateTime $dirFechaRegistro
     * @return PerDireccion
     */
    public function setDirFechaRegistro($dirFechaRegistro)
    {
        $this->dirFechaRegistro = $dirFechaRegistro;

        return $this;
    }

    /**
     * Get dirFechaRegistro
     *
     * @return \DateTime 
     */
    public function getDirFechaRegistro()
    {
        return $this->dirFechaRegistro;
    }

    /**
     * Set dirComentario
     *
     * @param string $dirComentario
     * @return PerDireccion
     */
    public function setDirComentario($dirComentario)
    {
        $this->dirComentario = $dirComentario;

        return $this;
    }

    /**
     * Get dirComentario
     *
     * @return string 
     */
    public function getDirComentario()
    {
        return $this->dirComentario;
    }

    /**
     * Set dirPersonaFk
     *
     * @param \BaseBundle\Entity\PerPersona $dirPersonaFk
     * @return PerDireccion
     */
    public function setDirPersonaFk(\BaseBundle\Entity\PerPersona $dirPersonaFk = null)
    {
        $this->dirPersonaFk = $dirPersonaFk;

        return $this;
    }

    /**
     * Get dirPersonaFk
     *
     * @return \BaseBundle\Entity\PerPersona 
     */
    public function getDirPersonaFk()
    {
        return $this->dirPersonaFk;
    }

    /**
     * Set dirComunaFk
     *
     * @param \BaseBundle\Entity\DefComuna $dirComunaFk
     * @return PerDireccion
     */
    public function setDirComunaFk(\BaseBundle\Entity\DefComuna $dirComunaFk = null)
    {
        $this->dirComunaFk = $dirComunaFk;

        return $this;
    }

    /**
     * Get dirComunaFk
     *
     * @return \BaseBundle\Entity\DefComuna 
     */
    public function getDirComunaFk()
    {
        return $this->dirComunaFk;
    }
}
