<?php

namespace CatalogueBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TableBlog
 *
 * @ORM\Table(name="table_blog")
 * @ORM\Entity(repositoryClass="CatalogueBundle\Repository\TableBlogRepository")
 */
class TableBlog
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="author", type="string", length=50)
     */
    private $author;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=50)
     */
    private $mail;

    /**
     * @var string
     *
     * @ORM\Column(name="TitreMessage", type="string", length=100)
     */
    private $titreMessage;

    /**
     * @var string
     *
     * @ORM\Column(name="ContenuMessage", type="string", length=255)
     */
    private $contenuMessage;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DatePublication", type="date")
     */
    private $datePublication;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set author
     *
     * @param string $author
     *
     * @return TableBlog
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set mail
     *
     * @param string $mail
     *
     * @return TableBlog
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set titreMessage
     *
     * @param string $titreMessage
     *
     * @return TableBlog
     */
    public function setTitreMessage($titreMessage)
    {
        $this->titreMessage = $titreMessage;

        return $this;
    }

    /**
     * Get titreMessage
     *
     * @return string
     */
    public function getTitreMessage()
    {
        return $this->titreMessage;
    }

    /**
     * Set contenuMessage
     *
     * @param string $contenuMessage
     *
     * @return TableBlog
     */
    public function setContenuMessage($contenuMessage)
    {
        $this->contenuMessage = $contenuMessage;

        return $this;
    }

    /**
     * Get contenuMessage
     *
     * @return string
     */
    public function getContenuMessage()
    {
        return $this->contenuMessage;
    }

    /**
     * Set datePublication
     *
     * @param \DateTime $datePublication
     *
     * @return TableBlog
     */
    public function setDatePublication($datePublication)
    {
        $this->datePublication = $datePublication;

        return $this;
    }

    /**
     * Get datePublication
     *
     * @return \DateTime
     */
    public function getDatePublication()
    {
        return $this->datePublication;
    }
}

