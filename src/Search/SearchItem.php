<?php namespace Wikidata\Search;

class SearchItem {
	
	private $id,
			$url,
			$label,
			$description,
			$match,
			$aliases;

	/**
	 * Class constructor
	 * @param object $item StdClass object with item
	 */
	public function __construct($item) {

		$this->id = $item->id;
		$this->url = $item->url;
		$this->label = $item->label;
		$this->description = (isset($item->description)) ? $item->description : null;
		$this->match = new SearchItemMatch($item->match);
		$this->aliases = (isset($item->aliases)) ? $item->aliases : null;

	}

	/**
	 * Get only entity id
	 * @return string
	 */
	public function getEntityId() {

		return $this->id;

	}

	public function getLabel()
	{
	       return $this->label;
	}

	public function getDescription()
	{
	       return $this->description;
	}

	public function getAliases()
	{
	       return $this->aliases;
	}
}