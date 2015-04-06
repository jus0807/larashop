<?php
/**
 * Created by PhpStorm.
 * User: ichered
 * Date: 22.03.15
 * Time: 18:26
 */
use Illuminate\Database\Seeder;
use \Kodeine\Acl\Models\Eloquent\Role;
use App\User;

class UserTableSeeder extends Seeder {

    public function run()
    {
        $UserModel = new User();

        DB::table($UserModel->getTable())->delete();

        $user = $UserModel->create([
            'login' => 'admin',
            'name' => 'Администратор',
            'email' => 'jus0807@mail.ru',
            'password' => Hash::make('qwerty123')
        ]);

        $RoleModel = new Role();

        $admin = $RoleModel->create([
            'name' => 'Administrator',
            'slug' => 'administrator',
            'description' => 'Administrator'
        ]);

        $user->assignRole($admin);
    }
}