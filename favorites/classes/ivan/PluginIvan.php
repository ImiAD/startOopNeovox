<?php
require_once __DIR__.'/../IPlugin.php';
class PluginIvan implements IPlugin
{
    private static array $links = [
        ['Super Site 1', 'www.site-1.org'],
        ['Super Site 2', 'www.site-2.org'],
        ['Super Site 3', 'www.site-3.org'],
        ['Super Site 4', 'www.site-4.org'],
    ];
    private array $articles = [
        ['Article 1', 'www.site.org/index.php?id=1'],
        ['Article 2', 'www.site.org/index.php?id=2'],
        ['Article 3', 'www.site.org/index.php?id=3'],
        ['Article 4', 'www.site.org/index.php?id=4'],
    ];
    private static array $apps = [
        ['Super App 1', 'www.site.org/app-1'],
        ['Super App 2', 'www.site.org/app-2'],
        ['Super App 3', 'www.site.org/app-3'],
        ['Super App 4', 'www.site.org/app-4'],
    ];
    public static function getName(): string
    {
        return 'Ссылки от Вани';
    }

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