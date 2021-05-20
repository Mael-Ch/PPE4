<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210501102223 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE partie DROP FOREIGN KEY FK_59B1F3D58C54515');
        $this->addSql('DROP INDEX UNIQ_59B1F3D58C54515 ON partie');
        $this->addSql('ALTER TABLE partie DROP horaire_id, DROP horaire');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE partie ADD horaire_id INT DEFAULT NULL, ADD horaire INT NOT NULL');
        $this->addSql('ALTER TABLE partie ADD CONSTRAINT FK_59B1F3D58C54515 FOREIGN KEY (horaire_id) REFERENCES horaire (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_59B1F3D58C54515 ON partie (horaire_id)');
    }
}
