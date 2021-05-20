<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210430093112 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE client ADD facture_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE client ADD CONSTRAINT FK_C74404557F2DEE08 FOREIGN KEY (facture_id) REFERENCES facture (id)');
        $this->addSql('CREATE INDEX IDX_C74404557F2DEE08 ON client (facture_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE client DROP FOREIGN KEY FK_C74404557F2DEE08');
        $this->addSql('DROP INDEX IDX_C74404557F2DEE08 ON client');
        $this->addSql('ALTER TABLE client DROP facture_id');
    }
}
