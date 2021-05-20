<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210501103246 extends AbstractMigration
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
        $this->addSql('ALTER TABLE partie CHANGE horaire_id salle_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE partie ADD CONSTRAINT FK_59B1F3DDC304035 FOREIGN KEY (salle_id) REFERENCES site (id)');
        $this->addSql('CREATE INDEX IDX_59B1F3DDC304035 ON partie (salle_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE partie DROP FOREIGN KEY FK_59B1F3DDC304035');
        $this->addSql('DROP INDEX IDX_59B1F3DDC304035 ON partie');
        $this->addSql('ALTER TABLE partie CHANGE salle_id horaire_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE partie ADD CONSTRAINT FK_59B1F3D58C54515 FOREIGN KEY (horaire_id) REFERENCES horaire (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_59B1F3D58C54515 ON partie (horaire_id)');
    }
}
