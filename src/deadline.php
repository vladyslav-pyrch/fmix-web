<?php
class Deadline {
	const deadline = '2024-04-07';

	static function getDeadline() {
		return new DateTime(self::deadline);
	}
}

