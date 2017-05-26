<?php
namespace Craft;
class MyNamePlugin extends BasePlugin
{
    //Returns the name of plugin
    public function getName()
    {
        return Craft::t('What is your name');
    }

     //Returns plugins version
    public function getVersion()
    {
        return '0.1';
    }
    
    //Returns the developer’s name.
    public function getDeveloper()
    {
        return 'Krishna Kumar K.K.';
    }

    //Returns the url of plugins documentation.
    public function getDocumentationUrl()
    {
        return 'https://github.com/krishnakumarongit/craft-cms-plugin.git';
    }

    //Returns the developer’s website URL
    public function getDeveloperUrl()
    {
        return 'https://github.com/krishnakumarongit';
    }
    
    //Returns whether the plugin should get its own tab in the backend header.
    public function hasCpSection()
    {
        return false;
    }
} 
