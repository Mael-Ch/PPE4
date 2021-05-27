<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210527072950 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE partie ADD site_id INT DEFAULT NULL, ADD client_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE partie ADD CONSTRAINT FK_59B1F3DF6BD1646 FOREIGN KEY (site_id) REFERENCES site (id)');
        $this->addSql('ALTER TABLE partie ADD CONSTRAINT FK_59B1F3D19EB6921 FOREIGN KEY (client_id) REFERENCES client (id)');
        $this->addSql('CREATE INDEX IDX_59B1F3DF6BD1646 ON partie (site_id)');
        $this->addSql('CREATE INDEX IDX_59B1F3D19EB6921 ON partie (client_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE partie DROP FOREIGN KEY FK_59B1F3DF6BD1646');
        $this->addSql('ALTER TABLE partie DROP FOREIGN KEY FK_59B1F3D19EB6921');
        $this->addSql('DROP INDEX IDX_59B1F3DF6BD1646 ON partie');
        $this->addSql('DROP INDEX IDX_59B1F3D19EB6921 ON partie');
        $this->addSql('ALTER TABLE partie DROP site_id, DROP client_id');
    }
}
