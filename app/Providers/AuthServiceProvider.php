<?php

namespace App\Providers;

use App\Role;
use App\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        $user = \Auth::user();

        
        // Auth gates for: User management
        Gate::define('user_management_access', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Roles
        Gate::define('role_access', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('role_create', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('role_edit', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('role_view', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('role_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Users
        Gate::define('user_access', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('user_create', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('user_edit', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('user_view', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('user_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: User actions
        Gate::define('user_action_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

        // Auth gates for: Escolas
        Gate::define('escola_access', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('escola_create', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('escola_edit', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('escola_view', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('escola_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Professores
        Gate::define('professore_access', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('professore_create', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('professore_edit', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('professore_view', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('professore_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Alunos
        Gate::define('aluno_access', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('aluno_create', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('aluno_edit', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('aluno_view', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('aluno_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Apps
        Gate::define('app_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('app_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('app_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('app_view', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('app_delete', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

        // Auth gates for: Site
        Gate::define('site_access', function ($user) {
            return in_array($user->role_id, [1, 3]);
        });

        // Auth gates for: Frontend
        Gate::define('frontend_access', function ($user) {
            return in_array($user->role_id, [1, 3]);
        });

        // Auth gates for: Slideshow
        Gate::define('slideshow_access', function ($user) {
            return in_array($user->role_id, [1, 3]);
        });
        Gate::define('slideshow_create', function ($user) {
            return in_array($user->role_id, [1, 3]);
        });
        Gate::define('slideshow_edit', function ($user) {
            return in_array($user->role_id, [1, 3]);
        });
        Gate::define('slideshow_view', function ($user) {
            return in_array($user->role_id, [1, 3]);
        });
        Gate::define('slideshow_delete', function ($user) {
            return in_array($user->role_id, [1, 3]);
        });

        // Auth gates for: About
        Gate::define('about_access', function ($user) {
            return in_array($user->role_id, [1, 3]);
        });
        Gate::define('about_create', function ($user) {
            return in_array($user->role_id, [1, 3]);
        });
        Gate::define('about_edit', function ($user) {
            return in_array($user->role_id, [1, 3]);
        });
        Gate::define('about_view', function ($user) {
            return in_array($user->role_id, [1, 3]);
        });
        Gate::define('about_delete', function ($user) {
            return in_array($user->role_id, [1, 3]);
        });

        // Auth gates for: Slideset
        Gate::define('slideset_access', function ($user) {
            return in_array($user->role_id, [1, 3]);
        });
        Gate::define('slideset_create', function ($user) {
            return in_array($user->role_id, [1, 3]);
        });
        Gate::define('slideset_edit', function ($user) {
            return in_array($user->role_id, [1, 3]);
        });
        Gate::define('slideset_view', function ($user) {
            return in_array($user->role_id, [1, 3]);
        });
        Gate::define('slideset_delete', function ($user) {
            return in_array($user->role_id, [1, 3]);
        });

        // Auth gates for: Metodologia
        Gate::define('metodologium_access', function ($user) {
            return in_array($user->role_id, [1, 3]);
        });
        Gate::define('metodologium_create', function ($user) {
            return in_array($user->role_id, [1, 3]);
        });
        Gate::define('metodologium_edit', function ($user) {
            return in_array($user->role_id, [1, 3]);
        });
        Gate::define('metodologium_view', function ($user) {
            return in_array($user->role_id, [1, 3]);
        });
        Gate::define('metodologium_delete', function ($user) {
            return in_array($user->role_id, [1, 3]);
        });

        // Auth gates for: Depoimentos
        Gate::define('depoimento_access', function ($user) {
            return in_array($user->role_id, [1, 3]);
        });
        Gate::define('depoimento_create', function ($user) {
            return in_array($user->role_id, [1, 3]);
        });
        Gate::define('depoimento_edit', function ($user) {
            return in_array($user->role_id, [1, 3]);
        });
        Gate::define('depoimento_view', function ($user) {
            return in_array($user->role_id, [1, 3]);
        });
        Gate::define('depoimento_delete', function ($user) {
            return in_array($user->role_id, [1, 3]);
        });

        // Auth gates for: Familia
        Gate::define('familium_access', function ($user) {
            return in_array($user->role_id, [1, 3]);
        });
        Gate::define('familium_create', function ($user) {
            return in_array($user->role_id, [1, 3]);
        });
        Gate::define('familium_edit', function ($user) {
            return in_array($user->role_id, [1, 3]);
        });
        Gate::define('familium_view', function ($user) {
            return in_array($user->role_id, [1, 3]);
        });
        Gate::define('familium_delete', function ($user) {
            return in_array($user->role_id, [1, 3]);
        });

        // Auth gates for: Jogos
        Gate::define('jogo_access', function ($user) {
            return in_array($user->role_id, [1, 3]);
        });
        Gate::define('jogo_create', function ($user) {
            return in_array($user->role_id, [1, 3]);
        });
        Gate::define('jogo_edit', function ($user) {
            return in_array($user->role_id, [1, 3]);
        });
        Gate::define('jogo_view', function ($user) {
            return in_array($user->role_id, [1, 3]);
        });
        Gate::define('jogo_delete', function ($user) {
            return in_array($user->role_id, [1, 3]);
        });

    }
}
