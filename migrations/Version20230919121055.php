<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230919121055 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE poppodium (id INT AUTO_INCREMENT NOT NULL, naam VARCHAR(50) DEFAULT NULL, adres VARCHAR(80) DEFAULT NULL, postcode VARCHAR(10) DEFAULT NULL, woonplaats VARCHAR(40) NOT NULL, telefoonnummer INT DEFAULT NULL, email VARCHAR(50) DEFAULT NULL, website VARCHAR(80) DEFAULT NULL, logo_url VARCHAR(100) DEFAULT NULL, afbeelding_url VARCHAR(100) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE poppodium');
    }
}
