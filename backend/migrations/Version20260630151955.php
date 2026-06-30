<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260630151955 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE categorias DROP CONSTRAINT fk_5e9f836cdb38439e');
        $this->addSql('DROP INDEX idx_5e9f836cdb38439e');
        $this->addSql('ALTER TABLE categorias DROP usuario_id');
        $this->addSql('ALTER TABLE categorias ALTER idresponsable DROP NOT NULL');
        $this->addSql('ALTER TABLE categorias ADD CONSTRAINT FK_5E9F836C94937DA8 FOREIGN KEY (idresponsable) REFERENCES usuarios (id) NOT DEFERRABLE');
        $this->addSql('CREATE INDEX IDX_5E9F836C94937DA8 ON categorias (idresponsable)');
        $this->addSql('ALTER TABLE prestamos ADD usuario_id INT NOT NULL');
        $this->addSql('ALTER TABLE prestamos ADD CONSTRAINT FK_4849844FDB38439E FOREIGN KEY (usuario_id) REFERENCES usuarios (id) NOT DEFERRABLE');
        $this->addSql('CREATE INDEX IDX_4849844FDB38439E ON prestamos (usuario_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE categorias DROP CONSTRAINT FK_5E9F836C94937DA8');
        $this->addSql('DROP INDEX IDX_5E9F836C94937DA8');
        $this->addSql('ALTER TABLE categorias ADD usuario_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE categorias ALTER idresponsable SET NOT NULL');
        $this->addSql('ALTER TABLE categorias ADD CONSTRAINT fk_5e9f836cdb38439e FOREIGN KEY (usuario_id) REFERENCES usuarios (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX idx_5e9f836cdb38439e ON categorias (usuario_id)');
        $this->addSql('ALTER TABLE prestamos DROP CONSTRAINT FK_4849844FDB38439E');
        $this->addSql('DROP INDEX IDX_4849844FDB38439E');
        $this->addSql('ALTER TABLE prestamos DROP usuario_id');
    }
}
