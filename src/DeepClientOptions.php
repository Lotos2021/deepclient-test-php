<?php
namespace DeepFoundation\DeepClient;
class DeepClientOptions
{
	public function __construct($gql_client = null,
								$table = 'links',
								$links_select_returning = 'id type_id from_id to_id value',
								$values_select_returning = 'id link_id value',
								$selectors_select_returning = 'item_id selector_id',
								$files_select_returning = 'id link_id name mimeType',
								$default_select_name = 'SELECT')
	{
		$this->gql_client = $gql_client;

		$this->table = $table;

		$this->links_select_returning = $links_select_returning;
		$this->select_returning = $this->links_select_returning;
		$this->values_select_returning = $values_select_returning;
		$this->selectors_select_returning = $selectors_select_returning;
		$this->files_select_returning = $files_select_returning;

		$this->default_select_name = $default_select_name;
	}
}