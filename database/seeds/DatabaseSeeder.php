<?php

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


        $this->call(DataTypesTableSeeder::class);
        $this->call(DataRowsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(PagesTableSeeder::class);
        $this->call(MenusTableSeeder::class);
        $this->call(MenuItemsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(PermissionRoleTableSeeder::class);
        $this->call(SettingsTableSeeder::class);

        $this->call(UsersTableSeeder::class);

        $this->call(ProductSeeder::class);
        $this->call(ShopSeeder::class);

        $this->call(UserRolesTableSeeder::class);

        $this->call(ContactsTableSeeder::class);
        $this->call(CouponsTableSeeder::class);
        $this->call(CustomPagesTableSeeder::class);
        $this->call(EbookRequestsTableSeeder::class);
        $this->call(FailedJobsTableSeeder::class);
        $this->call(FaqsTableSeeder::class);
        $this->call(GiftCardsTableSeeder::class);
        $this->call(GiftCardPurchasesTableSeeder::class);
        $this->call(HomeVideosTableSeeder::class);
        $this->call(MessagesTableSeeder::class);
        $this->call(MigrationsTableSeeder::class);
        $this->call(NotificationsTableSeeder::class);
        $this->call(OrdersTableSeeder::class);
        $this->call(OrderItemsTableSeeder::class);
        $this->call(PasswordResetsTableSeeder::class);
        $this->call(PostCategoriesTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(ProductAttributesTableSeeder::class);
        $this->call(ProductCategoriesTableSeeder::class);
        $this->call(ReviewsTableSeeder::class);
        $this->call(RewardPointsTableSeeder::class);
        $this->call(ShopsTableSeeder::class);
        $this->call(SiteReviewsTableSeeder::class);
        $this->call(SubOrdersTableSeeder::class);
        $this->call(SubOrderItemsTableSeeder::class);
        $this->call(TransactionsTableSeeder::class);
        $this->call(TranslationsTableSeeder::class);
        $this->call(VideosTableSeeder::class);
        $this->call(VideoCategoriesTableSeeder::class);
        $this->call(WalletsTableSeeder::class);
        $this->call(WishlistsTableSeeder::class);
        $this->call(WholesalesTableSeeder::class);
    }
}
