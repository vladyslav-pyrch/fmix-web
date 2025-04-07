<?php
class Deadline {
	const deadline = '2025-04-30 23:59:59';

	static function getDeadline() {
		date_default_timezone_set("Europe/Bratislava");

		return new DateTime(self::deadline);
	}
}

