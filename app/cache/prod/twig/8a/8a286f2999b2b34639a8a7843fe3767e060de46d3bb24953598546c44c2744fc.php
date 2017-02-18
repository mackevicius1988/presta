<?php

/* PrestaShopBundle:Admin:Translations/include/button-toggle-messages-visibility.html.twig */
class __TwigTemplate_0965d838118f662334b3ee12e28ee46a9c268900e46f3681441057d74a919cdc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 25
        echo "<div class=\"translation-domain\">
    <button class=\"btn btn-default btn-sm show-translation-messages\">";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["label_show_messages"]) ? $context["label_show_messages"] : null), "html", null, true);
        echo "</button>
";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin:Translations/include/button-toggle-messages-visibility.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 26,  19 => 25,);
    }

    public function getSource()
    {
        return "";
    }
}
