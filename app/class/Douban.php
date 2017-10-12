<?php
namespace Applib;

class Douban 
{
	private $searchApiByISBN = "https://api.douban.com/v2/book/isbn/";

	public function searchBook($bookInfo = array())
	{
		if(isset($bookInfo['isbn']) )
		{
			$queryUrl = $bookInfo['isbn'];	
			$searchUrl = $this->searchApiByISBN . $queryUrl;

			$result = file_get_contents($searchUrl);
			
			return Util::util_json_decode($result);
		}
	}

	public function getCollectionByUsername() 
	{

	}
}
