<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190625152633 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE player_fraction DROP INDEX UNIQ_F888DB863CC0D837, ADD INDEX IDX_F888DB863CC0D837 (rang_id)');
        $this->addSql('ALTER TABLE server_fraction_rang DROP FOREIGN KEY FK_5317EC4AF1849495');
        $this->addSql('DROP INDEX UNIQ_5317EC4AF1849495 ON server_fraction_rang');
        $this->addSql('ALTER TABLE server_fraction_rang DROP players_id');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE player_fraction DROP INDEX IDX_F888DB863CC0D837, ADD UNIQUE INDEX UNIQ_F888DB863CC0D837 (rang_id)');
        $this->addSql('ALTER TABLE server_fraction_rang ADD players_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE server_fraction_rang ADD CONSTRAINT FK_5317EC4AF1849495 FOREIGN KEY (players_id) REFERENCES player_fraction (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_5317EC4AF1849495 ON server_fraction_rang (players_id)');
    }
}
