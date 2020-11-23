<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PublishRolesAndPermissions extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'permission:publish';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Publish roles and permissions if they do not already exist.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // Define application roles
        $admin = Role::findOrCreate('admin');
        $maintainer = Role::findOrCreate('maintainer');
        $company = Role::findOrCreate('company');

        // Define application permissions
        $documentationPermissions = [
            Permission::findOrCreate('documentation_read'),
            Permission::findOrCreate('documentation_write'),
            Permission::findOrCreate('documentation_edit'),
            Permission::findOrCreate('documentation_delete'),
        ];
        $companyPermissions = [
            Permission::findOrCreate('company_read'),
            Permission::findOrCreate('company_write'),
            Permission::findOrCreate('company_edit'),
            Permission::findOrCreate('company_delete'),
        ];

        // Assign application permissions to roles
        $maintainer->syncPermissions($documentationPermissions);
        $company->syncPermissions($companyPermissions);

        // Output permission table and success message
        $this->call('permission:show');
        $this->info('Roles & permissions successfully published!');

        return 0;
    }
}
