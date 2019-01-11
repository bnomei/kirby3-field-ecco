<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf67e71724b0e8093446cd2419412dbb4
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '04c6c5c2f7095ccf6c481d3e53e1776f' => __DIR__ . '/..' . '/mustangostang/spyc/Spyc.php',
        '87988fc7b1c1f093da22a1a3de972f3a' => __DIR__ . '/../..' . '/kirby/config/helpers.php',
        '428e0a6316e676194f2283f47fbd1fc4' => __DIR__ . '/../..' . '/kirby/config/aliases.php',
        'd80b806b2b0bfc4457e5f164edcb5232' => __DIR__ . '/../..' . '/kirby/config/tests.php',
    );

    public static $prefixLengthsPsr4 = array (
        'Z' => 
        array (
            'Zend\\Escaper\\' => 13,
        ),
        'W' => 
        array (
            'Whoops\\' => 7,
        ),
        'T' => 
        array (
            'TrueBV\\' => 7,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'K' => 
        array (
            'Kirby\\ComposerInstaller\\' => 24,
            'Kirby\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Zend\\Escaper\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-escaper/src',
        ),
        'Whoops\\' => 
        array (
            0 => __DIR__ . '/..' . '/filp/whoops/src/Whoops',
        ),
        'TrueBV\\' => 
        array (
            0 => __DIR__ . '/..' . '/true/punycode/src',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'Kirby\\ComposerInstaller\\' => 
        array (
            0 => __DIR__ . '/..' . '/getkirby/composer-installer/src',
        ),
        'Kirby\\' => 
        array (
            0 => __DIR__ . '/../..' . '/kirby/src',
        ),
    );

    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/..' . '/league/color-extractor/src',
    );

    public static $prefixesPsr0 = array (
        'c' => 
        array (
            'claviska' => 
            array (
                0 => __DIR__ . '/..' . '/claviska/simpleimage/src',
            ),
        ),
        'M' => 
        array (
            'Michelf' => 
            array (
                0 => __DIR__ . '/..' . '/michelf/php-smartypants',
            ),
        ),
    );

    public static $classMap = array (
        'Kirby\\Api\\Api' => __DIR__ . '/../..' . '/kirby/src/Api/Api.php',
        'Kirby\\Api\\Collection' => __DIR__ . '/../..' . '/kirby/src/Api/Collection.php',
        'Kirby\\Api\\Model' => __DIR__ . '/../..' . '/kirby/src/Api/Model.php',
        'Kirby\\Cache\\ApcuCache' => __DIR__ . '/../..' . '/kirby/src/Cache/ApcuCache.php',
        'Kirby\\Cache\\Cache' => __DIR__ . '/../..' . '/kirby/src/Cache/Cache.php',
        'Kirby\\Cache\\FileCache' => __DIR__ . '/../..' . '/kirby/src/Cache/FileCache.php',
        'Kirby\\Cache\\MemCached' => __DIR__ . '/../..' . '/kirby/src/Cache/MemCached.php',
        'Kirby\\Cache\\Value' => __DIR__ . '/../..' . '/kirby/src/Cache/Value.php',
        'Kirby\\Cms\\Api' => __DIR__ . '/../..' . '/kirby/src/Cms/Api.php',
        'Kirby\\Cms\\App' => __DIR__ . '/../..' . '/kirby/src/Cms/App.php',
        'Kirby\\Cms\\AppCaches' => __DIR__ . '/../..' . '/kirby/src/Cms/AppCaches.php',
        'Kirby\\Cms\\AppErrors' => __DIR__ . '/../..' . '/kirby/src/Cms/AppErrors.php',
        'Kirby\\Cms\\AppPlugins' => __DIR__ . '/../..' . '/kirby/src/Cms/AppPlugins.php',
        'Kirby\\Cms\\AppTranslations' => __DIR__ . '/../..' . '/kirby/src/Cms/AppTranslations.php',
        'Kirby\\Cms\\AppUsers' => __DIR__ . '/../..' . '/kirby/src/Cms/AppUsers.php',
        'Kirby\\Cms\\Asset' => __DIR__ . '/../..' . '/kirby/src/Cms/Asset.php',
        'Kirby\\Cms\\Auth' => __DIR__ . '/../..' . '/kirby/src/Cms/Auth.php',
        'Kirby\\Cms\\Blueprint' => __DIR__ . '/../..' . '/kirby/src/Cms/Blueprint.php',
        'Kirby\\Cms\\Collection' => __DIR__ . '/../..' . '/kirby/src/Cms/Collection.php',
        'Kirby\\Cms\\Collections' => __DIR__ . '/../..' . '/kirby/src/Cms/Collections.php',
        'Kirby\\Cms\\Content' => __DIR__ . '/../..' . '/kirby/src/Cms/Content.php',
        'Kirby\\Cms\\ContentTranslation' => __DIR__ . '/../..' . '/kirby/src/Cms/ContentTranslation.php',
        'Kirby\\Cms\\Dir' => __DIR__ . '/../..' . '/kirby/src/Cms/Dir.php',
        'Kirby\\Cms\\Email' => __DIR__ . '/../..' . '/kirby/src/Cms/Email.php',
        'Kirby\\Cms\\Field' => __DIR__ . '/../..' . '/kirby/src/Cms/Field.php',
        'Kirby\\Cms\\File' => __DIR__ . '/../..' . '/kirby/src/Cms/File.php',
        'Kirby\\Cms\\FileActions' => __DIR__ . '/../..' . '/kirby/src/Cms/FileActions.php',
        'Kirby\\Cms\\FileBlueprint' => __DIR__ . '/../..' . '/kirby/src/Cms/FileBlueprint.php',
        'Kirby\\Cms\\FileFoundation' => __DIR__ . '/../..' . '/kirby/src/Cms/FileFoundation.php',
        'Kirby\\Cms\\FilePermissions' => __DIR__ . '/../..' . '/kirby/src/Cms/FilePermissions.php',
        'Kirby\\Cms\\FileRules' => __DIR__ . '/../..' . '/kirby/src/Cms/FileRules.php',
        'Kirby\\Cms\\FileVersion' => __DIR__ . '/../..' . '/kirby/src/Cms/FileVersion.php',
        'Kirby\\Cms\\Filename' => __DIR__ . '/../..' . '/kirby/src/Cms/Filename.php',
        'Kirby\\Cms\\Files' => __DIR__ . '/../..' . '/kirby/src/Cms/Files.php',
        'Kirby\\Cms\\Form' => __DIR__ . '/../..' . '/kirby/src/Cms/Form.php',
        'Kirby\\Cms\\HasChildren' => __DIR__ . '/../..' . '/kirby/src/Cms/HasChildren.php',
        'Kirby\\Cms\\HasFiles' => __DIR__ . '/../..' . '/kirby/src/Cms/HasFiles.php',
        'Kirby\\Cms\\HasMethods' => __DIR__ . '/../..' . '/kirby/src/Cms/HasMethods.php',
        'Kirby\\Cms\\HasSiblings' => __DIR__ . '/../..' . '/kirby/src/Cms/HasSiblings.php',
        'Kirby\\Cms\\Html' => __DIR__ . '/../..' . '/kirby/src/Cms/Html.php',
        'Kirby\\Cms\\Ingredients' => __DIR__ . '/../..' . '/kirby/src/Cms/Ingredients.php',
        'Kirby\\Cms\\KirbyTag' => __DIR__ . '/../..' . '/kirby/src/Cms/KirbyTag.php',
        'Kirby\\Cms\\KirbyTags' => __DIR__ . '/../..' . '/kirby/src/Cms/KirbyTags.php',
        'Kirby\\Cms\\Language' => __DIR__ . '/../..' . '/kirby/src/Cms/Language.php',
        'Kirby\\Cms\\Languages' => __DIR__ . '/../..' . '/kirby/src/Cms/Languages.php',
        'Kirby\\Cms\\Media' => __DIR__ . '/../..' . '/kirby/src/Cms/Media.php',
        'Kirby\\Cms\\Model' => __DIR__ . '/../..' . '/kirby/src/Cms/Model.php',
        'Kirby\\Cms\\ModelPermissions' => __DIR__ . '/../..' . '/kirby/src/Cms/ModelPermissions.php',
        'Kirby\\Cms\\ModelWithContent' => __DIR__ . '/../..' . '/kirby/src/Cms/ModelWithContent.php',
        'Kirby\\Cms\\Nest' => __DIR__ . '/../..' . '/kirby/src/Cms/Nest.php',
        'Kirby\\Cms\\NestCollection' => __DIR__ . '/../..' . '/kirby/src/Cms/NestCollection.php',
        'Kirby\\Cms\\NestObject' => __DIR__ . '/../..' . '/kirby/src/Cms/NestObject.php',
        'Kirby\\Cms\\Page' => __DIR__ . '/../..' . '/kirby/src/Cms/Page.php',
        'Kirby\\Cms\\PageActions' => __DIR__ . '/../..' . '/kirby/src/Cms/PageActions.php',
        'Kirby\\Cms\\PageBlueprint' => __DIR__ . '/../..' . '/kirby/src/Cms/PageBlueprint.php',
        'Kirby\\Cms\\PagePermissions' => __DIR__ . '/../..' . '/kirby/src/Cms/PagePermissions.php',
        'Kirby\\Cms\\PageRules' => __DIR__ . '/../..' . '/kirby/src/Cms/PageRules.php',
        'Kirby\\Cms\\PageSiblings' => __DIR__ . '/../..' . '/kirby/src/Cms/PageSiblings.php',
        'Kirby\\Cms\\Pages' => __DIR__ . '/../..' . '/kirby/src/Cms/Pages.php',
        'Kirby\\Cms\\Pagination' => __DIR__ . '/../..' . '/kirby/src/Cms/Pagination.php',
        'Kirby\\Cms\\Panel' => __DIR__ . '/../..' . '/kirby/src/Cms/Panel.php',
        'Kirby\\Cms\\Permissions' => __DIR__ . '/../..' . '/kirby/src/Cms/Permissions.php',
        'Kirby\\Cms\\Plugin' => __DIR__ . '/../..' . '/kirby/src/Cms/Plugin.php',
        'Kirby\\Cms\\PluginAssets' => __DIR__ . '/../..' . '/kirby/src/Cms/PluginAssets.php',
        'Kirby\\Cms\\R' => __DIR__ . '/../..' . '/kirby/src/Cms/R.php',
        'Kirby\\Cms\\Responder' => __DIR__ . '/../..' . '/kirby/src/Cms/Responder.php',
        'Kirby\\Cms\\Response' => __DIR__ . '/../..' . '/kirby/src/Cms/Response.php',
        'Kirby\\Cms\\Role' => __DIR__ . '/../..' . '/kirby/src/Cms/Role.php',
        'Kirby\\Cms\\Roles' => __DIR__ . '/../..' . '/kirby/src/Cms/Roles.php',
        'Kirby\\Cms\\S' => __DIR__ . '/../..' . '/kirby/src/Cms/S.php',
        'Kirby\\Cms\\Search' => __DIR__ . '/../..' . '/kirby/src/Cms/Search.php',
        'Kirby\\Cms\\Section' => __DIR__ . '/../..' . '/kirby/src/Cms/Section.php',
        'Kirby\\Cms\\Site' => __DIR__ . '/../..' . '/kirby/src/Cms/Site.php',
        'Kirby\\Cms\\SiteActions' => __DIR__ . '/../..' . '/kirby/src/Cms/SiteActions.php',
        'Kirby\\Cms\\SiteBlueprint' => __DIR__ . '/../..' . '/kirby/src/Cms/SiteBlueprint.php',
        'Kirby\\Cms\\SitePermissions' => __DIR__ . '/../..' . '/kirby/src/Cms/SitePermissions.php',
        'Kirby\\Cms\\SiteRules' => __DIR__ . '/../..' . '/kirby/src/Cms/SiteRules.php',
        'Kirby\\Cms\\Structure' => __DIR__ . '/../..' . '/kirby/src/Cms/Structure.php',
        'Kirby\\Cms\\StructureObject' => __DIR__ . '/../..' . '/kirby/src/Cms/StructureObject.php',
        'Kirby\\Cms\\System' => __DIR__ . '/../..' . '/kirby/src/Cms/System.php',
        'Kirby\\Cms\\Template' => __DIR__ . '/../..' . '/kirby/src/Cms/Template.php',
        'Kirby\\Cms\\Translation' => __DIR__ . '/../..' . '/kirby/src/Cms/Translation.php',
        'Kirby\\Cms\\Translations' => __DIR__ . '/../..' . '/kirby/src/Cms/Translations.php',
        'Kirby\\Cms\\Url' => __DIR__ . '/../..' . '/kirby/src/Cms/Url.php',
        'Kirby\\Cms\\User' => __DIR__ . '/../..' . '/kirby/src/Cms/User.php',
        'Kirby\\Cms\\UserActions' => __DIR__ . '/../..' . '/kirby/src/Cms/UserActions.php',
        'Kirby\\Cms\\UserBlueprint' => __DIR__ . '/../..' . '/kirby/src/Cms/UserBlueprint.php',
        'Kirby\\Cms\\UserPermissions' => __DIR__ . '/../..' . '/kirby/src/Cms/UserPermissions.php',
        'Kirby\\Cms\\UserRules' => __DIR__ . '/../..' . '/kirby/src/Cms/UserRules.php',
        'Kirby\\Cms\\Users' => __DIR__ . '/../..' . '/kirby/src/Cms/Users.php',
        'Kirby\\Cms\\Visitor' => __DIR__ . '/../..' . '/kirby/src/Cms/Visitor.php',
        'Kirby\\ComposerInstaller\\Installer' => __DIR__ . '/..' . '/getkirby/composer-installer/src/Installer.php',
        'Kirby\\ComposerInstaller\\Plugin' => __DIR__ . '/..' . '/getkirby/composer-installer/src/Plugin.php',
        'Kirby\\Data\\Data' => __DIR__ . '/../..' . '/kirby/src/Data/Data.php',
        'Kirby\\Data\\Handler' => __DIR__ . '/../..' . '/kirby/src/Data/Handler.php',
        'Kirby\\Data\\Json' => __DIR__ . '/../..' . '/kirby/src/Data/Json.php',
        'Kirby\\Data\\Txt' => __DIR__ . '/../..' . '/kirby/src/Data/Txt.php',
        'Kirby\\Data\\Yaml' => __DIR__ . '/../..' . '/kirby/src/Data/Yaml.php',
        'Kirby\\Database\\Database' => __DIR__ . '/../..' . '/kirby/src/Database/Database.php',
        'Kirby\\Database\\Db' => __DIR__ . '/../..' . '/kirby/src/Database/Db.php',
        'Kirby\\Database\\Query' => __DIR__ . '/../..' . '/kirby/src/Database/Query.php',
        'Kirby\\Database\\Sql' => __DIR__ . '/../..' . '/kirby/src/Database/Sql.php',
        'Kirby\\Database\\Sql\\Mysql' => __DIR__ . '/../..' . '/kirby/src/Database/Sql/Mysql.php',
        'Kirby\\Database\\Sql\\Sqlite' => __DIR__ . '/../..' . '/kirby/src/Database/Sql/Sqlite.php',
        'Kirby\\Email\\Body' => __DIR__ . '/../..' . '/kirby/src/Email/Body.php',
        'Kirby\\Email\\Email' => __DIR__ . '/../..' . '/kirby/src/Email/Email.php',
        'Kirby\\Email\\PHPMailer' => __DIR__ . '/../..' . '/kirby/src/Email/PHPMailer.php',
        'Kirby\\Exception\\BadMethodCallException' => __DIR__ . '/../..' . '/kirby/src/Exception/BadMethodCallException.php',
        'Kirby\\Exception\\DuplicateException' => __DIR__ . '/../..' . '/kirby/src/Exception/DuplicateException.php',
        'Kirby\\Exception\\Exception' => __DIR__ . '/../..' . '/kirby/src/Exception/Exception.php',
        'Kirby\\Exception\\InvalidArgumentException' => __DIR__ . '/../..' . '/kirby/src/Exception/InvalidArgumentException.php',
        'Kirby\\Exception\\LogicException' => __DIR__ . '/../..' . '/kirby/src/Exception/LogicException.php',
        'Kirby\\Exception\\NotFoundException' => __DIR__ . '/../..' . '/kirby/src/Exception/NotFoundException.php',
        'Kirby\\Exception\\PermissionException' => __DIR__ . '/../..' . '/kirby/src/Exception/PermissionException.php',
        'Kirby\\Form\\Field' => __DIR__ . '/../..' . '/kirby/src/Form/Field.php',
        'Kirby\\Form\\Fields' => __DIR__ . '/../..' . '/kirby/src/Form/Fields.php',
        'Kirby\\Form\\Form' => __DIR__ . '/../..' . '/kirby/src/Form/Form.php',
        'Kirby\\Form\\Options' => __DIR__ . '/../..' . '/kirby/src/Form/Options.php',
        'Kirby\\Form\\OptionsApi' => __DIR__ . '/../..' . '/kirby/src/Form/OptionsApi.php',
        'Kirby\\Form\\OptionsQuery' => __DIR__ . '/../..' . '/kirby/src/Form/OptionsQuery.php',
        'Kirby\\Form\\Validations' => __DIR__ . '/../..' . '/kirby/src/Form/Validations.php',
        'Kirby\\Http\\Cookie' => __DIR__ . '/../..' . '/kirby/src/Http/Cookie.php',
        'Kirby\\Http\\Header' => __DIR__ . '/../..' . '/kirby/src/Http/Header.php',
        'Kirby\\Http\\Idn' => __DIR__ . '/../..' . '/kirby/src/Http/Idn.php',
        'Kirby\\Http\\Params' => __DIR__ . '/../..' . '/kirby/src/Http/Params.php',
        'Kirby\\Http\\Path' => __DIR__ . '/../..' . '/kirby/src/Http/Path.php',
        'Kirby\\Http\\Query' => __DIR__ . '/../..' . '/kirby/src/Http/Query.php',
        'Kirby\\Http\\Remote' => __DIR__ . '/../..' . '/kirby/src/Http/Remote.php',
        'Kirby\\Http\\Request' => __DIR__ . '/../..' . '/kirby/src/Http/Request.php',
        'Kirby\\Http\\Request\\Auth\\BasicAuth' => __DIR__ . '/../..' . '/kirby/src/Http/Request/Auth/BasicAuth.php',
        'Kirby\\Http\\Request\\Auth\\BearerAuth' => __DIR__ . '/../..' . '/kirby/src/Http/Request/Auth/BearerAuth.php',
        'Kirby\\Http\\Request\\Body' => __DIR__ . '/../..' . '/kirby/src/Http/Request/Body.php',
        'Kirby\\Http\\Request\\Data' => __DIR__ . '/../..' . '/kirby/src/Http/Request/Data.php',
        'Kirby\\Http\\Request\\Files' => __DIR__ . '/../..' . '/kirby/src/Http/Request/Files.php',
        'Kirby\\Http\\Request\\Query' => __DIR__ . '/../..' . '/kirby/src/Http/Request/Query.php',
        'Kirby\\Http\\Response' => __DIR__ . '/../..' . '/kirby/src/Http/Response.php',
        'Kirby\\Http\\Route' => __DIR__ . '/../..' . '/kirby/src/Http/Route.php',
        'Kirby\\Http\\Router' => __DIR__ . '/../..' . '/kirby/src/Http/Router.php',
        'Kirby\\Http\\Server' => __DIR__ . '/../..' . '/kirby/src/Http/Server.php',
        'Kirby\\Http\\Uri' => __DIR__ . '/../..' . '/kirby/src/Http/Uri.php',
        'Kirby\\Http\\Url' => __DIR__ . '/../..' . '/kirby/src/Http/Url.php',
        'Kirby\\Http\\Visitor' => __DIR__ . '/../..' . '/kirby/src/Http/Visitor.php',
        'Kirby\\Image\\Camera' => __DIR__ . '/../..' . '/kirby/src/Image/Camera.php',
        'Kirby\\Image\\Darkroom' => __DIR__ . '/../..' . '/kirby/src/Image/Darkroom.php',
        'Kirby\\Image\\Darkroom\\GdLib' => __DIR__ . '/../..' . '/kirby/src/Image/Darkroom/GdLib.php',
        'Kirby\\Image\\Darkroom\\ImageMagick' => __DIR__ . '/../..' . '/kirby/src/Image/Darkroom/ImageMagick.php',
        'Kirby\\Image\\Dimensions' => __DIR__ . '/../..' . '/kirby/src/Image/Dimensions.php',
        'Kirby\\Image\\Exif' => __DIR__ . '/../..' . '/kirby/src/Image/Exif.php',
        'Kirby\\Image\\Image' => __DIR__ . '/../..' . '/kirby/src/Image/Image.php',
        'Kirby\\Image\\Location' => __DIR__ . '/../..' . '/kirby/src/Image/Location.php',
        'Kirby\\Session\\AutoSession' => __DIR__ . '/../..' . '/kirby/src/Session/AutoSession.php',
        'Kirby\\Session\\FileSessionStore' => __DIR__ . '/../..' . '/kirby/src/Session/FileSessionStore.php',
        'Kirby\\Session\\Session' => __DIR__ . '/../..' . '/kirby/src/Session/Session.php',
        'Kirby\\Session\\SessionData' => __DIR__ . '/../..' . '/kirby/src/Session/SessionData.php',
        'Kirby\\Session\\SessionStore' => __DIR__ . '/../..' . '/kirby/src/Session/SessionStore.php',
        'Kirby\\Session\\Sessions' => __DIR__ . '/../..' . '/kirby/src/Session/Sessions.php',
        'Kirby\\Text\\KirbyTag' => __DIR__ . '/../..' . '/kirby/src/Text/KirbyTag.php',
        'Kirby\\Text\\KirbyTags' => __DIR__ . '/../..' . '/kirby/src/Text/KirbyTags.php',
        'Kirby\\Text\\Markdown' => __DIR__ . '/../..' . '/kirby/src/Text/Markdown.php',
        'Kirby\\Text\\SmartyPants' => __DIR__ . '/../..' . '/kirby/src/Text/SmartyPants.php',
        'Kirby\\Toolkit\\A' => __DIR__ . '/../..' . '/kirby/src/Toolkit/A.php',
        'Kirby\\Toolkit\\Collection' => __DIR__ . '/../..' . '/kirby/src/Toolkit/Collection.php',
        'Kirby\\Toolkit\\Component' => __DIR__ . '/../..' . '/kirby/src/Toolkit/Component.php',
        'Kirby\\Toolkit\\Config' => __DIR__ . '/../..' . '/kirby/src/Toolkit/Config.php',
        'Kirby\\Toolkit\\Controller' => __DIR__ . '/../..' . '/kirby/src/Toolkit/Controller.php',
        'Kirby\\Toolkit\\Dir' => __DIR__ . '/../..' . '/kirby/src/Toolkit/Dir.php',
        'Kirby\\Toolkit\\Escape' => __DIR__ . '/../..' . '/kirby/src/Toolkit/Escape.php',
        'Kirby\\Toolkit\\F' => __DIR__ . '/../..' . '/kirby/src/Toolkit/F.php',
        'Kirby\\Toolkit\\Facade' => __DIR__ . '/../..' . '/kirby/src/Toolkit/Facade.php',
        'Kirby\\Toolkit\\File' => __DIR__ . '/../..' . '/kirby/src/Toolkit/File.php',
        'Kirby\\Toolkit\\Html' => __DIR__ . '/../..' . '/kirby/src/Toolkit/Html.php',
        'Kirby\\Toolkit\\I18n' => __DIR__ . '/../..' . '/kirby/src/Toolkit/I18n.php',
        'Kirby\\Toolkit\\Iterator' => __DIR__ . '/../..' . '/kirby/src/Toolkit/Iterator.php',
        'Kirby\\Toolkit\\Mime' => __DIR__ . '/../..' . '/kirby/src/Toolkit/Mime.php',
        'Kirby\\Toolkit\\Obj' => __DIR__ . '/../..' . '/kirby/src/Toolkit/Obj.php',
        'Kirby\\Toolkit\\Pagination' => __DIR__ . '/../..' . '/kirby/src/Toolkit/Pagination.php',
        'Kirby\\Toolkit\\Properties' => __DIR__ . '/../..' . '/kirby/src/Toolkit/Properties.php',
        'Kirby\\Toolkit\\Query' => __DIR__ . '/../..' . '/kirby/src/Toolkit/Query.php',
        'Kirby\\Toolkit\\Silo' => __DIR__ . '/../..' . '/kirby/src/Toolkit/Silo.php',
        'Kirby\\Toolkit\\Str' => __DIR__ . '/../..' . '/kirby/src/Toolkit/Str.php',
        'Kirby\\Toolkit\\Tpl' => __DIR__ . '/../..' . '/kirby/src/Toolkit/Tpl.php',
        'Kirby\\Toolkit\\V' => __DIR__ . '/../..' . '/kirby/src/Toolkit/V.php',
        'Kirby\\Toolkit\\View' => __DIR__ . '/../..' . '/kirby/src/Toolkit/View.php',
        'Kirby\\Toolkit\\Xml' => __DIR__ . '/../..' . '/kirby/src/Toolkit/Xml.php',
        'League\\ColorExtractor\\Color' => __DIR__ . '/..' . '/league/color-extractor/src/League/ColorExtractor/Color.php',
        'League\\ColorExtractor\\ColorExtractor' => __DIR__ . '/..' . '/league/color-extractor/src/League/ColorExtractor/ColorExtractor.php',
        'League\\ColorExtractor\\Palette' => __DIR__ . '/..' . '/league/color-extractor/src/League/ColorExtractor/Palette.php',
        'Michelf\\SmartyPants' => __DIR__ . '/..' . '/michelf/php-smartypants/Michelf/SmartyPants.php',
        'Michelf\\SmartyPantsTypographer' => __DIR__ . '/..' . '/michelf/php-smartypants/Michelf/SmartyPantsTypographer.php',
        'PHPMailer\\PHPMailer\\Exception' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/Exception.php',
        'PHPMailer\\PHPMailer\\OAuth' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/OAuth.php',
        'PHPMailer\\PHPMailer\\PHPMailer' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/PHPMailer.php',
        'PHPMailer\\PHPMailer\\POP3' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/POP3.php',
        'PHPMailer\\PHPMailer\\SMTP' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/SMTP.php',
        'Parsedown' => __DIR__ . '/../..' . '/kirby/dependencies/parsedown/Parsedown.php',
        'ParsedownExtra' => __DIR__ . '/../..' . '/kirby/dependencies/parsedown-extra/ParsedownExtra.php',
        'Psr\\Log\\AbstractLogger' => __DIR__ . '/..' . '/psr/log/Psr/Log/AbstractLogger.php',
        'Psr\\Log\\InvalidArgumentException' => __DIR__ . '/..' . '/psr/log/Psr/Log/InvalidArgumentException.php',
        'Psr\\Log\\LogLevel' => __DIR__ . '/..' . '/psr/log/Psr/Log/LogLevel.php',
        'Psr\\Log\\LoggerAwareInterface' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerAwareInterface.php',
        'Psr\\Log\\LoggerAwareTrait' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerAwareTrait.php',
        'Psr\\Log\\LoggerInterface' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerInterface.php',
        'Psr\\Log\\LoggerTrait' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerTrait.php',
        'Psr\\Log\\NullLogger' => __DIR__ . '/..' . '/psr/log/Psr/Log/NullLogger.php',
        'Psr\\Log\\Test\\DummyTest' => __DIR__ . '/..' . '/psr/log/Psr/Log/Test/LoggerInterfaceTest.php',
        'Psr\\Log\\Test\\LoggerInterfaceTest' => __DIR__ . '/..' . '/psr/log/Psr/Log/Test/LoggerInterfaceTest.php',
        'Psr\\Log\\Test\\TestLogger' => __DIR__ . '/..' . '/psr/log/Psr/Log/Test/TestLogger.php',
        'Symfony\\Polyfill\\Mbstring\\Mbstring' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/Mbstring.php',
        'TrueBV\\Exception\\DomainOutOfBoundsException' => __DIR__ . '/..' . '/true/punycode/src/Exception/DomainOutOfBoundsException.php',
        'TrueBV\\Exception\\LabelOutOfBoundsException' => __DIR__ . '/..' . '/true/punycode/src/Exception/LabelOutOfBoundsException.php',
        'TrueBV\\Exception\\OutOfBoundsException' => __DIR__ . '/..' . '/true/punycode/src/Exception/OutOfBoundsException.php',
        'TrueBV\\Punycode' => __DIR__ . '/..' . '/true/punycode/src/Punycode.php',
        'Whoops\\Exception\\ErrorException' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Exception/ErrorException.php',
        'Whoops\\Exception\\Formatter' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Exception/Formatter.php',
        'Whoops\\Exception\\Frame' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Exception/Frame.php',
        'Whoops\\Exception\\FrameCollection' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Exception/FrameCollection.php',
        'Whoops\\Exception\\Inspector' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Exception/Inspector.php',
        'Whoops\\Handler\\CallbackHandler' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Handler/CallbackHandler.php',
        'Whoops\\Handler\\Handler' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Handler/Handler.php',
        'Whoops\\Handler\\HandlerInterface' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Handler/HandlerInterface.php',
        'Whoops\\Handler\\JsonResponseHandler' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Handler/JsonResponseHandler.php',
        'Whoops\\Handler\\PlainTextHandler' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Handler/PlainTextHandler.php',
        'Whoops\\Handler\\PrettyPageHandler' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Handler/PrettyPageHandler.php',
        'Whoops\\Handler\\XmlResponseHandler' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Handler/XmlResponseHandler.php',
        'Whoops\\Run' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Run.php',
        'Whoops\\RunInterface' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/RunInterface.php',
        'Whoops\\Util\\HtmlDumperOutput' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Util/HtmlDumperOutput.php',
        'Whoops\\Util\\Misc' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Util/Misc.php',
        'Whoops\\Util\\SystemFacade' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Util/SystemFacade.php',
        'Whoops\\Util\\TemplateHelper' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Util/TemplateHelper.php',
        'Zend\\Escaper\\Escaper' => __DIR__ . '/..' . '/zendframework/zend-escaper/src/Escaper.php',
        'Zend\\Escaper\\Exception\\ExceptionInterface' => __DIR__ . '/..' . '/zendframework/zend-escaper/src/Exception/ExceptionInterface.php',
        'Zend\\Escaper\\Exception\\InvalidArgumentException' => __DIR__ . '/..' . '/zendframework/zend-escaper/src/Exception/InvalidArgumentException.php',
        'Zend\\Escaper\\Exception\\RuntimeException' => __DIR__ . '/..' . '/zendframework/zend-escaper/src/Exception/RuntimeException.php',
        'claviska\\SimpleImage' => __DIR__ . '/..' . '/claviska/simpleimage/src/claviska/SimpleImage.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf67e71724b0e8093446cd2419412dbb4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf67e71724b0e8093446cd2419412dbb4::$prefixDirsPsr4;
            $loader->fallbackDirsPsr4 = ComposerStaticInitf67e71724b0e8093446cd2419412dbb4::$fallbackDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitf67e71724b0e8093446cd2419412dbb4::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitf67e71724b0e8093446cd2419412dbb4::$classMap;

        }, null, ClassLoader::class);
    }
}
