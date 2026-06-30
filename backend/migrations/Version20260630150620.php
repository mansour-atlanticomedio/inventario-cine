<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260630150620 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE categorias ADD idresponsable INT NOT NULL');
        $this->addSql('ALTER TABLE categorias ADD usuario_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE categorias ADD CONSTRAINT FK_5E9F836CDB38439E FOREIGN KEY (usuario_id) REFERENCES usuarios (id) NOT DEFERRABLE');
        $this->addSql('CREATE INDEX IDX_5E9F836CDB38439E ON categorias (usuario_id)');
        $this->addSql('ALTER TABLE productos ADD coste_compra INT NOT NULL');
        $this->addSql('ALTER TABLE productos ADD anios_amortizar INT NOT NULL');
        $this->addSql('ALTER TABLE productos ADD prestar INT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE categorias DROP CONSTRAINT FK_5E9F836CDB38439E');
        $this->addSql('DROP INDEX IDX_5E9F836CDB38439E');
        $this->addSql('ALTER TABLE categorias DROP idresponsable');
        $this->addSql('ALTER TABLE categorias DROP usuario_id');
        $this->addSql('ALTER TABLE productos DROP coste_compra');
        $this->addSql('ALTER TABLE productos DROP anios_amortizar');
        $this->addSql('ALTER TABLE productos DROP prestar');
    }
}
