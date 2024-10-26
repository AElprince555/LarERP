<?php

namespace Database\Seeders\General\System;

use App\Models\General\System\Module;
use Illuminate\Database\Seeder;

class ModuleSeeder extends Seeder
{
    public function run(): void
    {
        Module::insert([
            [
                'code' => 'INV',
                'name' => 'Inventory Management',
                'short' => 'Inventory',
                'description' => 'Handles stock tracking, warehousing, and supply chain.',
                'component' => null,
                'view' => null,
                'model' => null,
                'controller' => null
            ],
            [
                'code' => 'SLS',
                'name' => 'Sales & Purchasing',
                'short' => 'Sales/Purchasing',
                'description' => 'Manages quotations, sales orders, and purchase orders.',
                'component' => null,
                'view' => null,
                'model' => null,
                'controller' => null
            ],
            [
                'code' => 'FIN',
                'name' => 'Finance & Accounting',
                'short' => 'Finance',
                'description' => 'Covers general ledger, invoicing, and budgeting.',
                'component' => null,
                'view' => null,
                'model' => null,
                'controller' => null
            ],
            [
                'code' => 'HRM',
                'name' => 'HR Management',
                'short' => 'HR',
                'description' => 'Manages employees, payroll, and leave tracking.',
                'component' => null,
                'view' => null,
                'model' => null,
                'controller' => null
            ],
            [
                'code' => 'CRM',
                'name' => 'Customer Relationship Management',
                'short' => 'CRM',
                'description' => 'Handles customer database, interactions, and sales pipeline.',
                'component' => null,
                'view' => null,
                'model' => null,
                'controller' => null
            ],
            [
                'code' => 'PRM',
                'name' => 'Project Management',
                'short' => 'Project',
                'description' => 'Manages milestones, tasks, and project progress tracking.',
                'component' => null,
                'view' => null,
                'model' => null,
                'controller' => null
            ],
            [
                'code' => 'WHS',
                'name' => 'Warehouse Management',
                'short' => 'Warehouse',
                'description' => 'Advanced inventory, batch tracking, and multi-location management.',
                'component' => null,
                'view' => null,
                'model' => null,
                'controller' => null
            ],
            [
                'code' => 'GEN',
                'name' => 'General Settings',
                'short' => 'Settings',
                'description' => 'System-wide configurations, file management, and localization.',
                'component' => null,
                'view' => null,
                'model' => null,
                'controller' => null
            ],
            [
                'code' => 'CNT',
                'name' => 'Contracts Management',
                'short' => 'Contracts',
                'description' => 'Handles customer, supplier, and third-party vendor contracts.',
                'component' => null,
                'view' => null,
                'model' => null,
                'controller' => null
            ],
        ]);;
    }
}
