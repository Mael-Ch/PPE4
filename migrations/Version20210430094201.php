<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210430094201 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE salle ADD site_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE salle ADD CONSTRAINT FK_4E977E5CF6BD1646 FOREIGN KEY (site_id) REFERENCES site (id)');
        $this->addSql('CREATE INDEX IDX_4E977E5CF6BD1646 ON salle (site_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE salle DROP FOREIGN KEY FK_4E977E5CF6BD1646');
        $this->addSql('DROP INDEX IDX_4E977E5CF6BD1646 ON salle');
        $this->addSql('ALTER TABLE salle DROP site_id');
    }
}
