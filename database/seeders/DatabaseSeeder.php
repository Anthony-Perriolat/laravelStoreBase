<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Article;
use App\Models\CategoryAnnouncement;
use App\Models\CategoryProducts;
use App\Models\CommentaryArticle;
use App\Models\CommentaryProvider;
use App\Models\Customer;
use App\Models\Experience;
use App\Models\ServiceProvider;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Bonne méthode
        $categoryArticles = CategoryProducts::factory(5)
            ->hasArticle(10)
            ->create();

        $serviceProvider = User::factory()
            ->hasServiceProvider(1)
            ->count(10)
            ->create();


        $customer = User::factory()
            ->hasCustomer(1)
            ->count(50)
            ->create();

        $categoryAnnouncement = CategoryAnnouncement::factory()
            ->has(Product::factory()
                ->count(10))
            ->count(10)
            ->create();

        /*
        $serviceProviderUser = User::factory()
            ->count(10)
            ->create();
        $customerUser = User::factory()
            ->count(50)
            ->create();
        $serviceProvider = ServiceProvider::factory()
            ->for(User::factory()) // Probleme avec le for ()
            ->count(10)
            ->create();
        $experience = Experience::factory()
            ->for(ServiceProvider::factory())
            ->count(15)
            ->create();
        $customer = Customer::factory()
            ->for(User::factory())
            ->count(50)
            ->create();
        $commentaryProvider = CommentaryProvider::factory()
            ->for(ServiceProvider::factory())
            ->for(ServiceProvider::factory())
            ->count(10)
            ->create();

        $categoryArticle = CategoryAnnouncement::factory()
            ->has(Product::factory()
                ->count(50)
                ->has(AnnouncementSave::factory()
                    ->count(20),
                    'announcement_save_id')
                ,'commentary_articles')
            ->count(10)
            ->create();
*/

    }
}
