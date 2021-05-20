<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210430121725 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE theme ADD site_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE theme ADD CONSTRAINT FK_9775E708F6BD1646 FOREIGN KEY (site_id) REFERENCES site (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_9775E708F6BD1646 ON theme (site_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE theme DROP FOREIGN KEY FK_9775E708F6BD1646');
        $this->addSql('DROP INDEX UNIQ_9775E708F6BD1646 ON theme');
        $this->addSql('ALTER TABLE theme DROP site_id');
    }
}
