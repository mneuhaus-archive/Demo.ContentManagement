<?php
namespace TYPO3\FLOW3\Persistence\Doctrine\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration,
	Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your need!
 */
class Version20120502003337 extends AbstractMigration {

	/**
	 * @param Schema $schema
	 * @return void
	 */
	public function up(Schema $schema) {
			// this up() migration is autogenerated, please modify it to your needs
		$this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql");
		
		$this->addSql("CREATE TABLE demo_contentmanagement_domain_model_widgets_addresses_join (contentmanagement_widgets VARCHAR(40) NOT NULL, contentmanagement_address VARCHAR(40) NOT NULL, INDEX IDX_8A8D89A37971CFCA (contentmanagement_widgets), INDEX IDX_8A8D89A3E967448A (contentmanagement_address), PRIMARY KEY(contentmanagement_widgets, contentmanagement_address)) ENGINE = InnoDB");
		$this->addSql("CREATE TABLE demo_contentmanagement_domain_model__7e861_addresseschosen_join (contentmanagement_widgets VARCHAR(40) NOT NULL, contentmanagement_address VARCHAR(40) NOT NULL, INDEX IDX_A921BD5D7971CFCA (contentmanagement_widgets), INDEX IDX_A921BD5DE967448A (contentmanagement_address), PRIMARY KEY(contentmanagement_widgets, contentmanagement_address)) ENGINE = InnoDB");
		$this->addSql("ALTER TABLE demo_contentmanagement_domain_model_widgets_addresses_join ADD CONSTRAINT FK_8A8D89A37971CFCA FOREIGN KEY (contentmanagement_widgets) REFERENCES demo_contentmanagement_domain_model_widgets (flow3_persistence_identifier)");
		$this->addSql("ALTER TABLE demo_contentmanagement_domain_model_widgets_addresses_join ADD CONSTRAINT FK_8A8D89A3E967448A FOREIGN KEY (contentmanagement_address) REFERENCES demo_contentmanagement_domain_model_address (flow3_persistence_identifier)");
		$this->addSql("ALTER TABLE demo_contentmanagement_domain_model__7e861_addresseschosen_join ADD CONSTRAINT FK_A921BD5D7971CFCA FOREIGN KEY (contentmanagement_widgets) REFERENCES demo_contentmanagement_domain_model_widgets (flow3_persistence_identifier)");
		$this->addSql("ALTER TABLE demo_contentmanagement_domain_model__7e861_addresseschosen_join ADD CONSTRAINT FK_A921BD5DE967448A FOREIGN KEY (contentmanagement_address) REFERENCES demo_contentmanagement_domain_model_address (flow3_persistence_identifier)");
		$this->addSql("ALTER TABLE demo_contentmanagement_domain_model_widgets ADD address VARCHAR(40) DEFAULT NULL, ADD password VARCHAR(255) NOT NULL");
		$this->addSql("ALTER TABLE demo_contentmanagement_domain_model_widgets ADD CONSTRAINT FK_3B996231D4E6F81 FOREIGN KEY (address) REFERENCES demo_contentmanagement_domain_model_address (flow3_persistence_identifier)");
		$this->addSql("CREATE INDEX IDX_3B996231D4E6F81 ON demo_contentmanagement_domain_model_widgets (address)");
	}

	/**
	 * @param Schema $schema
	 * @return void
	 */
	public function down(Schema $schema) {
			// this down() migration is autogenerated, please modify it to your needs
		$this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql");
		
		$this->addSql("DROP TABLE demo_contentmanagement_domain_model_widgets_addresses_join");
		$this->addSql("DROP TABLE demo_contentmanagement_domain_model__7e861_addresseschosen_join");
		$this->addSql("ALTER TABLE demo_contentmanagement_domain_model_widgets DROP FOREIGN KEY FK_3B996231D4E6F81");
		$this->addSql("DROP INDEX IDX_3B996231D4E6F81 ON demo_contentmanagement_domain_model_widgets");
		$this->addSql("ALTER TABLE demo_contentmanagement_domain_model_widgets DROP address, DROP password");
	}
}

?>