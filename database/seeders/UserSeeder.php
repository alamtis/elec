<?php

namespace Database\Seeders;

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'حاتم ناجي',
            'role' => 'admin',
            'email' => 'admin',
            'password' => Hash::make('admin')
        ]);
        $admin->givePermissionTo(['admin']);

        $user_1 = User::create([
            'name' => 'المساوي حجبة',
            'role' => 'candidate',
            'email' => 'circle1',
            'password' => Hash::make('Circle1')
        ]);
        $user_1->givePermissionTo(['candidate', 'c1', 'boujdour']);

        $user_2 = User::create([
            'name' => 'احمد خيار',
            'role' => 'candidate',
            'email' => 'circle2',
            'password' => Hash::make('Circle2')
        ]);
        $user_2->givePermissionTo(['candidate', 'c2', 'boujdour']);

        $user_3 = User::create([
            'name' => 'احمد اغلى منهم',
            'role' => 'candidate',
            'email' => 'circle3',
            'password' => Hash::make('Circle3')
        ]);
        $user_3->givePermissionTo(['candidate', 'c3', 'boujdour']);

        $user_4 = User::create([
            'name' => 'البهوسي',
            'role' => 'candidate',
            'email' => 'circle4',
            'password' => Hash::make('Circle4')
        ]);
        $user_4->givePermissionTo(['candidate', 'c4', 'boujdour']);

        $user_5 = User::create([
            'name' => 'الغزالي',
            'role' => 'candidate',
            'email' => 'circle5',
            'password' => Hash::make('Circle5')
        ]);
        $user_5->givePermissionTo(['candidate', 'c5', 'boujdour']);

        $user_6 = User::create([
            'name' => 'الحارثي المحجوب',
            'role' => 'candidate',
            'email' => 'circle6',
            'password' => Hash::make('Circle6')
        ]);
        $user_6->givePermissionTo(['candidate', 'c6', 'boujdour']);

        $user_7 = User::create([
            'name' => 'ادبدا',
            'role' => 'candidate',
            'email' => 'circle7',
            'password' => Hash::make('Circle7')
        ]);
        $user_7->givePermissionTo(['candidate', 'c7', 'boujdour']);

        $user_8 = User::create([
            'name' => 'ماء العينين المباركي',
            'role' => 'candidate',
            'email' => 'circle8',
            'password' => Hash::make('Circle8')
        ]);
        $user_8->givePermissionTo(['candidate', 'c8', 'boujdour']);

        $user_9 = User::create([
            'name' => 'الخراشي بايا',
            'role' => 'candidate',
            'email' => 'circle9',
            'password' => Hash::make('Circle9')
        ]);
        $user_9->givePermissionTo(['candidate', 'c9', 'boujdour']);

        $user_10 = User::create([
            'name' => 'عبد الحي اهل بلحاج',
            'role' => 'candidate',
            'email' => 'circle10',
            'password' => Hash::make('Circle10')
        ]);
        $user_10->givePermissionTo(['candidate', 'c10', 'boujdour']);

        $user_11 = User::create([
            'name' => 'مربيه اهل لحماد ',
            'role' => 'candidate',
            'email' => 'circle11',
            'password' => Hash::make('Circle11')
        ]);
        $user_11->givePermissionTo(['candidate', 'c11', 'boujdour']);

        $user_12 = User::create([
            'name' => 'محمد فاضل بومهدي',
            'role' => 'candidate',
            'email' => 'circle12',
            'password' => Hash::make('Circle12')
        ]);
        $user_12->givePermissionTo(['candidate', 'c12', 'boujdour']);

        $user_13 = User::create([
            'name' => 'عيننا الدبدا',
            'role' => 'candidate',
            'email' => 'circle13',
            'password' => Hash::make('Circle13')
        ]);
        $user_13->givePermissionTo(['candidate', 'c13', 'boujdour']);

        $user_14 = User::create([
            'name' => 'الشيخ المامي',
            'role' => 'candidate',
            'email' => 'circle14',
            'password' => Hash::make('Circle14')
        ]);
        $user_14->givePermissionTo(['candidate', 'c14', 'boujdour']);

        $user_15 = User::create([
            'name' => 'براهيم لكريفا',
            'role' => 'candidate',
            'email' => 'circle15',
            'password' => Hash::make('Circle15')
        ]);
        $user_15->givePermissionTo(['candidate', 'c15', 'boujdour']);

        $user_16 = User::create([
            'name' => 'احمد لفريري',
            'role' => 'candidate',
            'email' => 'circle16',
            'password' => Hash::make('Circle16')
        ]);
        $user_16->givePermissionTo(['candidate', 'c16', 'boujdour']);

        $user_17 = User::create([
            'name' => 'حميدا الدبدا',
            'role' => 'candidate',
            'email' => 'circle17',
            'password' => Hash::make('Circle17')
        ]);
        $user_17->givePermissionTo(['candidate', 'c17', 'boujdour']);

        $user_18 = User::create([
            'name' => 'سيد براهيم خيار',
            'role' => 'candidate',
            'email' => 'circle18',
            'password' => Hash::make('Circle18')
        ]);
        $user_18->givePermissionTo(['candidate', 'c18', 'boujdour']);

        $user_19 = User::create([
            'name' => 'سيد احمدات الدبدا',
            'role' => 'candidate',
            'email' => 'circle19',
            'password' => Hash::make('Circle19')
        ]);
        $user_19->givePermissionTo(['candidate', 'c19', 'boujdour']);

        $user_20 = User::create([
            'name' => 'سلكا',
            'role' => 'candidate',
            'email' => 'circle20',
            'password' => Hash::make('Circle20')
        ]);
        $user_20->givePermissionTo(['candidate', 'c20', 'boujdour']);

        $user_21 = User::create([
            'name' => 'علي شارابارا',
            'role' => 'candidate',
            'email' => 'circle21',
            'password' => Hash::make('Circle21')
        ]);
        $user_21->givePermissionTo(['candidate', 'c21', 'boujdour']);

        $user_22 = User::create([
            'name' => 'عمر حويريا',
            'role' => 'candidate',
            'email' => 'circle22',
            'password' => Hash::make('Circle22')
        ]);
        $user_22->givePermissionTo(['candidate', 'c22', 'boujdour']);

        $user_23 = User::create([
            'name' => 'جويدا',
            'role' => 'candidate',
            'email' => 'circle23',
            'password' => Hash::make('Circle23')
        ]);
        $user_23->givePermissionTo(['candidate', 'c23', 'boujdour']);

        $user_24 = User::create([
            'name' => 'عبد الفتاح التروزي',
            'role' => 'candidate',
            'email' => 'circle24',
            'password' => Hash::make('Circle24')
        ]);
        $user_24->givePermissionTo(['candidate', 'c24', 'boujdour']);

        $user_25 = User::create([
            'name' => 'الكاشا احمد',
            'role' => 'candidate',
            'email' => 'circle25',
            'password' => Hash::make('Circle25')
        ]);
        $user_25->givePermissionTo(['candidate', 'c25', 'boujdour']);
    }
}
