<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210430095109 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE salle DROP FOREIGN KEY FK_4E977E5C29B94428');
        $this->addSql('DROP INDEX IDX_4E977E5C29B94428 ON salle');
        $this->addSql('ALTER TABLE salle DROP idsite_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE salle ADD idsite_id INT NOT NULL');
        $this->addSql('ALTER TABLE salle ADD CONSTRAINT FK_4E977E5C29B94428 FOREIGN KEY (idsite_id) REFERENCES site (id)');
        $this->addSql('CREATE INDEX IDX_4E977E5C29B94428 ON salle (idsite_id)');
    }
}
