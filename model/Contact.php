<?php

class Contact
{
    // Propriétés privées correspondant aux colonnes de la table
    private int $id;
    private string $name;
    private string $forname;
    private DateTime $birthdate;
    private int $age;
    private string $cellphone;

    /**
     * Constructor de la classe Contact.
     * Note: L'ID n'est pas dans le constructeur car il est auto-incrémenté.
     */
    public function __construct(string $name, string $forname, DateTime $birthdate, int $age, string $cellphone)
    {
        $this->setName($name);
        $this->setForname($forname);
        $this->setBirthdate($birthdate);
        $this->setAge($age);
        $this->setCellphone($cellphone);
    }

    // Getter et Setter pour $id (lecture seule car auto-incrémenté)
    public function getId(): int
    {
        return $this->id;
    }

    // Getter et Setter pour $name
    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        if (empty($name)) {
            throw new InvalidArgumentException("Le nom ne peut pas être vide.");
        }
        $this->name = $name;
    }

    // Getter et Setter pour $forname
    public function getForname(): string
    {
        return $this->forname;
    }

    public function setForname(string $forname): void
    {
        if (empty($forname)) {
            throw new InvalidArgumentException("Le prénom ne peut pas être vide.");
        }
        $this->forname = $forname;
    }

    // Getter et Setter pour $birthdate (DateTime pour une meilleure gestion des dates)
    public function getBirthdate(): DateTime
    {
        return $this->birthdate;
    }

    public function setBirthdate(DateTime $birthdate): void
    {
        $this->birthdate = $birthdate;
    }

    // Getter et Setter pour $age
    public function getAge(): int
    {
        return $this->age;
    }

    public function setAge(int $age): void
    {
        if ($age < 0) {
            throw new InvalidArgumentException("L'âge ne peut pas être négatif.");
        }
        $this->age = $age;
    }

    // Getter et Setter pour $cellphone
    public function getCellphone(): string
    {
        return $this->cellphone;
    }

    public function setCellphone(string $cellphone): void
    {
        if (!preg_match('/^\d{10}$/', $cellphone)) {
            throw new InvalidArgumentException("Le numéro de téléphone doit comporter 10 chiffres.");
        }
        $this->cellphone = $cellphone;
    }

    // Méthode pour retourner les informations sous forme de tableau (par exemple pour une API)
    public function toArray(): array
    {
        return [
            'id' => $this->getId(),
            'name' => $this->getName(),
            'forname' => $this->getForname(),
            'birthdate' => $this->getBirthdate()->format('Y-m-d'),
            'age' => $this->getAge(),
            'cellphone' => $this->getCellphone(),
        ];
    }
}

?>
