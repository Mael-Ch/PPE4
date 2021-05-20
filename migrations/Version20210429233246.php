<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210429233246 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE avis (id INT AUTO_INCREMENT NOT NULL, commentaire VARCHAR(255) NOT NULL, date DATETIME NOT NULL, joueur INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE client (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(50) NOT NULL, prenom VARCHAR(50) NOT NULL, photo VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, tel VARCHAR(20) NOT NULL, naissance DATE NOT NULL, credit INT DEFAULT NULL, adresse VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE facture (id INT AUTO_INCREMENT NOT NULL, date DATETIME NOT NULL, montant INT NOT NULL, nb_credit INT NOT NULL, client INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE horaire (id INT AUTO_INCREMENT NOT NULL, heure TIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE joueur (id INT AUTO_INCREMENT NOT NULL, pseudo VARCHAR(20) NOT NULL, email VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE joueur_partie (id INT AUTO_INCREMENT NOT NULL, joueur INT NOT NULL, partie INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE obstacle (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(50) NOT NULL, type VARCHAR(50) NOT NULL, description VARCHAR(255) DEFAULT NULL, photo VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE obstacle_partie (id INT AUTO_INCREMENT NOT NULL, obstacle INT NOT NULL, partie INT NOT NULL, position INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE partie (id INT AUTO_INCREMENT NOT NULL, date DATE NOT NULL, horaire INT NOT NULL, temps TIME DEFAULT NULL, win SMALLINT DEFAULT NULL, salle INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reservation (id INT AUTO_INCREMENT NOT NULL, montant INT NOT NULL, date DATETIME NOT NULL, client INT NOT NULL, partie INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE salle (id INT AUTO_INCREMENT NOT NULL, site INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE site (id INT AUTO_INCREMENT NOT NULL, ville VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE theme (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE theme_salle (id INT AUTO_INCREMENT NOT NULL, salle INT NOT NULL, theme INT NOT NULL, date_debut DATE NOT NULL, date_fin DATE DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE avis');
        $this->addSql('DROP TABLE client');
        $this->addSql('DROP TABLE facture');
        $this->addSql('DROP TABLE horaire');
        $this->addSql('DROP TABLE joueur');
        $this->addSql('DROP TABLE joueur_partie');
        $this->addSql('DROP TABLE obstacle');
        $this->addSql('DROP TABLE obstacle_partie');
        $this->addSql('DROP TABLE partie');
        $this->addSql('DROP TABLE reservation');
        $this->addSql('DROP TABLE salle');
        $this->addSql('DROP TABLE site');
        $this->addSql('DROP TABLE theme');
        $this->addSql('DROP TABLE theme_salle');
    }
}
