<?php 

namespace App\Model;

class Article{

    private $titre;
    private $contenu;
    private $auteur;

    public function __construct($titre="",$contenu="",$auteur="")
    {
        $this->titre = $titre;        
        $this->contenu = $contenu;
        $this->auteur = $auteur;        
    }

    /**
     * Get the value of titre
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set the value of titre
     */
    public function setTitre($titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get the value of contenu
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set the value of contenu
     */
    public function setContenu($contenu): self
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get the value of auteur
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * Set the value of auteur
     */
    public function setAuteur($auteur): self
    {
        $this->auteur = $auteur;

        return $this;
    }
}