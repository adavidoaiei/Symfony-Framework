<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250524172040 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE post ADD COLUMN email VARCHAR(255) NOT NULL
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TEMPORARY TABLE __temp__post AS SELECT id, title, content, created_at FROM post
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE post
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE post (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, title VARCHAR(255) NOT NULL, content CLOB NOT NULL, created_at DATETIME NOT NULL --(DC2Type:datetime_immutable)
            )
        SQL);
        $this->addSql(<<<'SQL'
            INSERT INTO post (id, title, content, created_at) SELECT id, title, content, created_at FROM __temp__post
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE __temp__post
        SQL);
    }
}
