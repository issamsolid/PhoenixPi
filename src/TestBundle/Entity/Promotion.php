<?php

namespace TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Promotion
 *
 * @ORM\Table(name="promotion", indexes={@ORM\Index(name="iduser", columns={"iduser"}), @ORM\Index(name="idpr", columns={"idpr"}), @ORM\Index(name="idcp", columns={"idcp"})})
 * @ORM\Entity
 */
class Promotion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idpromo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpromo;

    /**
     * @var float
     *
     * @ORM\Column(name="pourcentage", type="float", precision=10, scale=0, nullable=true)
     */
    private $pourcentage;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datefinpro", type="date", nullable=true)
     */
    private $datefinpro;

    /**
     * @var \FosUser
     *
     * @ORM\ManyToOne(targetEntity="FosUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="iduser", referencedColumnName="id")
     * })
     */
    private $iduser;

    /**
     * @var \Produit
     *
     * @ORM\ManyToOne(targetEntity="Produit")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idpr", referencedColumnName="idpr")
     * })
     */
    private $idpr;

    /**
     * @var \Categorieprod
     *
     * @ORM\ManyToOne(targetEntity="Categorieprod")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idcp", referencedColumnName="idcp")
     * })
     */
    private $idcp;


}
