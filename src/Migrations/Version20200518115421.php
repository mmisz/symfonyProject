<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200518115421 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE list_comments ADD to_do_list_id INT NOT NULL');
        $this->addSql('ALTER TABLE list_comments ADD CONSTRAINT FK_21F3A54AB3AB48EB FOREIGN KEY (to_do_list_id) REFERENCES to_do_lists (id)');
        $this->addSql('CREATE INDEX IDX_21F3A54AB3AB48EB ON list_comments (to_do_list_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE list_comments DROP FOREIGN KEY FK_21F3A54AB3AB48EB');
        $this->addSql('DROP INDEX IDX_21F3A54AB3AB48EB ON list_comments');
        $this->addSql('ALTER TABLE list_comments DROP to_do_list_id');
    }
}
