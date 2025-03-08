<?php
class Deadline {
	const deadline = '2025-04-07';

	static function getDeadline() {
		return new DateTime(self::deadline);
	}
}

