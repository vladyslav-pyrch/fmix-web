<?php
class Deadline {
	const deadline = '2025-04-07';

	static function getDeadline() {
		date_default_timezone_set("Europe/Bratislava");

		return new DateTime(self::deadline);
	}
}

