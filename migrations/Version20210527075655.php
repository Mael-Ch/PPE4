<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210527075655 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE avis');
        $this->addSql('DROP TABLE joueur_partie');
        $this->addSql('DROP TABLE obstacle');
        $this->addSql('DROP TABLE obstacle_partie');
        $this->addSql('DROP TABLE theme_salle');
        $this->addSql('ALTER TABLE partie DROP FOREIGN KEY FK_59B1F3DDC304035');
        $this->addSql('DROP INDEX IDX_59B1F3DDC304035 ON partie');
        $this->addSql('ALTER TABLE partie ADD client_id INT NOT NULL, DROP salle_id, DROP horaire');
        $this->addSql('ALTER TABLE partie ADD CONSTRAINT FK_59B1F3D19EB6921 FOREIGN KEY (client_id) REFERENCES client (id)');
        $this->addSql('CREATE INDEX IDX_59B1F3D19EB6921 ON partie (client_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE avis (id INT AUTO_INCREMENT NOT NULL, commentaire VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, date DATETIME NOT NULL, joueur INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE joueur_partie (id INT AUTO_INCREMENT NOT NULL, joueur INT NOT NULL, partie INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE obstacle (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, type VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, description VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, photo VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE obstacle_partie (id INT AUTO_INCREMENT NOT NULL, obstacle INT NOT NULL, partie INT NOT NULL, position INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE theme_salle (id INT AUTO_INCREMENT NOT NULL, salle INT NOT NULL, theme INT NOT NULL, date_debut DATE NOT NULL, date_fin DATE DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE partie DROP FOREIGN KEY FK_59B1F3D19EB6921');
        $this->addSql('DROP INDEX IDX_59B1F3D19EB6921 ON partie');
        $this->addSql('ALTER TABLE partie ADD salle_id INT DEFAULT NULL, ADD horaire TIME NOT NULL, DROP client_id');
        $this->addSql('ALTER TABLE partie ADD CONSTRAINT FK_59B1F3DDC304035 FOREIGN KEY (salle_id) REFERENCES site (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_59B1F3DDC304035 ON partie (salle_id)');
    }
}
