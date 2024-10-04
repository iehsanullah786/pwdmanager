namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Find the user by email or any unique identifier
        $user = User::where('email', 'waqar@waqar.co')->first();

        if ($user) {
            // Update the password
            $user->password = Hash::make('London?321');
            $user->save();
        } else {
            // Or create a new user with the desired password
            User::create([
                'name' => 'Waqar Mohammad',
                'email' => 'waqar@waqar.co',
                'password' => Hash::make('London?321'),
            ]);
        }
    }
}
