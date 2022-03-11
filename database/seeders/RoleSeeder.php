<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Enum\StaticRoleEnum;
use Illuminate\Support\Collection;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->addPengurusRole();
        $this->addSantriRole();
    }

    protected function addPengurusRole()
    {
        $role = Role::create(['name' => StaticRoleEnum::PENGURUS()->value]);
        $policies =  collect(['viewAny','view','create','update','delete','restore','forceDelete']);
        $role->givePermissionTo([
            $this->multiplePermission($policies, 'filamentAdmin'),
            $this->multiplePermission($policies, 'memorizingEveryday'),
            $this->multiplePermission($policies, 'picketName'),
            $this->multiplePermission($policies, 'user'),
        ]);
    }

    protected function addSantriRole()
    {
        $role = Role::create(['name' => StaticRoleEnum::SANTRI()->value]);
        $role->givePermissionTo(array_merge(
            [], 
            $this->multiplePermission(collect(['viewAny', 'view', 'create', 'delete', 'update']), 'memorizingEveryday'),
        ));
    }

    private function multiplePermission(Collection $policies, string $resource): Array
    {
        return $policies->map(function(string $policy) use ($resource) {
            return "$policy $resource";
        })
        ->flatten(1)
        ->all();
    }
}
