<?php

namespace Spatie\Crawler;

interface CrawlObserver
{
    /**
     * Called when the crawler will crawl the url.
     *
     * @param \Spatie\Crawler\Url   $url
     */
    public function willCrawl(Url $url);

    /**
     * Called when the crawler has crawled the given url.
     *
     * @param \Spatie\Crawler\Url                      $url
     * @param \Psr\Http\Message\ResponseInterface|null $response
     */
    public function hasBeenCrawled(Url $url, $response);

    /**
     * Called when the crawl has ended.
     */
    public function finishedCrawling();
}
