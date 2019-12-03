<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $books = [
      ['name' => '田中'],
      ['name' => '山田'],
      ['name' => '高橋'],
    ];

    foreach($books as $book) {
      \App\Book::create($book);
    }
  }
}
