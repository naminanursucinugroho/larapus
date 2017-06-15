<?php

use Illuminate\Database\Seeder;

use App\Author;
use App\Book;
class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //sample penulis
        $author1 = Author::craete(['name'=>'M septa']);
        $author2 = Author::craete(['name'=>'septi']);
        $author3 = Author::craete(['name'=>'merry']);

        //sample buku
        $book1 = Book::create(['title'=>'Kupinang Engkau Dengan Hamdalah','amount'=>3, 'author_id'=>$author1->id]);
	    $book2 = Book::create(['title'=>'Jalana Cinta Para pejuang','amount'=>2, 'author_id'=>$author2->id]);
        $book3 = Book::create(['title'=>'membingkai surga dalam rumah tangga','amount'=>4, 'author_id'=>$author3->id]);
         $book4 = Book::create(['title'=>'cinta & seks rumah tangga muslim','amount'=>3, 'author_id'=>$author3->id]);


    }
}
