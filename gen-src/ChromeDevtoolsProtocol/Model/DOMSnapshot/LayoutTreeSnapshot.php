<?php

namespace ChromeDevtoolsProtocol\Model\DOMSnapshot;

/**
 * Table of details of an element in the DOM tree with a LayoutObject.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class LayoutTreeSnapshot implements \JsonSerializable
{
	/**
	 * Index of the corresponding node in the `NodeTreeSnapshot` array returned by `captureSnapshot`.
	 *
	 * @var int[]
	 */
	public $nodeIndex;

	/**
	 * Array of indexes specifying computed style strings, filtered according to the `computedStyles` parameter passed to `captureSnapshot`.
	 *
	 * @var int[][]
	 */
	public $styles;

	/**
	 * The absolute position bounding box.
	 *
	 * @var int[][]|float[][]
	 */
	public $bounds;

	/**
	 * Contents of the LayoutText, if any.
	 *
	 * @var int[]
	 */
	public $text;

	/**
	 * Stacking context information.
	 *
	 * @var RareBooleanData
	 */
	public $stackingContexts;

	/**
	 * Global paint order index, which is determined by the stacking order of the nodes. Nodes that are painted together will have the same index. Only provided if includePaintOrder in captureSnapshot was true.
	 *
	 * @var int[]|null
	 */
	public $paintOrders;

	/**
	 * The offset rect of nodes. Only available when includeDOMRects is set to true
	 *
	 * @var int[][]|float[][]|null
	 */
	public $offsetRects;

	/**
	 * The scroll rect of nodes. Only available when includeDOMRects is set to true
	 *
	 * @var int[][]|float[][]|null
	 */
	public $scrollRects;

	/**
	 * The client rect of nodes. Only available when includeDOMRects is set to true
	 *
	 * @var int[][]|float[][]|null
	 */
	public $clientRects;

	/**
	 * The list of background colors that are blended with colors of overlapping elements.
	 *
	 * @var int[]|null
	 */
	public $blendedBackgroundColors;

	/**
	 * The list of computed text opacities.
	 *
	 * @var int[]|float[]|null
	 */
	public $textColorOpacities;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->nodeIndex)) {
			$instance->nodeIndex = [];
			foreach ($data->nodeIndex as $item) {
				$instance->nodeIndex[] = (int)$item;
			}
		}
		if (isset($data->styles)) {
			$instance->styles = [];
		if (isset($data->styles)) {
			$instance->styles = [];
			foreach ($data->styles as $item) {
				$nested = [];
				foreach ($item as $nestedItem) {
					$nested[] = (int)$nestedItem;
				}
				$instance->styles[] = $nested;
			}
		}
		}
		if (isset($data->bounds)) {
			$instance->bounds = [];
		if (isset($data->bounds)) {
			$instance->bounds = [];
			foreach ($data->bounds as $item) {
				$nested = [];
				foreach ($item as $nestedItem) {
					$nested[] = $nestedItem;
				}
				$instance->bounds[] = $nested;
			}
		}
		}
		if (isset($data->text)) {
			$instance->text = [];
		if (isset($data->text)) {
			$instance->text = [];
			foreach ($data->text as $item) {
				$instance->text[] = (int)$item;
			}
		}
		}
		if (isset($data->stackingContexts)) {
			$instance->stackingContexts = RareBooleanData::fromJson($data->stackingContexts);
		}
		if (isset($data->paintOrders)) {
			$instance->paintOrders = [];
			foreach ($data->paintOrders as $item) {
				$instance->paintOrders[] = (int)$item;
			}
		}
		if (isset($data->offsetRects)) {
			$instance->offsetRects = [];
		if (isset($data->offsetRects)) {
			$instance->offsetRects = [];
			foreach ($data->offsetRects as $item) {
				$nested = [];
				foreach ($item as $nestedItem) {
					$nested[] = $nestedItem;
				}
				$instance->offsetRects[] = $nested;
			}
		}
		}
		if (isset($data->scrollRects)) {
			$instance->scrollRects = [];
		if (isset($data->scrollRects)) {
			$instance->scrollRects = [];
			foreach ($data->scrollRects as $item) {
				$nested = [];
				foreach ($item as $nestedItem) {
					$nested[] = $nestedItem;
				}
				$instance->scrollRects[] = $nested;
			}
		}
		}
		if (isset($data->clientRects)) {
			$instance->clientRects = [];
		if (isset($data->clientRects)) {
			$instance->clientRects = [];
			foreach ($data->clientRects as $item) {
				$nested = [];
				foreach ($item as $nestedItem) {
					$nested[] = $nestedItem;
				}
				$instance->clientRects[] = $nested;
			}
		}
		}
		if (isset($data->blendedBackgroundColors)) {
			$instance->blendedBackgroundColors = [];
		if (isset($data->blendedBackgroundColors)) {
			$instance->blendedBackgroundColors = [];
			foreach ($data->blendedBackgroundColors as $item) {
				$instance->blendedBackgroundColors[] = (int)$item;
			}
		}
		}
		if (isset($data->textColorOpacities)) {
			$instance->textColorOpacities = [];
			foreach ($data->textColorOpacities as $item) {
				$instance->textColorOpacities[] = $item;
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->nodeIndex !== null) {
			$data->nodeIndex = [];
			foreach ($this->nodeIndex as $item) {
				$data->nodeIndex[] = $item;
			}
		}
		if ($this->styles !== null) {
			$data->styles = [];
		if ($this->styles !== null) {
			$data->styles = [];
			foreach ($this->styles as $item) {
				$nested = [];
				foreach ($item as $nestedItem) {
					$nested[] = $nestedItem;
				}
				$data->styles[] = $nested;
			}
		}
		}
		if ($this->bounds !== null) {
			$data->bounds = [];
		if ($this->bounds !== null) {
			$data->bounds = [];
			foreach ($this->bounds as $item) {
				$nested = [];
				foreach ($item as $nestedItem) {
					$nested[] = $nestedItem;
				}
				$data->bounds[] = $nested;
			}
		}
		}
		if ($this->text !== null) {
			$data->text = [];
		if ($this->text !== null) {
			$data->text = [];
			foreach ($this->text as $item) {
				$data->text[] = $item;
			}
		}
		}
		if ($this->stackingContexts !== null) {
			$data->stackingContexts = $this->stackingContexts->jsonSerialize();
		}
		if ($this->paintOrders !== null) {
			$data->paintOrders = [];
			foreach ($this->paintOrders as $item) {
				$data->paintOrders[] = $item;
			}
		}
		if ($this->offsetRects !== null) {
			$data->offsetRects = [];
		if ($this->offsetRects !== null) {
			$data->offsetRects = [];
			foreach ($this->offsetRects as $item) {
				$nested = [];
				foreach ($item as $nestedItem) {
					$nested[] = $nestedItem;
				}
				$data->offsetRects[] = $nested;
			}
		}
		}
		if ($this->scrollRects !== null) {
			$data->scrollRects = [];
		if ($this->scrollRects !== null) {
			$data->scrollRects = [];
			foreach ($this->scrollRects as $item) {
				$nested = [];
				foreach ($item as $nestedItem) {
					$nested[] = $nestedItem;
				}
				$data->scrollRects[] = $nested;
			}
		}
		}
		if ($this->clientRects !== null) {
			$data->clientRects = [];
		if ($this->clientRects !== null) {
			$data->clientRects = [];
			foreach ($this->clientRects as $item) {
				$nested = [];
				foreach ($item as $nestedItem) {
					$nested[] = $nestedItem;
				}
				$data->clientRects[] = $nested;
			}
		}
		}
		if ($this->blendedBackgroundColors !== null) {
			$data->blendedBackgroundColors = [];
		if ($this->blendedBackgroundColors !== null) {
			$data->blendedBackgroundColors = [];
			foreach ($this->blendedBackgroundColors as $item) {
				$data->blendedBackgroundColors[] = $item;
			}
		}
		}
		if ($this->textColorOpacities !== null) {
			$data->textColorOpacities = [];
			foreach ($this->textColorOpacities as $item) {
				$data->textColorOpacities[] = $item;
			}
		}
		return $data;
	}
}
