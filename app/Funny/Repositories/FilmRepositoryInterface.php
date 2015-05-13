<?php
/**
 * Created by PhpStorm.
 * User: nguyentuan
 * Date: 5/12/2015
 * Time: 9:17 PM
 */

namespace Funny\Repositories;


interface FilmRepositoryInterface
{
    /**
     * Find a Film by id
     *
     * @param int $id
     * @return \Funny\Film
     */
    public function findById($id);

    /**
     * Get an array of key-value (id=>title) pairs of films
     *
     * @return array
     */
    public function listAll();

    /**
     * Create a new Film in database
     *
     * @param array $data
     * @return \Funny\Film
     */
    public function create(array $data);
}