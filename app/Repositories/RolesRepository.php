<?php

namespace App\Repositories;

use App\Models\Role;

class RolesRepository extends Repositor {
	
	
	public function __construct(Role $role) {
		$this->model = $role;
	}
	
}