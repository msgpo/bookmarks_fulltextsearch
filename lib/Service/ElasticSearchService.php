<?php
/**
 * Bookmarks_FullTextSearch - Indexing bookmarks
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the COPYING file.
 *
 * @author Maxence Lange <maxence@artificial-owl.com>
 * @copyright 2018
 * @license GNU AGPL version 3 or any later version
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

namespace OCA\Bookmarks_FullTextSearch\Service;


use OCA\FullTextSearch\IFullTextSearchPlatform;
use OCA\FullTextSearch\Model\SearchRequest;

class ElasticSearchService {

	/** @var MiscService */
	private $miscService;


	/**
	 * ElasticSearchService constructor.
	 *
	 * @param MiscService $miscService
	 *
	 * @internal param IProviderFactory $factory
	 */
	public function __construct(MiscService $miscService) {
		$this->miscService = $miscService;
	}


	/**
	 * @param IFullTextSearchPlatform $platform
	 */
	public function onInitializingIndex(IFullTextSearchPlatform $platform) {
		if ($platform->getId() !== 'elastic_search') {
			return;
		}
	}


	/**
	 * @param IFullTextSearchPlatform $platform
	 */
	public function onResettingIndex(IFullTextSearchPlatform $platform) {
		if ($platform->getId() !== 'elastic_search') {
			return;
		}
	}


	/**
	 * @param IFullTextSearchPlatform $platform
	 * @param array $arr
	 */
	public function onIndexingDocument(IFullTextSearchPlatform $platform, &$arr) {
		if ($platform->getId() !== 'elastic_search') {
			return;
		}
	}


	/**
	 * @param IFullTextSearchPlatform $platform
	 * @param SearchRequest $request
	 * @param array $arr
	 */
	public function onSearchingQuery(IFullTextSearchPlatform $platform, SearchRequest $request, &$arr) {
		if ($platform->getId() !== 'elastic_search') {
			return;
		}
	}


}
