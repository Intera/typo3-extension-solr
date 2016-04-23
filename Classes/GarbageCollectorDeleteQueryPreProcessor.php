<?php
namespace ApacheSolrForTypo3\Solr;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2010-2015 Alexander Stehlik <astehlik.deleteme@intera.de>
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

use ApacheSolrForTypo3\Solr\IndexQueue\Item;

/**
 * GarbageCollector delete query pre-processor interface.
 */
interface GarbageCollectorDeleteQueryPreProcessor
{

    /**
     * Modifies the query for deleting documents from the solr index.
     *
     * @param string $query The original query.
     * @param string $table The record's table name.
     * @param integer $uid The record's uid.
     * @param Item $indexQueueItem
     * @param GarbageCollector $gargabeCollector The calling garbage collector instance.
     * @return string The updated query that should be used for document deletion.
     * @see GarbageCollector->deleteIndexDocuments()
     */
    public function getGarbageCollectorDeleteQuery(
        $query,
        $table,
        $uid,
        Item $indexQueueItem,
        GarbageCollector $gargabeCollector
    );
}