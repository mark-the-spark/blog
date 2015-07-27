<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\User;
use App\Role;

class SetRole extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'role:assign {role_name} {user_email}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Assign a role to a user';

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
     * @return mixed
     */
    public function handle()
    {
        $userEmail = $this->argument('user_email');
        $role_id = $this->findRoleId($this->argument('role_name'));
        $user = User::where('email', $userEmail)->firstOrFail();
        $this->setRole($user, $role_id);

    }

    public function setRole($user, $role_id)
    {
        $user->roles()->sync([$role_id], false);
    }

    public function findRoleId($role_name)
    {
        $role = Role::where('name', $role_name)->firstOrFail();
        return $role->id;
    }
}
