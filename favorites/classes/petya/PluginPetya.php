<?php
require_once __DIR__ . '/../IPlugin.php';
class PluginPetya implements IPlugin
{
    private static array $links = [
        ['Site 1', 'www.site-1.org'],
        ['Site 2', 'www.site-2.org'],
    ];
    private array $articles = [
        ['Super Article 1', 'www.site.org/index.php?id=1'],
        ['Super Article 2', 'www.site.org/index.php?id=2'],
    ];
    private static array $apps = [
        ['App 1', 'www.site.org/app-1'],
        ['App 2', 'www.site.org/app-2'],
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