<?php

namespace ContainerVZ97f0k;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMarkdown_ParserService extends App_KernelDewDebugContainer
{
    /**
     * Gets the public 'markdown.parser' shared service.
     *
     * @return \Knp\Bundle\MarkdownBundle\Parser\Preset\Max
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'michelf'.\DIRECTORY_SEPARATOR.'php-markdown'.\DIRECTORY_SEPARATOR.'Michelf'.\DIRECTORY_SEPARATOR.'MarkdownInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'michelf'.\DIRECTORY_SEPARATOR.'php-markdown'.\DIRECTORY_SEPARATOR.'Michelf'.\DIRECTORY_SEPARATOR.'Markdown.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'michelf'.\DIRECTORY_SEPARATOR.'php-markdown'.\DIRECTORY_SEPARATOR.'Michelf'.\DIRECTORY_SEPARATOR.'MarkdownExtra.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-markdown-bundle'.\DIRECTORY_SEPARATOR.'MarkdownParserInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-markdown-bundle'.\DIRECTORY_SEPARATOR.'Parser'.\DIRECTORY_SEPARATOR.'MarkdownParser.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-markdown-bundle'.\DIRECTORY_SEPARATOR.'Parser'.\DIRECTORY_SEPARATOR.'Preset'.\DIRECTORY_SEPARATOR.'Max.php';

        return $container->services['markdown.parser'] = new \Knp\Bundle\MarkdownBundle\Parser\Preset\Max();
    }
}