<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run(): void
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        $permissions = [
            // Permission
            ['name' => 'p.*', 'displayname' => 'Permission: Root'],

            // Permission > Member
            ['name' => 'p.member.*', 'displayname' => 'Permission: Full Member Access'],
            ['name' => 'p.member.read', 'displayname' => 'Permission: Read Member'],
            // ['name' => 'p.member.update', 'displayname' => 'Permission: Update Member'],
            ['name' => 'p.member.delete', 'displayname' => 'Permission: Delete Member'],
            ['name' => 'p.member.invite', 'displayname' => 'Permission: Invite Member'],

            // Permission > Building
            ['name' => 'p.building.*', 'displayname' => 'Permission: Full Building Access'],
            ['name' => 'p.building.read', 'displayname' => 'Permission: Read Building'],
            ['name' => 'p.building.create', 'displayname' => 'Permission: Create Building'],
            ['name' => 'p.building.update', 'displayname' => 'Permission: Update Building'],
            ['name' => 'p.building.delete', 'displayname' => 'Permission: Delete Building'],
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission['name'], 'displayname' => $permission['displayname']]);
        }
    }
}
