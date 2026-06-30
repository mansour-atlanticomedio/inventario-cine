<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260630143844 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE log ADD usuarios_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE log DROP usuario_id');
        $this->addSql('ALTER TABLE log ADD CONSTRAINT FK_8F3F68C5F01D3B25 FOREIGN KEY (usuarios_id) REFERENCES usuarios (id) NOT DEFERRABLE');
        $this->addSql('CREATE INDEX IDX_8F3F68C5F01D3B25 ON log (usuarios_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE log DROP CONSTRAINT FK_8F3F68C5F01D3B25');
        $this->addSql('DROP INDEX IDX_8F3F68C5F01D3B25');
        $this->addSql('ALTER TABLE log ADD usuario_id VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE log DROP usuarios_id');
    }
}
