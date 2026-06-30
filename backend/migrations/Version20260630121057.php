<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260630121057 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE productos DROP coste_compra');
        $this->addSql('ALTER TABLE productos DROP anios_amortizar');
        $this->addSql('ALTER TABLE productos DROP prestar');
        $this->addSql('ALTER TABLE productos DROP valor');
        $this->addSql('ALTER TABLE productos ALTER fecha_compra TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE productos ALTER descripcion TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE productos ALTER fecha_activacion TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE usuarios RENAME COLUMN log_id TO rol_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE productos ADD coste_compra INT NOT NULL');
        $this->addSql('ALTER TABLE productos ADD anios_amortizar INT NOT NULL');
        $this->addSql('ALTER TABLE productos ADD prestar INT NOT NULL');
        $this->addSql('ALTER TABLE productos ADD valor INT NOT NULL');
        $this->addSql('ALTER TABLE productos ALTER fecha_compra TYPE DATE');
        $this->addSql('ALTER TABLE productos ALTER descripcion TYPE TEXT');
        $this->addSql('ALTER TABLE productos ALTER fecha_activacion TYPE DATE');
        $this->addSql('ALTER TABLE usuarios RENAME COLUMN rol_id TO log_id');
    }
}
