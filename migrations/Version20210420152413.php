<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210420152413 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE factures (ID_Facture INT AUTO_INCREMENT NOT NULL, Nom_Facture VARCHAR(50) NOT NULL, Prix_Facture DOUBLE PRECISION NOT NULL, Status VARCHAR(25) NOT NULL, PRIMARY KEY(ID_Facture)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE organisateur (id_org INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, mail VARCHAR(255) NOT NULL, mdp VARCHAR(255) NOT NULL, score INT NOT NULL, PRIMARY KEY(id_org)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE rate (idRate INT AUTO_INCREMENT NOT NULL, idCoach INT DEFAULT NULL, NomPrenomCoach VARCHAR(50) DEFAULT NULL, NomEquipe VARCHAR(50) DEFAULT NULL, DateRate DATE DEFAULT NULL, Rate INT DEFAULT NULL, INDEX idCoach (idCoach), PRIMARY KEY(idRate)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE stocks (ID_Produit INT AUTO_INCREMENT NOT NULL, Nom_Produit VARCHAR(50) NOT NULL, Quantite INT NOT NULL, Prix_Unite DOUBLE PRECISION NOT NULL, PRIMARY KEY(ID_Produit)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, mdp VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, role VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE vote (id_vote INT AUTO_INCREMENT NOT NULL, id_match INT NOT NULL, id_user INT NOT NULL, vote INT NOT NULL, INDEX id_match (id_match), PRIMARY KEY(id_vote)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('DROP TABLE facture');
        $this->addSql('DROP TABLE terrain');
        $this->addSql('ALTER TABLE article DROP FOREIGN KEY id_personnel');
        $this->addSql('ALTER TABLE coach ADD date_naissance DATE NOT NULL, ADD salaire DOUBLE PRECISION NOT NULL, ADD nb_trophe_internationaux INT NOT NULL, ADD formation_prefere VARCHAR(50) NOT NULL, ADD image_formation VARCHAR(255) NOT NULL, ADD image_coach VARCHAR(255) NOT NULL, ADD age INT NOT NULL, ADD mdp_coach VARCHAR(50) DEFAULT NULL, CHANGE grade grade VARCHAR(50) DEFAULT NULL, CHANGE age_coach nb_trophe_locaux INT NOT NULL');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY fk_article');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY fk_joueur');
        $this->addSql('DROP INDEX id_coach ON entrainement');
        $this->addSql('ALTER TABLE entrainement ADD heure VARCHAR(50) NOT NULL, ADD id_stade INT NOT NULL, ADD id_equipe INT NOT NULL, ADD nom_equipee VARCHAR(255) NOT NULL, ADD nom_coache VARCHAR(255) NOT NULL, ADD nom_stadee VARCHAR(255) NOT NULL, ADD Type VARCHAR(255) NOT NULL, DROP max_joueurs, DROP id_terrain, DROP id_joueur');
        $this->addSql('ALTER TABLE equipe MODIFY id_equipe INT NOT NULL');
        $this->addSql('ALTER TABLE equipe DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE equipe DROP nb_joueurs, CHANGE id_equipe id_e INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE equipe ADD PRIMARY KEY (id_e)');
        $this->addSql('ALTER TABLE joueur ADD age_joueur INT NOT NULL, ADD categorie VARCHAR(50) NOT NULL, ADD position VARCHAR(255) NOT NULL, ADD image VARCHAR(255) NOT NULL, ADD password VARCHAR(255) NOT NULL');
        $this->addSql('CREATE INDEX SECONDARY ON joueur (id_equipe)');
        $this->addSql('ALTER TABLE `match` ADD id_equipe1 INT DEFAULT NULL, ADD id_equipe2 INT DEFAULT NULL, ADD id_org INT DEFAULT NULL, ADD heure_deb VARCHAR(255) NOT NULL, ADD heure_fin VARCHAR(255) NOT NULL, ADD nb_spectateur INT DEFAULT NULL, ADD description VARCHAR(255) NOT NULL, ADD status VARCHAR(255) NOT NULL, DROP duree_match, DROP id_equipe, CHANGE score score VARCHAR(255) DEFAULT NULL, CHANGE id_stade id_stade INT DEFAULT NULL, CHANGE date_debut date DATE NOT NULL');
        $this->addSql('CREATE INDEX id_stade ON `match` (id_stade)');
        $this->addSql('CREATE INDEX id_equipe2 ON `match` (id_equipe2)');
        $this->addSql('CREATE INDEX id_equipe1 ON `match` (id_equipe1)');
        $this->addSql('CREATE INDEX id_org ON `match` (id_org)');
        $this->addSql('ALTER TABLE reclamation MODIFY id_reclamation INT NOT NULL');
        $this->addSql('ALTER TABLE reclamation DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE reclamation ADD idJoueur INT NOT NULL, ADD SujetRec VARCHAR(75) NOT NULL, ADD PrioriteRec VARCHAR(6) NOT NULL, ADD StatusRec VARCHAR(55) NOT NULL, ADD DateTraitement DATE DEFAULT NULL, ADD NomPrenomCoach VARCHAR(50) DEFAULT NULL, ADD NomJoueur VARCHAR(255) NOT NULL, ADD PrenomJoueur VARCHAR(255) NOT NULL, ADD EmailJoueur VARCHAR(255) NOT NULL, ADD TlJoueur VARCHAR(12) NOT NULL, ADD imgRec VARCHAR(255) DEFAULT NULL, ADD Opened INT NOT NULL, DROP id_coach, DROP id_joueur, CHANGE id_reclamation idRec INT AUTO_INCREMENT NOT NULL, CHANGE contenu_reclamation DescriptionRec VARCHAR(50) NOT NULL, CHANGE date_reclamation DateRec DATE NOT NULL');
        $this->addSql('CREATE INDEX id_joueur ON reclamation (idJoueur)');
        $this->addSql('ALTER TABLE reclamation ADD PRIMARY KEY (idRec)');
        $this->addSql('ALTER TABLE stade ADD id_User INT DEFAULT NULL, DROP disponibilite, CHANGE nom_stade nom_stade VARCHAR(100) NOT NULL, CHANGE ville ville VARCHAR(100) NOT NULL, CHANGE adresse adresse VARCHAR(100) NOT NULL');
        $this->addSql('CREATE INDEX idUser ON stade (id_User)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `match` DROP FOREIGN KEY FK_7A5BC505ECB152DA');
        $this->addSql('ALTER TABLE stade DROP FOREIGN KEY FK_E951C0AAA6816575');
        $this->addSql('CREATE TABLE facture (id_facture INT AUTO_INCREMENT NOT NULL, total INT NOT NULL, id_fournisseur INT NOT NULL, id_equipement INT NOT NULL, PRIMARY KEY(id_facture)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('CREATE TABLE terrain (id_terrain INT AUTO_INCREMENT NOT NULL, nom_terrain VARCHAR(50) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, type_terrain VARCHAR(50) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, adresse_terrain VARCHAR(50) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, disponibilite INT NOT NULL, PRIMARY KEY(id_terrain)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('DROP TABLE factures');
        $this->addSql('DROP TABLE organisateur');
        $this->addSql('DROP TABLE rate');
        $this->addSql('DROP TABLE stocks');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE vote');
        $this->addSql('ALTER TABLE article ADD CONSTRAINT id_personnel FOREIGN KEY (id_personnel) REFERENCES personnel (id_personnel) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE coach ADD age_coach INT NOT NULL, DROP date_naissance, DROP salaire, DROP nb_trophe_locaux, DROP nb_trophe_internationaux, DROP formation_prefere, DROP image_formation, DROP image_coach, DROP age, DROP mdp_coach, CHANGE grade grade VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT fk_article FOREIGN KEY (id_article) REFERENCES article (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT fk_joueur FOREIGN KEY (id_joueur) REFERENCES joueur (id_joueur) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE entrainement ADD max_joueurs INT NOT NULL, ADD id_terrain INT NOT NULL, ADD id_joueur INT NOT NULL, DROP heure, DROP id_stade, DROP id_equipe, DROP nom_equipee, DROP nom_coache, DROP nom_stadee, DROP Type');
        $this->addSql('CREATE INDEX id_coach ON entrainement (id_coach, id_terrain, id_joueur)');
        $this->addSql('ALTER TABLE equipe MODIFY id_e INT NOT NULL');
        $this->addSql('ALTER TABLE equipe DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE equipe ADD nb_joueurs INT NOT NULL, CHANGE id_e id_equipe INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE equipe ADD PRIMARY KEY (id_equipe)');
        $this->addSql('DROP INDEX SECONDARY ON joueur');
        $this->addSql('ALTER TABLE joueur DROP age_joueur, DROP categorie, DROP position, DROP image, DROP password');
        $this->addSql('ALTER TABLE `match` DROP FOREIGN KEY FK_7A5BC50530B8EB96');
        $this->addSql('ALTER TABLE `match` DROP FOREIGN KEY FK_7A5BC505A9B1BA2C');
        $this->addSql('ALTER TABLE `match` DROP FOREIGN KEY FK_7A5BC5057D4819A');
        $this->addSql('DROP INDEX id_stade ON `match`');
        $this->addSql('DROP INDEX id_equipe2 ON `match`');
        $this->addSql('DROP INDEX id_equipe1 ON `match`');
        $this->addSql('DROP INDEX id_org ON `match`');
        $this->addSql('ALTER TABLE `match` ADD duree_match INT NOT NULL, ADD id_equipe INT NOT NULL, DROP id_equipe1, DROP id_equipe2, DROP id_org, DROP heure_deb, DROP heure_fin, DROP nb_spectateur, DROP description, DROP status, CHANGE id_stade id_stade INT NOT NULL, CHANGE score score INT NOT NULL, CHANGE date date_debut DATE NOT NULL');
        $this->addSql('ALTER TABLE reclamation MODIFY idRec INT NOT NULL');
        $this->addSql('DROP INDEX id_joueur ON reclamation');
        $this->addSql('ALTER TABLE reclamation DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE reclamation ADD id_coach INT NOT NULL, ADD id_joueur INT NOT NULL, DROP idJoueur, DROP SujetRec, DROP PrioriteRec, DROP StatusRec, DROP DateTraitement, DROP NomPrenomCoach, DROP NomJoueur, DROP PrenomJoueur, DROP EmailJoueur, DROP TlJoueur, DROP imgRec, DROP Opened, CHANGE idrec id_reclamation INT AUTO_INCREMENT NOT NULL, CHANGE descriptionrec contenu_reclamation VARCHAR(50) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, CHANGE daterec date_reclamation DATE NOT NULL');
        $this->addSql('ALTER TABLE reclamation ADD PRIMARY KEY (id_reclamation)');
        $this->addSql('DROP INDEX idUser ON stade');
        $this->addSql('ALTER TABLE stade ADD disponibilite INT NOT NULL, DROP id_User, CHANGE nom_stade nom_stade INT NOT NULL, CHANGE ville ville VARCHAR(50) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, CHANGE adresse adresse VARCHAR(50) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`');
    }
}
