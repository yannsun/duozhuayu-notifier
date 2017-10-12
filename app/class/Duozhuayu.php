<?php
namespace Applib;

class Duozhuayu
{
	private $searchApi = "http://www.duozhuayu.net/api/search";

	public function searchBook($bookInfo = array())
	{
		if(isset($bookInfo['isbn']) )
		{
			$query['q'] = $bookInfo['isbn'];
			$queryUrl = http_build_query($query);	
			$searchUrl = $this->searchApi . "?" . $queryUrl;

			$result = file_get_contents($searchUrl);
			
			return Util::util_json_decode($result);
		}
		
		if(isset($bookInfo['name']))
		{
			
		}


	}

	private function checkIsSellable($html)
	{
	
		return false;
	}
}
