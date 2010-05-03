<?php
class M4bde2ef6602846d4bb87100c7287acdc extends CakeMigration {

/**
 * Migration description
 *
 * @var string
 * @access public
 */
	var $description = '';

/**
 * Actions to be performed
 *
 * @var array $migration
 * @access public
 */
	var $migration = array(
		'up' => array(
			'create_table' => array(
				'acos' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
					'parent_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10),
					'model' => array('type' => 'string', 'null' => true),
					'foreign_key' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10),
					'alias' => array('type' => 'string', 'null' => true),
					'lft' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10),
					'rght' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'MyISAM'),
				),
				'aros' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
					'parent_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10),
					'model' => array('type' => 'string', 'null' => true),
					'foreign_key' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10),
					'alias' => array('type' => 'string', 'null' => true),
					'lft' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10),
					'rght' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'MyISAM'),
				),
				'aros_acos' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
					'aro_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
					'aco_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
					'_create' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 2),
					'_read' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 2),
					'_update' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 2),
					'_delete' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 2),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'MyISAM'),
				),
				'blocks' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 20, 'key' => 'primary'),
					'region_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 20),
					'title' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100),
					'alias' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'key' => 'unique'),
					'body' => array('type' => 'text', 'null' => false, 'default' => NULL),
					'show_title' => array('type' => 'boolean', 'null' => false, 'default' => '1'),
					'class' => array('type' => 'string', 'null' => false, 'default' => NULL),
					'status' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
					'weight' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'element' => array('type' => 'string', 'null' => false, 'default' => NULL),
					'visibility_roles' => array('type' => 'text', 'null' => false, 'default' => NULL),
					'visibility_paths' => array('type' => 'text', 'null' => false, 'default' => NULL),
					'visibility_php' => array('type' => 'text', 'null' => false, 'default' => NULL),
					'params' => array('type' => 'text', 'null' => false, 'default' => NULL),
					'updated' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
					'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
						'alias' => array('column' => 'alias', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'MyISAM'),
				),
				'comments' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 20, 'key' => 'primary'),
					'parent_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 20),
					'node_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 20),
					'user_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 20),
					'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50),
					'email' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100),
					'website' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 200),
					'ip' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100),
					'title' => array('type' => 'string', 'null' => false, 'default' => NULL),
					'body' => array('type' => 'text', 'null' => false, 'default' => NULL),
					'rating' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'status' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
					'notify' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
					'type' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100),
					'comment_type' => array('type' => 'string', 'null' => false, 'default' => 'comment', 'length' => 100),
					'lft' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'rght' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'updated' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
					'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'MyISAM'),
				),
				'contacts' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'title' => array('type' => 'string', 'null' => false, 'default' => NULL),
					'alias' => array('type' => 'string', 'null' => false, 'default' => NULL),
					'body' => array('type' => 'text', 'null' => false, 'default' => NULL),
					'name' => array('type' => 'string', 'null' => false, 'default' => NULL),
					'position' => array('type' => 'string', 'null' => false, 'default' => NULL),
					'address' => array('type' => 'text', 'null' => false, 'default' => NULL),
					'address2' => array('type' => 'text', 'null' => false, 'default' => NULL),
					'state' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100),
					'country' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100),
					'postcode' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100),
					'phone' => array('type' => 'string', 'null' => false, 'default' => NULL),
					'fax' => array('type' => 'string', 'null' => false, 'default' => NULL),
					'email' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100),
					'message_status' => array('type' => 'boolean', 'null' => false, 'default' => '1'),
					'message_archive' => array('type' => 'boolean', 'null' => false, 'default' => '1'),
					'message_count' => array('type' => 'integer', 'null' => false, 'default' => '0'),
					'message_spam_protection' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
					'message_captcha' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
					'message_notify' => array('type' => 'boolean', 'null' => false, 'default' => '1'),
					'status' => array('type' => 'boolean', 'null' => false, 'default' => '1'),
					'updated' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
					'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'MyISAM'),
				),
				'i18n' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
					'locale' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 6, 'key' => 'index'),
					'model' => array('type' => 'string', 'null' => false, 'default' => NULL, 'key' => 'index'),
					'foreign_key' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'index'),
					'field' => array('type' => 'string', 'null' => false, 'default' => NULL, 'key' => 'index'),
					'content' => array('type' => 'text', 'null' => true, 'default' => NULL),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
						'locale' => array('column' => 'locale', 'unique' => 0),
						'model' => array('column' => 'model', 'unique' => 0),
						'row_id' => array('column' => 'foreign_key', 'unique' => 0),
						'field' => array('column' => 'field', 'unique' => 0),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'MyISAM'),
				),
				'languages' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'title' => array('type' => 'string', 'null' => false, 'default' => NULL),
					'native' => array('type' => 'string', 'null' => false, 'default' => NULL),
					'alias' => array('type' => 'string', 'null' => false, 'default' => NULL),
					'status' => array('type' => 'boolean', 'null' => false, 'default' => '1'),
					'weight' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'updated' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
					'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'MyISAM'),
				),
				'links' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 20, 'key' => 'primary'),
					'parent_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 20),
					'menu_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 20),
					'title' => array('type' => 'string', 'null' => false, 'default' => NULL),
					'description' => array('type' => 'text', 'null' => false, 'default' => NULL),
					'link' => array('type' => 'string', 'null' => false, 'default' => NULL),
					'target' => array('type' => 'string', 'null' => false, 'default' => NULL),
					'rel' => array('type' => 'string', 'null' => false, 'default' => NULL),
					'status' => array('type' => 'boolean', 'null' => false, 'default' => '1'),
					'lft' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'rght' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'visibility_roles' => array('type' => 'text', 'null' => false, 'default' => NULL),
					'params' => array('type' => 'text', 'null' => false, 'default' => NULL),
					'updated' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
					'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'MyISAM'),
				),
				'menus' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
					'title' => array('type' => 'string', 'null' => false, 'default' => NULL),
					'alias' => array('type' => 'string', 'null' => false, 'default' => NULL, 'key' => 'unique'),
					'description' => array('type' => 'text', 'null' => false, 'default' => NULL),
					'status' => array('type' => 'boolean', 'null' => false, 'default' => '1'),
					'weight' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'link_count' => array('type' => 'integer', 'null' => false, 'default' => NULL),
					'params' => array('type' => 'text', 'null' => false, 'default' => NULL),
					'updated' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
					'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
						'alias' => array('column' => 'alias', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'MyISAM'),
				),
				'messages' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'contact_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
					'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100),
					'email' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100),
					'title' => array('type' => 'string', 'null' => false, 'default' => NULL),
					'body' => array('type' => 'text', 'null' => false, 'default' => NULL),
					'website' => array('type' => 'string', 'null' => false, 'default' => NULL),
					'phone' => array('type' => 'string', 'null' => false, 'default' => NULL),
					'address' => array('type' => 'text', 'null' => false, 'default' => NULL),
					'message_type' => array('type' => 'string', 'null' => true, 'default' => NULL),
					'status' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
					'updated' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
					'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'MyISAM'),
				),
				'meta' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 20, 'key' => 'primary'),
					'model' => array('type' => 'string', 'null' => false, 'default' => 'Node'),
					'foreign_key' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 20),
					'key' => array('type' => 'string', 'null' => false, 'default' => NULL),
					'value' => array('type' => 'text', 'null' => true, 'default' => NULL),
					'weight' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'MyISAM'),
				),
				'nodes' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 20, 'key' => 'primary'),
					'parent_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 20),
					'user_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 20),
					'title' => array('type' => 'string', 'null' => false, 'default' => NULL),
					'slug' => array('type' => 'string', 'null' => false, 'default' => NULL, 'key' => 'unique'),
					'body' => array('type' => 'text', 'null' => false, 'default' => NULL, 'key' => 'index'),
					'excerpt' => array('type' => 'text', 'null' => false, 'default' => NULL),
					'status' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
					'mime_type' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100),
					'comment_status' => array('type' => 'integer', 'null' => false, 'default' => '1', 'length' => 1),
					'comment_count' => array('type' => 'integer', 'null' => true, 'default' => '0'),
					'promote' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
					'path' => array('type' => 'string', 'null' => false, 'default' => NULL),
					'terms' => array('type' => 'text', 'null' => false, 'default' => NULL),
					'sticky' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
					'lft' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'rght' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'visibility_roles' => array('type' => 'text', 'null' => false, 'default' => NULL),
					'type' => array('type' => 'string', 'null' => false, 'default' => 'node', 'length' => 100),
					'updated' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
					'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
						'slug' => array('column' => 'slug', 'unique' => 1),
						'body' => array('column' => 'body', 'unique' => 0),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'MyISAM'),
				),
				'nodes_terms' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 20, 'key' => 'primary'),
					'node_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 10),
					'vocabulary_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 10),
					'term_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 10),
					'weight' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'MyISAM'),
				),
				'regions' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'title' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100),
					'alias' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'key' => 'unique'),
					'description' => array('type' => 'text', 'null' => false, 'default' => NULL),
					'block_count' => array('type' => 'integer', 'null' => false, 'default' => '0'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
						'alias' => array('column' => 'alias', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'MyISAM'),
				),
				'roles' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'title' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100),
					'alias' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'key' => 'unique'),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'updated' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
						'alias' => array('column' => 'alias', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'MyISAM'),
				),
				'settings' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 20, 'key' => 'primary'),
					'key' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 64, 'key' => 'unique'),
					'value' => array('type' => 'text', 'null' => false, 'default' => NULL),
					'title' => array('type' => 'string', 'null' => false, 'default' => NULL),
					'description' => array('type' => 'string', 'null' => false, 'default' => NULL),
					'input_type' => array('type' => 'string', 'null' => false, 'default' => 'text'),
					'editable' => array('type' => 'boolean', 'null' => false, 'default' => '1'),
					'weight' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'params' => array('type' => 'text', 'null' => false, 'default' => NULL),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
						'key' => array('column' => 'key', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'MyISAM'),
				),
				'terms' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
					'parent_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10),
					'vocabulary_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
					'title' => array('type' => 'string', 'null' => false, 'default' => NULL),
					'slug' => array('type' => 'string', 'null' => false, 'default' => NULL, 'key' => 'unique'),
					'description' => array('type' => 'text', 'null' => false, 'default' => NULL),
					'lft' => array('type' => 'integer', 'null' => false, 'default' => NULL),
					'rght' => array('type' => 'integer', 'null' => false, 'default' => NULL),
					'status' => array('type' => 'boolean', 'null' => false, 'default' => '1'),
					'updated' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
					'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
						'slug' => array('column' => 'slug', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'MyISAM'),
				),
				'types' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
					'title' => array('type' => 'string', 'null' => false, 'default' => NULL),
					'alias' => array('type' => 'string', 'null' => false, 'default' => NULL, 'key' => 'unique'),
					'description' => array('type' => 'text', 'null' => false, 'default' => NULL),
					'format_show_author' => array('type' => 'boolean', 'null' => false, 'default' => '1'),
					'format_show_date' => array('type' => 'boolean', 'null' => false, 'default' => '1'),
					'comment_status' => array('type' => 'integer', 'null' => false, 'default' => '1', 'length' => 1),
					'comment_approve' => array('type' => 'boolean', 'null' => false, 'default' => '1'),
					'comment_spam_protection' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
					'comment_captcha' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
					'params' => array('type' => 'text', 'null' => false, 'default' => NULL),
					'plugin' => array('type' => 'string', 'null' => false, 'default' => NULL),
					'updated' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
					'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
						'alias' => array('column' => 'alias', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'MyISAM'),
				),
				'types_vocabularies' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
					'type_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
					'vocabulary_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
					'weight' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'MyISAM'),
				),
				'users' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 20, 'key' => 'primary'),
					'role_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
					'username' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 60),
					'password' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100),
					'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50),
					'email' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100),
					'website' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100),
					'activation_key' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 60),
					'image' => array('type' => 'string', 'null' => false, 'default' => NULL),
					'bio' => array('type' => 'text', 'null' => false, 'default' => NULL),
					'timezone' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 10),
					'status' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
					'updated' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
					'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'MyISAM'),
				),
				'vocabularies' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
					'title' => array('type' => 'string', 'null' => false, 'default' => NULL),
					'alias' => array('type' => 'string', 'null' => false, 'default' => NULL, 'key' => 'unique'),
					'description' => array('type' => 'text', 'null' => false, 'default' => NULL),
					'required' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
					'multiple' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
					'tags' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
					'plugin' => array('type' => 'string', 'null' => false, 'default' => NULL),
					'term_count' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 10),
					'weight' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'updated' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
					'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
						'alias' => array('column' => 'alias', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'MyISAM'),
				),
			),
		),
		'down' => array(
			'drop_table' => array(
				'acos', 'aros', 'aros_acos', 'blocks', 'comments', 'contacts', 'i18n', 'languages', 'links', 'menus', 'messages', 'meta', 'nodes', 'nodes_terms', 'regions', 'roles', 'settings', 'terms', 'types', 'types_vocabularies', 'users', 'vocabularies'
			),
		),
	);

/**
 * Before migration callback
 *
 * @param string $direction, up or down direction of migration process
 * @return boolean Should process continue
 * @access public
 */
	function before($direction) {
		return true;
	}

/**
 * After migration callback
 *
 * @param string $direction, up or down direction of migration process
 * @return boolean Should process continue
 * @access public
 */
	function after($direction) {
		return true;
	}
}
?>