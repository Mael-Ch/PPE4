<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210503125152 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE partie DROP FOREIGN KEY FK_59B1F3DDC304035');
        $this->addSql('DROP INDEX IDX_59B1F3DDC304035 ON partie');
        $this->addSql('ALTER TABLE partie DROP salle_id, DROP salle');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE partie ADD salle_id INT DEFAULT NULL, ADD salle INT NOT NULL');
        $this->addSql('ALTER TABLE partie ADD CONSTRAINT FK_59B1F3DDC304035 FOREIGN KEY (salle_id) REFERENCES site (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_59B1F3DDC304035 ON partie (salle_id)');
    }
}
