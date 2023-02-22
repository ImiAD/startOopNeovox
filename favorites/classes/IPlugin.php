<?php

interface IPlugin
{
    /**
     * Для вывода ссылок на сайты
     * public or public static
     * формат: array(link, href)
     * array getMenuItems(void)
     */
    public static function getLinksItems();

    /**
     * Для вывода ссылок на статьи
     * public or public static
     * формат: array(название статьи, href)
     * array getArticlesItems(void)
     */
    public function getArticlesItems();

    /**
     * Для вывода ссылок на приложения
     * public or public static
     * формат: array(название приложения, href)
     * array getAppsItems(void)
     */
    public static function getAppsItems();
}