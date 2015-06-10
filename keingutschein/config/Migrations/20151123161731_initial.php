<?php
use Phinx\Migration\AbstractMigration;

class Initial extends AbstractMigration {
	public function up() {
		$vouchers_table = $this->table('vouchers');
		$vouchers_table
			->addColumn('password', 'string', [
				'default' => null,
				'limit' => 40,
				'null' => false,
			])
			->addColumn('active', 'integer', [
				'default' => 0,
				'limit' => 1,
				'null' => false,
			])
			->addColumn('name', 'string', [
				'default' => null,
				'limit' => 255,
				'null' => false,
			])
			->addColumn('description', 'text', [
				'default' => null,
				'limit' => 255,
				'null' => false,
			])
			->addColumn('css_icon_class', 'string', [
				'default' => null,
				'limit' => 255,
				'null' => false,
			])
			->addColumn('date_valid_until', 'datetime', [
				'default' => '2014-12-31 23:59:59',
				'limit' => null,
				'null' => false,
			])
			->addColumn('date_to_redeem', 'datetime', [
				'default' => null,
				'limit' => null,
				'null' => true,
			])
			->create();

		$this->execute("INSERT INTO `vouchers` (`id`, `password`, `active`, `name`, `description`, `css_icon_class`, `date_valid_until`, `date_to_redeem`) VALUES " .
			"('1', 'b3d2fdf7fcdb17ddaceb63a8647cc238', '1', 'Shopping-Tour', 'Hier würde der Gutscheintext stehen  :-)', 'fa-shopping-cart', '2014-12-31 23:59:59', '2001-01-20 15:00:00')," .
			"('2', 'b3d2fdf7fcdb17ddaceb63a8647cc238', '1', 'Massage', 'Hier würde der Gutscheintext stehen  :-)', 'fa-hotel', '2014-12-31 23:59:59', '2001-01-20 15:00:00')," .
			"('3', 'b3d2fdf7fcdb17ddaceb63a8647cc238', '1', 'Gratis Eis!', 'Hier würde der Gutscheintext stehen  :-)', 'fa-sun-o', '2014-12-31 23:59:59', '2001-01-20 15:00:00')," .
			"('4', 'b3d2fdf7fcdb17ddaceb63a8647cc238', '1', 'Dinner for 2', 'Hier würde der Gutscheintext stehen  :-)', 'fa-cutlery', '2014-12-31 23:59:59', NULL)," .
			"('5', 'b3d2fdf7fcdb17ddaceb63a8647cc238', '1', 'Pizza', 'Hier würde der Gutscheintext stehen  :-)', 'fa-truck', '2014-12-31 23:59:59', NULL)," .
			"('6', 'b3d2fdf7fcdb17ddaceb63a8647cc238', '1', 'Party', 'Hier würde der Gutscheintext stehen  :-)', 'fa-users', '2014-12-31 23:59:59', NULL)," .
			"('7', 'b3d2fdf7fcdb17ddaceb63a8647cc238', '1', 'Tagestrip', 'Hier würde der Gutscheintext stehen  :-)', 'fa-train', '2014-12-31 23:59:59', NULL)," .
			"('8', 'b3d2fdf7fcdb17ddaceb63a8647cc238', '1', '&Uuml;berraschung', 'Hier würde der Gutscheintext stehen  :-)', 'fa-star', '2014-12-31 23:59:59', NULL)," .
			"('9', 'b3d2fdf7fcdb17ddaceb63a8647cc238', '1', 'Fahrrad platt?', 'Hier würde der Gutscheintext stehen  :-)', 'fa-wheelchair', '2014-12-31 23:59:59', NULL)," .
			"('10', 'b3d2fdf7fcdb17ddaceb63a8647cc238', '1', 'Kino-Abend', 'Hier würde der Gutscheintext stehen  :-)', 'fa-video-camera', '2014-12-31 23:59:59', NULL)," .
			"('11', 'b3d2fdf7fcdb17ddaceb63a8647cc238', '1', 'Cocktail', 'Hier würde der Gutscheintext stehen  :-)', 'fa-glass', '2014-12-31 23:59:59', NULL)," .
			"('12', 'b3d2fdf7fcdb17ddaceb63a8647cc238', '1', 'Kaffee & Kuchen', 'Hier würde der Gutscheintext stehen  :-)', 'fa-coffee', '2014-12-31 23:59:59', NULL)," .
			"('13', 'b3d2fdf7fcdb17ddaceb63a8647cc238', '1', '33,00 Gutschein', 'Hier würde der Gutscheintext stehen  :-)', 'fa-euro', '2014-12-31 23:59:59', NULL)," .
			"('14', 'b3d2fdf7fcdb17ddaceb63a8647cc238', '1', 'Kuschelabend', 'Hier würde der Gutscheintext stehen  :-)', 'fa-heart', '2014-12-31 23:59:59', NULL)," .
			"('15', 'b3d2fdf7fcdb17ddaceb63a8647cc238', '1', 'Fr&uuml;hst&uuml;ck im ???', 'Hier würde der Gutscheintext stehen  :-)', 'fa-cutlery', '2014-12-31 23:59:59', NULL)," .
			"('16', 'b3d2fdf7fcdb17ddaceb63a8647cc238', '1', 'Zoo-Besuch', 'Hier würde der Gutscheintext stehen  :-)', 'fa-paw', '2014-12-31 23:59:59', NULL)," .
			"('17', 'b3d2fdf7fcdb17ddaceb63a8647cc238', '1', 'Schlittschuhlaufen', 'Hier würde der Gutscheintext stehen  :-)', 'fa-ship', '2014-12-31 23:59:59', NULL)," .
			"('18', 'b3d2fdf7fcdb17ddaceb63a8647cc238', '1', 'Video-Abend', 'Hier würde der Gutscheintext stehen  :-)', 'fa-simplybuilt', '2014-12-31 23:59:59', NULL)," .
			"('19', 'b3d2fdf7fcdb17ddaceb63a8647cc238', '1', 'Feuer frei!', 'Hier würde der Gutscheintext stehen  :-)', 'fa-fire', '2014-12-31 23:59:59', NULL)," .
			"('20', 'b3d2fdf7fcdb17ddaceb63a8647cc238', '1', 'Ein gutes Buch', 'Hier würde der Gutscheintext stehen  :-)', 'fa-book', '2014-12-31 23:59:59', NULL)," .
			"('21', 'b3d2fdf7fcdb17ddaceb63a8647cc238', '1', 'Krach', 'Hier würde der Gutscheintext stehen  :-)', 'fa-music', '2014-12-31 23:59:59', NULL)," .
			"('22', 'b3d2fdf7fcdb17ddaceb63a8647cc238', '1', 'Einen Wunsch frei', 'Hier würde der Gutscheintext stehen  :-)', 'fa-plus', '2014-12-31 23:59:59', NULL)," .
			"('23', 'b3d2fdf7fcdb17ddaceb63a8647cc238', '1', 'Fr&uuml;hst&uuml;ck im Bett', 'Hier würde der Gutscheintext stehen  :-)', 'fa-coffee', '2014-12-31 23:59:59', NULL)," .
			"('24', 'b3d2fdf7fcdb17ddaceb63a8647cc238', '1', 'Fotos', 'Hier würde der Gutscheintext stehen  :-)', 'fa-camera', '2014-12-31 23:59:59', NULL)"
		);
	}
	public function down() {
		$this->dropTable('vouchers');
	}
}