<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerE6p9swd\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerE6p9swd/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerE6p9swd.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerE6p9swd\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerE6p9swd\appProdProjectContainer([
    'container.build_hash' => 'E6p9swd',
    'container.build_id' => '3ac07397',
    'container.build_time' => 1708951870,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerE6p9swd');
