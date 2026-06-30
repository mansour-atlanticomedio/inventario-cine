<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260630145129 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE productos ADD valor INT NOT NULL');
        $this->addSql('ALTER TABLE productos ADD categoria_id INT NOT NULL');
        $this->addSql('ALTER TABLE productos ADD CONSTRAINT FK_767490E63397707A FOREIGN KEY (categoria_id) REFERENCES categorias (id) NOT DEFERRABLE');
        $this->addSql('CREATE INDEX IDX_767490E63397707A ON productos (categoria_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE productos DROP CONSTRAINT FK_767490E63397707A');
        $this->addSql('DROP INDEX IDX_767490E63397707A');
        $this->addSql('ALTER TABLE productos DROP valor');
        $this->addSql('ALTER TABLE productos DROP categoria_id');
    }
}
