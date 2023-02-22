<?php
require_once __DIR__ . '/../IPlugin.php';
class PluginVasya implements IPlugin
{
    private static array $links = [
        ['NoSite 1', 'www.site-1.org'],
        ['NoSite 2', 'www.site-2.org'],
    ];
    private array $articles = [
        ['NoArticle 1', 'www.site.org/index.php?id=1'],
        ['NoArticle 2', 'www.site.org/index.php?id=2'],
    ];
    private static array $apps = [
        ['NoApp 1', 'www.site.org/app-1'],
        ['NoApp 2', 'www.site.org/app-2'],
    ];

    public static function getLinksItems(): array
    {
        return self::$links;
    }

    public function getArticlesItems(): array
    {
        return $this->articles;
    }

    public static function getAppsItems(): array
    {
        return self::$apps;
    }
}