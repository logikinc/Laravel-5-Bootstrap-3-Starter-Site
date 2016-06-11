<?php


use App\Role;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('permissions')->delete();

        $permissions = [
            [ // 1
                'name'           => 'manage_language',
                'display_name'   => 'Manage languages',
                'is_admin'       => 1,
            ],
           [ // 2
                'name'           => 'manage_news_category',
                'display_name'   => 'Manage news category',
                'is_admin'       => 1,
            ],
            [ // 3
                'name'           => 'manage_news',
                'display_name'   => 'Manage news',
                'is_admin'       => 1,
            ],
            [ // 4
                'name'           => 'manage_video_album',
                'display_name'   => 'Manage video album',
                'is_admin'       => 1,
            ],
            [ // 5
                'name'           => 'manage_video',
                'display_name'   => 'Manage video',
                'is_admin'       => 1,
            ],
            [ // 6
                'name'           => 'manage_photo_album',
                'display_name'   => 'Manage photo album',
                'is_admin'       => 1,
            ],
            [ // 7
                'name'           => 'manage_photo',
                'display_name'   => 'Manage photo',
                'is_admin'       => 1,
            ],
            [ // 8
                'name'           => 'manage_users',
                'display_name'   => 'Manage users',
                'is_admin'       => 1,
            ],
            [ // 9
                'name'           => 'manage_roles',
                'display_name'   => 'Manage roles',
                'is_admin'       => 1,
            ],
        ];

        DB::table('permissions')->insert($permissions);

        DB::table('permission_role')->delete();

        $role_id_admin = Role::where('name', '=', 'admin')->first()->id;
        $permission_base = (int) DB::table('permissions')->first()->id - 1;

        $permissions = [
            [
                'role_id'       => $role_id_admin,
                'permission_id' => $permission_base + 1,
            ],
            [
                'role_id'       => $role_id_admin,
                'permission_id' => $permission_base + 2,
            ],
            [
                'role_id'       => $role_id_admin,
                'permission_id' => $permission_base + 3,
            ],
            [
                'role_id'       => $role_id_admin,
                'permission_id' => $permission_base + 4,
            ],
            [
                'role_id'       => $role_id_admin,
                'permission_id' => $permission_base + 5,
            ],
            [
                'role_id'       => $role_id_admin,
                'permission_id' => $permission_base + 6,
            ],
            [
                'role_id'       => $role_id_admin,
                'permission_id' => $permission_base + 7,
            ],
             [
                'role_id'       => $role_id_admin,
                'permission_id' => $permission_base + 8,
            ],
             [
                'role_id'       => $role_id_admin,
                'permission_id' => $permission_base + 9,
            ],
        ];

        DB::table('permission_role')->insert($permissions);
    }
}
