<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb3fb6e8b412f8c8d585bf29dd756d5f4
{
    public static $files = array (
        'bce4ecd6aabb2a2948e06d0e2c4ea9a6' => __DIR__ . '/..' . '/automattic/jetpack-connection/legacy/load-ixr.php',
        '009de6aaa0d497eacea41fab13fc05f1' => __DIR__ . '/..' . '/automattic/jetpack-compat/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Automattic\\Jetpack\\Sync\\Modules\\' => 32,
            'Automattic\\Jetpack\\Sync\\' => 24,
            'Automattic\\Jetpack\\Connection\\' => 30,
            'Automattic\\Jetpack\\Autoloader\\' => 30,
            'Automattic\\Jetpack\\Assets\\' => 26,
            'Automattic\\Jetpack\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Automattic\\Jetpack\\Sync\\Modules\\' => 
        array (
            0 => __DIR__ . '/..' . '/automattic/jetpack-sync/src/modules',
        ),
        'Automattic\\Jetpack\\Sync\\' => 
        array (
            0 => __DIR__ . '/..' . '/automattic/jetpack-sync/src',
        ),
        'Automattic\\Jetpack\\Connection\\' => 
        array (
            0 => __DIR__ . '/..' . '/automattic/jetpack-connection/src',
        ),
        'Automattic\\Jetpack\\Autoloader\\' => 
        array (
            0 => __DIR__ . '/..' . '/automattic/jetpack-autoloader/src',
        ),
        'Automattic\\Jetpack\\Assets\\' => 
        array (
            0 => __DIR__ . '/..' . '/automattic/jetpack-logo/src',
        ),
        'Automattic\\Jetpack\\' => 
        array (
            0 => __DIR__ . '/..' . '/automattic/jetpack-error/src',
            1 => __DIR__ . '/..' . '/automattic/jetpack-constants/src',
            2 => __DIR__ . '/..' . '/automattic/jetpack-abtest/src',
            3 => __DIR__ . '/..' . '/automattic/jetpack-tracking/src',
            4 => __DIR__ . '/..' . '/automattic/jetpack-assets/src',
            5 => __DIR__ . '/..' . '/automattic/jetpack-jitm/src',
            6 => __DIR__ . '/..' . '/automattic/jetpack-status/src',
            7 => __DIR__ . '/..' . '/automattic/jetpack-roles/src',
        ),
    );

    public static $classMap = array (
        'Automattic\\Jetpack\\Abtest' => __DIR__ . '/..' . '/automattic/jetpack-abtest/src/Abtest.php',
        'Automattic\\Jetpack\\Assets' => __DIR__ . '/..' . '/automattic/jetpack-assets/src/Assets.php',
        'Automattic\\Jetpack\\Assets\\Logo' => __DIR__ . '/..' . '/automattic/jetpack-logo/src/Logo.php',
        'Automattic\\Jetpack\\Autoloader\\AutoloadGenerator' => __DIR__ . '/..' . '/automattic/jetpack-autoloader/src/AutoloadGenerator.php',
        'Automattic\\Jetpack\\Autoloader\\CustomAutoloaderPlugin' => __DIR__ . '/..' . '/automattic/jetpack-autoloader/src/CustomAutoloaderPlugin.php',
        'Automattic\\Jetpack\\Connection\\Client' => __DIR__ . '/..' . '/automattic/jetpack-connection/src/Client.php',
        'Automattic\\Jetpack\\Connection\\Manager' => __DIR__ . '/..' . '/automattic/jetpack-connection/src/Manager.php',
        'Automattic\\Jetpack\\Connection\\Manager_Interface' => __DIR__ . '/..' . '/automattic/jetpack-connection/src/Manager_Interface.php',
        'Automattic\\Jetpack\\Connection\\REST_Connector' => __DIR__ . '/..' . '/automattic/jetpack-connection/src/REST_Connector.php',
        'Automattic\\Jetpack\\Connection\\XMLRPC_Connector' => __DIR__ . '/..' . '/automattic/jetpack-connection/src/XMLRPC_Connector.php',
        'Automattic\\Jetpack\\Constants' => __DIR__ . '/..' . '/automattic/jetpack-constants/src/Constants.php',
        'Automattic\\Jetpack\\Error' => __DIR__ . '/..' . '/automattic/jetpack-error/src/Error.php',
        'Automattic\\Jetpack\\JITM' => __DIR__ . '/..' . '/automattic/jetpack-jitm/src/JITM.php',
        'Automattic\\Jetpack\\Plugin\\Tracking' => __DIR__ . '/../..' . '/src/Tracking.php',
        'Automattic\\Jetpack\\Roles' => __DIR__ . '/..' . '/automattic/jetpack-roles/src/Roles.php',
        'Automattic\\Jetpack\\Status' => __DIR__ . '/..' . '/automattic/jetpack-status/src/Status.php',
        'Automattic\\Jetpack\\Sync\\Actions' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/Actions.php',
        'Automattic\\Jetpack\\Sync\\Codec_Interface' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/Codec_Interface.php',
        'Automattic\\Jetpack\\Sync\\Defaults' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/Defaults.php',
        'Automattic\\Jetpack\\Sync\\Functions' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/Functions.php',
        'Automattic\\Jetpack\\Sync\\JSON_Deflate_Array_Codec' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/Json_Deflate_Array_Codec.php',
        'Automattic\\Jetpack\\Sync\\Listener' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/Listener.php',
        'Automattic\\Jetpack\\Sync\\Main' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/Main.php',
        'Automattic\\Jetpack\\Sync\\Modules' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/Modules.php',
        'Automattic\\Jetpack\\Sync\\Modules\\Attachments' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/modules/Attachments.php',
        'Automattic\\Jetpack\\Sync\\Modules\\Callables' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/modules/Callables.php',
        'Automattic\\Jetpack\\Sync\\Modules\\Comments' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/modules/Comments.php',
        'Automattic\\Jetpack\\Sync\\Modules\\Constants' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/modules/Constants.php',
        'Automattic\\Jetpack\\Sync\\Modules\\Full_Sync' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/modules/Full_Sync.php',
        'Automattic\\Jetpack\\Sync\\Modules\\Import' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/modules/Import.php',
        'Automattic\\Jetpack\\Sync\\Modules\\Menus' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/modules/Menus.php',
        'Automattic\\Jetpack\\Sync\\Modules\\Meta' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/modules/Meta.php',
        'Automattic\\Jetpack\\Sync\\Modules\\Module' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/modules/Module.php',
        'Automattic\\Jetpack\\Sync\\Modules\\Network_Options' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/modules/Network_Options.php',
        'Automattic\\Jetpack\\Sync\\Modules\\Options' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/modules/Options.php',
        'Automattic\\Jetpack\\Sync\\Modules\\Plugins' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/modules/Plugins.php',
        'Automattic\\Jetpack\\Sync\\Modules\\Posts' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/modules/Posts.php',
        'Automattic\\Jetpack\\Sync\\Modules\\Protect' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/modules/Protect.php',
        'Automattic\\Jetpack\\Sync\\Modules\\Stats' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/modules/Stats.php',
        'Automattic\\Jetpack\\Sync\\Modules\\Term_Relationships' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/modules/Term_Relationships.php',
        'Automattic\\Jetpack\\Sync\\Modules\\Terms' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/modules/Terms.php',
        'Automattic\\Jetpack\\Sync\\Modules\\Themes' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/modules/Themes.php',
        'Automattic\\Jetpack\\Sync\\Modules\\Updates' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/modules/Updates.php',
        'Automattic\\Jetpack\\Sync\\Modules\\Users' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/modules/Users.php',
        'Automattic\\Jetpack\\Sync\\Modules\\WP_Super_Cache' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/modules/WP_Super_Cache.php',
        'Automattic\\Jetpack\\Sync\\Modules\\WooCommerce' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/modules/WooCommerce.php',
        'Automattic\\Jetpack\\Sync\\Queue' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/Queue.php',
        'Automattic\\Jetpack\\Sync\\Queue_Buffer' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/Queue_Buffer.php',
        'Automattic\\Jetpack\\Sync\\Replicastore' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/Replicastore.php',
        'Automattic\\Jetpack\\Sync\\Replicastore_Interface' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/Replicastore_Interface.php',
        'Automattic\\Jetpack\\Sync\\Sender' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/Sender.php',
        'Automattic\\Jetpack\\Sync\\Server' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/Server.php',
        'Automattic\\Jetpack\\Sync\\Settings' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/Settings.php',
        'Automattic\\Jetpack\\Sync\\Simple_Codec' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/Simple_Codec.php',
        'Automattic\\Jetpack\\Sync\\Users' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/Users.php',
        'Automattic\\Jetpack\\Sync\\Utils' => __DIR__ . '/..' . '/automattic/jetpack-sync/src/Utils.php',
        'Automattic\\Jetpack\\Tracking' => __DIR__ . '/..' . '/automattic/jetpack-tracking/src/Tracking.php',
        'JetpackTracking' => __DIR__ . '/..' . '/automattic/jetpack-compat/legacy/class.jetpack-tracks.php',
        'Jetpack_Client' => __DIR__ . '/..' . '/automattic/jetpack-compat/legacy/class.jetpack-client.php',
        'Jetpack_IXR_Client' => __DIR__ . '/..' . '/automattic/jetpack-connection/legacy/class.jetpack-ixr-client.php',
        'Jetpack_IXR_ClientMulticall' => __DIR__ . '/..' . '/automattic/jetpack-connection/legacy/class.jetpack-ixr-client-multicall.php',
        'Jetpack_Options' => __DIR__ . '/..' . '/automattic/jetpack-options/legacy/class.jetpack-options.php',
        'Jetpack_Signature' => __DIR__ . '/..' . '/automattic/jetpack-connection/legacy/class.jetpack-signature.php',
        'Jetpack_Sync_Actions' => __DIR__ . '/..' . '/automattic/jetpack-compat/legacy/class.jetpack-sync-actions.php',
        'Jetpack_Sync_Modules' => __DIR__ . '/..' . '/automattic/jetpack-compat/legacy/class.jetpack-sync-modules.php',
        'Jetpack_Sync_Settings' => __DIR__ . '/..' . '/automattic/jetpack-compat/legacy/class.jetpack-sync-settings.php',
        'Jetpack_Tracks_Client' => __DIR__ . '/..' . '/automattic/jetpack-tracking/legacy/class.tracks-client.php',
        'Jetpack_Tracks_Event' => __DIR__ . '/..' . '/automattic/jetpack-tracking/legacy/class.tracks-event.php',
        'Jetpack_XMLRPC_Server' => __DIR__ . '/..' . '/automattic/jetpack-connection/legacy/class.jetpack-xmlrpc-server.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb3fb6e8b412f8c8d585bf29dd756d5f4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb3fb6e8b412f8c8d585bf29dd756d5f4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb3fb6e8b412f8c8d585bf29dd756d5f4::$classMap;

        }, null, ClassLoader::class);
    }
}
