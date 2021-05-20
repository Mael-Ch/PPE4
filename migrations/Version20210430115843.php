<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210430115843 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE horaire ADD site_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE horaire ADD CONSTRAINT FK_BBC83DB6F6BD1646 FOREIGN KEY (site_id) REFERENCES site (id)');
        $this->addSql('CREATE INDEX IDX_BBC83DB6F6BD1646 ON horaire (site_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE horaire DROP FOREIGN KEY FK_BBC83DB6F6BD1646');
        $this->addSql('DROP INDEX IDX_BBC83DB6F6BD1646 ON horaire');
        $this->addSql('ALTER TABLE horaire DROP site_id');
    }
}
