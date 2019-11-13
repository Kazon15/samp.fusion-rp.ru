<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190612224122 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE player (id INT AUTO_INCREMENT NOT NULL, invited_id INT DEFAULT NULL, name VARCHAR(32) NOT NULL, password VARCHAR(64) NOT NULL, reg_ip VARCHAR(32) NOT NULL, now_ip VARCHAR(32) NOT NULL, mail VARCHAR(64) DEFAULT NULL, reg_date VARCHAR(16) NOT NULL, sex TINYINT(1) NOT NULL, model INT NOT NULL, health DOUBLE PRECISION NOT NULL, armour DOUBLE PRECISION NOT NULL, age SMALLINT NOT NULL, online TINYINT(1) NOT NULL, secret_key VARCHAR(5) DEFAULT NULL, online_time INT NOT NULL, type INT NOT NULL, pos_x DOUBLE PRECISION NOT NULL, pos_y DOUBLE PRECISION NOT NULL, pos_z DOUBLE PRECISION NOT NULL, pos_fa DOUBLE PRECISION NOT NULL, INDEX IDX_98197A65C2ED4747 (invited_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE player_admin (id INT AUTO_INCREMENT NOT NULL, player_id INT DEFAULT NULL, password VARCHAR(255) DEFAULT \'qwerty\' NOT NULL, level INT DEFAULT 1 NOT NULL, UNIQUE INDEX UNIQ_377C763099E6F5DF (player_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE player_ban (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(32) NOT NULL, who_banned VARCHAR(32) NOT NULL, ip VARCHAR(16) NOT NULL, ban_date VARCHAR(16) NOT NULL, time INT NOT NULL, unban_date INT NOT NULL, reason VARCHAR(32) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE player_car (id INT AUTO_INCREMENT NOT NULL, player_id INT DEFAULT NULL, number VARCHAR(10) NOT NULL, `lock` TINYINT(1) NOT NULL, model SMALLINT NOT NULL, price INT NOT NULL, color_1 INT NOT NULL, color_2 INT NOT NULL, paint_job INT NOT NULL, fuel DOUBLE PRECISION NOT NULL, health DOUBLE PRECISION NOT NULL, mileage DOUBLE PRECISION NOT NULL, pos_x DOUBLE PRECISION NOT NULL, pos_y DOUBLE PRECISION NOT NULL, pos_z DOUBLE PRECISION NOT NULL, pos_fa DOUBLE PRECISION NOT NULL, UNIQUE INDEX UNIQ_A1CA7BE99E6F5DF (player_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE player_crimes (id INT AUTO_INCREMENT NOT NULL, player_id INT DEFAULT NULL, crimes INT DEFAULT 0 NOT NULL, arrests INT DEFAULT 0 NOT NULL, obedience INT DEFAULT 0 NOT NULL, UNIQUE INDEX UNIQ_F417A6B899E6F5DF (player_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE player_donate (id INT AUTO_INCREMENT NOT NULL, player_id INT DEFAULT NULL, donate INT DEFAULT 0 NOT NULL, donate_all INT DEFAULT 0 NOT NULL, donate_last INT DEFAULT 0 NOT NULL, UNIQUE INDEX UNIQ_42A292AF99E6F5DF (player_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE player_fine (id INT AUTO_INCREMENT NOT NULL, player_id INT DEFAULT NULL, sum INT NOT NULL, type SMALLINT NOT NULL, date VARCHAR(16) NOT NULL, UNIQUE INDEX UNIQ_1CB304A199E6F5DF (player_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE player_fraction (id INT AUTO_INCREMENT NOT NULL, player_id INT DEFAULT NULL, rang INT NOT NULL, member INT NOT NULL, UNIQUE INDEX UNIQ_F888DB8699E6F5DF (player_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE player_gun (id INT AUTO_INCREMENT NOT NULL, player_id INT DEFAULT NULL, gun_0 INT NOT NULL, ammo_0 INT NOT NULL, gun_1 INT NOT NULL, ammo_1 INT NOT NULL, gun_2 INT NOT NULL, ammo_2 INT NOT NULL, gun_3 INT NOT NULL, ammo_3 INT NOT NULL, gun_4 INT NOT NULL, ammo_4 INT NOT NULL, gun_5 INT NOT NULL, ammo_5 INT NOT NULL, gun_6 INT NOT NULL, ammo_6 INT NOT NULL, gun_7 INT NOT NULL, ammo_7 INT NOT NULL, gun_8 INT NOT NULL, ammo_8 INT NOT NULL, gun_9 INT NOT NULL, ammo_9 INT NOT NULL, gun_10 INT NOT NULL, ammo_10 INT NOT NULL, gun_11 INT NOT NULL, ammo_11 INT NOT NULL, gun_12 INT NOT NULL, ammo_12 INT NOT NULL, UNIQUE INDEX UNIQ_37BA847899E6F5DF (player_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE player_inventory (id INT AUTO_INCREMENT NOT NULL, player_id INT DEFAULT NULL, storage_id INT DEFAULT NULL, count INT NOT NULL, UNIQUE INDEX UNIQ_11217F0F99E6F5DF (player_id), UNIQUE INDEX UNIQ_11217F0F5CC5DB90 (storage_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE player_jail (id INT AUTO_INCREMENT NOT NULL, player_id INT DEFAULT NULL, jail INT NOT NULL, time INT NOT NULL, UNIQUE INDEX UNIQ_6EEBC4C299E6F5DF (player_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE player_job (id INT AUTO_INCREMENT NOT NULL, player_id INT DEFAULT NULL, job INT NOT NULL, UNIQUE INDEX UNIQ_86F9A1DB99E6F5DF (player_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE player_level (id INT AUTO_INCREMENT NOT NULL, player_id INT DEFAULT NULL, exp INT NOT NULL, level INT NOT NULL, UNIQUE INDEX UNIQ_2598B75599E6F5DF (player_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE player_lic (id INT AUTO_INCREMENT NOT NULL, player_id INT DEFAULT NULL, lic_0 TINYINT(1) NOT NULL, lic_1 TINYINT(1) NOT NULL, lic_2 TINYINT(1) NOT NULL, lic_3 TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_A3294A7999E6F5DF (player_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE player_money (id INT AUTO_INCREMENT NOT NULL, player_id INT DEFAULT NULL, cash INT NOT NULL, bank INT NOT NULL, salary INT NOT NULL, UNIQUE INDEX UNIQ_8AD68A299E6F5DF (player_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE player_need (id INT AUTO_INCREMENT NOT NULL, player_id INT DEFAULT NULL, thirsty DOUBLE PRECISION NOT NULL, hungry DOUBLE PRECISION NOT NULL, UNIQUE INDEX UNIQ_44EE3C7799E6F5DF (player_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE player_party (id INT AUTO_INCREMENT NOT NULL, player_id INT DEFAULT NULL, party_id INT DEFAULT NULL, vote INT NOT NULL, UNIQUE INDEX UNIQ_36E735A699E6F5DF (player_id), UNIQUE INDEX UNIQ_36E735A6213C1059 (party_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE player_phone (id INT AUTO_INCREMENT NOT NULL, player_id INT DEFAULT NULL, money INT NOT NULL, number INT NOT NULL, UNIQUE INDEX UNIQ_FB3DEC9B99E6F5DF (player_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE player_quest (id INT AUTO_INCREMENT NOT NULL, player_id INT DEFAULT NULL, status_0 TINYINT(1) NOT NULL, money_0 INT NOT NULL, status_1 TINYINT(1) NOT NULL, money_1 INT NOT NULL, status_2 TINYINT(1) NOT NULL, money_2 INT NOT NULL, status_3 TINYINT(1) NOT NULL, money_3 INT NOT NULL, status_4 TINYINT(1) NOT NULL, money_4 INT NOT NULL, status_5 TINYINT(1) NOT NULL, money_5 INT NOT NULL, status_6 TINYINT(1) NOT NULL, money_6 INT NOT NULL, status_7 TINYINT(1) NOT NULL, money_7 INT NOT NULL, status_8 TINYINT(1) NOT NULL, money_8 INT NOT NULL, status_9 TINYINT(1) NOT NULL, money_9 INT NOT NULL, UNIQUE INDEX UNIQ_FC65835199E6F5DF (player_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE player_settings (id INT AUTO_INCREMENT NOT NULL, player_id INT DEFAULT NULL, spawn INT NOT NULL, admin_mes TINYINT(1) NOT NULL, name TINYINT(1) NOT NULL, frac_mes TINYINT(1) NOT NULL, need TINYINT(1) NOT NULL, rang TINYINT(1) NOT NULL, protect_key TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_E392E12599E6F5DF (player_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE player_skill (id INT AUTO_INCREMENT NOT NULL, player_id INT DEFAULT NULL, skill_0 INT NOT NULL, skill_1 INT NOT NULL, skill_2 INT NOT NULL, skill_3 INT NOT NULL, skill_4 INT NOT NULL, skill_5 INT NOT NULL, skill_6 INT NOT NULL, skill_7 INT NOT NULL, skill_8 INT NOT NULL, UNIQUE INDEX UNIQ_E14F9F3199E6F5DF (player_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE player_wanted (id INT AUTO_INCREMENT NOT NULL, player_id INT DEFAULT NULL, wanted TINYINT(1) NOT NULL, time INT NOT NULL, who VARCHAR(255) DEFAULT \'none\' NOT NULL, reason VARCHAR(255) DEFAULT \'none\' NOT NULL, UNIQUE INDEX UNIQ_46E32EE699E6F5DF (player_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE player_warn (id INT AUTO_INCREMENT NOT NULL, player_id INT DEFAULT NULL, warn INT NOT NULL, mute INT NOT NULL, rebuke INT NOT NULL, UNIQUE INDEX UNIQ_8BA0E13699E6F5DF (player_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE server_business (id INT AUTO_INCREMENT NOT NULL, player_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, price INT NOT NULL, type INT NOT NULL, icon INT NOT NULL, x DOUBLE PRECISION NOT NULL, y DOUBLE PRECISION NOT NULL, z DOUBLE PRECISION NOT NULL, INDEX IDX_CA76EF8499E6F5DF (player_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE server_business_atm (id INT AUTO_INCREMENT NOT NULL, pos_x DOUBLE PRECISION NOT NULL, pos_y DOUBLE PRECISION NOT NULL, pos_z DOUBLE PRECISION NOT NULL, pos_fa DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE server_business_gasstation (id INT AUTO_INCREMENT NOT NULL, business_id INT DEFAULT NULL, type SMALLINT NOT NULL, upgrade SMALLINT NOT NULL, pos_x DOUBLE PRECISION NOT NULL, pos_y DOUBLE PRECISION NOT NULL, pos_z DOUBLE PRECISION NOT NULL, pos_fa DOUBLE PRECISION NOT NULL, UNIQUE INDEX UNIQ_B166521DA89DB457 (business_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE server_business_interior (id INT AUTO_INCREMENT NOT NULL, business_id INT DEFAULT NULL, enter_price INT NOT NULL, door_lock TINYINT(1) NOT NULL, interior INT NOT NULL, world INT NOT NULL, menu_x DOUBLE PRECISION NOT NULL, menu_y DOUBLE PRECISION NOT NULL, menu_z DOUBLE PRECISION NOT NULL, exit_x DOUBLE PRECISION NOT NULL, exit_y DOUBLE PRECISION NOT NULL, exit_z DOUBLE PRECISION NOT NULL, UNIQUE INDEX UNIQ_1A72E046A89DB457 (business_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE server_business_product (id INT AUTO_INCREMENT NOT NULL, business_id INT DEFAULT NULL, storage_id INT DEFAULT NULL, price INT NOT NULL, INDEX IDX_FB45A6A8A89DB457 (business_id), INDEX IDX_FB45A6A85CC5DB90 (storage_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE server_business_statistic (id INT AUTO_INCREMENT NOT NULL, business_id INT DEFAULT NULL, date VARCHAR(16) NOT NULL, cash INT NOT NULL, consumption INT NOT NULL, UNIQUE INDEX UNIQ_21345812A89DB457 (business_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE server_business_tax (id INT AUTO_INCREMENT NOT NULL, income SMALLINT NOT NULL, car_shop INT NOT NULL, bars INT NOT NULL, production INT NOT NULL, eatery INT NOT NULL, gas_stations INT NOT NULL, shops INT NOT NULL, clothing INT NOT NULL, ammunition INT NOT NULL, pizza INT NOT NULL, houses SMALLINT NOT NULL, party INT NOT NULL, business_fine INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE server_business_warehouse (id INT AUTO_INCREMENT NOT NULL, business_id INT DEFAULT NULL, storage_id INT DEFAULT NULL, count INT NOT NULL, INDEX IDX_A91C9572A89DB457 (business_id), INDEX IDX_A91C95725CC5DB90 (storage_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE server_election (id SMALLINT AUTO_INCREMENT NOT NULL, time SMALLINT NOT NULL, vote_level SMALLINT NOT NULL, Work TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE server_election_applicant (id INT AUTO_INCREMENT NOT NULL, player_id INT DEFAULT NULL, votes INT NOT NULL, party INT NOT NULL, UNIQUE INDEX UNIQ_883D458299E6F5DF (player_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE server_election_party (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(32) NOT NULL, abbreviation VARCHAR(16) NOT NULL, date VARCHAR(16) NOT NULL, founder VARCHAR(24) NOT NULL, leader VARCHAR(24) NOT NULL, candidate VARCHAR(24) NOT NULL, cash INT NOT NULL, victory SMALLINT NOT NULL, participation SMALLINT NOT NULL, description VARCHAR(128) NOT NULL, Color SMALLINT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE server_enter (id INT AUTO_INCREMENT NOT NULL, world SMALLINT NOT NULL, interior SMALLINT NOT NULL, world_tp SMALLINT NOT NULL, interior_tp SMALLINT NOT NULL, pos_x DOUBLE PRECISION NOT NULL, pos_y DOUBLE PRECISION NOT NULL, pos_z DOUBLE PRECISION NOT NULL, pos_tp_x DOUBLE PRECISION NOT NULL, pos_tp_y DOUBLE PRECISION NOT NULL, pos_tp_z DOUBLE PRECISION NOT NULL, pos_tp_fa DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE server_fraction (id INT AUTO_INCREMENT NOT NULL, player_id INT DEFAULT NULL, name VARCHAR(32) NOT NULL, UNIQUE INDEX UNIQ_3CFA1BDA99E6F5DF (player_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE server_fraction_gangzone (id INT AUTO_INCREMENT NOT NULL, fraction_id INT DEFAULT NULL, UNIQUE INDEX UNIQ_3700EA0D5A615CA9 (fraction_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE server_fraction_rang (id INT AUTO_INCREMENT NOT NULL, fraction_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, model INT NOT NULL, salary INT NOT NULL, access TINYINT(1) NOT NULL, INDEX IDX_5317EC4A5A615CA9 (fraction_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE server_fraction_warehouse (id INT AUTO_INCREMENT NOT NULL, fraction_id INT DEFAULT NULL, storage_id INT DEFAULT NULL, count INT NOT NULL, INDEX IDX_C6E12E695A615CA9 (fraction_id), INDEX IDX_C6E12E695CC5DB90 (storage_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE server_gps (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(64) NOT NULL, type SMALLINT NOT NULL, pos_x DOUBLE PRECISION NOT NULL, pos_y DOUBLE PRECISION NOT NULL, pos_z DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE server_gps_player (id INT AUTO_INCREMENT NOT NULL, player_id INT DEFAULT NULL, name VARCHAR(64) NOT NULL, pos_x DOUBLE PRECISION NOT NULL, pos_y DOUBLE PRECISION NOT NULL, pos_z DOUBLE PRECISION NOT NULL, INDEX IDX_2C44F0E699E6F5DF (player_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE server_house (id INT AUTO_INCREMENT NOT NULL, player_id INT DEFAULT NULL, door_lock TINYINT(1) NOT NULL, cash INT NOT NULL, price INT NOT NULL, interior INT NOT NULL, world INT NOT NULL, type INT NOT NULL, enter_x DOUBLE PRECISION NOT NULL, enter_y DOUBLE PRECISION NOT NULL, enter_z DOUBLE PRECISION NOT NULL, exit_x DOUBLE PRECISION NOT NULL, exit_y DOUBLE PRECISION NOT NULL, exit_z DOUBLE PRECISION NOT NULL, INDEX IDX_C7545B9499E6F5DF (player_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE server_security (id INT AUTO_INCREMENT NOT NULL, code SMALLINT NOT NULL, type SMALLINT NOT NULL, UNIQUE INDEX UNIQ_73E547D77153098 (code), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE server_skin (id INT AUTO_INCREMENT NOT NULL, skin INT NOT NULL, sex TINYINT(1) NOT NULL, type INT NOT NULL, animlib VARCHAR(255) NOT NULL, animname VARCHAR(255) NOT NULL, pos_x DOUBLE PRECISION NOT NULL, pos_y DOUBLE PRECISION NOT NULL, pos_z DOUBLE PRECISION NOT NULL, pos_fa DOUBLE PRECISION NOT NULL, cam_pos_x DOUBLE PRECISION NOT NULL, cam_pos_y DOUBLE PRECISION NOT NULL, cam_pos_z DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE server_storage (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE server_vehicle (id INT AUTO_INCREMENT NOT NULL, model SMALLINT NOT NULL, pos_x DOUBLE PRECISION NOT NULL, pos_y DOUBLE PRECISION NOT NULL, pos_z DOUBLE PRECISION NOT NULL, pos_fa DOUBLE PRECISION NOT NULL, color_0 INT NOT NULL, color_1 INT NOT NULL, fraction SMALLINT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE server_vehicle_info (id INT AUTO_INCREMENT NOT NULL, model SMALLINT NOT NULL, name VARCHAR(34) NOT NULL, price INT NOT NULL, tank SMALLINT NOT NULL, consumption SMALLINT NOT NULL, class SMALLINT NOT NULL, fuelable SMALLINT NOT NULL, fuel_mark SMALLINT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE unitpay_payments (id INT AUTO_INCREMENT NOT NULL, unitpayId VARCHAR(255) NOT NULL, account VARCHAR(255) NOT NULL, sum DOUBLE PRECISION NOT NULL, itemsCount INT DEFAULT 1 NOT NULL, dateCreate DATETIME NOT NULL, dateComplete DATETIME DEFAULT NULL, status TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE player ADD CONSTRAINT FK_98197A65C2ED4747 FOREIGN KEY (invited_id) REFERENCES player (id)');
        $this->addSql('ALTER TABLE player_admin ADD CONSTRAINT FK_377C763099E6F5DF FOREIGN KEY (player_id) REFERENCES player (id)');
        $this->addSql('ALTER TABLE player_car ADD CONSTRAINT FK_A1CA7BE99E6F5DF FOREIGN KEY (player_id) REFERENCES player (id)');
        $this->addSql('ALTER TABLE player_crimes ADD CONSTRAINT FK_F417A6B899E6F5DF FOREIGN KEY (player_id) REFERENCES player (id)');
        $this->addSql('ALTER TABLE player_donate ADD CONSTRAINT FK_42A292AF99E6F5DF FOREIGN KEY (player_id) REFERENCES player (id)');
        $this->addSql('ALTER TABLE player_fine ADD CONSTRAINT FK_1CB304A199E6F5DF FOREIGN KEY (player_id) REFERENCES player (id)');
        $this->addSql('ALTER TABLE player_fraction ADD CONSTRAINT FK_F888DB8699E6F5DF FOREIGN KEY (player_id) REFERENCES player (id)');
        $this->addSql('ALTER TABLE player_gun ADD CONSTRAINT FK_37BA847899E6F5DF FOREIGN KEY (player_id) REFERENCES player (id)');
        $this->addSql('ALTER TABLE player_inventory ADD CONSTRAINT FK_11217F0F99E6F5DF FOREIGN KEY (player_id) REFERENCES player (id)');
        $this->addSql('ALTER TABLE player_inventory ADD CONSTRAINT FK_11217F0F5CC5DB90 FOREIGN KEY (storage_id) REFERENCES server_storage (id)');
        $this->addSql('ALTER TABLE player_jail ADD CONSTRAINT FK_6EEBC4C299E6F5DF FOREIGN KEY (player_id) REFERENCES player (id)');
        $this->addSql('ALTER TABLE player_job ADD CONSTRAINT FK_86F9A1DB99E6F5DF FOREIGN KEY (player_id) REFERENCES player (id)');
        $this->addSql('ALTER TABLE player_level ADD CONSTRAINT FK_2598B75599E6F5DF FOREIGN KEY (player_id) REFERENCES player (id)');
        $this->addSql('ALTER TABLE player_lic ADD CONSTRAINT FK_A3294A7999E6F5DF FOREIGN KEY (player_id) REFERENCES player (id)');
        $this->addSql('ALTER TABLE player_money ADD CONSTRAINT FK_8AD68A299E6F5DF FOREIGN KEY (player_id) REFERENCES player (id)');
        $this->addSql('ALTER TABLE player_need ADD CONSTRAINT FK_44EE3C7799E6F5DF FOREIGN KEY (player_id) REFERENCES player (id)');
        $this->addSql('ALTER TABLE player_party ADD CONSTRAINT FK_36E735A699E6F5DF FOREIGN KEY (player_id) REFERENCES player (id)');
        $this->addSql('ALTER TABLE player_party ADD CONSTRAINT FK_36E735A6213C1059 FOREIGN KEY (party_id) REFERENCES server_election_party (id)');
        $this->addSql('ALTER TABLE player_phone ADD CONSTRAINT FK_FB3DEC9B99E6F5DF FOREIGN KEY (player_id) REFERENCES player (id)');
        $this->addSql('ALTER TABLE player_quest ADD CONSTRAINT FK_FC65835199E6F5DF FOREIGN KEY (player_id) REFERENCES player (id)');
        $this->addSql('ALTER TABLE player_settings ADD CONSTRAINT FK_E392E12599E6F5DF FOREIGN KEY (player_id) REFERENCES player (id)');
        $this->addSql('ALTER TABLE player_skill ADD CONSTRAINT FK_E14F9F3199E6F5DF FOREIGN KEY (player_id) REFERENCES player (id)');
        $this->addSql('ALTER TABLE player_wanted ADD CONSTRAINT FK_46E32EE699E6F5DF FOREIGN KEY (player_id) REFERENCES player (id)');
        $this->addSql('ALTER TABLE player_warn ADD CONSTRAINT FK_8BA0E13699E6F5DF FOREIGN KEY (player_id) REFERENCES player (id)');
        $this->addSql('ALTER TABLE server_business ADD CONSTRAINT FK_CA76EF8499E6F5DF FOREIGN KEY (player_id) REFERENCES player (id)');
        $this->addSql('ALTER TABLE server_business_gasstation ADD CONSTRAINT FK_B166521DA89DB457 FOREIGN KEY (business_id) REFERENCES server_business (id)');
        $this->addSql('ALTER TABLE server_business_interior ADD CONSTRAINT FK_1A72E046A89DB457 FOREIGN KEY (business_id) REFERENCES server_business (id)');
        $this->addSql('ALTER TABLE server_business_product ADD CONSTRAINT FK_FB45A6A8A89DB457 FOREIGN KEY (business_id) REFERENCES server_business (id)');
        $this->addSql('ALTER TABLE server_business_product ADD CONSTRAINT FK_FB45A6A85CC5DB90 FOREIGN KEY (storage_id) REFERENCES server_storage (id)');
        $this->addSql('ALTER TABLE server_business_statistic ADD CONSTRAINT FK_21345812A89DB457 FOREIGN KEY (business_id) REFERENCES server_business (id)');
        $this->addSql('ALTER TABLE server_business_warehouse ADD CONSTRAINT FK_A91C9572A89DB457 FOREIGN KEY (business_id) REFERENCES server_business (id)');
        $this->addSql('ALTER TABLE server_business_warehouse ADD CONSTRAINT FK_A91C95725CC5DB90 FOREIGN KEY (storage_id) REFERENCES server_storage (id)');
        $this->addSql('ALTER TABLE server_election_applicant ADD CONSTRAINT FK_883D458299E6F5DF FOREIGN KEY (player_id) REFERENCES player (id)');
        $this->addSql('ALTER TABLE server_fraction ADD CONSTRAINT FK_3CFA1BDA99E6F5DF FOREIGN KEY (player_id) REFERENCES player (id)');
        $this->addSql('ALTER TABLE server_fraction_gangzone ADD CONSTRAINT FK_3700EA0D5A615CA9 FOREIGN KEY (fraction_id) REFERENCES server_fraction (id)');
        $this->addSql('ALTER TABLE server_fraction_rang ADD CONSTRAINT FK_5317EC4A5A615CA9 FOREIGN KEY (fraction_id) REFERENCES server_fraction (id)');
        $this->addSql('ALTER TABLE server_fraction_warehouse ADD CONSTRAINT FK_C6E12E695A615CA9 FOREIGN KEY (fraction_id) REFERENCES server_fraction (id)');
        $this->addSql('ALTER TABLE server_fraction_warehouse ADD CONSTRAINT FK_C6E12E695CC5DB90 FOREIGN KEY (storage_id) REFERENCES server_storage (id)');
        $this->addSql('ALTER TABLE server_gps_player ADD CONSTRAINT FK_2C44F0E699E6F5DF FOREIGN KEY (player_id) REFERENCES player (id)');
        $this->addSql('ALTER TABLE server_house ADD CONSTRAINT FK_C7545B9499E6F5DF FOREIGN KEY (player_id) REFERENCES player (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE player DROP FOREIGN KEY FK_98197A65C2ED4747');
        $this->addSql('ALTER TABLE player_admin DROP FOREIGN KEY FK_377C763099E6F5DF');
        $this->addSql('ALTER TABLE player_car DROP FOREIGN KEY FK_A1CA7BE99E6F5DF');
        $this->addSql('ALTER TABLE player_crimes DROP FOREIGN KEY FK_F417A6B899E6F5DF');
        $this->addSql('ALTER TABLE player_donate DROP FOREIGN KEY FK_42A292AF99E6F5DF');
        $this->addSql('ALTER TABLE player_fine DROP FOREIGN KEY FK_1CB304A199E6F5DF');
        $this->addSql('ALTER TABLE player_fraction DROP FOREIGN KEY FK_F888DB8699E6F5DF');
        $this->addSql('ALTER TABLE player_gun DROP FOREIGN KEY FK_37BA847899E6F5DF');
        $this->addSql('ALTER TABLE player_inventory DROP FOREIGN KEY FK_11217F0F99E6F5DF');
        $this->addSql('ALTER TABLE player_jail DROP FOREIGN KEY FK_6EEBC4C299E6F5DF');
        $this->addSql('ALTER TABLE player_job DROP FOREIGN KEY FK_86F9A1DB99E6F5DF');
        $this->addSql('ALTER TABLE player_level DROP FOREIGN KEY FK_2598B75599E6F5DF');
        $this->addSql('ALTER TABLE player_lic DROP FOREIGN KEY FK_A3294A7999E6F5DF');
        $this->addSql('ALTER TABLE player_money DROP FOREIGN KEY FK_8AD68A299E6F5DF');
        $this->addSql('ALTER TABLE player_need DROP FOREIGN KEY FK_44EE3C7799E6F5DF');
        $this->addSql('ALTER TABLE player_party DROP FOREIGN KEY FK_36E735A699E6F5DF');
        $this->addSql('ALTER TABLE player_phone DROP FOREIGN KEY FK_FB3DEC9B99E6F5DF');
        $this->addSql('ALTER TABLE player_quest DROP FOREIGN KEY FK_FC65835199E6F5DF');
        $this->addSql('ALTER TABLE player_settings DROP FOREIGN KEY FK_E392E12599E6F5DF');
        $this->addSql('ALTER TABLE player_skill DROP FOREIGN KEY FK_E14F9F3199E6F5DF');
        $this->addSql('ALTER TABLE player_wanted DROP FOREIGN KEY FK_46E32EE699E6F5DF');
        $this->addSql('ALTER TABLE player_warn DROP FOREIGN KEY FK_8BA0E13699E6F5DF');
        $this->addSql('ALTER TABLE server_business DROP FOREIGN KEY FK_CA76EF8499E6F5DF');
        $this->addSql('ALTER TABLE server_election_applicant DROP FOREIGN KEY FK_883D458299E6F5DF');
        $this->addSql('ALTER TABLE server_fraction DROP FOREIGN KEY FK_3CFA1BDA99E6F5DF');
        $this->addSql('ALTER TABLE server_gps_player DROP FOREIGN KEY FK_2C44F0E699E6F5DF');
        $this->addSql('ALTER TABLE server_house DROP FOREIGN KEY FK_C7545B9499E6F5DF');
        $this->addSql('ALTER TABLE server_business_gasstation DROP FOREIGN KEY FK_B166521DA89DB457');
        $this->addSql('ALTER TABLE server_business_interior DROP FOREIGN KEY FK_1A72E046A89DB457');
        $this->addSql('ALTER TABLE server_business_product DROP FOREIGN KEY FK_FB45A6A8A89DB457');
        $this->addSql('ALTER TABLE server_business_statistic DROP FOREIGN KEY FK_21345812A89DB457');
        $this->addSql('ALTER TABLE server_business_warehouse DROP FOREIGN KEY FK_A91C9572A89DB457');
        $this->addSql('ALTER TABLE player_party DROP FOREIGN KEY FK_36E735A6213C1059');
        $this->addSql('ALTER TABLE server_fraction_gangzone DROP FOREIGN KEY FK_3700EA0D5A615CA9');
        $this->addSql('ALTER TABLE server_fraction_rang DROP FOREIGN KEY FK_5317EC4A5A615CA9');
        $this->addSql('ALTER TABLE server_fraction_warehouse DROP FOREIGN KEY FK_C6E12E695A615CA9');
        $this->addSql('ALTER TABLE player_inventory DROP FOREIGN KEY FK_11217F0F5CC5DB90');
        $this->addSql('ALTER TABLE server_business_product DROP FOREIGN KEY FK_FB45A6A85CC5DB90');
        $this->addSql('ALTER TABLE server_business_warehouse DROP FOREIGN KEY FK_A91C95725CC5DB90');
        $this->addSql('ALTER TABLE server_fraction_warehouse DROP FOREIGN KEY FK_C6E12E695CC5DB90');
        $this->addSql('DROP TABLE player');
        $this->addSql('DROP TABLE player_admin');
        $this->addSql('DROP TABLE player_ban');
        $this->addSql('DROP TABLE player_car');
        $this->addSql('DROP TABLE player_crimes');
        $this->addSql('DROP TABLE player_donate');
        $this->addSql('DROP TABLE player_fine');
        $this->addSql('DROP TABLE player_fraction');
        $this->addSql('DROP TABLE player_gun');
        $this->addSql('DROP TABLE player_inventory');
        $this->addSql('DROP TABLE player_jail');
        $this->addSql('DROP TABLE player_job');
        $this->addSql('DROP TABLE player_level');
        $this->addSql('DROP TABLE player_lic');
        $this->addSql('DROP TABLE player_money');
        $this->addSql('DROP TABLE player_need');
        $this->addSql('DROP TABLE player_party');
        $this->addSql('DROP TABLE player_phone');
        $this->addSql('DROP TABLE player_quest');
        $this->addSql('DROP TABLE player_settings');
        $this->addSql('DROP TABLE player_skill');
        $this->addSql('DROP TABLE player_wanted');
        $this->addSql('DROP TABLE player_warn');
        $this->addSql('DROP TABLE server_business');
        $this->addSql('DROP TABLE server_business_atm');
        $this->addSql('DROP TABLE server_business_gasstation');
        $this->addSql('DROP TABLE server_business_interior');
        $this->addSql('DROP TABLE server_business_product');
        $this->addSql('DROP TABLE server_business_statistic');
        $this->addSql('DROP TABLE server_business_tax');
        $this->addSql('DROP TABLE server_business_warehouse');
        $this->addSql('DROP TABLE server_election');
        $this->addSql('DROP TABLE server_election_applicant');
        $this->addSql('DROP TABLE server_election_party');
        $this->addSql('DROP TABLE server_enter');
        $this->addSql('DROP TABLE server_fraction');
        $this->addSql('DROP TABLE server_fraction_gangzone');
        $this->addSql('DROP TABLE server_fraction_rang');
        $this->addSql('DROP TABLE server_fraction_warehouse');
        $this->addSql('DROP TABLE server_gps');
        $this->addSql('DROP TABLE server_gps_player');
        $this->addSql('DROP TABLE server_house');
        $this->addSql('DROP TABLE server_security');
        $this->addSql('DROP TABLE server_skin');
        $this->addSql('DROP TABLE server_storage');
        $this->addSql('DROP TABLE server_vehicle');
        $this->addSql('DROP TABLE server_vehicle_info');
        $this->addSql('DROP TABLE unitpay_payments');
    }
}
