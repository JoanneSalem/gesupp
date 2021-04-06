<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210406181442 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE demande (id INT AUTO_INCREMENT NOT NULL, id_demandeur INT NOT NULL, id_collaborateur INT NOT NULL, date_debut DATETIME NOT NULL, date_fin DATETIME NOT NULL, duree INT NOT NULL, tache VARCHAR(255) NOT NULL, statut VARCHAR(255) NOT NULL, id_cd1 INT DEFAULT NULL, id_rh1 INT DEFAULT NULL, id_du1 INT DEFAULT NULL, id_cd2 INT DEFAULT NULL, id_rh2 INT DEFAULT NULL, id_du2 INT DEFAULT NULL, statut_cd1 VARCHAR(255) DEFAULT NULL, statut_rh1 VARCHAR(255) DEFAULT NULL, statut_du1 VARCHAR(255) DEFAULT NULL, statut_cd2 VARCHAR(255) DEFAULT NULL, statut_rh2 VARCHAR(255) DEFAULT NULL, statut_du2 VARCHAR(255) DEFAULT NULL, duree_reelle INT DEFAULT NULL, payee VARCHAR(3) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE utilisateur ADD departement VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE demande');
        $this->addSql('ALTER TABLE utilisateur DROP departement');
    }
}
