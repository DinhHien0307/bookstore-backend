<?php

namespace App\Repositories\Contracts;

use App\Models\Book;
use Illuminate\Pagination\Paginator;

interface BookRepositoryInterface
{

    public function getBooks(array $params);

    /**
     * Get a book.
     *
     * @param int $book_id
     */
    public function getBook(int $book_id);

    /**
     * Add a book.
     *
     * @param array $book_data
     */
    public function add(array $book_data);

    /**
     * Deletes a post.
     *
     * @param int $book_id
     */
    public function delete(int $book_id);

    /**
     * Updates a post.
     *
     * @param int $book_id
     * @param array
     */
    public function update(int $book_id, array $book_data);
}
