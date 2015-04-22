<?php namespace Spatie\MediaLibrary\Repositories;

use Spatie\MediaLibrary\MediaLibraryModel\MediaLibraryModelInterface;

interface MediaLibraryRepositoryInterface {

    /**
     * Get a collection of media by its collectionName
     *
     * @param MediaLibraryModelInterface $model
     * @param $collectionName
     * @param $filters
     * @return mixed
     */
    public function getCollection(MediaLibraryModelInterface $model, $collectionName, $filters);

    /**
     * Add a new media to a Models mediaCollection
     *
     * @param $file
     * @param MediaLibraryModelInterface $model
     * @param $collectionName
     * @param bool $preserveOriginal
     * @param bool $addAsTemporary
     * @return Media
     */
    public function add($file, MediaLibraryModelInterface $model, $collectionName, $preserveOriginal, $addAsTemporary);

    /**
     * Remove a media record and it's associated files
     *
     * @param $id
     * @return bool
     * @throws \Exception
     */
    public function remove($id);

    /**
     * Reorder media-records
     *
     * @param $orderArray
     * @param MediaLibraryModelInterface $model
     */
    public function order($orderArray, MediaLibraryModelInterface $model);

    /**
     *
     * Clean temp files older than 1 day
     *
     * @return int The amount of deleted files
     *
     */
    public function cleanUp();
}
