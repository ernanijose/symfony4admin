> Para efetuar a instalação do sonata-admin

https://medium.com/@ger86/c%C3%B3mo-instalar-sonataadmin-en-symfony-4-fc48053175ac
> symfony new symfony4admin --version=4.4

> composer require symfony/orm-pack

> composer require symfony/maker-bundle


Deve colocar o seguinte codigo no composer.json
após a instalação dos comandos acima. <br />
```
"sonata-project/core-bundle": "^3.20",
```

> Depois tem que instalar

```
// config/bundles.php

return [
    // ... 
    Sonata\Doctrine\Bridge\Symfony\SonataDoctrineBundle::class => ['all' => true],
];
```

Depois executar os seguintes comandos <br />

>  composer require sonata-project/user-bundle

>  composer require friendsofsymfony/user-bundle
