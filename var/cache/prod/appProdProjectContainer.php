<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerVhzh2ko\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerVhzh2ko/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerVhzh2ko.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerVhzh2ko\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerVhzh2ko\appProdProjectContainer([
    'container.build_hash' => 'Vhzh2ko',
    'container.build_id' => '18a21df1',
    'container.build_time' => 1617207025,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerVhzh2ko');
