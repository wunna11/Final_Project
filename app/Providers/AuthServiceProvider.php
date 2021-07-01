<?php

namespace App\Providers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        //$this->registerPolicies();
        Gate::define('admin', function(User $user) {
            //$user = auth()->user
            return $user->isAdmin == '1';
        }); 

        Gate::define('premiumUser', function(User $user) {
            return $user->isPremium == '1';
        });

        Gate::define('adminPremiumPostowner', function(User $user, $id) {
            //admin or premium or postowner can see edit or delete button in blog detail page
            //postowner = post->post_id->user_id  == current user->user_id
            $authorId = Post::find($id)->user_id;
            return $user->isAdmin == '1' || $user->isPremium == '1' || $user->id == $authorId;
        });
    }
}
