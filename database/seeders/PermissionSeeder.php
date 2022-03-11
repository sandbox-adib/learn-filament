<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::query()
                    ->insert(
                        array_merge(
                            $this->defaultPermission(),
                        )
                    );
    }

    private function policies(): Collection
    {
        return collect([
            'viewAny',
            'view',
            'create',
            'update',
            'delete',
            'restore',
            'forceDelete',
        ]);
    }

    private function resources(): Collection
    {
        return collect([
            'filamentAdmin',
            'memorizingEveryday',
            'picketName',
            'user'
        ]);
    }

    private function defaultPermission(): Array
    {
        return $this->resources()
                        ->map(function(string $resource){
                            return $this->policies()
                                                ->map(function(string $policy) use ($resource){
                                                    return [
                                                        'name' => "{$policy} {$resource}",
                                                        'guard_name' => 'web',
                                                        'created_at' => now(),
                                                        'updated_at' => now(),
                                                    ];
                                                });
                        })
                        ->flatten(1)
                        ->all();
    }
}
