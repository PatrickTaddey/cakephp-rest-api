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

		$this->execute("INSERT INTO `vouchers` (`id`, `password`, `active`, `name`, `css_icon_class`, `description`, `date_valid_until`) VALUES " .
			"('1', 'b3d2fdf7fcdb17ddaceb63a8647cc238', '1', 'Shopping-Tour', 'fa-shopping-cart', 'Da Du sooo gerne shoppen gehst, begleite ich Dich freiwillig an einem Tag Deiner Wahl durch s&auml;mtliche L&auml;den.', '2014-12-31 23:59:59')," .
			"('2', 'b3d2fdf7fcdb17ddaceb63a8647cc238', '1', 'Massage', 'fa-hotel', 'Gutschein f&uuml;r eine Massage mit einem auserw&auml;hlten Massage&ouml;l.', '2014-12-31 23:59:59')," .
			"('3', 'b3d2fdf7fcdb17ddaceb63a8647cc238', '1', 'Gratis Eis!', 'fa-sun-o', 'Im Hochsommer sollst Du nicht schwitzen, sondern mit mir im Eiscafe sitzen!', '2014-12-31 23:59:59')," .
			"('4', 'b3d2fdf7fcdb17ddaceb63a8647cc238', '1', 'Dinner for 2', 'fa-cutlery', 'Ich lasse mir etwas besonderes f&uuml;r Dich einfallen und serviere Dir ein Drei-G&auml;nge-Men&uuml;.', '2014-12-31 23:59:59')," .
			"('5', 'b3d2fdf7fcdb17ddaceb63a8647cc238', '1', 'Pizza', 'fa-truck', 'Wenn Du mal gro&szlig;en Hunger haben solltest und es mal schnell gehen soll: bestelle Dir eine Pizza!', '2014-12-31 23:59:59')," .
			"('6', 'b3d2fdf7fcdb17ddaceb63a8647cc238', '1', 'Party', 'fa-users', 'Du l&auml;dst ein, wen Du m&ouml;chtest - ich bin an dem Abend f&uuml;r das Wohl Deiner G&auml;ste zust&auml;ndig.', '2014-12-31 23:59:59')," .
			"('7', 'b3d2fdf7fcdb17ddaceb63a8647cc238', '1', 'Tagestrip', 'fa-train', 'Wie w&auml;re es mit einem Tagestrip nach Hamburg, Berlin oder nach Paris???', '2014-12-31 23:59:59')," .
			"('8', 'b3d2fdf7fcdb17ddaceb63a8647cc238', '1', '&Uuml;berraschung', 'fa-star', 'Lass Dich mit diesem Gutschein einfach von mir &uuml;berraschen.', '2014-12-31 23:59:59')," .
			"('9', 'b3d2fdf7fcdb17ddaceb63a8647cc238', '1', 'Fahrrad platt?', 'fa-wheelchair', 'Patricks Pannenhilfe hilft Deinem Drahtesel wieder auf die Beine und flickt Deine Reifen.', '2014-12-31 23:59:59')," .
			"('10', 'b3d2fdf7fcdb17ddaceb63a8647cc238', '1', 'Kino-Abend', 'fa-video-camera', 'Regenwetter? Langeweile? Auf ins Kino!', '2014-12-31 23:59:59')," .
			"('11', 'b3d2fdf7fcdb17ddaceb63a8647cc238', '1', 'Cocktail', 'fa-glass', 'Mit diesem Gutschein lade ich Dich zu einem Cocktail ein!', '2014-12-31 23:59:59')," .
			"('12', 'b3d2fdf7fcdb17ddaceb63a8647cc238', '1', 'Kaffee & Kuchen', 'fa-coffee', 'Wie wäre es mit Kaffee und Kuchen als Ausflugsziel einer kleinen Radtour?', '2014-12-31 23:59:59')," .
			"('13', 'b3d2fdf7fcdb17ddaceb63a8647cc238', '1', '33,00 Gutschein', 'fa-euro', 'Diesen Gutschein kannst Du in einem (Online-)Shop Deiner Wahl einl&ouml;sen.', '2014-12-31 23:59:59')," .
			"('14', 'b3d2fdf7fcdb17ddaceb63a8647cc238', '1', 'Kuschelabend', 'fa-heart', 'Wenn Dir mal danach ist...', '2014-12-31 23:59:59')," .
			"('15', 'b3d2fdf7fcdb17ddaceb63a8647cc238', '1', 'Fr&uuml;hst&uuml;ck im ???', 'fa-cutlery', 'Du kannst Dir aussuchen, wo wir fr&uuml;hst&uuml;cken gehen. Ich begleite Dich und begleiche die Rechnung!', '2014-12-31 23:59:59')," .
			"('16', 'b3d2fdf7fcdb17ddaceb63a8647cc238', '1', 'Zoo-Besuch', 'fa-paw', 'Wir haben zwar schon einen Stubentiger, aber die richtig gro&szlig;en gibt es wohl nur im Zoo zu sehen.', '2014-12-31 23:59:59')," .
			"('17', 'b3d2fdf7fcdb17ddaceb63a8647cc238', '1', 'Schlittschuhlaufen', 'fa-ship', 'Auf der M&uuml;hlenhunte in Oldenburgs Innenstadt kann man Tretboot fahren - mal schauen wie seet&uuml;chtig Du bist :-)', '2014-12-31 23:59:59')," .
			"('18', 'b3d2fdf7fcdb17ddaceb63a8647cc238', '1', 'Video-Abend', 'fa-simplybuilt', 'In unserer Videothek um die Ecke finden wir bestimmt einen Film. Wie gut, dass der Croque-Laden auf dem Weg dorthin liegt ;-)', '2014-12-31 23:59:59')," .
			"('19', 'b3d2fdf7fcdb17ddaceb63a8647cc238', '1', 'Feuer frei!', 'fa-fire', 'Wenn Dir mal nach einem netten Abend an der Feuertonne ist, l&ouml;se diesen Gutschein einfach ein.', '2014-12-31 23:59:59')," .
			"('20', 'b3d2fdf7fcdb17ddaceb63a8647cc238', '1', 'Ein gutes Buch', 'fa-book', 'Bestell Dir ein gutes Buch im Internet. Die Rechnung lese ich dann ;-)', '2014-12-31 23:59:59')," .
			"('21', 'b3d2fdf7fcdb17ddaceb63a8647cc238', '1', 'Krach', 'fa-music', 'Heute darfst Du die Anlage so laut aufdrehen wie Du willst. Tanzen & Singen ist ausdr&uuml;cklich erw&uuml;nscht!', '2014-12-31 23:59:59')," .
			"('22', 'b3d2fdf7fcdb17ddaceb63a8647cc238', '1', 'Einen Wunsch frei', 'fa-plus', 'W&uuml;nsch Dir etwas besonderes von mir!', '2014-12-31 23:59:59')," .
			"('23', 'b3d2fdf7fcdb17ddaceb63a8647cc238', '1', 'Fr&uuml;hst&uuml;ck im Bett', 'fa-coffee', 'Mit diesem Gutschein bringe ich Dir ein Fr&uuml;hst&uuml;ck ans Bett.', '2014-12-31 23:59:59')," .
			"('24', 'b3d2fdf7fcdb17ddaceb63a8647cc238', '1', 'Fotos', 'fa-camera', 'Gutschein f&uuml;r eine Foto-Session mit uns beiden.', '2014-12-31 23:59:59')"
		);
	}
	public function down() {
		$this->dropTable('vouchers');
	}
}