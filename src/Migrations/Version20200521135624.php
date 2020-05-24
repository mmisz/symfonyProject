<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200521135624 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE tags (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(150) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tag_to_do_list (tag_id INT NOT NULL, to_do_list_id INT NOT NULL, INDEX IDX_EF7BCABDBAD26311 (tag_id), INDEX IDX_EF7BCABDB3AB48EB (to_do_list_id), PRIMARY KEY(tag_id, to_do_list_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE tag_to_do_list ADD CONSTRAINT FK_EF7BCABDBAD26311 FOREIGN KEY (tag_id) REFERENCES tags (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE tag_to_do_list ADD CONSTRAINT FK_EF7BCABDB3AB48EB FOREIGN KEY (to_do_list_id) REFERENCES to_do_lists (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE tag_to_do_list DROP FOREIGN KEY FK_EF7BCABDBAD26311');
        $this->addSql('DROP TABLE tags');
        $this->addSql('DROP TABLE tag_to_do_list');
    }
}
