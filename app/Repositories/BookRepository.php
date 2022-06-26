<?php

namespace App\Repositories;


use App\Models\Book;
use App\Repositories\Contracts\BookRepositoryInterface;

class BookRepository implements BookRepositoryInterface
{
    const VIEW_LIST = [
        'featured' => [
            'conditions' => [
                ['isFeatured', '=', '1'],
            ],
            'limit' => 8
        ]
    ];

    protected Book $model;

    public function __construct(Book $model)
    {
        $this->model = $model;
    }

    private static function VIEW_LIST($view): array
    {
        return self::VIEW_LIST;
    }

    public function getByView($view)
    {
        $query = $this->buildQueryByView($view);
        return $query->get();
    }

    private function buildQueryByView($view)
    {
        $query = new Book();
        $filter = self::VIEW_LIST($view);
        $filterParams = $filter[$view];

        if (array_key_exists('conditions', $filterParams)) {
            $query = $query->where($filterParams['conditions']);
        }

        if (array_key_exists('sorts', $filterParams)) {
            foreach($filterParams['sorts'] as $sortBy => $sortType) {
                $query = $query->orderBy($sortBy, $sortType);
            }
        }

        if (array_key_exists('limit', $filterParams)) {
            $query = $query->limit($filterParams['limit']);
        }

        return $query;
    }

    public function getBook($book_id)
    {
    }

    public function getBooks($params)
    {
    }

    public function add($book_data) {

    }

    public function delete($book_id)
    {
    }


    public function update($book_id, array $book_data)
    {

    }
}
