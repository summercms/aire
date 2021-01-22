<?php

namespace Galahad\Aire\Components;

use Galahad\Aire\Elements\Group as GroupElement; 

class Group extends ElementComponent
{
	public function __construct(
		$variant = null,
		?string $helpText = null,
		$validated = null,
		?bool $valid = null,
		?bool $invalid = null,
		$errors = null,
		?string $prepend = null,
		?string $append = null,
		?array $data = null,
		$addClass = null,
		$removeClass = null,
		$accessKey = null,
		$class = null,
		?bool $contentEditable = null,
		$contextMenu = null,
		$dir = null,
		$draggable = null,
		$dropZone = null,
		?bool $hide = null,
		$id = null,
		$lang = null,
		$role = null,
		?bool $spellCheck = null,
		$style = null,
		$tabIndex = null,
		$title = null,
		$ariaActiveDescendant = null,
		?bool $ariaAtomic = null,
		?bool $ariaBusy = null,
		$ariaControls = null,
		$ariaDescribedBy = null,
		$ariaDisabled = null,
		$ariaDropEffect = null,
		$ariaFlowTo = null,
		$ariaGrabbed = null,
		?bool $ariaHasPopup = null,
		?bool $ariaHidden = null,
		$ariaInvalid = null,
		$ariaLabel = null,
		$ariaLabelledBy = null,
		$ariaLive = null,
		$ariaOwns = null,
		$ariaRelevant = null,
		?bool $grouped = null,
		?bool $withoutGroup = null,
		?string $variants = null
	) {
		$this->createElement(GroupElement::class, compact(
			'variant',
			'helpText',
			'validated',
			'valid',
			'invalid',
			'errors',
			'prepend',
			'append',
			'data',
			'addClass',
			'removeClass',
			'accessKey',
			'class',
			'contentEditable',
			'contextMenu',
			'dir',
			'draggable',
			'dropZone',
			'hide',
			'id',
			'lang',
			'role',
			'spellCheck',
			'style',
			'tabIndex',
			'title',
			'ariaActiveDescendant',
			'ariaAtomic',
			'ariaBusy',
			'ariaControls',
			'ariaDescribedBy',
			'ariaDisabled',
			'ariaDropEffect',
			'ariaFlowTo',
			'ariaGrabbed',
			'ariaHasPopup',
			'ariaHidden',
			'ariaInvalid',
			'ariaLabel',
			'ariaLabelledBy',
			'ariaLive',
			'ariaOwns',
			'ariaRelevant',
			'grouped',
			'withoutGroup',
			'variants'
		));
	}
}
