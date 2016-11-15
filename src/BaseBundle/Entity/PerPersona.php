<?php

namespace BaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PerPersona
 *
 * @ORM\Table(name="per_persona")
 * @ORM\Entity
 */
class PerPersona
{
    /**
     * @var integer
     *
     * @ORM\Column(name="per_id_pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $perIdPk;

    /**
     * @var string
     *
     * @ORM\Column(name="per_primer_nombre", type="string", length=30, nullable=true)
     */
    private $perPrimerNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="per_segundo_nombre", type="string", length=30, nullable=true)
     */
    private $perSegundoNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="per_apellido_paterno", type="string", length=30, nullable=true)
     */
    private $perApellidoPaterno;

    /**
     * @var string
     *
     * @ORM\Column(name="per_apellido_materno", type="string", length=30, nullable=true)
     */
    private $perApellidoMaterno;

    /**
     * @var string
     *
     * @ORM\Column(name="per_dni", type="string", length=20, nullable=true)
     */
    private $perDni;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="per_fecha_nacimiento", type="date", nullable=true)
     */
    private $perFechaNacimiento;

    /**
     * @var string
     *
     * @ORM\Column(name="per_sexo", type="string", length=1, nullable=true)
     */
    private $perSexo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="per_fecha_registro", type="datetime", nullable=true)
     */
    private $perFechaRegistro;

    /**
     * @var string
     *
     * @ORM\Column(name="per_comentario", type="text", length=65535, nullable=true)
     */
    private $perComentario;



    /**
     * Get perIdPk
     *
     * @return integer 
     */
    public function getPerIdPk()
    {
        return $this->perIdPk;
    }

    /**
     * Set perPrimerNombre
     *
     * @param string $perPrimerNombre
     * @return PerPersona
     */
    public function setPerPrimerNombre($perPrimerNombre)
    {
        $this->perPrimerNombre = $perPrimerNombre;

        return $this;
    }

    /**
     * Get perPrimerNombre
     *
     * @return string 
     */
    public function getPerPrimerNombre()
    {
        return $this->perPrimerNombre;
    }

    /**
     * Set perSegundoNombre
     *
     * @param string $perSegundoNombre
     * @return PerPersona
     */
    public function setPerSegundoNombre($perSegundoNombre)
    {
        $this->perSegundoNombre = $perSegundoNombre;

        return $this;
    }

    /**
     * Get perSegundoNombre
     *
     * @return string 
     */
    public function getPerSegundoNombre()
    {
        return $this->perSegundoNombre;
    }

    /**
     * Set perApellidoPaterno
     *
     * @param string $perApellidoPaterno
     * @return PerPersona
     */
    public function setPerApellidoPaterno($perApellidoPaterno)
    {
        $this->perApellidoPaterno = $perApellidoPaterno;

        return $this;
    }

    /**
     * Get perApellidoPaterno
     *
     * @return string 
     */
    public function getPerApellidoPaterno()
    {
        return $this->perApellidoPaterno;
    }

    /**
     * Set perApellidoMaterno
     *
     * @param string $perApellidoMaterno
     * @return PerPersona
     */
    public function setPerApellidoMaterno($perApellidoMaterno)
    {
        $this->perApellidoMaterno = $perApellidoMaterno;

        return $this;
    }

    /**
     * Get perApellidoMaterno
     *
     * @return string 
     */
    public function getPerApellidoMaterno()
    {
        return $this->perApellidoMaterno;
    }

    /**
     * Set perDni
     *
     * @param string $perDni
     * @return PerPersona
     */
    public function setPerDni($perDni)
    {
        $this->perDni = $perDni;

        return $this;
    }

    /**
     * Get perDni
     *
     * @return string 
     */
    public function getPerDni()
    {
        return $this->perDni;
    }

    /**
     * Set perFechaNacimiento
     *
     * @param \DateTime $perFechaNacimiento
     * @return PerPersona
     */
    public function setPerFechaNacimiento($perFechaNacimiento)
    {
        $this->perFechaNacimiento = $perFechaNacimiento;

        return $this;
    }

    /**
     * Get perFechaNacimiento
     *
     * @return \DateTime 
     */
    public function getPerFechaNacimiento()
    {
        return $this->perFechaNacimiento;
    }

    /**
     * Set perSexo
     *
     * @param string $perSexo
     * @return PerPersona
     */
    public function setPerSexo($perSexo)
    {
        $this->perSexo = $perSexo;

        return $this;
    }

    /**
     * Get perSexo
     *
     * @return string 
     */
    public function getPerSexo()
    {
        return $this->perSexo;
    }

    /**
     * Set perFechaRegistro
     *
     * @param \DateTime $perFechaRegistro
     * @return PerPersona
     */
    public function setPerFechaRegistro($perFechaRegistro)
    {
        $this->perFechaRegistro = $perFechaRegistro;

        return $this;
    }

    /**
     * Get perFechaRegistro
     *
     * @return \DateTime 
     */
    public function getPerFechaRegistro()
    {
        return $this->perFechaRegistro;
    }

    /**
     * Set perComentario
     *
     * @param string $perComentario
     * @return PerPersona
     */
    public function setPerComentario($perComentario)
    {
        $this->perComentario = $perComentario;

        return $this;
    }

    /**
     * Get perComentario
     *
     * @return string 
     */
    public function getPerComentario()
    {
        return $this->perComentario;
    }
}
