<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20190327133429 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE player
            (
              id            INT AUTO_INCREMENT NOT NULL,
              name          VARCHAR(255)       NOT NULL,
              amount        INT                NOT NULL,
              victories     INT                NOT NULL,
              fails         INT                NOT NULL,
              creation_date DATETIME           NOT NULL,
              PRIMARY KEY (id)
            ) DEFAULT CHARACTER SET utf8mb4
              COLLATE utf8mb4_unicode_ci
              ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {

    }
}
