<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260630152906 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE prestamos ALTER fecha_inicio TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE prestamos ALTER fecha_fin TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE prestamos ALTER fecha_entrega TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE prestamos ALTER motivoanular TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE prestamosproductos ADD prestamo_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE prestamosproductos ADD producto_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE prestamosproductos ADD CONSTRAINT FK_92B66FBB135A846E FOREIGN KEY (prestamo_id) REFERENCES prestamos (id) NOT DEFERRABLE');
        $this->addSql('ALTER TABLE prestamosproductos ADD CONSTRAINT FK_92B66FBB7645698E FOREIGN KEY (producto_id) REFERENCES productos (id) NOT DEFERRABLE');
        $this->addSql('CREATE INDEX IDX_92B66FBB135A846E ON prestamosproductos (prestamo_id)');
        $this->addSql('CREATE INDEX IDX_92B66FBB7645698E ON prestamosproductos (producto_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE prestamos ALTER fecha_inicio TYPE DATE');
        $this->addSql('ALTER TABLE prestamos ALTER fecha_fin TYPE DATE');
        $this->addSql('ALTER TABLE prestamos ALTER fecha_entrega TYPE DATE');
        $this->addSql('ALTER TABLE prestamos ALTER motivoanular TYPE TEXT');
        $this->addSql('ALTER TABLE prestamosproductos DROP CONSTRAINT FK_92B66FBB135A846E');
        $this->addSql('ALTER TABLE prestamosproductos DROP CONSTRAINT FK_92B66FBB7645698E');
        $this->addSql('DROP INDEX IDX_92B66FBB135A846E');
        $this->addSql('DROP INDEX IDX_92B66FBB7645698E');
        $this->addSql('ALTER TABLE prestamosproductos DROP prestamo_id');
        $this->addSql('ALTER TABLE prestamosproductos DROP producto_id');
    }
}
