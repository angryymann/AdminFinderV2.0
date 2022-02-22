$af = new AdminFinder($db);
		$adminTableList = $af->getAdminTables();
		$result['adminTables'] = $adminTableList;
		} else {
			$parent_table = 'locations';
		}
		
		$af = new AdminFinder($db);
		$parent_table_data = $af->getAdminTableRow($parent_table);
