<?php

declare(strict_types=1);

namespace SixtyEightPublishers\SmartNetteComponent\Attribute;

use Attribute;
use SixtyEightPublishers\SmartNetteComponent\Authorization\RuleInterface;

#[Attribute(Attribute::TARGET_CLASS|Attribute::TARGET_METHOD|Attribute::IS_REPEATABLE)]
final class Allowed implements AttributeInterface, RuleInterface
{
	public function __construct(
		public readonly ?string $resource,
		public readonly ?string $privilege,
	) {
	}
}
