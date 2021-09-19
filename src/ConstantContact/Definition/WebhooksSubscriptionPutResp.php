<?php

namespace PHPFUI\ConstantContact\Definition;

class WebhooksSubscriptionPutResp extends \PHPFUI\ConstantContact\Definition\Base
	{
	/**
	 * @var int $topic_id Identifies the topic using an integer to indicate the type of topic.
	 * @var string $hook_uri Your webhook callback URI. Constant Contact automatically sends POST requests to this URI to notify you about the topic.
	 */

	protected static array $fields = [
		'topic_id' => 'int',
		'hook_uri' => 'string',

	];
	}