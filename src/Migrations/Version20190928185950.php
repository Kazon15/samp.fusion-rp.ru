<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190928185950 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE server_business_job (id INT AUTO_INCREMENT NOT NULL, business_id INT DEFAULT NULL, salary INT NOT NULL, menu_x DOUBLE PRECISION NOT NULL, menu_y DOUBLE PRECISION NOT NULL, menu_z DOUBLE PRECISION NOT NULL, UNIQUE INDEX UNIQ_74E2BA2DA89DB457 (business_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE server_business_job ADD CONSTRAINT FK_74E2BA2DA89DB457 FOREIGN KEY (business_id) REFERENCES server_business (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE server_business_job');
    }
}
