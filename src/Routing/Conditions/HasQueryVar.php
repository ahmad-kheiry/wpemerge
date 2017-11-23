<?php

namespace Obsidian\Routing\Conditions;

use Obsidian\Request;

/**
 * Check if a certain query var is set
 */
class HasQueryVar extends QueryVar {
	/**
	 * {@inheritDoc}
	 */
	public function satisfied( Request $request ) {
		return get_query_var( $this->query_var, null ) !== null;
	}
}
