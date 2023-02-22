<?php

class Favorites
{
    private array $plugins = [];

    public function __construct()
    {
        $isExists = false;
        foreach (glob('classes/*/*.php') as $item) {
//            var_dump($item);
//            die;
            if (is_file($item)) {
                require_once ($item);
                $isExists = true;
            }
        }

        if ($isExists) {
            $this->findPlugins();
        }
    }

    private function findPlugins(): void
    {

        foreach (get_declared_classes() as $class) {
//            var_dump(get_declared_classes());
//         var_dump($class);
//            die;
            // $rc - reflection class
            try {
                $rc = new ReflectionClass($class);
            } catch (ReflectionException $e) {
                $e->getMessage();
                die;
            }

            if ($rc->implementsInterface('IPlugin')) {
                $this->plugins[] = $rc;
            }
        }
    }
    public function getFavorites($methodName): array
    {
        $list  = [];
        $items = [];

        foreach ($this->plugins as $rc):
            if ($rc->hasMethod($methodName)):
                // $rm - reflection method
                $rm = $rc->getMethod($methodName);
                if ($rm->isStatic()) {
                    $items[] = $rm->invoke(null);
                } else {
                    $items[] = $rm->invoke($rc->newInstance());
                }
            endif;
        endforeach;
        $list[] = $items;

        return $list;
    }
}