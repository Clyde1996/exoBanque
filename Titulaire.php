<h1> Exercie Banque</h1>

<p><mark><strong>Vous</strong> êtes chargé(e) de créer un projet <strong>orienté</strong> objet permettant de <strong>gérer</strong> des titulaires et leurs <strong>comptes</strong> bancaires respectifs<strong>.</strong></mark></p>
<h3><u>Un compte bancaire est composé des éléments suivants :</u></h3>
    <li> Un libellé (compte courant, livret A, ...) </li>
    <li> Un solde initial </li>
    <li> Une devise monétaire </li>
    <li> Un titulaire unique </li>
<h3><u>Un titulaire comporte : </u></h3>
   <li> Un nom </li>
   <li> Un prénom </li>
   <li> Une date de naissance </li>
   <li> Une ville </li>
   <li> L'ensemble de ses comptes bancaires. </li>
<h3><u> Sur un compte bancaire, on doit pouvoir :</u></h3>
    <li> Créditer le compte de X euros </li>
    <li> Débiter le compte de X euros </li>
    <li> Effectuer un virement d'un compte à l'autre. </li>
<h3><u> On doit pouvoir : </u></h3>
    <li> <u>Affichertoutes les informations d'un(e) titulaire (dont l'âge) et l'ensemble des comptes appartenant à celui(celle)-ci.</u> </li>
    <li><u> Afficher toutes les informations d'un compte bancaire, notamment le nom / prénom du titulaire du compte.</u> </li>
</li>

<?php



class Titulaire{
   
    //atributs

    private string $nom;
    private string $prenom;
    private DateTime $dateNaissance;
    private string $ville;
    private array $comptes;



    public function __construct($nom , $prenom, $dateNaissance, $ville) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = new DateTime($dateNaissance);
        $this->ville = $ville;

        $this->comptes = [];
    }

    //méthodes

    public function ajouterCompte(CompteBancaire $compte) {
        $this->comptes [] = $compte;
        //équivalent a array_push($this->comptes, $compte);
    }

    //getters/setter (accesseurs/mutateurs)
    
    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    public function getVille()
    {
        return $this->ville;
    }

    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    // public function getComptesBancaires()
    // {
    //     return $this->comptesBancaires;
    // }

    // public function setComptesBancaires($comptesBancaires)
    // {
    //     $this->comptesBancaires = $comptesBancaires;

    //     return $this;
    // }

    public function getAge(){
        $now = new DateTime();
        $diff = $this->dateNaissance->diff($now);
        return $diff->y;
    }

    // $this->getComptesBancaires()->getInfos()

    public function __toString() {
        return $this->prenom." ".$this->nom." ".  $this->getage() ." ans . ";
    } 

    // public function getInfos() {
    //     return $this ." ".  $this->getage() ." ans."; 
    // }

    // public function getInfosGenerale(){
    //     return $this->getComptesBancaires();
    // }

    public function afficherCompte(){
        $liste = "<h2>Information du compte </h2>";
        foreach ($this->comptes as $compteBancaire){

            $liste .= $compteBancaire->getInfosGenerale(). "<br/>";
            

        }

        return $liste ;
    }
}
















?>

