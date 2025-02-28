<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    (
      User
      ::insert(
        [
          [
            'name' => 'Test User 1',
            'email' => 'test1@example.com',
            'password' => Hash::make('12345678'),
          ],
          [
            'name' => 'Test User 2',
            'email' => 'test2@example.com',
            'password' => Hash::make('12345678'),
          ],
          [
            'name' => 'Test User 3',
            'email' => 'test3@example.com',
            'password' => Hash::make('12345678'),
          ],
        ]
      )
    );
  }
}
